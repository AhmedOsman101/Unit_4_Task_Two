@extends('layouts.auth')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@section('content')
<form class="form_container" method="POST" action="{{ route('login') }}">
    @csrf
    <div class="title_container">
        <p class="title">Login to your Account!</p>
        <span class="subtitle">Get started with our app, just create an account and enjoy the experience.</span>
    </div>
    @error('email')
    <livewire:error-alert :errorMessage="$message" />
    @enderror
    <div class="input_container">
        <label class="input_label" for="email_field">Email</label>
        <x-email-icon />
        <input placeholder="Enter Your Email" title="Inpit title" name="email" type="text" class="input_field"
            id="email_field">
    </div>
    <div class="input_container">
        <label class="input_label" for="password_field">Password</label>
        <x-password-icon />
        <input placeholder="Password" title="Inpit title" name="password" type="password" class="input_field"
            id="password_field">
    </div>
    <button title="Sign In" type="submit" class="sign-in_btn mt-4 mb-3">
        <span>Login</span>
    </button>
    <p>
        Don't have an account? <a class="inline-block text-blue-500 no-underline hover:underline"
            href="{{ route('register') }}">Register</a>
    </p>
</form>
@endsection
