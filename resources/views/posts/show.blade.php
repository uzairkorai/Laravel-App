@extends('layouts.app')

@section('content')
    <div class="mt-2 flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <x-post :post="$post" />
        </div>
    </div>
@endsection