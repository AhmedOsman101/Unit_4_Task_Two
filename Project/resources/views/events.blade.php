@extends('layouts.app')

@section('content')
@php
$path = explode('/', request()->path());
$path = $path[count($path) - 1]
@endphp
<div class="flex flex-col">
    {{-- Links container --}}
    <div class="w-90 flex justify-center pt-20">
        <div class="inline-flex rounded-md shadow-sm">
            @switch($path)
            @case('events')
            <a href="/events"
                class="px-4 py-2 text-sm font-medium dark:text-white dark:bg-gray-700 border-gray-200 rounded-s-lg   dark:border-gray-700   ">
                All
            </a>
            <a href="{{ route('team_events') }}"
                class="px-4 py-2 text-sm font-medium text-blue-800 bg-white border border-gray-200 border-t border-b  dark:bg-gray-800 dark:border-gray-700 dark:text-white  ">
                Team
            </a>
            <a href="{{ route('individual_events') }}"
                class="px-4 py-2 text-sm font-medium text-blue-800 bg-white border border-gray-200 rounded-e-lg  dark:bg-gray-800 dark:border-gray-700 dark:text-white  ">
                Individual
            </a>
            @break
            @case('team')
            <a href="/events"
                class="px-4 py-2 text-sm font-medium text-blue-800 bg-white border border-gray-200 rounded-s-lg  dark:bg-gray-800 dark:border-gray-700 dark:text-white  ">
                All
            </a>
            <a href="{{ route('team_events') }}"
                class="px-4 py-2 text-sm font-medium text-blue-800 bg-white border border-gray-200 border-t border-b  dark:text-white dark:bg-gray-700 dark:border-gray-700 ">
                Team
            </a>
            <a href="{{ route('individual_events') }}"
                class="px-4 py-2 text-sm font-medium text-blue-800 bg-white border border-gray-200 rounded-e-lg  dark:bg-gray-800 dark:border-gray-700 dark:text-white  ">
                Individual
            </a>
            @break
            @case('individual')
            <a href="/events"
                class="px-4 py-2 text-sm font-medium text-blue-800 bg-white border border-gray-200 rounded-s-lg  dark:bg-gray-800 dark:border-gray-700 dark:text-white  ">
                All
            </a>
            <a href="{{ route('team_events') }}"
                class="px-4 py-2 text-sm font-medium text-blue-800 bg-white border border-gray-200 border-t border-b  dark:bg-gray-800 dark:border-gray-700 dark:text-white  ">
                Team
            </a>
            <a href="{{ route('individual_events') }}"
                class="px-4 py-2 text-sm font-medium text-blue-800 bg-white border border-gray-200 rounded-e-lg  dark:text-white dark:bg-gray-700  dark:border-gray-700">
                Individual
            </a>
            @break
            @default

            @endswitch

        </div>
    </div>

    {{-- Cards container --}}
    <div class="w-90 flex flex-wrap justify-center">
        {{-- Show all Events --}}
        @if($events)
        @foreach ($events as $event)
        @livewire('card', ['event' => $event], key($event->id))
        @endforeach
        @endif

        {{-- Show Team Events --}}
        @if(!empty($team_events))
        @foreach ($team_events as $event)
        @livewire('card', ['event' => $event], key($event->id))
        @endforeach
        @endif

        {{-- Show Individual Events --}}
        @if(!empty($individual_events))
        @foreach ($individual_events as $event)
        @livewire('card', ['event' => $event], key($event->id))
        @endforeach
        @endif
    </div>
</div>

@endsection
