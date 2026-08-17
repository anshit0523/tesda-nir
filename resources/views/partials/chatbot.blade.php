{{-- ============================================================
TESDA NIR PREMIUM CHATBOT
resources/views/partials/chatbot.blade.php
============================================================ --}}

<div
    id="tesdaChatbot"
    class="fixed bottom-5 right-5 sm:bottom-7 sm:right-7 z-[9999] font-sans"
>


{{-- ========================================================
    CHAT WINDOW
    ======================================================== --}}
<div
    id="chatbotWindow"
    class="hidden mb-4 w-[calc(100vw-2rem)] sm:w-[400px] h-[600px] max-h-[calc(100vh-6.5rem)] overflow-hidden rounded-[24px] bg-white shadow-[0_24px_70px_-20px_rgba(0,43,92,0.35)] ring-1 ring-black/5 flex-col"
>

    {{-- ====================================================
        PREMIUM HEADER
        ==================================================== --}}
    <div class="relative overflow-hidden bg-[#005baa]">

        {{-- Decorative background --}}
        <div class="absolute -right-10 -top-16 h-40 w-40 rounded-full bg-white/10"></div>
        <div class="absolute -left-16 -bottom-20 h-44 w-44 rounded-full bg-[#003f7d]/30"></div>

        <div class="relative px-5 py-5">

            <div class="flex items-start justify-between">

                <div class="flex items-center gap-3.5">

                    {{-- Logo --}}
                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-white p-2 shadow-lg shadow-black/10">

                        <img
                            src="{{ asset('images/TESDA Logo official.png') }}"
                            alt="TESDA Logo"
                            class="h-full w-full object-contain"
                            onerror="this.style.display='none'; this.nextElementSibling.classList.remove('hidden');"
                        >

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.7"
                            stroke="currentColor"
                            class="hidden h-7 w-7 text-[#005baa]"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M8.25 9.75h7.5m-7.5 3h4.5m-8.25 5.25V6.75A2.25 2.25 0 0 1 6.75 4.5h10.5a2.25 2.25 0 0 1 2.25 2.25v11.25a2.25 2.25 0 0 1-2.25 2.25H6.75a2.25 2.25 0 0 1-2.25-2.25Z"
                            />
                        </svg>

                    </div>

                    <div>

                        <div class="flex items-center gap-2">

                            <h3 class="text-[15px] font-semibold tracking-tight text-white">
                                TESDA NIR Assistant
                            </h3>

                            <span class="rounded-full bg-white/15 px-2 py-0.5 text-[9px] font-medium uppercase tracking-wider text-blue-50">
                                Official
                            </span>

                        </div>

                        <div class="mt-1.5 flex items-center gap-2">

                            <span class="relative flex h-2 w-2">
                                <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-emerald-300 opacity-60"></span>
                                <span class="relative inline-flex h-2 w-2 rounded-full bg-emerald-300"></span>
                            </span>

                            <span class="text-[11px] text-blue-100">
                                Available to assist
                            </span>

                        </div>

                    </div>

                </div>


                {{-- Close --}}
                <button
                    id="chatbotClose"
                    type="button"
                    aria-label="Close chatbot"
                    class="flex h-9 w-9 items-center justify-center rounded-xl text-white/80 transition duration-200 hover:bg-white/10 hover:text-white focus:outline-none focus:ring-2 focus:ring-white/30"
                >

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.8"
                        stroke="currentColor"
                        class="h-5 w-5"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M6 18 18 6M6 6l12 12"
                        />
                    </svg>

                </button>

            </div>


            {{-- Header description --}}
            <div class="mt-5 max-w-[310px]">

                <p class="text-xs leading-relaxed text-blue-50">
                    Get quick information about TESDA programs, services,
                    offices, and contact details in the Negros Island Region.
                </p>

            </div>

        </div>

    </div>


    {{-- ====================================================
        CHAT CONTENT
        ==================================================== --}}
    <div
        id="chatMessages"
        class="min-h-0 flex-1 overflow-y-auto bg-[#f7f9fc] px-4 py-5 sm:px-5"
    >

        {{-- Welcome message --}}
        <div class="mb-6 flex items-start gap-3">

            {{-- Assistant avatar --}}
            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-[#005baa] text-white shadow-sm">

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.7"
                    stroke="currentColor"
                    class="h-5 w-5"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M8.25 9.75h7.5m-7.5 3h4.5m-8.25 5.25V6.75A2.25 2.25 0 0 1 6.75 4.5h10.5a2.25 2.25 0 0 1 2.25 2.25v11.25a2.25 2.25 0 0 1-2.25 2.25H6.75a2.25 2.25 0 0 1-2.25-2.25Z"
                    />
                </svg>

            </div>


            <div class="max-w-[82%]">

                <div class="rounded-2xl rounded-tl-md border border-gray-100 bg-white px-4 py-3.5 text-[13px] leading-relaxed text-gray-700 shadow-[0_4px_20px_-8px_rgba(0,0,0,0.12)]">

                    <p class="font-medium text-gray-900">
                        Welcome to TESDA NIR.
                    </p>

                    <p class="mt-1.5">
                        Hello! I'm here to help you find information about
                        TESDA programs, services, offices, and more.
                    </p>

                    <p class="mt-2 text-gray-500">
                        What would you like to know?
                    </p>

                </div>

                <p class="mt-1.5 px-1 text-[9px] font-medium uppercase tracking-wide text-gray-400">
                    TESDA NIR Assistant
                </p>

            </div>

        </div>


        {{-- ==================================================
            QUICK ACTIONS
            ================================================== --}}
        <div id="quickQuestions" class="mb-4">

            <div class="mb-2.5 flex items-center gap-2">

                <span class="text-[10px] font-semibold uppercase tracking-[0.12em] text-gray-400">
                    Quick questions
                </span>

                <div class="h-px flex-1 bg-gray-200"></div>

            </div>


            <div class="grid grid-cols-1 gap-2">

                <button
                    type="button"
                    data-question="What programs does TESDA offer?"
                    class="chat-quick-question group flex items-center gap-3 rounded-xl border border-gray-200/80 bg-white px-3.5 py-3 text-left transition-all duration-200 hover:-translate-y-0.5 hover:border-blue-200 hover:bg-blue-50/60 hover:shadow-sm"
                >

                    <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-blue-50 text-[#005baa] transition group-hover:bg-[#005baa] group-hover:text-white">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.7"
                            stroke="currentColor"
                            class="h-4 w-4"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 6.75v10.5m5.25-5.25H6.75"
                            />
                        </svg>

                    </span>

                    <span class="flex-1 text-xs font-medium text-gray-700 group-hover:text-[#005baa]">
                        TESDA programs & training
                    </span>

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.7"
                        stroke="currentColor"
                        class="h-4 w-4 text-gray-300 transition group-hover:translate-x-0.5 group-hover:text-[#005baa]"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m9 18 6-6-6-6"
                        />
                    </svg>

                </button>


                <button
                    type="button"
                    data-question="Where can I find TESDA NIR offices?"
                    class="chat-quick-question group flex items-center gap-3 rounded-xl border border-gray-200/80 bg-white px-3.5 py-3 text-left transition-all duration-200 hover:-translate-y-0.5 hover:border-blue-200 hover:bg-blue-50/60 hover:shadow-sm"
                >

                    <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-blue-50 text-[#005baa] transition group-hover:bg-[#005baa] group-hover:text-white">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.7"
                            stroke="currentColor"
                            class="h-4 w-4"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M19.5 10.5c0 5.25-7.5 9-7.5 9s-7.5-3.75-7.5-9a7.5 7.5 0 1 1 15 0Z"
                            />
                        </svg>

                    </span>

                    <span class="flex-1 text-xs font-medium text-gray-700 group-hover:text-[#005baa]">
                        Find a TESDA NIR office
                    </span>

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.7"
                        stroke="currentColor"
                        class="h-4 w-4 text-gray-300 transition group-hover:translate-x-0.5 group-hover:text-[#005baa]"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m9 18 6-6-6-6"
                        />
                    </svg>

                </button>


                <button
                    type="button"
                    data-question="How can I contact TESDA NIR?"
                    class="chat-quick-question group flex items-center gap-3 rounded-xl border border-gray-200/80 bg-white px-3.5 py-3 text-left transition-all duration-200 hover:-translate-y-0.5 hover:border-blue-200 hover:bg-blue-50/60 hover:shadow-sm"
                >

                    <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-blue-50 text-[#005baa] transition group-hover:bg-[#005baa] group-hover:text-white">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.7"
                            stroke="currentColor"
                            class="h-4 w-4"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M2.25 6.75A2.25 2.25 0 0 1 4.5 4.5h15a2.25 2.25 0 0 1 2.25 2.25v8.25A2.25 2.25 0 0 1 19.5 17.25h-5.25L9 20.25v-3H4.5a2.25 2.25 0 0 1-2.25-2.25V6.75Z"
                            />
                        </svg>

                    </span>

                    <span class="flex-1 text-xs font-medium text-gray-700 group-hover:text-[#005baa]">
                        Contact TESDA NIR
                    </span>

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.7"
                        stroke="currentColor"
                        class="h-4 w-4 text-gray-300 transition group-hover:translate-x-0.5 group-hover:text-[#005baa]"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m9 18 6-6-6-6"
                        />
                    </svg>

                </button>


                <button
                    type="button"
                    data-question="How do I apply for TESDA training?"
                    class="chat-quick-question group flex items-center gap-3 rounded-xl border border-gray-200/80 bg-white px-3.5 py-3 text-left transition-all duration-200 hover:-translate-y-0.5 hover:border-blue-200 hover:bg-blue-50/60 hover:shadow-sm"
                >

                    <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-blue-50 text-[#005baa] transition group-hover:bg-[#005baa] group-hover:text-white">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.7"
                            stroke="currentColor"
                            class="h-4 w-4"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 16.5V21m0-15.75v2.25m0 0a3 3 0 1 0 0 6m0-6a3 3 0 1 1 0 6"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M5.25 21h13.5"
                            />
                        </svg>

                    </span>

                    <span class="flex-1 text-xs font-medium text-gray-700 group-hover:text-[#005baa]">
                        How to apply for training
                    </span>

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.7"
                        stroke="currentColor"
                        class="h-4 w-4 text-gray-300 transition group-hover:translate-x-0.5 group-hover:text-[#005baa]"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m9 18 6-6-6-6"
                        />
                    </svg>

                </button>

            </div>

        </div>

    </div>


    {{-- ====================================================
        TYPING INDICATOR
        ==================================================== --}}
    <div
        id="chatTyping"
        class="hidden border-t border-gray-100 bg-white px-5 py-2.5"
    >

        <div class="flex items-center gap-2.5">

            <div class="flex h-7 w-7 items-center justify-center rounded-lg bg-[#005baa] text-white">

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.7"
                    stroke="currentColor"
                    class="h-3.5 w-3.5"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M8.25 9.75h7.5m-7.5 3h4.5m-8.25 5.25V6.75A2.25 2.25 0 0 1 6.75 4.5h10.5a2.25 2.25 0 0 1 2.25 2.25v11.25a2.25 2.25 0 0 1-2.25-2.25Z"
                    />
                </svg>

            </div>

            <div class="flex items-center gap-1">

                <span class="h-1.5 w-1.5 animate-bounce rounded-full bg-gray-400"></span>
                <span class="h-1.5 w-1.5 animate-bounce rounded-full bg-gray-400 [animation-delay:150ms]"></span>
                <span class="h-1.5 w-1.5 animate-bounce rounded-full bg-gray-400 [animation-delay:300ms]"></span>

            </div>

            <span class="text-[10px] text-gray-400">
                Assistant is typing...
            </span>

        </div>

    </div>


    {{-- ====================================================
        INPUT AREA
        ==================================================== --}}
    <div class="border-t border-gray-100 bg-white p-3.5">

        <form
            id="chatForm"
            class="rounded-2xl border border-gray-200 bg-gray-50 p-1.5 transition focus-within:border-blue-300 focus-within:bg-white focus-within:ring-4 focus-within:ring-blue-50"
        >

            <div class="flex items-center gap-1.5">

                <input
                    id="chatInput"
                    type="text"
                    autocomplete="off"
                    placeholder="Ask about TESDA NIR..."
                    class="min-w-0 flex-1 bg-transparent px-3 py-2.5 text-[13px] text-gray-700 outline-none placeholder:text-gray-400"
                >

                <button
                    id="chatSend"
                    type="submit"
                    aria-label="Send message"
                    class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-[#005baa] text-white shadow-sm transition-all duration-200 hover:bg-[#004b91] hover:shadow-md focus:outline-none focus:ring-2 focus:ring-blue-200 disabled:cursor-not-allowed disabled:opacity-40"
                >

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.8"
                        stroke="currentColor"
                        class="h-[18px] w-[18px]"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M6 12 3.27 3.125a.75.75 0 0 1 .916-.916L21.375 9.27a.75.75 0 0 1 0 1.46L4.186 21.79a.75.75 0 0 1-.916-.916L6 12Zm0 0h9.75"
                        />
                    </svg>

                </button>

            </div>

        </form>


        <div class="mt-2.5 flex items-center justify-center gap-1.5">

            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.6"
                stroke="currentColor"
                class="h-3 w-3 text-gray-300"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M12 3.75 5.25 6v5.25c0 4.5 2.85 7.95 6.75 9 3.9-1.05 6.75-4.5 6.75-9V6L12 3.75Z"
                />
            </svg>

            <p class="text-[9px] font-medium tracking-wide text-gray-400">
                TESDA Negros Island Region
            </p>

        </div>

    </div>

</div>


{{-- ========================================================
    FLOATING CHAT BUTTON
    ======================================================== --}}
<button
    id="chatbotToggle"
    type="button"
    aria-label="Open TESDA NIR Assistant"
    aria-expanded="false"
    class="group relative flex h-[58px] w-[58px] items-center justify-center rounded-[18px] bg-[#005baa] text-white shadow-[0_12px_30px_-8px_rgba(0,91,170,0.65)] transition-all duration-300 hover:-translate-y-1 hover:bg-[#004b91] hover:shadow-[0_18px_38px_-10px_rgba(0,91,170,0.7)] focus:outline-none focus:ring-4 focus:ring-blue-200"
>

    {{-- Soft glow --}}
    <span class="absolute inset-0 -z-10 rounded-[18px] bg-[#005baa]/20 blur-xl transition group-hover:bg-[#005baa]/30"></span>


    {{-- Open icon --}}
    <svg
        id="chatbotOpenIcon"
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke-width="1.7"
        stroke="currentColor"
        class="h-6 w-6 transition duration-200"
    >
        <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M8.25 9.75h7.5m-7.5 3h4.5m-8.25 5.25V6.75A2.25 2.25 0 0 1 6.75 4.5h10.5a2.25 2.25 0 0 1 2.25 2.25v11.25a2.25 2.25 0 0 1 2.25 2.25H6.75a2.25 2.25 0 0 1-2.25-2.25Z"
        />
    </svg>


    {{-- Close icon --}}
    <svg
        id="chatbotCloseIcon"
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke-width="1.8"
        stroke="currentColor"
        class="hidden h-6 w-6"
    >
        <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M6 18 18 6M6 6l12 12"
        />
    </svg>


    {{-- Notification badge --}}
    <span
        id="chatbotNotification"
        class="absolute -right-1 -top-1 flex h-4 w-4 items-center justify-center rounded-full border-2 border-white bg-emerald-500 shadow-sm"
    ></span>

</button>

</div>

{{-- ============================================================
CHATBOT JAVASCRIPT
============================================================ --}}

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


    /* ============================================================
       OPEN
       ============================================================ */

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


    /* ============================================================
       CLOSE
       ============================================================ */

    function closeChatbot() {

        chatbotIsOpen = false;

        chatbotWindow.classList.add('hidden');
        chatbotWindow.classList.remove('flex');

        chatbotOpenIcon.classList.remove('hidden');
        chatbotCloseIcon.classList.add('hidden');

        chatbotToggle.setAttribute('aria-expanded', 'false');

    }


    /* ============================================================
       TOGGLE
       ============================================================ */

    chatbotToggle.addEventListener('click', function () {

        if (chatbotIsOpen) {

            closeChatbot();

        } else {

            openChatbot();

        }

    });


    chatbotClose.addEventListener('click', closeChatbot);


    /* ============================================================
       ESC
       ============================================================ */

    document.addEventListener('keydown', function (event) {

        if (event.key === 'Escape' && chatbotIsOpen) {

            closeChatbot();

        }

    });


    /* ============================================================
       SCROLL
       ============================================================ */

    function scrollToBottom() {

        chatMessages.scrollTo({
            top: chatMessages.scrollHeight,
            behavior: 'smooth'
        });

    }


    /* ============================================================
       USER MESSAGE
       ============================================================ */

    function addUserMessage(message) {

        const wrapper = document.createElement('div');

        wrapper.className = 'mb-5 flex justify-end';

        wrapper.innerHTML = `
            <div class="max-w-[82%]">

                <div class="rounded-2xl rounded-tr-md bg-[#005baa] px-4 py-3 text-[13px] leading-relaxed text-white shadow-sm">
                    ${escapeHtml(message)}
                </div>

                <p class="mt-1.5 px-1 text-right text-[9px] font-medium uppercase tracking-wide text-gray-400">
                    You
                </p>

            </div>
        `;

        chatMessages.appendChild(wrapper);

        scrollToBottom();

    }


    /* ============================================================
       BOT MESSAGE
       ============================================================ */

    function addBotMessage(message) {

        const wrapper = document.createElement('div');

        wrapper.className = 'mb-5 flex items-start gap-3';

        wrapper.innerHTML = `
            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-[#005baa] text-white shadow-sm">

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.7"
                    stroke="currentColor"
                    class="h-4.5 w-4.5"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M8.25 9.75h7.5m-7.5 3h4.5m-8.25 5.25V6.75A2.25 2.25 0 0 1 6.75 4.5h10.5a2.25 2.25 0 0 1 2.25 2.25v11.25A2.25 2.25 0 0 1 16.5 20.25H6.75a2.25 2.25 0 0 1-2.25-2.25Z"
                    />
                </svg>

            </div>

            <div class="max-w-[82%]">

                <div class="rounded-2xl rounded-tl-md border border-gray-100 bg-white px-4 py-3.5 text-[13px] leading-relaxed text-gray-700 shadow-[0_4px_20px_-8px_rgba(0,0,0,0.12)]">
                    ${message}
                </div>

                <p class="mt-1.5 px-1 text-[9px] font-medium uppercase tracking-wide text-gray-400">
                    TESDA NIR Assistant
                </p>

            </div>
        `;

        chatMessages.appendChild(wrapper);

        scrollToBottom();

    }


    /* ============================================================
       TYPING
       ============================================================ */

   function showTyping() {

        isTyping = true;

        chatTyping.classList.remove('hidden');

        chatSend.disabled = true;
        chatInput.disabled = true;

        quickQuestions.forEach(function (button) {
            button.disabled = true;
            button.classList.add('opacity-40', 'pointer-events-none');
        });

        scrollToBottom();

    }


    function hideTyping() {

        isTyping = false;

        chatTyping.classList.add('hidden');

        chatSend.disabled = false;
        chatInput.disabled = false;

        quickQuestions.forEach(function (button) {
            button.disabled = false;
            button.classList.remove('opacity-40', 'pointer-events-none');
        });

        chatInput.focus();

    }


   


    /* ============================================================
       RESPONSE ENGINE
       ============================================================ */

/* ============================================================
       SEND — calls the Laravel backend, which calls Groq
       ============================================================ */

    function sendMessage(message) {

        message = message.trim();

        if (!message || isTyping) {
            return;
        }

        addUserMessage(message);

        chatInput.value = '';

        showTyping();

        const csrfToken = document
            .querySelector('meta[name="csrf-token"]')
            ?.getAttribute('content');

        fetch('/chatbot', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': csrfToken,
            },
            body: JSON.stringify({ message: message }),
        })
            .then(function (response) {

                if (!response.ok) {
                    throw new Error('Request failed with status ' + response.status);
                }

                return response.json();

            })
            .then(function (data) {

                hideTyping();

                const reply = data.reply || "Sorry, I couldn't generate a response.";

                addBotMessage(formatBotReply(reply));

            })
            .catch(function (error) {

                console.error('Chatbot error:', error);

                hideTyping();

                addBotMessage(
                    "<p>Sorry, I'm having trouble connecting right now. Please try again in a moment, or contact the TESDA NIR office directly.</p>"
                );

            });

    }


    /* ============================================================
       FORMAT BOT REPLY — turns plain text from the API into
       simple paragraph HTML (the API returns plain text, not HTML)
       ============================================================ */

    function formatBotReply(text) {

        return text
            .split(/\n\s*\n/)
            .map(function (paragraph) {
                return '<p>' + escapeHtml(paragraph.trim()).replace(/\n/g, '<br>') + '</p>';
            })
            .join('<div class="mt-2"></div>');

    }


    /* ============================================================
       SEND
       ============================================================ */

   


    /* ============================================================
       FORM
       ============================================================ */

    chatForm.addEventListener('submit', function (event) {

        event.preventDefault();

        sendMessage(chatInput.value);

    });


    /* ============================================================
       QUICK QUESTIONS
       ============================================================ */

    quickQuestions.forEach(function (button) {

        button.addEventListener('click', function () {

            sendMessage(button.dataset.question);

        });

    });


    /* ============================================================
       ENTER
       ============================================================ */

    chatInput.addEventListener('keydown', function (event) {

        if (event.key === 'Enter' && !event.shiftKey) {

            event.preventDefault();

            chatForm.dispatchEvent(new Event('submit'));

        }

    });


    /* ============================================================
       ESCAPE HTML
       ============================================================ */

    function escapeHtml(value) {

        const div = document.createElement('div');

        div.textContent = value;

        return div.innerHTML;

    }


    /* ============================================================
       MOBILE
       ============================================================ */

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
