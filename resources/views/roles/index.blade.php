<x-app-layout>
    <x-slot name="header" class="flex container justify-between">

        {{-- <x-header> imports the header component into this view. --}}
        <x-header :route="__('companies.create')">
            <x-slot:title> {{ __('Roles') }} </x-slot>
    <i class="fa-solid fa-plus pr-2"></i> {{ __('Role toevoegen') }}
        </x-header>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <table>
                <tr>
                    <td>Role id</td>
                    <td>Role Name</td>
                </tr>
                @foreach($roles as $role)
                    <tr>
                        <td>{{$role['RoleID']}}</td>
                        <td>{{$role['RoleName']}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</x-app-layout>
