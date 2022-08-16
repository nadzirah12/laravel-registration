@extends('layouts.app')

@section('content')

  <main>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    @if( auth()->check() )
        <p class="text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">Hi {{ auth()->user()->name }}</p>
    @endif
    </div>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8 flex flex-row flex-wrap">
    @foreach($users as $user)
    <div class="mb-2 ml-2 p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $user->name }}</h5>
        <p class="font-normal text-gray-700 dark:text-gray-400"><b>Email:</b> {{ $user->email }}</p>
        <p class="font-normal text-gray-700 dark:text-gray-400"><b>Date of Birth:</b> {{ $user->date_of_birth != null ? date('d-m-Y', strtotime($user->date_of_birth)) : '' }}</p>
        <p class="font-normal text-gray-700 dark:text-gray-400"><b>Country:</b> {{ $user->country }}</p>
    </div>
    @endforeach
    </div>
  </main>

@endsection