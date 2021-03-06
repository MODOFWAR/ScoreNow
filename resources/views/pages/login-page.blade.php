@extends("layout.Login")

@section("login_container")
    <nav class="navbar navbar-expand-lg navbar-light navbartop py-3">
        <div class="container-fluid">
              <a class="navbar-brand scorenow" href="/home-page"><img src = "/img/icon.png"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
        </div>
    </nav>
    <div class="login-container">
        <h2 class="login-title">LOGIN AS ADMIN</h2>
    </div>
    <div class="container form-container">
        <div class="row">
            <div class="col">
                <div class="container loginForm">
                    <h3>Login</h3>
                    <form action="/postlogin" method="POST">
                        {{csrf_field()}}
                        <p>Username</p>
                        <input type="text" name="username" placeholder="Enter Username">
                        <p>Password</p>
                        <input type="password" name="password" placeholder="******">
                        <div>
                            <button type="submit" class="btn btn-primary login-btn">Login</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col login-words">
                <h2>Welcome to ScoreNow!</h2>
                <p>This page only for the administrator, feel free to update and maintenance.</p>
                <h6>©Since2021</h6>
            </div>
        </div>
    </div>
@endsection