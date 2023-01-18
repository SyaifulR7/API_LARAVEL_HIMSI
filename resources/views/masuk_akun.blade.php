<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk Akun</title>
</head>
<body>
    <div>
        <form method="post" action="/api/masuk">
            @csrf
            <div>
                <input type="email" class="form-control" id="email" name="email" value="syaifulramadhan714@gmail.com">
                <input type="password" class="form-control" id="password" name="password" value="ipul12345">
            </div>
            <div>
                <button>Masuk Akun</button>
            </div>
        </form>
    </div>
</body>
</html>