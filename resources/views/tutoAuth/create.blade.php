<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>create</h1>
    <form action="" method="POST" >
        @csrf
        <div>
            <label for="name">name</label>
            <input type="text" name="name" id="name">
            @error('name')
                <p>{{$message}}</p>
            @enderror
        </div>
        <div>
            <label for="email">email</label>
            <input type="email" name="email" id="email">
            @error('email')
                <p>{{$message}}</p>
            @enderror
        </div>
        <div>
            <label for="password">password</label>
            <input type="password" name="password" id="password">
            @error('password')
                <p>{{$message}}</p>
            @enderror
        </div>
        <div>
            <button type="submit" >submit</button>
        </div>
    </form>
</body>
</html>