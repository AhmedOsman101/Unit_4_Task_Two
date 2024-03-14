@extends('layouts.auth')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@section('content')

<form class="form_container" method="POST" action="{{ route('register') }}">
    @csrf

    <!-- ========== Start Form title ========== -->
    <div class="title_container">
        <p class="title">Create Your Account!</p>
        <span class="subtitle">Get started with our app, just create an account and enjoy the experience.</span>
    </div>
    <!-- ========== End Form title ========== -->

    <!-- ========== Start Name input ========== -->
    <div class="input_container">
        <label class="input_label" for="name_field">Name</label>
        <x-name-icon />
        <input placeholder="Enter Your Name" title="Inpit title" name="name" type="text" class="input_field"
            id="name_field">
    </div>
    <!-- ========== End Name input ========== -->

    <!-- ========== Start Name Errors ========== -->
    @error('name')
    <span class="text-red-700">{{$errors->first('name')}}</span>
    @enderror
    <!-- ========== End Name Errors ========== -->

    <!-- ========== Start Email input ========== -->
    <div class="input_container">
        <label class="input_label" for="email_field">Email</label>
        <x-email-icon />
        <input placeholder="Enter Your Email" title="Inpit title" name="email" type="text" class="input_field"
            id="email_field">
    </div>
    <!-- ========== End Email input ========== -->
    <!-- ========== Start Email Errors ========== -->
    @error('email')
    <span class="text-red-700">{{$errors->first('email')}}</span>
    @enderror
    <!-- ========== End Email Errors ========== -->


    <!-- ========== Start Password input ========== -->

    <div class="input_container">
        <label class="input_label" for="password_field">Password</label>
        <x-password-icon />
        <input placeholder="Password" title="Inpit title" name="password" type="password" class="input_field"
            id="password_field">
    </div>
    <!-- ========== End Password input ========== -->

    <!-- ========== Start Password Errors ========== -->

    @error('password')
    <span class="text-red-700">{{$errors->first('password')}}</span>
    @enderror
    <!-- ========== End Password Errors ========== -->

    <!-- ========== Start Password Confirmation input ========== -->
    <div class="input_container">
        <label class="input_label" for="password_field">Confirm Password</label>
        <x-password-icon />
        <input placeholder="Confirm Password" title="Inpit title" name="password_confirmation" type="password"
            class="input_field" id="confirm_password_field">
    </div>
    <!-- ========== End Password Confirmation input ========== -->

    <!-- ========== Start Type Input ========== -->
    <div class="input_container">
        @livewire('check-box', ['label' => "Join As A Team"])
    </div>
    <!-- ========== End Type Input ========== -->

    <!-- ========== Start Submit Form ========== -->
    <button title="Sign In" type="submit" class="sign-in_btn mb-4">
        <span>Resgister</span>
    </button>
    <p>
        Already have an account? <a class="inline-block text-blue-500 no-underline hover:underline"
            href="{{ route('login') }}">Login</a>
    </p>
    <!-- ========== End Submit Form ========== -->

</form>
@endsection
