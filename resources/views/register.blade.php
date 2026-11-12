<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('register.me') }}" method="POST">
        @csrf

        <label for="name">name</label>
        <input id="name" type="text" name= "name">
        @error('name')
            {{ $message }}
        @enderror
        <label>email</label>
        <input type="email" name= "email">
        @error('name')
            {{ $message }}
        @enderror
        <label>password</label>
        <input type="password" name="password">
        @error('name')
            {{ $message }}
        @enderror

        <button type = 'submit'>submit</button>
    </form>
</body>

</html>
