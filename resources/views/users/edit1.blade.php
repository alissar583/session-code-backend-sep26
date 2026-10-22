@extends('layouts.app')

@section('content')
    <form action="{{ route('users.update', $user->id) }}" method="post">
        @csrf
        @method('PUT')

        <label for="name">name</label>
        <input id="name" type="text" name= "name" value="{{ $user->name }}">
        <error>
            @if ($errors->has('name'))
                <p>{{ $errors->first('name') }}</p>
            @endif
        </error>

        <label>email</label>
        <input type="email" name= "email" value="{{ $user->email }}">

        <label>password</label>
        <input type="password" name="password">

        <button type = 'submit'>submit</button>

    </form>
@endsection
