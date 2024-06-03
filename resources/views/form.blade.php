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
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h1 class="text-center">{{$title}}</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{$url}}"  method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="fname" class="form-control" value="{{ isset($person->fname) ? $person->fname : '' }}">
    <span class="text-danger">
        @error('fname')
            {{ $message }}
        @enderror
    </span>
</div>
<div class="form-group">
    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lname" class="form-control" value="{{ isset($person->lname) ? $person->lname : '' }}">
    <span class="text-danger">
        @error('lname')
            {{ $message }}
        @enderror
    </span>
</div>
<div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" id="phone" name="phone" class="form-control" value="{{ isset($person->phone) ? $person->phone : '' }}">
    <span class="text-danger">
        @error('phone')
            {{ $message }}
        @enderror
    </span>
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="email" id="email" name="email" class="form-control" value="{{ isset($person->email) ? $person->email : '' }}">
    <span class="text-danger">
        @error('email')
            {{ $message }}
        @enderror
    </span>
</div>
<div class="form-group">
    <label for="photo">Photo</label>
    <input type="file" id="photo" name="photo" class="form-control"> 
    <span class="text-danger">
        @error('photo')
            {{ $message }}
        @enderror
    </span>
</div>
<button type="submit" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
 <script src="https://kit.fontawesome.com/yourcode.js"></script>
</body>
</html>