<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="mb-3 text-xl font-bold text-gray-700 dark:text-gray-400">Feel home. This belong to you. </h3>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Welcome to LuxShop, the epitome of elegance and functionality in e-commerce applications. Designed with the powerful Laravel framework, LuxShop offers a seamless and intuitive shopping experience. Discover a wide range of products, enjoy a user-friendly interface, and experience the cutting-edge features that make online shopping a breeze.</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Ready to explore? Click the button below to dive into our extensive product catalog and start your shopping journey.</p>
                    <a href="{{ route('products') }}"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Shop now
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
