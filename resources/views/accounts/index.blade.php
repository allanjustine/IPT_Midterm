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
                    <a class="nav-item nav-link" href="{{url('/users')}}">Users</a>
                    <a class="nav-item nav-link active">Accounts  <span class="visually-hidden">(current)</span></a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container" style="margin-top: 20px;">
        <h3>Accounts</h3>
        <table class="table table-inverse table-hover table-striped table-bordered">
        <thead class="bg-primary">
            <tr>
                <th>Account #</th>
                <th>Account Name</th>
                <th>Initial Investment</th>
                <th>Date Started</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($accounts as $acct):?>
                <tr>
                    <td><?= $acct->id?></td>
                    <td><?= $acct->acct_name?></td>
                    <td><?= $acct->init_invest?></td>
                    <td><?= $acct->start_date?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        </table>
    </div>
</body>
</html>
