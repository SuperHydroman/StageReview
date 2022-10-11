<x-app-layout>
    <x-slot name="header" class="flex container justify-between">
        <x-header :formname="__('form')">
            <x-slot:title> {{ __('Bedrijf toevoegen') }} </x-slot>
            <i class="fa-solid fa-plus pr-2"></i> {{ __('Toevoegen') }}
        </x-header>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-2 bg-white border-b border-gray-200 py-8">
                    <form id="form" method="POST" action {{ route('admin.companies.store') }} class="w-full max-w-lg mx-auto">
                        <x-form-validation-errors class="mb-4" :errors="$errors"/>
                        @csrf
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3 mb-6 md:mb-0">
                                <x-input-label for="naam" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" :value="__('Naam')" />
                                <x-text-input  id="naam" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="naam" :value="old('naam')" required autofocus />
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <x-input-label for="slogan" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" :value="__('Slogan')" />
                                <x-text-input  id="slogan" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="slogan" :value="old('slogan')" />
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <x-input-label for="beschrijving" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" :value="__('Beschrijving')" />
                                <textarea  id="beschrijving" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="beschrijving"></textarea>
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-2">
                            <div class="md:w-2/3 px-3 mb-6 md:mb-0">
                                <x-input-label for="stad" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" :value="__('Stad')" />
                                <x-text-input  id="stad" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="stad" :value="old('stad')" />
                            </div>
                            <div class="md:w-1/3 px-3 mb-6 md:mb-0">
                                <x-input-label for="postcode" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" :value="__('Postcode')" />
                                <x-text-input  id="postcode" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="postcode" :value="old('postcode')" />
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-2">
                            <div class="md:w-3/4 px-3 mb-6 md:mb-0">
                                <x-input-label for="straatnaam" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" :value="__('Straatnaam')" />
                                <x-text-input  id="straatnaam" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="straatnaam" :value="old('straatnaam')" />
                            </div>
                            <div class="md:w-1/4 px-3 mb-6 md:mb-0">
                                <x-input-label for="huisnummer" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" :value="__('Huisnummer')" />
                                <x-text-input  id="huisnummer" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="number" name="huisnummer" :value="old('huisnummer')" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
