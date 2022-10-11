<x-app-layout>
    <x-slot name="header" class="flex container justify-between">
        <x-header :route="__('companies.edit')">
            <x-slot:routeID>{{ __($company->id) }}</x-slot>
            <x-slot:title> {{ __('Details van ' . $company->name) }} </x-slot>

{{--            <i class="fa-solid fa-pencil pr-2"></i> {{ __('Bewerken') }}--}}
        </x-header>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="bg-white border-b border-gray-200 p-6 py-8 grid grid-cols-3 grid-rows-auto gap-12">
                    <div id="company-map-content" class="rounded-lg border-2 border-black mx-auto">
                        <iframe class="rounded-lg"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2469.0011748782276!2d4.983839951503908!3d51.769585699220045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c68f929034ef8d%3A0xcd5c3c3628cf263b!2sIdea-X%20B.V.!5e0!3m2!1snl!2snl!4v1664406366129!5m2!1snl!2snl"
                            width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div id="company-content" class="px-6 row-span-2 col-span-2 grid grid-rows-auto gap-8">

                        <div class="flex items-center">
                            <div id="title-container">
                                <h1 id="company-title" class="block text-4xl font-bold pr-6 mb-3">{{ $company->name }}</h1>
                                <small class="text-sky-500 block">{{ $company->slogan }}</small>
                            </div>
                            <span class="text-gray-400"><i class="px-2 fa-solid fa-location-dot"></i>{{ $company->city }}</span>
                        </div>

                        <div id="ranking">
                            <p class="text-sm text-gray-400 font-bold">BEOORDELING</p>
                            <div class="text-xl font-bolder"><span>4,5 </span><div id="star-icons" class="inline-block text-sky-500"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i>{{--<i class="fa-regular fa-star"></i>--}}</div></div>
                        </div>

                        <div id="actions">
                            <ul>
                                <li class="inline-block text-lg text-gray-600 font-extrabold pr-2"><i class="pr-2 fa-solid fa-message"></i>Stuur een bericht</li>
                                <li class="inline-block pl-2 text-red-400 font-extrabold"><a href="#"><i class="fa-solid fa-flag pr-2"></i>Rapporteer bedrijf</a></li>
                            </ul>
                        </div>

                        <div id="about-company">
                            <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab"
                                    data-tabs-toggle="#myTabContent" role="tablist">
                                    <li class="mr-2" role="presentation">
                                        <button
                                            class="inline-block p-4 rounded-t-lg border-b-2 text-gray-700 hover:text-sky-500 dark:text-sky-500 dark:hover:text-sky-500 border-sky-500 dark:border-sky-500"
                                            id="stages-tab" data-tabs-target="#stages" type="button" role="tab"
                                            aria-controls="stages" aria-selected="true">Stages
                                        </button>
                                    </li>
                                    <li class="mr-2" role="presentation">
                                        <button
                                            class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                                            id="over-ons-tab" data-tabs-target="#over-ons" type="button" role="tab"
                                            aria-controls="over-ons" aria-selected="false">Over Ons
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <div id="myTabContent">
                                <div class="p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="stages" role="tabpanel"
                                     aria-labelledby="stages-tab">
                                    <ul>
                                        <li>Applicatie- en Mediaontwikkelaar <i class="fa-solid fa-chevron-down"></i></li>
                                        <li>IT-Managment <i class="fa-solid fa-chevron-down"></i></li>
                                        <li>Helpdesk Assistant <i class="fa-solid fa-chevron-down"></i></li>
                                    </ul>
                                </div>
                                <div class="grid grid-rows-auto hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="over-ons"
                                     role="tabpanel" aria-labelledby="over-ons-tab">
                                    <div id="about-us-info" mt-4>
                                        <h3 class="text-sm font-bold text-gray-500 mb-2">Over Ons</h3>
                                        <p>{{ $company->description }}</p>
                                    </div>
                                    <div id="contact-info" class="grid grid-rows-auto gap-4 mt-8">
                                        <h3 class="text-sm font-bold text-gray-500">Contact informatie</h3>
                                        <div class="grid grid-cols-2">
                                            <p class="text-left">Telefoonnummer:</p>
                                            <a href="tel:{{ $company->phone_number }}" class="text-right text-sky-500 font-bold">{{ $company->phone_number }}</a>
                                        </div>
                                        <div class="grid grid-cols-2">
                                            <p class="text-left">Adres:</p>
                                            <p class="text-right"> {{ $company->street_name . " " . $company->house_number }}, {{ $company->zip_code }}, {{ $company->city }}</p>
                                        </div>
                                        <div class="grid grid-cols-2">
                                            <p class="text-left">Email:</p>
                                            <a href="mailto:{{ $company->email }}" class="text-right text-sky-500 font-bold">{{ $company->email }}</a>
                                        </div>
                                        <div class="grid grid-cols-2">
                                            <p class="text-left">Website:</p>
                                            <a href="https://idea-x.nl/" target="_blank" class="text-right text-sky-500 font-bold">www.idea-x.nl/</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
