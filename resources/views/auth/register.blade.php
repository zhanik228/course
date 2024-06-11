<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.3-dist/css/bootstrap.css') }}">
</head>

<body class="h-100 d-flex justify-content-center align-items-center">
    <form class="w-50">
        <!-- Email input -->

        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="form2Example1">Имя</label>
            <input type="name" id="form2Example1" class="form-control" />
        </div>

        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="form2Example1">Email</label>
            <input type="email" id="form2Example1" class="form-control" />
        </div>

        <!-- Password input -->
        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="form2Example2">Пароль</label>
            <input type="password" id="form2Example2" class="form-control" />
        </div>

        <!-- Submit button -->
        <button type="submit" data-mdb-button-init data-mdb-ripple-init
            class="btn btn-primary btn-block mb-4">Зайти</button>

        <!-- Register buttons -->
        <div class="text-center">
            <p>Уже имеете аккаунт? <a href="{{ route('loginPage') }}">Войти</a></p>
        </div>
    </form>
</body>

</html>
