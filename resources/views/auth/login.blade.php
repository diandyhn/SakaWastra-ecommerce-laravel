@extends('layouts.app')

@section('content')
    <div class="min-h-[calc(100vh-52px)] flex flex-col sm:justify-center items-center my-20 sm:pt-0">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <h1 class="text-3xl font-bold text-center font-poppins my-4 text-roseOfSharon-950">LOGIN</h1>
            <x-validation-errors class="mb-4" />
        
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="email">
                        {{ __('Email') }}
                    </label>
                    <input class="border-gray-300 focus:border-roseOfSharon-300 focus:ring focus:ring-roseOfSharon-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full" id="email" type="email" name="email" required="required" autofocus="autofocus">
                </div>

                <div class="mt-4">
                    <label class="block font-medium text-sm text-gray-700" for="password">
                        {{ __('Password') }}
                    </label>
                    <input class="border-gray-300 focus:border-roseOfSharon-300 focus:ring focus:ring-roseOfSharon-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full" id="password" type="password" name="password" required="required" autocomplete="current-password">
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <input type="checkbox" class="rounded border-gray-300 text-roseOfSharon-600 shadow-sm focus:border-roseOfSharon-300 focus:ring focus:ring-roseOfSharon-200 focus:ring-opacity-50" id="remember_me" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-roseOfSharon-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-roseOfSharon-700 active:bg-roseOfSharon-900 focus:outline-none focus:border-roseOfSharon-900 focus:ring disabled:opacity-25 transition ease-in-out duration-150 ml-4">
                        {{ __('Log in') }}
                    </button>                    
                </div>

                <a href="/forgot-password" class="underline text-sm text-roseOfSharon-600 hover:text-roseOfSharon-900" >Forgot password?</a>
            </form>

           {{-- Demo Credentials Section --}}
<div class="mt-6 p-4 bg-gray-100 rounded-lg shadow">
    <h3 class="text-lg font-semibold text-gray-700 mb-4">Demo Credentials</h3>

    <div class="grid grid-cols-2 gap-4">
        <div class="border p-4 rounded bg-white shadow-sm">
            <h4 class="font-bold text-gray-800">Admin</h4>
            <div class="mt-2">
                <span class="block text-sm text-gray-600 font-mono">admin@example.com</span>
            </div>
            <div class="mt-2">
                <span class="block text-sm text-gray-600 font-mono">password</span>
            </div>
        </div>

        <div class="border p-4 rounded bg-white shadow-sm">
            <h4 class="font-bold text-gray-800">Staff</h4>
            <div class="mt-2">
                <span class="block text-sm text-gray-600 font-mono">staff@example.com</span>
            </div>
            <div class="mt-2">
                
                <span class="block text-sm text-gray-600 font-mono">password</span>
            </div>
        </div>
    </div>
</div>

             
        
        </div>
    </div>
@endsection
