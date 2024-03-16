@extends('layouts.app')

@section('content')
<div class="w-90 min-h-screen flex flex-wrap justify-center pt-20">
    @livewire('event-details', ['event' => $event])
</div>

@endsection
