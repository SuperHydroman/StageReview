<x-app-layout>
    <x-slot name="header" class="flex container justify-between">
        <x-header :formname="__('form')">
            <x-slot:title> {{ __('Details ' . $company->title) }} </x-slot>
    {{ __('Bewerken') }}
    </x-header>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="bg-white border-b border-gray-200 p-6 py-8 flex">
                    <div id="map" class="border-2 border-black">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2469.0011748782276!2d4.983839951503908!3d51.769585699220045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c68f929034ef8d%3A0xcd5c3c3628cf263b!2sIdea-X%20B.V.!5e0!3m2!1snl!2snl!4v1664406366129!5m2!1snl!2snl"
                            width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="w-full px-8">
                        <h1 id="company-title" class="text-2xl font-bold">Idea-X</h1>
                        <div id="company-detail-container">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
