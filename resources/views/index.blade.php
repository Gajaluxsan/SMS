<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        background-image: url('https://static.vecteezy.com/system/resources/previews/007/762/665/original/graphics-drawing-landscape-view-nature-mountain-and-light-of-sunset-for-wallpaper-background-illustration-free-vector.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
    }
</style>
<body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-3 "></div>
            <div class="col-sm-6">
                <div class="card-header" style="width:100%;">
                    <form action="login" method="POST">
                        @csrf
                        <nav
                            class="col-sm-10 navbar navbar-expand-lg navbar-white bg-primary width-100% text-center text-white">
                            <div class="card-header">Please Sign In</div>
                        </nav>

                        @if (Session::has('error'))
                            <p class="text-danger">{{ session('error') }}</p>
                        @endif
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-10">
                                    Email Id <br> <input type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        placeholder="Enter your email">
                                    @if ($errors->has('email'))
                                        <div class="text-danger">{{ $errors->first('email') }}</div>
                                    @endif
                                </div>
                                <br>
                                <div class="col-sm-10">
                                    Password <br> <input type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        placeholder="Password">
                                    @if ($errors->has('password'))
                                        <div class="text-danger">{{ $errors->first('password') }}</div>
                                    @endif
                                </div>
                                <br>
                                <div class="col-sm-10"> <br>
                                    <button type="submit" class="btn btn-danger"
                                        style="width:100%; padding:10px; border:round">LogIn</button>
                                </div>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>
