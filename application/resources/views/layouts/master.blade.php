<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-reboot.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Back-office Refund</title>
</head>
<body>
<!--start nav -->
<div class="header">
    <div class="cont">
        <div class="navbar">
            <div class="logo">
                <h1>Back-Office Refunds</h1>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="{{url('/create-refund')}}">create a refund</a></li>
                    <li><a href="{{url('/refund-list')}}" style="border: none;">Refund-list</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- end nav -->

<!-- start GRID -->
@yield('content')
<!-- end GRID -->


<!-- start script -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.js')}}"></script>
<!-- end script -->
</body>
</html>
