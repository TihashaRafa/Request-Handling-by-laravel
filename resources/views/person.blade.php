<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Submit</title>
</head>
<body>
    <h1>
        Create a person form
    </h1>

    <form action="/persons" method="post" enctype="multipart/form-data">
        @csrf
        {{-- Cross-Site Request Forgery (CSRF)  --}}
        <label for="">Name</label>
        <input type="text" name="name" id="name">
        <label for="">Email</label>
        <input type="email" name="email" id="email">
        <label for="">Image</label>
        <input type="file" name="image" id="image">


        <input type="submit" value="Submit">
    </form>
</body>
</html>
