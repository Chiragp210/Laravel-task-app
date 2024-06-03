<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('layout.header')
    <a href="/register" class="btn btn-success" style="margin-top: 40px; margin-left: 80%;">+Add Person</a><br><br><br>
    <div class="table-responsive m-3" style="width: 95%;">
        <table class="table " >
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone No</th>
                    <th>Email</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($persons as $person)
                    <tr>
                        <td >{{$person->fname}}</td>
                        <td >{{$person->lname}}</td>
                        <td >{{$person->phone}}</td>
                        <td >{{$person->email}}</td>
                        <td ><img src="{{url('/uploads/' . $person->photo)}}" style="width: 100px; height: 75px;"/></td>
                        <td >
                            <a href="{{url('/edit/')}}/{{$person->id}}" class="btn btn-primary">Edit</a>
                            <a href="{{url('/delete/')}}/{{$person->id}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
</body>
</html>