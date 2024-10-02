<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['./resources/css/app.css','./resources/js/index.ts'])
</head>
<body> 

    <div> 
        
        <a href="#">secret page</a>
        <form action="" method="POST" enctype="multipart/form-data" >
            @csrf

          
            <div>
                <label for="">Name</label>
                <input type="text" name="name" value="{{old('name')}}">
            </div>
            @error('name')
                <p>{{$message}}</p>
            @enderror
            <div>
                <label for="">picture</label>
                <input type="file" name="picture" id="" multiple>
            </div>
            <button type="submit" >ok</button>
            {{ $model->getFirstMedia('essaicollect') }}
        </form>
    </div>
</body>
</html>