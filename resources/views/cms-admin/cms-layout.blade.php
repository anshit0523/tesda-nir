<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CSM Admin') – TESDA</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <script>
        tailwind.config = { theme: { extend: { colors: {
            'tesda-blue': '#0041A5', 'tesda-navy': '#0B2A5B', 'tesda-gold': '#F59E0B' } } } }
    </script>
</head>
<body class="bg-slate-100 text-slate-800 min-h-screen">
    <header class="bg-tesda-navy text-white border-b-4 border-tesda-gold">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 py-4 flex items-center justify-between">
            <a href="{{ route('admin.csm.index') }}" class="font-bold text-lg">TESDA · Client Satisfaction Admin</a>
            <a href="{{ route('customer') }}" target="_blank" class="text-sm text-blue-100 hover:text-white">View public form</a>
        </div>
    </header>
    <main class="max-w-7xl mx-auto px-4 sm:px-6 py-8 space-y-6">
        @if (session('success'))
            <div class="p-3 bg-green-50 border-l-4 border-green-500 text-sm text-green-800 rounded-r">{{ session('success') }}</div>
        @endif
        @yield('content')
    </main>
</body>
</html>
