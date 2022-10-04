<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gebruikers') }}
        </h2>
        <button id="delete-button"
                form="delete-user-form"
                class="">
            <i class="fas fa-plus"></i> Verwijder
        </button>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form id="delete-user-form" action="{{ route('users.destroy', $user->id) }}" method="post">
                    @csrf

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
