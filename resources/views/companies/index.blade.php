<x-app-layout>
    <x-slot name="header" class="flex container justify-between">
        <div class="grid grid-columns-2">
            <h2 class="col-start-1 col-end-2 font-semibold text-left text-xl text-gray-800">
                {{ __('Dashboard') }}
            </h2>
            <div class="col-start-2 col-end-3 font-semibold text-right text-xl text-gray-800">
                <a href="#">
                    + Add company
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-2 bg-white border-b border-gray-200">
                    @foreach($companies as $company)
                        <div onclick="location.href='#'" class="p-6 m-6 w-auto cursor-pointer hover:bg-gray-100 rounded-sm shadow-md">
                            <div class="items-center flex">
                                <img class="inline-block" src="https://images.squarespace-cdn.com/content/v1/58a8cfd3893fc06cb71017c9/1490529664104-1HOUBURFFQAZ8XCG6F7N/image-asset.jpeg?format=300w" width="100" height="100">
                                <ul class="inline-block ml-5">
                                    <li class="text-xl font-bold my-1">{{ $company->name ?? "undefined" }}</li>
                                    <li class="my-1">{{ $company->slogan ?? "Dit bedrijf heeft geen slogan toegekend." }}</li>
                                    <li class="my-1">{{  $company->location ?? "De locatie van dit bedrijf is bekend." }}</li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
