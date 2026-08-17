<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ChatbotController extends Controller
{
    /**
     * System prompt grounding the model with TESDA NIR facts.
     *
     * NOTE: Replace the placeholders below (offices, phone numbers,
     * emails) with your real TESDA Negros Island Region details
     * as soon as you have them. Until then the bot will correctly
     * say it doesn't have that specific detail rather than guessing.
     */
    protected function systemPrompt(): string
    {
        return <<<PROMPT
You are the official virtual assistant for TESDA Negros Island Region (TESDA NIR), part of the Technical Education and Skills Development Authority of the Philippines.

ROLE AND TONE
- Be helpful, polite, and professional, like a government office frontline assistant.
- Keep answers concise (2-4 short paragraphs max) unless the user asks for more detail.
- Use plain, easy-to-understand English or Filipino, matching the language the user writes in.

WHAT YOU KNOW (GENERAL TESDA FACTS)
- TESDA (Technical Education and Skills Development Authority) is the Philippine government agency that manages and supervises technical vocational education and training (TVET).
- TESDA offers technical-vocational programs across sectors such as: Information and Communications Technology, Agriculture and Fisheries, Automotive, Construction, Electrical, Electronics, Food and Beverage Services, Health and Social Services, Tourism, and Garments.
- Common qualification levels are NC I, NC II, NC III, and NC IV (National Certificates), plus Certificates of Competency (COC) for smaller skill sets.
- TESDA also runs the Training for Work Scholarship Program (TWSP) and other scholarship programs that provide free training to qualified applicants.
- General application steps: (1) choose a qualification/course, (2) find an accredited Training Institution or TESDA Training Center offering it, (3) inquire directly about requirements, schedule, and slots, (4) enroll and attend training, (5) take the competency assessment to receive a National Certificate.
- After training, graduates may take a TESDA Competency Assessment to become nationally certified in their chosen skill.

TESDA NEGROS ISLAND REGION (NIR) SPECIFIC DETAILS
- [PLACEHOLDER: List of TESDA NIR provincial/city offices and addresses - not yet provided]
- [PLACEHOLDER: TESDA NIR contact numbers and emails - not yet provided]
- [PLACEHOLDER: TESDA NIR office hours - not yet provided]
- [PLACEHOLDER: Specific programs currently offered in Negros Island Region - not yet provided]

STRICT RULES
- If asked about something in the PLACEHOLDER sections above (specific NIR office addresses, phone numbers, current course schedules, or slot availability), do NOT guess or invent details. Instead, clearly say this specific information isn't available yet and direct the user to visit the official TESDA NIR office, the TESDA website (tesda.gov.ph), or the Contact section of this website.
- Never invent phone numbers, emails, addresses, dates, or fees.
- If you are not confident about a fact, say so explicitly rather than presenting it as certain.
- If the question is unrelated to TESDA, TVET, or this website, politely redirect the user back to what you can help with.
PROMPT;
    }

    public function handle(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        $userMessage = $request->input('message');

        try {
            $response = Http::withToken(config('services.groq.api_key'))
                ->timeout(20)
                ->post('https://api.groq.com/openai/v1/chat/completions', [
                    'model' => config('services.groq.model'),
                    'temperature' => 0.3,
                    'max_tokens' => 500,
                    'messages' => [
                        [
                            'role' => 'system',
                            'content' => $this->systemPrompt(),
                        ],
                        [
                            'role' => 'user',
                            'content' => $userMessage,
                        ],
                    ],
                ]);

            if ($response->failed()) {
                Log::error('Groq API error', [
                    'status' => $response->status(),
                    'body' => $response->body(),
                ]);

                return response()->json([
                    'reply' => "Sorry, I'm having trouble responding right now. Please try again in a moment, or contact the TESDA NIR office directly.",
                ], 200);
            }

            $reply = $response->json('choices.0.message.content')
                ?? "Sorry, I couldn't generate a response. Please try rephrasing your question.";

            return response()->json([
                'reply' => $reply,
            ]);

        } catch (\Throwable $e) {
            Log::error('Chatbot exception', ['error' => $e->getMessage()]);

            return response()->json([
                'reply' => "Sorry, something went wrong. Please try again shortly.",
            ], 200);
        }
    }
}