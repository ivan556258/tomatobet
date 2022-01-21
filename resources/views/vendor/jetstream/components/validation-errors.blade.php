@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-medium text-red-600">@lang('words.Whoops!_Something_went_wrong.')</div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <li> @lang('words.'.$error)</li>
            @endforeach
        </ul>
    </div>
@endif
