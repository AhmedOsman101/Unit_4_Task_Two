@extends('layouts.app')

@section('content')
<div class="w-90 min-h-screen flex flex-wrap justify-center pt-20">
    @if ($event->type === "team")
    @livewire('team-event-details', ['event' => $event])

    @else
    @livewire('individual-event-details', ['event' => $event])

    @endif
</div>

@endsection
