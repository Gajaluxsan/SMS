@extends('welcome')
@section('body')
<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div>
        <h1 class="text-success">
            GeeksforGeeks
        </h1>
        <h2>Card Images</h2>
        <div class="card" style="width:18rem;">

            <div class="card-body">
                <h5 class="card-title">
                    Angular JS
                </h5>
                <p class="card-text">
                    AngularJS is a Javascript open-source
                    front-end framework that is
                    mainly used to develop single-page
                    web applications(SPAs).
                </p>
                <p class="card-text">
                    <small class="text-muted">
                        GeeksforGeeks
                    </small>
                </p>
            </div>
            <img src="https://media.geeksforgeeks.org/wp-content/cdn-uploads/20210322182256/AngularJS-Tutorial.png"
                class="card-img-bottom">
        </div>
    </div>
</body>

</html>
@endsection