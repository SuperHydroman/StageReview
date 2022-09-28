@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-medium text-red-600">
            {{ __('Oops! Er is iets fout gegaan.') }}
        </div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600 w-full mx-auto">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
