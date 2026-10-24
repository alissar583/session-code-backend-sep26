@extends('layouts.app')

@section('content')
    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        <label>name</label>
        <input type="text" name= "name">

        <label>password</label>
        <input type="password" name= "password">

        <label>email</label>
        <input type="email" name= "email">

        <button>submit</button>
    </form>

    <x-button text="create" type="danger"></x-button>
    <x-alert>

        <hr>
        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>

    </x-alert>
@endsection
