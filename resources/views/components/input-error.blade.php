@props(['messages'])

@if ($messages)

    @foreach($messages as $message)
        <span {{ $attributes->merge(['class' => 'text-sm text-danger']) }}>{{$message}}</span>
    @endforeach
@endif
