<!-- Inclusion du template layouts/app.blade.php -->
@extends('layouts.app')

@section('content')

    <h1>Contact page</h1>

    @if(count($people))
        <ul>
        @foreach($people as $person)
            <li>{{$person}}</li>
        @endforeach
        </ul>
    @endif
@endsection

@section(('footer'))

@endsection