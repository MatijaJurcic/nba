@extends('layouts.master')

@section('name', $team->name)

@section('content')
<h3>Contacts</h3>
<hr>
<h5>Name:</h5>
<p>{{$team->name}}</p>
<hr>
<h5>Email:</h5>
<p>{{$team->email}}</p>
<hr>
<h5>Address:</h5>
<p>{{$team->address}}</p>
<hr>
<h5>City:</h5>
<p>{{$team->city}}</p>
<hr>
<br>
<br>
<h3>Players</h3>
<br>
<ul>
    @foreach ( $team->players as $player )
        <li><a href="{{route('single-player', ['id' => $player->id])}}">{{ $player->first_name .' '. $player->last_name }}</a></li>
    @endforeach
</ul>
@endsection
