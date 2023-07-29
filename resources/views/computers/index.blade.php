@extends('layout')
@section('title' , 'computers')
@section('content')
<div class="max-w-7xl mx-auto p-6 lg:p-8">
    <div class="flex justify-center pt-8">
        <h1>computers</h1>
    </div>

    <div class="mt-8">
        @if (count($computers) > 0)
            <ul>
                @foreach($computers as $computer)
                    <li>{{ $computer['name'] }}</li> is from <strong>{{ $computer['origin'] }}</strong>
                @endforeach
            </ul>
        @else
            <h1>No Data</h1>
        @endif
    </div>
</div>

@endsection
