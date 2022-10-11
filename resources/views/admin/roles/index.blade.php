<x-app-layout>
    <x-slot name="header" class="flex container justify-between">

        {{-- <x-header> imports the header component into this view. --}}
        <x-header :route="__('admin.companies.create')">
            <x-slot:title> {{ __('Rollen') }} </x-slot>
    <i class="fa-solid fa-plus pr-2"></i> {{ __('Rol toewijzen') }}
        </x-header>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-2 bg-white border-b border-gray-200">
                    <div class="border-solid border-2 border-black rounded-md text-center w-1/2 my-1">
                        @foreach($roles as $role)
                            <tr>
                                <td>{{$role->id}}</td>
                                <td>{{$role->name}}</td>
                            </tr>
                        @endforeach
                    </div>
                    <div class="border-solid border-2 border-black rounded-md text-center w-1/2">
                        {{$role->id}}
                    </div>
                    <div class="border-solid border-2 border-black rounded-md text-center w-1/2">
                        {{$role->id}}
                    </div>
                    <div class="border-solid border-2 border-black rounded-md text-center w-1/2">
                        {{$role->id}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
