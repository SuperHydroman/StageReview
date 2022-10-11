<x-app-layout>
    <x-slot name="header" class="flex container justify-between">

        {{-- <x-header> imports the header component into this view. --}}
        <x-header :route="__('companies.create')">
            <x-slot:title> {{ __('Rol') }} </x-slot>
            <i class="fa-solid fa-plus pr-2"></i> {{ __('Rol toevoegen') }}
        </x-header>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <table>
                <tr>
                    <td>Rol id</td>
                    <td>Rol naam</td>
                </tr>
                @foreach($roles as $role)
                    <tr>
                        <td>{{ $role->id }}</td>
                        <td>{{ $role->name }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</x-app-layout>
