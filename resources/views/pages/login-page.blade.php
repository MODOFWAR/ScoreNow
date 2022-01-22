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
                    <p class="text-danger">{{ Session::get('message') }}</p>
                    <form action="/postlogin" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Enter Username" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                        </div>
                        <div>
                            <button type="submit" id="submit-login" class="btn btn-primary login-btn">Login</button>
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