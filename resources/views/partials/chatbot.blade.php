{{-- ============================================================
TESDA NIR PREMIUM CHATBOT (BRAND MATCHED)
resources/views/partials/chatbot.blade.php
============================================================ --}}

<div id="tesdaChatbot" class="fixed bottom-5 right-5 sm:bottom-7 sm:right-7 z-[9999] font-['Frutiger',sans-serif]">

    {{-- ========================================================
        CHAT WINDOW
        ======================================================== --}}
    <div id="chatbotWindow" class="hidden mb-4 w-[calc(100vw-2rem)] sm:w-[400px] h-[600px] max-h-[calc(100vh-6.5rem)] overflow-hidden rounded-3xl bg-white shadow-[0_24px_70px_-20px_rgba(15,23,42,0.45)] border border-slate-200 flex-col">

        {{-- ====================================================
            PREMIUM HEADER (Deep Blue & Amber Accents)
            ==================================================== --}}
        <div class="relative overflow-hidden bg-gradient-to-r from-blue-950 via-blue-900 to-blue-950 border-b border-amber-500/30">

            {{-- Subtle Background Glow & Accent Lines --}}
            <div class="absolute -right-8 -top-12 h-36 w-36 rounded-full bg-amber-500/10 blur-xl pointer-events-none"></div>
            <div class="absolute -left-12 -bottom-16 h-40 w-40 rounded-full bg-blue-600/20 blur-2xl pointer-events-none"></div>

            <div class="relative px-5 py-4">
                <div class="flex items-center justify-between">

                    <div class="flex items-center gap-3">
                        {{-- Logo Container --}}
                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-white/10 p-1.5 backdrop-blur-md ring-1 ring-white/20 shadow-md">
                            <img
                                src="{{ asset('images/TESDA Logo official.png') }}"
                                alt="TESDA Logo"
                                class="h-full w-full object-contain"
                                onerror="this.style.display='none'; this.nextElementSibling.classList.remove('hidden');"
                            >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="hidden h-6 w-6 text-amber-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9.75h7.5m-7.5 3h4.5m-8.25 5.25V6.75A2.25 2.25 0 0 1 6.75 4.5h10.5a2.25 2.25 0 0 1 2.25 2.25v11.25a2.25 2.25 0 0 1-2.25 2.25H6.75a2.25 2.25 0 0 1-2.25-2.25Z" />
                            </svg>
                        </div>

                        <div>
                            <div class="flex items-center gap-2">
                                <h3 class="text-sm font-bold tracking-tight text-white">TESDA NIR Assistant</h3>
                                <span class="rounded-full bg-amber-400/20 px-2 py-0.5 text-[9px] font-bold uppercase tracking-widest text-amber-300 ring-1 ring-amber-400/30">
                                    Official
                                </span>
                            </div>
                            <div class="mt-1 flex items-center gap-1.5">
                                <span class="relative flex h-2 w-2">
                                    <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-emerald-400 opacity-75"></span>
                                    <span class="relative inline-flex h-2 w-2 rounded-full bg-emerald-400"></span>
                                </span>
                                <span class="text-[11px] font-medium text-slate-300">Online & Ready</span>
                            </div>
                        </div>
                    </div>

                    {{-- Close Button --}}
                    <button
                        id="chatbotClose"
                        type="button"
                        aria-label="Close chatbot"
                        class="flex h-8 w-8 items-center justify-center rounded-lg text-slate-300 transition-colors hover:bg-white/10 hover:text-white focus:outline-none"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-5 w-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <p class="mt-3 text-[11px] leading-relaxed text-slate-300/90 border-t border-white/10 pt-2.5">
                    Welcome! Ask anything about TESDA programs, certifications, and offices in NIR.
                </p>
            </div>
        </div>

        {{-- ====================================================
            CHAT MESSAGES CONTAINER
            ==================================================== --}}
        <div id="chatMessages" class="min-h-0 flex-1 overflow-y-auto bg-slate-50 px-4 py-4 space-y-4">

            {{-- Welcome Message --}}
            <div class="flex items-start gap-2.5">
                <div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-blue-950 text-amber-400 shadow-sm border border-amber-500/30">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="h-4 w-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9.75h7.5m-7.5 3h4.5m-8.25 5.25V6.75A2.25 2.25 0 0 1 6.75 4.5h10.5a2.25 2.25 0 0 1 2.25 2.25v11.25a2.25 2.25 0 0 1-2.25 2.25H6.75a2.25 2.25 0 0 1-2.25-2.25Z" />
                    </svg>
                </div>

                <div class="max-w-[85%]">
                    <div class="rounded-2xl rounded-tl-sm border border-slate-200/80 bg-white px-4 py-3 text-xs leading-relaxed text-slate-700 shadow-sm">
                        <p class="font-bold text-blue-950">Magandang Araw!</p>
                        <p class="mt-1">I am your TESDA Negros Island Region digital assistant. How can I serve you today?</p>
                    </div>
                    <span class="mt-1 block px-1 text-[9px] font-semibold tracking-wider text-slate-400 uppercase">
                        TESDA NIR Assistant
                    </span>
                </div>
            </div>

            {{-- Quick Questions Options --}}
            <div id="quickQuestions" class="pt-1">
                <div class="mb-2 flex items-center gap-2">
                    <span class="text-[10px] font-bold uppercase tracking-wider text-slate-400">Suggested Topics</span>
                    <div class="h-px flex-1 bg-slate-200"></div>
                </div>

                <div class="space-y-1.5">
                    <button
                        type="button"
                        data-question="What programs does TESDA offer?"
                        class="chat-quick-question group flex w-full items-center justify-between rounded-xl border border-slate-200 bg-white px-3.5 py-2.5 text-left transition-all hover:border-amber-400 hover:bg-amber-50/40 hover:shadow-xs"
                    >
                        <span class="text-xs font-medium text-slate-700 group-hover:text-blue-950">TESDA Programs & Training</span>
                        <span class="text-xs font-bold text-amber-500 transition-transform group-hover:translate-x-0.5">→</span>
                    </button>

                    <button
                        type="button"
                        data-question="Where can I find TESDA NIR offices?"
                        class="chat-quick-question group flex w-full items-center justify-between rounded-xl border border-slate-200 bg-white px-3.5 py-2.5 text-left transition-all hover:border-amber-400 hover:bg-amber-50/40 hover:shadow-xs"
                    >
                        <span class="text-xs font-medium text-slate-700 group-hover:text-blue-950">Find a Regional/Provincial Office</span>
                        <span class="text-xs font-bold text-amber-500 transition-transform group-hover:translate-x-0.5">→</span>
                    </button>

                    <button
                        type="button"
                        data-question="How do I apply for TESDA scholarship?"
                        class="chat-quick-question group flex w-full items-center justify-between rounded-xl border border-slate-200 bg-white px-3.5 py-2.5 text-left transition-all hover:border-amber-400 hover:bg-amber-50/40 hover:shadow-xs"
                    >
                        <span class="text-xs font-medium text-slate-700 group-hover:text-blue-950">Scholarships & Applications</span>
                        <span class="text-xs font-bold text-amber-500 transition-transform group-hover:translate-x-0.5">→</span>
                    </button>
                </div>
            </div>

        </div>

        {{-- ====================================================
            TYPING INDICATOR
            ==================================================== --}}
        <div id="chatTyping" class="hidden border-t border-slate-100 bg-white px-4 py-2">
            <div class="flex items-center gap-2">
                <div class="flex h-6 w-6 items-center justify-center rounded bg-blue-950 text-amber-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="h-3.5 w-3.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9.75h7.5m-7.5 3h4.5m-8.25 5.25V6.75A2.25 2.25 0 0 1 6.75 4.5h10.5a2.25 2.25 0 0 1 2.25 2.25v11.25a2.25 2.25 0 0 1-2.25 2.25H6.75a2.25 2.25 0 0 1-2.25-2.25Z" />
                    </svg>
                </div>
                <div class="flex items-center gap-1">
                    <span class="h-1.5 w-1.5 animate-bounce rounded-full bg-blue-900"></span>
                    <span class="h-1.5 w-1.5 animate-bounce rounded-full bg-blue-900 [animation-delay:150ms]"></span>
                    <span class="h-1.5 w-1.5 animate-bounce rounded-full bg-blue-900 [animation-delay:300ms]"></span>
                </div>
                <span class="text-[10px] font-medium text-slate-400">Assistant is thinking...</span>
            </div>
        </div>

        {{-- ====================================================
            INPUT AREA
            ==================================================== --}}
        <div class="border-t border-slate-200 bg-white p-3">
            <form id="chatForm" class="relative flex items-center rounded-xl border border-slate-300 bg-slate-50 p-1 transition focus-within:border-blue-900 focus-within:bg-white focus-within:ring-2 focus-within:ring-blue-950/10">
                <input
                    id="chatInput"
                    type="text"
                    autocomplete="off"
                    placeholder="Type your question here..."
                    class="min-w-0 flex-1 bg-transparent px-3 py-2 text-xs text-slate-800 outline-none placeholder:text-slate-400"
                >
                <button
                    id="chatSend"
                    type="submit"
                    aria-label="Send message"
                    class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-blue-950 text-amber-400 transition-all hover:bg-amber-500 hover:text-blue-950 focus:outline-none disabled:opacity-40"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-4 w-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.27 3.125a.75.75 0 0 1 .916-.916L21.375 9.27a.75.75 0 0 1 0 1.46L4.186 21.79a.75.75 0 0 1-.916-.916L6 12Zm0 0h9.75" />
                    </svg>
                </button>
            </form>

            <p class="mt-2 text-center text-[9px] font-semibold text-slate-400 uppercase tracking-widest">
                Technical Education and Skills Development Authority
            </p>
        </div>

    </div>

    {{-- ========================================================
        FLOATING TRIGGER BUTTON (Matching Footer Gold/Navy Theme)
        ======================================================== --}}
    <button
        id="chatbotToggle"
        type="button"
        aria-label="Open TESDA NIR Assistant"
        aria-expanded="false"
        class="group relative flex h-14 w-14 items-center justify-center rounded-2xl bg-gradient-to-br from-blue-900 to-blue-950 text-amber-400 shadow-lg border border-amber-500/40 transition-all duration-300 hover:-translate-y-1 hover:border-amber-400 hover:shadow-amber-500/20 focus:outline-none"
    >
        <span class="absolute inset-0 -z-10 rounded-2xl bg-blue-950/40 blur-lg transition group-hover:bg-blue-900/60"></span>

        {{-- Open Icon --}}
        <svg id="chatbotOpenIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="h-6 w-6 transition duration-200">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9.75h7.5m-7.5 3h4.5m-8.25 5.25V6.75A2.25 2.25 0 0 1 6.75 4.5h10.5a2.25 2.25 0 0 1 2.25 2.25v11.25a2.25 2.25 0 0 1 2.25 2.25H6.75a2.25 2.25 0 0 1-2.25-2.25Z" />
        </svg>

        {{-- Close Icon --}}
        <svg id="chatbotCloseIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="hidden h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
        </svg>

        {{-- Gold Dot Badge --}}
        <span id="chatbotNotification" class="absolute -right-1 -top-1 flex h-3.5 w-3.5 items-center justify-center rounded-full border-2 border-slate-900 bg-amber-400 shadow-sm"></span>
    </button>

</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const chatbotToggle = document.getElementById('chatbotToggle');
    const chatbotWindow = document.getElementById('chatbotWindow');
    const chatbotClose = document.getElementById('chatbotClose');

    const chatbotOpenIcon = document.getElementById('chatbotOpenIcon');
    const chatbotCloseIcon = document.getElementById('chatbotCloseIcon');
    const chatbotNotification = document.getElementById('chatbotNotification');

    const chatMessages = document.getElementById('chatMessages');
    const chatForm = document.getElementById('chatForm');
    const chatInput = document.getElementById('chatInput');
    const chatSend = document.getElementById('chatSend');
    const chatTyping = document.getElementById('chatTyping');

    const quickQuestions = document.querySelectorAll('.chat-quick-question');

    let chatbotIsOpen = false;
    let isTyping = false;

    function openChatbot() {
        chatbotIsOpen = true;
        chatbotWindow.classList.remove('hidden');
        chatbotWindow.classList.add('flex');
        chatbotOpenIcon.classList.add('hidden');
        chatbotCloseIcon.classList.remove('hidden');
        chatbotToggle.setAttribute('aria-expanded', 'true');
        chatbotNotification.classList.add('hidden');

        setTimeout(() => {
            chatInput.focus();
            scrollToBottom();
        }, 100);
    }

    function closeChatbot() {
        chatbotIsOpen = false;
        chatbotWindow.classList.add('hidden');
        chatbotWindow.classList.remove('flex');
        chatbotOpenIcon.classList.remove('hidden');
        chatbotCloseIcon.classList.add('hidden');
        chatbotToggle.setAttribute('aria-expanded', 'false');
    }

    chatbotToggle.addEventListener('click', function () {
        chatbotIsOpen ? closeChatbot() : openChatbot();
    });

    chatbotClose.addEventListener('click', closeChatbot);

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape' && chatbotIsOpen) closeChatbot();
    });

    function scrollToBottom() {
        chatMessages.scrollTo({
            top: chatMessages.scrollHeight,
            behavior: 'smooth'
        });
    }

    function addUserMessage(message) {
        const wrapper = document.createElement('div');
        wrapper.className = 'flex justify-end';
        wrapper.innerHTML = `
            <div class="max-w-[85%]">
                <div class="rounded-2xl rounded-tr-sm bg-blue-950 px-4 py-2.5 text-xs leading-relaxed text-white shadow-sm border border-amber-500/20">
                    ${escapeHtml(message)}
                </div>
                <span class="mt-1 block px-1 text-right text-[9px] font-semibold text-slate-400 uppercase tracking-wider">You</span>
            </div>
        `;
        chatMessages.appendChild(wrapper);
        scrollToBottom();
    }

    function addBotMessage(message) {
        const wrapper = document.createElement('div');
        wrapper.className = 'flex items-start gap-2.5';
        wrapper.innerHTML = `
            <div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-blue-950 text-amber-400 shadow-sm border border-amber-500/30">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="h-4 w-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9.75h7.5m-7.5 3h4.5m-8.25 5.25V6.75A2.25 2.25 0 0 1 6.75 4.5h10.5a2.25 2.25 0 0 1 2.25 2.25v11.25a2.25 2.25 0 0 1-2.25 2.25H6.75a2.25 2.25 0 0 1-2.25-2.25Z" />
                </svg>
            </div>
            <div class="max-w-[85%]">
                <div class="rounded-2xl rounded-tl-sm border border-slate-200/80 bg-white px-4 py-3 text-xs leading-relaxed text-slate-700 shadow-sm">
                    ${message}
                </div>
                <span class="mt-1 block px-1 text-[9px] font-semibold tracking-wider text-slate-400 uppercase">TESDA NIR Assistant</span>
            </div>
        `;
        chatMessages.appendChild(wrapper);
        scrollToBottom();
    }

    function showTyping() {
        isTyping = true;
        chatTyping.classList.remove('hidden');
        chatSend.disabled = true;
        chatInput.disabled = true;

        quickQuestions.forEach(btn => {
            btn.disabled = true;
            btn.classList.add('opacity-40', 'pointer-events-none');
        });
        scrollToBottom();
    }

    function hideTyping() {
        isTyping = false;
        chatTyping.classList.add('hidden');
        chatSend.disabled = false;
        chatInput.disabled = false;

        quickQuestions.forEach(btn => {
            btn.disabled = false;
            btn.classList.remove('opacity-40', 'pointer-events-none');
        });
        chatInput.focus();
    }

    function sendMessage(message) {
        message = message.trim();
        if (!message || isTyping) return;

        addUserMessage(message);
        chatInput.value = '';
        showTyping();

        const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

        fetch('/chatbot', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': csrfToken,
            },
            body: JSON.stringify({ message: message }),
        })
        .then(res => {
            if (!res.ok) throw new Error('Status ' + res.status);
            return res.json();
        })
        .then(data => {
            hideTyping();
            const reply = data.reply || "I apologize, I could not process that request.";
            addBotMessage(formatBotReply(reply));
        })
        .catch(err => {
            console.error('Chatbot error:', err);
            hideTyping();
            addBotMessage("<p>Sorry, I'm having trouble connecting right now. Please try again or reach out directly to the TESDA NIR Office.</p>");
        });
    }

    function formatBotReply(text) {
        return text
            .split(/\n\s*\n/)
            .map(paragraph => '<p>' + escapeHtml(paragraph.trim()).replace(/\n/g, '<br>') + '</p>')
            .join('<div class="mt-2"></div>');
    }

    chatForm.addEventListener('submit', function (event) {
        event.preventDefault();
        sendMessage(chatInput.value);
    });

    quickQuestions.forEach(button => {
        button.addEventListener('click', function () {
            sendMessage(button.dataset.question);
        });
    });

    chatInput.addEventListener('keydown', function (event) {
        if (event.key === 'Enter' && !event.shiftKey) {
            event.preventDefault();
            chatForm.dispatchEvent(new Event('submit'));
        }
    });

    function escapeHtml(value) {
        const div = document.createElement('div');
        div.textContent = value;
        return div.innerHTML;
    }

    function handleMobileViewport() {
        if (window.innerWidth < 640) {
            chatbotWindow.style.height = 'calc(100vh - 5.5rem)';
            chatbotWindow.style.maxHeight = 'calc(100vh - 5.5rem)';
        } else {
            chatbotWindow.style.height = '600px';
            chatbotWindow.style.maxHeight = 'calc(100vh - 6.5rem)';
        }
    }

    window.addEventListener('resize', handleMobileViewport);
    handleMobileViewport();
});
</script>