<x-app-layout>
    <x-slot name="header" class="flex container justify-between">

{{-- <x-header> imports the header component into this view. --}}
        <x-header :route="__('companies.create')">
            <x-slot:title> {{ __('Dashboard') }} </x-slot>
{{--            <i class="fa-solid fa-plus pr-2"></i> {{ __('Bedrijf toevoegen') }}--}}
        </x-header>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-2 bg-white border-b border-gray-200">
                    @foreach($companies as $company)
                        <div onclick="location.href='{{ route('companies.details', $company->id) }}'" class="p-6 m-6 w-auto cursor-pointer hover:bg-gray-100 rounded-sm shadow-md">
                            <div class="items-center flex">
                                <img class="inline-block" src="https://images.squarespace-cdn.com/content/v1/58a8cfd3893fc06cb71017c9/1490529664104-1HOUBURFFQAZ8XCG6F7N/image-asset.jpeg?format=300w" width="100" height="100">
                                <ul class="inline-block ml-5">
                                    <li class="text-xl font-bold my-1">{{ $company->name ?? "undefined" }}</li>
                                    <li class="my-1">{{ $company->slogan ?? "Dit bedrijf heeft geen slogan toegekend." }}</li>
                                    <li class="my-1">{{ ($company->street_name . " " . $company->house_number . ", " . $company->zip_code . ", " . $company->city) ?? "De locatie van dit bedrijf is onbekend." }}</li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                    {{ $companies->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
