@props(['formname' => null, 'route' => null, 'routeID' => 1])

<div class="grid grid-columns-2">
    <h2 class="col-start-1 col-end-2 font-semibold text-left text-xl text-gray-800">
        {{ $title }}
    </h2>
    <div class="col-start-2 col-end-3 font-semibold text-right text-xl text-gray-800">
        @if($slot != "")
            @if( $formname != null)
                <x-primary-button form="{{ $formname }}">
                    {{ $slot }}
                </x-primary-button>
            @else
                <a class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"
                   href="{{ ($route!=null) ? route($route, $routeID) : "#"}}"> {{ $slot }} </a>
            @endif
        @endif
    </div>
</div>
