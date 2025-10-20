@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="bg-white rounded-2xl shadow-md p-8 text-center">

        <h2 class="text-3xl font-semibold mb-1">{{ $developer['name'] }}</h2>
        <p class="text-indigo-600 font-medium mb-4">{{ $developer['role'] }}</p>

        <p class="text-gray-600 leading-relaxed mb-6">{{ $developer['bio'] }}</p>

        <p class="text-gray-800 font-medium mt-4">{{ $developer['email'] }}</p>
    </div>
</div>
@endsection
