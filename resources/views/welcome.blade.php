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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <br><br>

   <marquee behavior="" direction=""> <h2> Team: @Reehah , @Femithz, @017n, @TomiRachel</h1></marquee>
    <div id="appCapsule">
        <div class="container">
    

            <div class="row">
                @foreach ( $top as $try )
              
                <div class="col-4 mb-2">
                    <div class="bill-box" style="background:#34c3e3b3!important;">
                       
                        <h3>{{ $try->username}}</h3>
                        <h1>{{ $try->score}}</h1>
                        <a href="https://twitter.com/intent/tweet?text=My%20Point%20on%20HNG%20Leader%20board%20is {{$try->score}}"  target="_blank" style="font-size:16px"> Share <i class="fa fa-twitter"></i></a>

                    </div>
                   
                </div>
               

                @endforeach
            </div>
        </div>
    </div>
        
        <div class="section mt-2">
            <div class="section-title">List of Members</div>
            
            <div class="card">
                <div class="table-responsive">


                 
                    <table class="table rounded">
                        <thead>
                            <tr>
                                <th scope="col">Username</th>
                                <th scope="col">Point</th>
                                <th scope="col">Share</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            
                            @foreach ( $search as $hey )
                                
                            <tr>
                                <td> {{ $hey->username}}</td>
                                <td> {{ $hey->score}}</td>
                                <td><a href="https://twitter.com/intent/tweet?text=My%20Point%20on%20HNG%20Leader%20board%20is {{$hey->score}}"  target="_blank"> Share <i class="fa fa-twitter"></i></a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- * App Capsule -->
    <!-- App Bottom Menu -->
    <div class="appBottomMenu">
        <a href="{{ route('import')}}" class="item ">
            <div class="col">
                <ion-icon
                 name="pie-chart-outline"></ion-icon>
                <strong>Import</strong>
            </div>
        </a>
        
         <a href="{{ route('lead')}}" class="item active">
            <div class="col">
                <ion-icon name="people-outline"></ion-icon>
                <strong>Members</strong>
            </div>
        </a>
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
