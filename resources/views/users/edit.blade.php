<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('users.update',$user->id) }}" method="post">
        @csrf
        @method('PUT')

        <label for="name">name</label>
        <input id="name" type="text" name= "name" value="{{ $user->name }}">

        <label>email</label>
        <input type="email" name= "email" value="{{ $user->email }}">

        <label>password</label>
        <input type="password" name="password">

        <button type = 'submit'>submit</button>

    </form>

</body>

</html>
