{{-- @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">CSV Import</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('import_process') }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="csv_data_file_id" value="{{ $csv_data_file->id }}" />

                            <table class="table">
                                @if (isset($csv_header_fields))
                                <tr>
                                    @foreach ($csv_header_fields as $csv_header_field)
                                        <th>{{ $csv_header_field }}</th>
                                    @endforeach
                                </tr>
                                @endif
                                @foreach ($csv_data as $row)
                                    <tr>
                                    @foreach ($row as $key => $value)
                                        <td>{{ $value }}</td>
                                    @endforeach
                                    </tr>
                                @endforeach
                                <tr>
                                    @foreach ($csv_data[0] as $key => $value)
                                        <td>
                                            <select name="fields[{{ $key }}]">
                                                @foreach (config('app.db_fields') as $db_field)
                                                    <option value="{{ (\Request::has('header')) ? $db_field : $loop->index }}"
                                                        @if ($key === $db_field) selected @endif>{{ $db_field }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    @endforeach
                                </tr>
                            </table>

                            <button type="submit" class="btn btn-primary">
                                Import Data
                            </button>
                        </form>
                    </div>
                </div><form class="form-horizontal" method="POST" action="{{ route('import_process') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="csv_data_file_id" value="{{ $csv_data_file->id }}" />

                    <table class="table">
                        @if (isset($csv_header_fields))
                        <tr>
                            @foreach ($csv_header_fields as $csv_header_field)
                                <th>{{ $csv_header_field }}</th>
                            @endforeach
                        </tr>
                        @endif
                        @foreach ($csv_data as $row)
                            <tr>
                            @foreach ($row as $key => $value)
                                <td>{{ $value }}</td>
                            @endforeach
                            </tr>
                        @endforeach
                        <tr>
                            @foreach ($csv_data[0] as $key => $value)
                                <td>
                                    <select name="fields[{{ $key }}]">
                                        @foreach (config('app.db_fields') as $db_field)
                                            <option value="{{ (\Request::has('header')) ? $db_field : $loop->index }}"
                                                @if ($key === $db_field) selected @endif>{{ $db_field }}</option>
                                        @endforeach
                                    </select>
                                </td>
                            @endforeach
                        </tr>
                    </table>

                    <button type="submit" class="btn btn-primary">
                        Import Data
                    </button>
                </form>
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
    <meta name="description" content="Finapp HTML Mobile Template">
    <meta name="keywords" content="bootstrap, mobile template, mobile, html, wallet, banking, finance" />
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="img/favicon.png" sizes="32x32">
    <link rel="shortcut icon" href="img/favicon.png">
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
    <!-- loader -->
    <!-- <div id="loader">
      <h4 style="color: #fff; "> Welcome To Our LeaderBoard</h4> 
        <img src="assets/img/logo-icon.png" alt="icon" class="loading-icon">
    </div> -->
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

        <div class="container">
            <form class="form-horizontal" method="POST" action="{{ route('import_process') }}">
                {{ csrf_field() }}
                <input type="hidden" name="csv_data_file_id" value="{{ $csv_data_file->id }}" />

                <table class="table">
                    @if (isset($csv_header_fields))
                    <tr>
                        @foreach ($csv_header_fields as $csv_header_field)
                            <th>{{ $csv_header_field }}</th>
                        @endforeach
                    </tr>
                    @endif
                    @foreach ($csv_data as $row)
                        <tr>
                        @foreach ($row as $key => $value)
                            <td>{{ $value }}</td>
                        @endforeach
                        </tr>
                    @endforeach
                    <tr>
                        @foreach ($csv_data[0] as $key => $value)
                            <td>
                                <select name="fields[{{ $key }}]">
                                    @foreach (config('app.db_fields') as $db_field)
                                        <option value="{{ (\Request::has('header')) ? $db_field : $loop->index }}"
                                            @if ($key === $db_field) selected @endif>{{ $db_field }}</option>
                                    @endforeach
                                </select>
                            </td>
                        @endforeach
                    </tr>
                </table>

                <button type="submit" class="btn btn-primary">
                    Import Data
                </button>
            </form>
        </div>
     
      
    </div>
    <!-- * App Capsule -->
    <!-- App Bottom Menu -->
    
  
    <script src="js/lib/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap-->
    <script src="js/lib/popper.min.js"></script>
    <script src="js/lib/bootstrap.min.js"></script>
    <!-- Ionicons -->
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    <!-- Owl Carousel -->
    <script src="js/plugins/owl-carousel/owl.carousel.min.js"></script>
   

</body>

</html>