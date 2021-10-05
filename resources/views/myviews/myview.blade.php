<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Retrive Data</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>

    <div class="jumbotron">
        <div class="container pt-5">
            <h class="display-6 head-title">ສະແດງຂໍ້ມູຕົວຢ່າງ</h>
        <div>
    </div>

    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr class="bg-primary text-white">
                    <th>ID</th>
                    <th>UserID</th>
                    <th>Email Address</th>
                    <th>Level</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data As $dt)
                <tr>
                    <td>{{$dt -> id}}</td>
                    <td>{{$dt -> userid}}</td>
                    <td>{{$dt -> email}}</td>
                    <td>{{$dt -> level}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{$data -> links('pagination::bootstrap-4') }}
    </div>

<script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
