<x-app-layout>
    <x-slot name="header">

        <x-header :formname="__('delete-user-form')">
            <x-slot:title>{{ __('Gebruiker verwijderen') }}</x-slot>
            <i class="fas fa-trash pr-2"></i> {{__('Verwijderen')}}
    </x-header>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form id="delete-user-form" action="{{ route('users.destroy', $user->id) }}" method="post">
                    @csrf
                        <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                            <div class="flex flex-col pb-3">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Naam</dt>
                                <dd class="text-lg font-semibold">{{$user->name}}</dd>
                            </div>
                            <div class="flex flex-col py-3">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">E-mail</dt>
                                <dd class="text-lg font-semibold">{{$user->email}}</dd>
                            </div>
                            <div class="flex flex-col pt-3">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Rol</dt>
{{--                                <dd class="text-lg font-semibold">{{$gebruiker->role}}</dd>--}}
                                <dd class="text-lg font-semibold">Gebruiker</dd>
                            </div>
                        </dl>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
