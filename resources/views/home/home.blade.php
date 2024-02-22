<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['/resources/css/app.css'])
</head>
<body> 
    <!-- <div>
        <img src="{{asset('storage/pic2.jpg')}}" alt="">
    </div> -->
    
    <div>
        <form action="" method="POST" enctype="multipart/form-data" >
            @csrf

            <div>
                <label for="">Name</label>
                <input type="text" name="name" id="">
            </div>
            <div>
                <label for="">picture</label>
                <input type="file" name="picture" id="">
            </div>
            <button type="submit" >ok</button>
        </form>
    </div>
</body>
</html>