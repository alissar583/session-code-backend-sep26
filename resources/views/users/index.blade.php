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

    <x-button class="active" style="color:green" test="attributes" />
    <x-alert content="index" />
    <x-card>
        <x-slot name="header">
            <h5 class="card-title">header</h5>
        </x-slot>
        <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s
            content.</p>
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
    </x-card>
    <a href="{{ route('users.create') }}">create</a>
@endsection
