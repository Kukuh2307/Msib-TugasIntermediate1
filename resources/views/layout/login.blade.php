@extends('layout.main')
@section('content')
<div class="flex min-h-screen items-center justify-center bg-white dark:bg-gray-950 p-12">
    <form action="{{ route('auth.authenticate') }}" method="POST">
        @csrf
      <div class="max-w-sm rounded-3xl bg-gradient-to-b from-sky-300 to-purple-500 p-px dark:from-gray-800 dark:to-transparent">
        <div class="rounded-[calc(1.5rem-1px)] bg-white px-10 p-12 dark:bg-gray-900">
          <div>
            <h1 class="text-xl font-semibold text-gray-800 dark:text-white text-center">Login Admin</h1>
          </div>
  
          <div class="mt-8 space-y-8">
            <div class="space-y-6">
              <input class="w-full bg-transparent text-gray-600 dark:text-white dark:border-gray-700 rounded-md border border-gray-300 px-3 py-2 text-sm placeholder-gray-600 invalid:border-red-500 dark:placeholder-gray-300" placeholder="Your Email" type="email" name="email" id="email" />
  
              <input class="w-full bg-transparent text-gray-600 dark:text-white dark:border-gray-700 rounded-md border border-gray-300 px-3 py-2 text-sm placeholder-gray-600 invalid:border-red-500 dark:placeholder-gray-300" placeholder="Your Password" type="password" name="password" id="password" />
            </div>
  
            <button class="h-9 px-3 w-full bg-gray-700 hover:bg-gray-800 active:bg-gray-900 focus:bg-gray-800 transition duration-500 rounded-md text-white">
              Login
            </button>
          </div>
        </div>
      </div>
    </form>
  </div>
@endsection