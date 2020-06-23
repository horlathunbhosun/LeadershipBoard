{{-- @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">CSV Import</div>

                    <div class="panel-body">
                        Data imported successfully.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HNGi7 LeaderBoard</title>
    <link rel="stylesheet" href="css/style-v=5.css">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
   
        <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="img/logo.jpg" sizes="32x32">
        <link rel="shortcut icon" href="/img/logo.jpg">
    <style type="text/css">
        .first-div{
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
           
        }
.second-div{
    width: 30%;
    height: 10%;
    margin: 20px 0;
    background-color: white;
    color: grey;
    box-shadow: 2px 3px rgba(128, 128, 128, 0.671);
}
.second-div ul{
    list-style: none;
    display: flex;
    justify-content: space-between;
    padding: 0 20px;
}
.third-div{
    width: 40%;
    height: 10%;
    border-radius: 50px;
    background-color: skyblue;
    color: grey;
    box-shadow: 2px 3px rgba(128, 128, 128, 0.671);
}
.third-div ul{
    list-style: none;
    display: flex;
    justify-content: space-between;
    padding: 0 20px;
}

.fourth-div{
    width: 40%;
    height: 10%;
    margin: 10px 0;
    border-radius: 50px;
    background-color: skyblue;
    color: grey;
    box-shadow: 2px 3px rgba(128, 128, 128, 0.671);
}
.fourth-div ul{
    list-style: none;
    display: flex;
    justify-content: space-between;
    padding: 0 20px;
}

.fifth-div{
    margin: 10px 0;
    border-radius: 50px;
    color: grey;
}
.fifth-div ul{
    list-style: none;
    display: flex;
    justify-content: space-between;
    padding: 0 20px;
}

.sixth-div{
    width: 40%;
    height: 10%;
    margin: 10px 0;
    border-radius: 50px;
    background-color: pink;
    color: grey;
    box-shadow: 2px 3px rgba(128, 128, 128, 0.671);
}
.sixth-div ul{
    list-style: none;
    display: flex;
    justify-content: space-between;
    padding: 0 20px;
}
.seventh-div{
    width: 40%;
    height: 10%;
    margin: 10px 0;
    border-radius: 50px;
    background-color: pink;
    color: grey;
    box-shadow: 2px 3px rgba(128, 128, 128, 0.671);
}
.seventh-div ul{
    list-style: none;
    display: flex;
    justify-content: space-between;
    padding: 0 20px;
}
.eight-div{
    width: 40%;
    height: 10%;
    margin: 10px 0;
    border-radius: 50px;
    background-color: pink;
    color: grey;
    box-shadow: 2px 3px rgba(128, 128, 128, 0.671);
}
.eight-div ul{
    list-style: none;
    display: flex;
    justify-content: space-between;
    padding: 0 20px;
}
.ninth-div{
    width: 40%;
    height: 10%;
    margin: 10px 0;
    border-radius: 50px;
    background-color: pink;
    color: grey;
    box-shadow: 2px 3px rgba(128, 128, 128, 0.671);
}
.ninth-div ul{
    list-style: none;
    display: flex;
    justify-content: space-between;
    padding: 0 20px;
}
.tenth-div{
    width: 40%;
    height: 10%;
    margin: 10px 0;
    background-color: pink;
    border-radius: 50px;
    color: grey;
    box-shadow: 2px 3px rgba(128, 128, 128, 0.671);
}
.tenth-div ul{
    list-style: none;
    display: flex;
    justify-content: space-between;
    padding: 0 20px;
}
    </style>
</head>
<body>

    <!-- * loader -->
    <!-- App Header -->
    <div class="appHeader bg-primary text-light">
        <div class="pageTitle">
             <div class="first-div">
                 <h1 style="color: #fff">HNGi7 Leaderboard</h1>
              </div>  
        </div>
       
    </div>

    <div id="appCapsule">
        <br><br>
        <div class="alert alert-success">
            Data Imported Successfully <a href="{{ route('lead')}}">Click here to view </a>
        </div>

    <!-- ///////////// Js Files ////////////////////  -->
    <!-- Jquery -->
    <script src="js/lib/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap-->
    <script src="js/lib/popper.min.js"></script>
    <script src="js/lib/bootstrap.min.js"></script>
    <!-- Ionicons -->
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    <!-- Owl Carousel -->
    <script src="js/plugins/owl-carousel/owl.carousel.min.js"></script>
    <!-- Base Js File -->
  
</body>

</html>
