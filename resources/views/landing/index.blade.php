@extends('layouts.landing')

@section('title','Landing')

@section('content')
    <h1>User List:</h1>
    @if ($users->isEmpty())
        <p>The list is empty</p>
    @else
        <ul>
            @foreach($users as $user)
                <li>{{$user->name}}</li>
            @endforeach
        </ul>
    @endif
@endsection