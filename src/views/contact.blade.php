<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contact Us any time</h1>
    <form action="{{route('contact')}}" method="post">
        @csrf
        <input type="text" name="name" id="">
        <input type="email" name="email" id="">
        <textarea name="message" cols="30" rows="10"></textarea>
        <input type="submit">
    </form>
</body>
</html>