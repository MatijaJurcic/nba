@extends('layouts.master')

@section('name', 'Teams')

@section('content')
    <h3>
        <ul>
            @foreach ($teams as $team)
                <li><a class="text-decoration-none" href="{{route('single-team', ['id' => $team->id])}}">{{$team->name}}</a></li>
            @endforeach
         </ul>
    </h3>
@endsection
