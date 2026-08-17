<section id="programs"
class="py-24 bg-gray-100">

<div class="max-w-7xl mx-auto px-8">

<h2 class="text-4xl font-bold text-blue-900">

Programs

</h2>

<div class="grid md:grid-cols-3 gap-8 mt-12">

@foreach([
'Scholarships',
'Training Centers',
'Assessment & Certification'
] as $program)

<div class="bg-white rounded-xl shadow-lg p-8">

<h3 class="text-2xl font-bold">

{{ $program }}

</h3>

<p class="mt-4 text-gray-600">

Learn more about our services.

</p>

</div>

@endforeach

</div>

</div>

</section>