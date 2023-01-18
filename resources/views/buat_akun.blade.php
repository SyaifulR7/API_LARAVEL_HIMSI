<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Akun</title>
</head>
<body>
    <div>
        <form method="post" action="/api/buat">
            @csrf
            <div>
                <input type="text" class="form-control" id="name" name="name" value="Syaiful Ramadhan">
                <input type="email" class="form-control" id="email" name="email" value="syaifulramadhan714@gmail.com">
                <input type="password" class="form-control" id="password" name="password" value="ipul12345">
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" value="ipul12345">
            </div>
            <div>
                <button>Buat Akun</button>
            </div>
        </form>
    </div>
</body>
</html>