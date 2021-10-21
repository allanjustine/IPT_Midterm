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
                    <a class="nav-item nav-link" href="{{url('/')}}">Home</a>
                    <a class="nav-item nav-link active">Users  <span class="visually-hidden">(current)</span></a>
                    <a class="nav-item nav-link" href="{{url('/accounts')}}">Accounts</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container" style="margin-top: 20px;">
        <h3>Users</h3>
        <table class="table table-inverse table-hover table-bordered">
            <thead class="bg-primary">
                <tr>
                    <th>User ID</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user):?>
                    <tr>
                        <td><?= $user->id?></td>
                        <td><?= $user->lname?></td>
                        <td><?= $user->fname?></td>
                        <td><?= $user->address?></td>
                    </tr>
                <?php endforeach;?>
            </tbody>

        </table>
    </div>


</body>
</html>
