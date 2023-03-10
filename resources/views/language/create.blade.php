<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Language') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('language') }}" method="post">
                        @csrf
                        <select name="name" class="text-gray-100 dark:text-gray-900">
                            <option disabled>{{ __('Choose language') }}</option>
                            <option value="id">Bahasa</option>
                            <option value="en">English</option>
                        </select>

                        <x-primary-button type="submit">
                            {{ __('Switch') }}
                        </x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
