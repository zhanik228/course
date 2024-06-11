<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.3-dist/css/bootstrap.css') }}">
</head>

<body class="h-100 d-flex justify-content-center align-items-center">
    <form class="w-50" action="{{ route('login') }}" method="POST">
        @csrf
        <!-- Email input -->
        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="form2Example1">Email</label>
            <input type="email" name="email" id="form2Example1" class="form-control" />
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Password input -->
        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="form2Example2">Пароль</label>
            <input type="password" name="password" id="form2Example2" class="form-control" />
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Submit button -->
        <button type="submit" data-mdb-button-init data-mdb-ripple-init
            class="btn btn-primary btn-block mb-4">Зайти</button>

        <!-- Register buttons -->
        <div class="text-center">
            <p>Нету аккаунта? <a href="{{ route('registerPage') }}">Зарегистрироваться</a></p>
        </div>
    </form>
</body>

</html>
