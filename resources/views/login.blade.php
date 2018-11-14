<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <form action="/login" method="post">
            {{ csrf_field() }}
            <h4>Login</h4>
            @if(!empty($error))
            <div class="alert alert-danger">
                {{$error}}
            </div>
            @endif
            Email <input type="text" name="email"><br>
            Password <input type="text" name="password"><br>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>