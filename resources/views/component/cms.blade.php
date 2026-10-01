<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TESDA - Client Satisfaction Measurement (CSM)</title>
    <!-- Tailwind CSS CDN with forms plugin (or compile via Vite) -->
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'tesda-blue': '#0041A5',
                        'tesda-navy': '#0B2A5B',
                        'tesda-gold': '#F59E0B',
                    },
                    fontFamily: {
                        sans: ['Frutiger', 'Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        @font-face {
            font-family: 'Frutiger';
            src: local('Frutiger'), local('Frutiger LT Std'), local('Arial');
        }
    </style>
</head>
<body class="bg-slate-100 text-slate-800 font-sans min-h-screen py-8 px-4 sm:px-6 lg:px-8">

    <div class="max-w-5xl mx-auto bg-white shadow-2xl rounded-2xl border-t-8 border-tesda-gold overflow-hidden transition-all duration-300">
        
        <!-- Header Banner -->
        <div class="bg-gradient-to-r from-tesda-navy via-tesda-blue to-tesda-navy p-6 sm:p-8 text-white relative">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                <div class="flex items-center space-x-4">
                    <!-- Placeholder/Logo SVG -->
                    <div class="w-16 h-16 rounded-full bg-white/10 p-2 flex items-center justify-center border border-tesda-gold/50 shadow-inner">
                        <svg class="w-10 h-10 text-tesda-gold" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs font-semibold tracking-widest text-amber-300 uppercase">TECHNICAL EDUCATION AND SKILLS DEVELOPMENT AUTHORITY</p>
                        <h1 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">HELP US SERVE YOU BETTER!</h1>
                        <p class="text-xs text-blue-100 mt-1">Client Satisfaction Measurement (CSM)</p>
                    </div>
                </div>
                <!-- Control No Display
                <div class="bg-white/10 backdrop-blur-md px-4 py-2 rounded-lg border border-white/20 text-center">
                    <span class="block text-xs uppercase text-blue-200">Control No.</span>
                    <span class="font-mono text-sm font-bold text-amber-300">{{ $controlNo ?? 'Auto-Generated' }}</span>
                </div> -->
            </div>

            <p class="mt-4 text-xs text-blue-100 leading-relaxed border-t border-white/10 pt-3">
                This Client Satisfaction Measurement (CSM) tracks the customer experience of government offices. Your feedback on your recently concluded transaction will help this office provide a better service. Personal information shared will be kept confidential and you always have the option to not answer this form.
            </p>
        </div>

        <!-- Form Submission -->
      <form action="{{ route('csm.store') }}" method="POST" class="p-6 sm:p-10 space-y-8">
    @csrf

            <!-- Flash Validation Errors -->
            @if ($errors->any())
                <div class="p-4 bg-red-50 border-l-4 border-red-500 rounded-r-lg">
                    <div class="flex">
                        <div class="ml-3">
                            <h3 class="text-sm font-medium text-red-800">Please correct the highlighted errors before submitting.</h3>
                        </div>
                    </div>
                </div>
            @endif

            <!-- SECTION 1: Personal Details -->
            <div class="border-b border-slate-200 pb-6 space-y-6">
                <h2 class="text-lg font-bold text-tesda-navy flex items-center gap-2">
                    <span class="w-3 h-3 rounded-full bg-tesda-gold inline-block"></span>
                    1. Client Details
                </h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Client Type -->
                    <div class="sm:col-span-2 lg:col-span-3">
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Client Type <span class="text-red-500">*</span></label>
                        <div class="flex flex-wrap gap-4">
                            @foreach(['Citizen', 'Business', 'Government (Employee or another agency)'] as $type)
                                <label class="inline-flex items-center text-sm font-medium text-slate-700 cursor-pointer">
                                    <input type="radio" name="client_type" value="{{ $type }}" class="w-4 h-4 text-tesda-blue border-slate-300 focus:ring-tesda-blue" required {{ old('client_type') == $type ? 'checked' : '' }}>
                                    <span class="ml-2">{{ $type }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>

                    <!-- Date -->
                    <div>
                        <label for="date" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Date <span class="text-red-500">*</span></label>
                        <input type="date" id="date" name="date" value="{{ old('date', date('Y-m-d')) }}" class="w-full rounded-lg border-slate-300 shadow-sm focus:border-tesda-blue focus:ring-tesda-blue text-sm" required>
                    </div>

                    <!-- Name -->
                    <div>
                        <label for="name" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Name <span class="text-xs text-slate-400 font-normal">(Optional)</span></label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="John Doe" class="w-full rounded-lg border-slate-300 shadow-sm focus:border-tesda-blue focus:ring-tesda-blue text-sm">
                    </div>

                    <!-- Sex -->
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Sex <span class="text-red-500">*</span></label>
                        <div class="flex space-x-6 pt-2">
                            <label class="inline-flex items-center text-sm text-slate-700">
                                <input type="radio" name="sex" value="Male" class="w-4 h-4 text-tesda-blue border-slate-300 focus:ring-tesda-blue" required {{ old('sex') == 'Male' ? 'checked' : '' }}>
                                <span class="ml-2">Male</span>
                            </label>
                            <label class="inline-flex items-center text-sm text-slate-700">
                                <input type="radio" name="sex" value="Female" class="w-4 h-4 text-tesda-blue border-slate-300 focus:ring-tesda-blue" required {{ old('sex') == 'Female' ? 'checked' : '' }}>
                                <span class="ml-2">Female</span>
                            </label>
                        </div>
                    </div>

                    <!-- Age -->
                    <div>
                        <label for="age" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Age</label>
                        <input type="number" id="age" name="age" min="1" max="120" value="{{ old('age') }}" class="w-full rounded-lg border-slate-300 shadow-sm focus:border-tesda-blue focus:ring-tesda-blue text-sm">
                    </div>

                    <!-- Region of Residence -->
                    <div>
                        <label for="region" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Region of Residence <span class="text-red-500">*</span></label>
                        <input type="text" id="region" name="region" value="{{ old('region') }}" placeholder="e.g. Region VII" class="w-full rounded-lg border-slate-300 shadow-sm focus:border-tesda-blue focus:ring-tesda-blue text-sm" required>
                    </div>

                    <!-- Service Availed -->
                    <div class="sm:col-span-2 lg:col-span-3">
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Citizens Charter Service Availed / Type of Transaction <span class="text-red-500">*</span></label>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">
                            @foreach(['Assessment and Certification', 'Program Registration', 'Training', 'Scholarship', 'Administrative', 'Others'] as $service)
                                <label class="p-3 border rounded-lg bg-slate-50 hover:bg-blue-50 cursor-pointer flex items-center transition">
                                    <input type="radio" name="service_availed" value="{{ $service }}" class="w-4 h-4 text-tesda-blue border-slate-300 focus:ring-tesda-blue" required {{ old('service_availed') == $service ? 'checked' : '' }}>
                                    <span class="ml-2 text-sm text-slate-700">{{ $service }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- SECTION 2: Citizen's Charter (CC) Questions -->
            <div class="border-b border-slate-200 pb-6 space-y-6">
                <div class="bg-blue-50/70 p-4 rounded-xl border-l-4 border-tesda-blue">
                    <h2 class="text-md font-bold text-tesda-navy uppercase tracking-wide">Citizen's Charter (CC) Instructions</h2>
                    <p class="text-xs text-slate-600 mt-1">
                        Check mark (✓) your answer to the Citizen's Charter (CC) questions. The Citizen's Charter is an official document that reflects the services of a government agency/office including its requirements, fees, and processing times among others.
                    </p>
                </div>

                <!-- CC1 -->
                <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm space-y-3">
                    <p class="text-sm font-semibold text-slate-800">
                        <span class="text-tesda-blue font-bold">CC1:</span> Which of the following best describes your awareness of a CC? <span class="text-red-500">*</span>
                    </p>
                    <div class="space-y-2">
                        @php
                            $cc1_opts = [
                                1 => '1. I know what a CC is and I saw this office\'s CC.',
                                2 => '2. I know what a CC is but I did NOT see this office\'s CC.',
                                3 => '3. I learned of the CC only when I saw this office\'s CC.',
                                4 => '4. I do not know what a CC is and I did not see one in this office. (Answer \'N/A\' on CC2 and CC3)'
                            ];
                        @endphp
                        @foreach($cc1_opts as $val => $label)
                            <label class="flex items-start text-sm text-slate-700 cursor-pointer">
                                <input type="radio" name="cc1" value="{{ $val }}" class="w-4 h-4 mt-0.5 text-tesda-blue border-slate-300 focus:ring-tesda-blue" required {{ old('cc1') == $val ? 'checked' : '' }}>
                                <span class="ml-2">{{ $label }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>

                <!-- CC2 -->
                <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm space-y-3">
                    <p class="text-sm font-semibold text-slate-800">
                        <span class="text-tesda-blue font-bold">CC2:</span> If aware of CC (answered 1-3 in CC1), would you say that the CC of this office was...?
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">
                        @php
                            $cc2_opts = [
                                1 => '1. Easy to see',
                                2 => '2. Somewhat easy to see',
                                3 => '3. Difficult to see',
                                4 => '4. Not visible at all',
                                5 => '5. N/A'
                            ];
                        @endphp
                        @foreach($cc2_opts as $val => $label)
                            <label class="flex items-center text-sm text-slate-700 cursor-pointer">
                                <input type="radio" name="cc2" value="{{ $val }}" class="w-4 h-4 text-tesda-blue border-slate-300 focus:ring-tesda-blue" {{ old('cc2') == $val ? 'checked' : '' }}>
                                <span class="ml-2">{{ $label }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>

                <!-- CC3 -->
                <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm space-y-3">
                    <p class="text-sm font-semibold text-slate-800">
                        <span class="text-tesda-blue font-bold">CC3:</span> If aware of CC (answered codes 1-3 in CC1), how much did the CC help you in your transaction?
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">
                        @php
                            $cc3_opts = [
                                1 => '1. Helped very much',
                                2 => '2. Somewhat helped',
                                3 => '3. Did not help',
                                4 => '4. N/A'
                            ];
                        @endphp
                        @foreach($cc3_opts as $val => $label)
                            <label class="flex items-center text-sm text-slate-700 cursor-pointer">
                                <input type="radio" name="cc3" value="{{ $val }}" class="w-4 h-4 text-tesda-blue border-slate-300 focus:ring-tesda-blue" {{ old('cc3') == $val ? 'checked' : '' }}>
                                <span class="ml-2">{{ $label }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- SECTION 3: Service Quality Dimensions (SQD 0-8) -->
            <div class="space-y-6">
                <div>
                    <h2 class="text-lg font-bold text-tesda-navy flex items-center gap-2">
                        <span class="w-3 h-3 rounded-full bg-tesda-gold inline-block"></span>
                        3. Service Quality Dimensions (SQD 0-8)
                    </h2>
                    <p class="text-xs text-slate-500 mt-1">Please select the response that best corresponds to your answer for each statement.</p>
                </div>

                @php
                    $sqds = [
                        0 => 'Service Quality Dimension 0. I am satisfied with the service that I availed.',
                        1 => 'Service Quality Dimension 1. I spent a reasonable amount of time for my transaction.',
                        2 => 'Service Quality Dimension 2. The office followed the transaction\'s requirements and steps based on the information provided.',
                        3 => 'Service Quality Dimension 3. The steps (including payment) I needed to do for my transaction were easy and simple.',
                        4 => 'Service Quality Dimension 4. I easily found information about my transaction from the office or its website.',
                        5 => 'Service Quality Dimension 5. I paid a reasonable amount of fees for my transaction. (If service was free, mark the N/A column)',
                        6 => 'Service Quality Dimension 6. I feel the office was fair to everyone, or "walang palakasan", during my transaction.',
                        7 => 'Service Quality Dimension 7. I was treated courteously by the staff, and (if asked for help) the staff was helpful.',
                        8 => 'Service Quality Dimension 8. I got what I needed from the government office, or (if denied) denial of request was sufficiently explained to me.'
                    ];

                    $ratings = [
                        'Strongly Agree' => '😁',
                        'Agree' => '🙂',
                        'Neither Agree nor Disagree' => '😐',
                        'Disagree' => '🙁',
                        'Strongly Disagree' => '😡',
                        'N/A' => 'N/A'
                    ];
                @endphp

                <!-- SQD Table View for Desktop / Card Grid for Mobile -->
                <div class="overflow-x-auto border border-slate-200 rounded-xl shadow-sm">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-100 text-slate-700 text-xs uppercase border-b border-slate-200">
                                <th class="p-3 w-1/2">Service Quality Statement</th>
                                @foreach($ratings as $key => $emoji)
                                    <th class="p-2 text-center text-[10px] sm:text-xs">
                                        <div class="text-base sm:text-lg mb-0.5">{{ $emoji }}</div>
                                        <div>{{ $key }}</div>
                                    </th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-200 text-xs">
                            @foreach($sqds as $idx => $sqdText)
                                <tr class="hover:bg-blue-50/50 transition">
                                    <td class="p-3 text-slate-700 font-medium">
                                        {{ $sqdText }}
                                    </td>
                                    @foreach($ratings as $key => $emoji)
                                        <td class="p-2 text-center align-middle">
                                            <input type="radio" 
                                                   name="sqd[{{ $idx }}]" 
                                                   value="{{ $key }}" 
                                                   class="w-4 h-4 text-tesda-blue border-slate-300 focus:ring-tesda-blue cursor-pointer" 
                                                   required
                                                   {{ old("sqd.{$idx}") == $key ? 'checked' : '' }}>
                                        </td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- SECTION 4: Feedback & Optional Info -->
            <div class="space-y-6 border-t border-slate-200 pt-6">
                <!-- Suggestions -->
                <div>
                    <label for="suggestions" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">
                        Suggestions on how we can further improve our services <span class="text-xs font-normal text-slate-400">(optional)</span>
                    </label>
                    <textarea id="suggestions" name="suggestions" rows="3" class="w-full rounded-lg border-slate-300 shadow-sm focus:border-tesda-blue focus:ring-tesda-blue text-sm" placeholder="Your feedback helps us serve you better...">{{ old('suggestions') }}</textarea>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <!-- Email Address -->
                    <div>
                        <label for="email" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Email address <span class="text-xs font-normal text-slate-400">(optional)</span></label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="name@example.com" class="w-full rounded-lg border-slate-300 shadow-sm focus:border-tesda-blue focus:ring-tesda-blue text-sm">
                    </div>

                    <!-- Employee Name -->
                    <div>
                        <label for="employee_name" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Employee's Full Name Attended <span class="text-xs font-normal text-slate-400">(optional)</span></label>
                        <input type="text" id="employee_name" name="employee_name" value="{{ old('employee_name') }}" placeholder="Staff Name" class="w-full rounded-lg border-slate-300 shadow-sm focus:border-tesda-blue focus:ring-tesda-blue text-sm">
                    </div>
                </div>
            </div>

            <!-- Submit Button Footer -->
            <div class="pt-6 border-t border-slate-200 flex flex-col sm:flex-row items-center justify-between gap-4">
                <span class="text-base font-bold text-tesda-navy uppercase tracking-wider">THANK YOU!</span>
                <button type="submit" class="w-full sm:w-auto px-8 py-3 bg-tesda-blue hover:bg-tesda-navy text-white font-bold rounded-xl shadow-lg hover:shadow-xl transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-tesda-blue">
                    Submit Evaluation
                </button>
            </div>
        </form>

    </div>

</body>
</html>