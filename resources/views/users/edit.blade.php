@extends('layouts.app')

@section('content')
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">name</label>
        <input id="name" type="text" name= "name" value="{{ $user->name }}">
        <error>
            @if ($errors->has('name'))
                <p>{{ $errors->first('name') }}</p>
            @endif
        </error>


        <button>update</button>
    </form>
@endsection
