@extends('layouts.app')

@section('content')
<div class="w-90 flex flex-wrap justify-center pt-20">
    @foreach ($events as $event)

    @livewire('card', ['event' => $event], key($event->id))

    @endforeach
</div>

@endsection
