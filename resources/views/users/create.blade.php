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

    <x-button color='primary' test="create" />
    <x-alert content="create"/>
@endsection
