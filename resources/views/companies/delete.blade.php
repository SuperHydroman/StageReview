<x-app-layout>
    <x-slot name="header">
        <x-header :formname="__('delete-form')">
            <x-slot:title>{{ __('Bedrijf verwijderen') }}</x-slot>
            <i class="fas fa-trash pr-2"></i> {{ __('Verwijderen') }}
    </x-header>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form id="delete-form" method="POST" action="{{ route('companies.destroy', $company->id) }}">
                    @csrf
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h1 class="text-2xl font-bold mb-3">Gegevens:</h1>
                        <dl class="grid grid-cols-2 grid-rows-auto gap-2 w-full text-gray-900 dark:text-white">
                            <div class="pb-3 col-span-1 row-start-1 row-span-1">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Naam</dt>
                                <dd class="text-lg font-semibold">{{ $company->name }}</dd>
                            </div>
                            <div class="py-3 col-span-1 row-start-2 row-span-1">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">E-mail</dt>
                                <dd class="text-lg font-semibold">{{ $company->email ?? "Dit bedrijf heeft geen email" }}</dd>
                            </div>
                            <div class="py-3 col-span-1 row-start-3 row-span-1">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Telefoonnummer</dt>
                                <dd class="text-lg font-semibold">{{ $company->phone_number ?? "Dit bedrijf heeft geen telefoonnummer" }}</dd>
                            </div>
                            <div class="pt-3 col-span-1 row-start-4 row-span-1">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Locatie</dt>
                                <dd class="text-lg font-semibold">{{ ($company->street_name . " " . $company->house_number . ", " . $company->zip_code . ", " . $company->city) ?? "De locatie van dit bedrijf is onbekend." }}</dd>
                            </div>

                            <div class="pb-3 col-span-1 row-start-1 row-span-1">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Slogan</dt>
                                <dd class="text-lg font-semibold">{{ $company->slogan }}</dd>
                            </div>
                            <div class="py-3 col-span-1 col-start-2 row-start-2 row-span-3">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Description</dt>
                                <dd class="text-lg font-semibold">{{ $company->description ?? "Dit bedrijf heeft geen email" }}</dd>
                            </div>
                        </dl>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
