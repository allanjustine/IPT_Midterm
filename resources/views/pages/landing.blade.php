<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPT Midterm Project</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    <!--Navigation Bar-->
    <nav class="navbar navbar-dark bg-primary navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/">IPT Midterm Project</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-item nav-link active">Home <span class="visually-hidden">(current)</span></a>
                    <a class="nav-item nav-link" href="{{url('/users')}}">Users</a>
                    <a class="nav-item nav-link" href="{{url('/accounts')}}">Accounts</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="row">
        <div class="col-md-4 offset-md-4">
                <div class="card  bg-primary" style="margin-top: 20px;">
                    <div class="card-header text-center text-white">
                        <h4>Main Menu</h4>
                    </div>
                    <div class="card-body d-grid gap-2">
                        <a href="{{url('/')}}" class="btn btn-light btn-block">Home</a>
                        <a href="{{url('/users')}}" class="btn btn-light btn-block">Users</a>
                        <a href="{{url('/accounts')}}" class="btn btn-light btn-block">Accounts</a>
                    </div>
                </div>
        </div>
    </div>
</body>
</html>
