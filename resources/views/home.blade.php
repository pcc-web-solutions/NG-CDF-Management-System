<x-layouts.public :title="'Welcome to NG-CDF Portal'">
    <div class="text-center mb-12">
        <h1 class="text-2xl font-extrabold text-green-800 mb-2">Welcome to National Government Community Development Fund</h1>
        <p class="text-gray-700 max-w-xl mx-auto">
            Access government-funded community projects and services such as bursaries, infrastructure, education support, and more.
        </p>
    </div>

    <!-- Services Section -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <!-- Bursary -->
        <div class="bg-white shadow rounded-lg overflow-hidden">
            <img src="{{ asset('images/services/bursary.jpg') }}" class="h-40 w-full object-cover" alt="Bursary">
            <div class="p-4">
                <h3 class="text-lg font-bold text-green-700 mb-1">Bursary Application</h3>
                <p class="text-sm text-gray-600">Apply for financial support as a student in need through your constituency fund.</p>
                <a href="{{ route('login') }}" class="mt-3 inline-block text-green-600 hover:underline text-sm font-medium">Apply Now &rarr;</a>
            </div>
        </div>

        <!-- Infrastructure -->
        <div class="bg-white shadow rounded-lg overflow-hidden">
            <img src="{{ asset('images/services/infrastructure.jpg') }}" class="h-40 w-full object-cover" alt="Infrastructure">
            <div class="p-4">
                <h3 class="text-lg font-bold text-green-700 mb-1">Infrastructure Projects</h3>
                <p class="text-sm text-gray-600">Explore CDF-funded roads, schools, water projects and other public developments.</p>
                <a href="{{ url('/projects') }}" class="mt-3 inline-block text-green-600 hover:underline text-sm font-medium">View Projects &rarr;</a>
            </div>
        </div>

        <!-- Education Support -->
        <div class="bg-white shadow rounded-lg overflow-hidden">
            <img src="{{ asset('images/services/education.jpg') }}" class="h-40 w-full object-cover" alt="Education">
            <div class="p-4">
                <h3 class="text-lg font-bold text-green-700 mb-1">Education Support</h3>
                <p class="text-sm text-gray-600">Support for classroom construction, furniture, lab equipment, and more.</p>
                <a href="{{ route('login') }}" class="mt-3 inline-block text-green-600 hover:underline text-sm font-medium">Explore Support &rarr;</a>
            </div>
        </div>

        <!-- Security Installations -->
        <div class="bg-white shadow rounded-lg overflow-hidden">
            <img src="{{ asset('images/services/security.jpg') }}" class="h-40 w-full object-cover" alt="Security">
            <div class="p-4">
                <h3 class="text-lg font-bold text-green-700 mb-1">Security & Lighting</h3>
                <p class="text-sm text-gray-600">Community policing posts, floodlights, and CCTVs supported by NG-CDF.</p>
                <a href="{{ route('login') }}" class="mt-3 inline-block text-green-600 hover:underline text-sm font-medium">See Initiatives &rarr;</a>
            </div>
        </div>

        <!-- Youth Empowerment -->
        <div class="bg-white shadow rounded-lg overflow-hidden">
            <img src="{{ asset('images/services/youth.jpg') }}" class="h-40 w-full object-cover" alt="Youth Empowerment">
            <div class="p-4">
                <h3 class="text-lg font-bold text-green-700 mb-1">Youth Empowerment</h3>
                <p class="text-sm text-gray-600">Programs to train and engage youth in gainful, meaningful development roles.</p>
                <a href="{{ route('login') }}" class="mt-3 inline-block text-green-600 hover:underline text-sm font-medium">Get Involved &rarr;</a>
            </div>
        </div>

        <!-- Health Services -->
        <div class="bg-white shadow rounded-lg overflow-hidden">
            <img src="{{ asset('images/services/health.jpg') }}" class="h-40 w-full object-cover" alt="Health">
            <div class="p-4">
                <h3 class="text-lg font-bold text-green-700 mb-1">Health & Clinics</h3>
                <p class="text-sm text-gray-600">Funding for dispensaries, maternity wings, and public health campaigns.</p>
                <a href="{{ route('login') }}" class="mt-3 inline-block text-green-600 hover:underline text-sm font-medium">Explore Clinics &rarr;</a>
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="mt-16 text-center">
        <p class="text-gray-600 text-sm mb-2">Want to access a service?</p>
        <a href="{{ route('register') }}" class="bg-green-600 text-white px-6 py-2 rounded-full text-sm hover:bg-green-700 transition">
            Create an Account
        </a>
    </div>
</x-layouts.public>
