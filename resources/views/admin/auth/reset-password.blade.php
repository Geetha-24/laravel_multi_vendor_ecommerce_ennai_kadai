{{--<x-guest-layout>
    <form method="POST" action="{{ route('admin.password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>--}}




<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.3.0
* @link https://tabler.io
* Copyright 2018-2025 The Tabler Authors
* Copyright 2018-2025 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Reset password</title>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="{{ asset('assets/admin/css/tabler.css') }}" rel="stylesheet" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <style>
      @import url("https://rsms.me/inter/inter.css");
    </style>
    <!-- END CUSTOM FONT -->
  </head>
  <body>
    <!-- BEGIN GLOBAL THEME SCRIPT -->
    <script src="{{ asset('assets/admin/js/tabler-theme.min.js') }}"></script>
    <!-- END GLOBAL THEME SCRIPT -->
    <div class="page page-center">
      <div class="container container-tight py-4">
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form class="card card-md" action="{{ route('admin.password.store') }}" method="post" autocomplete="off" novalidate>
          @csrf
         <input type="hidden" name="token" value="{{ $request->route('token') }}">

          <div class="card-body">
            <h2 class="card-title text-center mb-4">Reset your password</h2>
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" name ="email" value="{{old('email', $request->email)}}" class="form-control" required placeholder="Enter email" />
              <x-input-error :messages="$errors->get('email')" class="mt-2" />

            </div>

            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" name ="password"class="form-control" placeholder="Enter Password" required />
              <x-input-error :messages="$errors->get('password')" class="mt-2" />

            </div>

            <div class="mb-3">
              <label class="form-label">Confirm Password</label>
              <input type="password" name ="password_confirmation"class="form-control" placeholder="Enter confirm password" required />
              <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

            </div>

            <div class="form-footer">
              <button type ="submit" class="btn btn-primary btn-4 w-100">
                <!-- Download SVG icon from http://tabler.io/icons/icon/mail -->
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="icon icon-2"
                >
                  <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                  <path d="M3 7l9 6l9 -6" />
                </svg>
                Reset Password
             </button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->

  </body>
</html>


