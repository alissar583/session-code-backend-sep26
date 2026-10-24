@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user->id) }}">edit</a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button>delete</button>
                        </form>

                    </td>



                </tr>
            @endforeach

            {{-- @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}
                    </td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user->id) }}">edit</a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button>delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach --}}
        </tbody>
    </table>

    <x-button text="index" type="primary"></x-button>

    <x-alert>
        <x-slot name="header">
            <h4 class="alert-heading">index!</h4>
        </x-slot>
        <hr>
        <p class="mb-0">index you need to, be sure to use margin utilities to keep things nice and tidy.</p>

    </x-alert>

    <a href="{{ route('users.create') }}">create</a>
@endsection
