<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2 class="blog-post-title">Login</h2>

    <form method="POST" action="/login">

        {{ csrf_field() }}


        <div class="form-group">

            <label for="email">Email</label>

            <input class="form-control" type="email" id="email" name="email">
            @include('partials.error-message', ['fieldTitle' => 'email']) 

        </div>


        <div class="form-group">

            <label for="password">Password</label>

            <input class="form-control" type="password" id="password" name="password">
            @include('partials.error-message', ['fieldTitle' => 'password'])

        </div>

        <div class="form-group">

            <label for="password_confirm">Password confirm</label>

            <input class="form-control" type="password" id="password_confirm" name="password_confirm">
            @include('partials.error-message', ['fieldTitle' => 'password_confirm'])

        </div>

        

        <div class="form-group">

            <button type="submit" class="btn btn-primary">Sign In</button>

        </div>

    </form>


</body>
</html>