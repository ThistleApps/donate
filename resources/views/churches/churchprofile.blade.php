<!DOCTYPE html>
<html lang="en">
<head>
    <title>Donations Site - Church Profile Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
{{--    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 200px;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 200px;
            margin: 0;
            padding: 0;
        }
    </style>--}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">

    @if (Route::has('login'))
        <div class="navbar-brand">
            @auth
                <a href="{{ url('/home') }}">Home</a>

            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif
</nav>
    <div>
        <body>

        <div class="row">
            <div class="col-md-12">

                <div class="col-md-12">
                    <h2>Donations</h2>
                    <p>This will be the church profile page.</p>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            {!! Form::model($churches, ['method'=>'GET', 'action'=>['ChurchController@show', $churches->id], 'files'=>true])  !!}

                                <div class="card card-body">
                                <img class="card-img-bottom" src="\storage\users\default.png" style="width:25%;" alt="Church image">
                                        <div class="card-body">
                                            <h4 class="card-title">{{$churches->church_name}}</h4>
                                            <p class="card-text">{{$churches->id}}</p>
                                            <p class="card-text">{{$churches->user->name}}</p>
                                        </div>
                                </div>
                            <br>
                        </div>
                        <div class="col-md-4">
        {{--                    <p>
                                <a class="btn btn-outline-secondary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Donate Now
                                </a>

                            </p>--}}

                                <div class="card card-body">
                                    <form action="{{route('donate',[$churches->id])}}" method="post">
                                    <input class="form-control" type="text" placeholder="Name">
                                    <input class="form-control" type="text" placeholder="Address 1">
                                    <input class="form-control" type="text" placeholder="Address 2">
                                    <input class="form-control" type="text" placeholder="Address 3">
                                    <input class="form-control" type="text" placeholder="City">
                                    <input class="form-control" type="text" placeholder="State">
                                    <input class="form-control" type="text" placeholder="Zip">
                                        Payment Amount $<input name="x_amount" value="" type="text">
                                        <br>
                                        <a href="{{route('donate',[$churches->id])}}" class="btn btn-primary">Donate Route</a>
                                        <input type="submit" value="Donate Now">
                                    </form>


                                </div>


                        </div>
                        <div class="col-md-4">
                            <div id="map" class="z-depth-1" style="height: 300px"></div>


                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <strong>Services</strong>
                            <div class="row">
                                <div class="col-md-3 col-xs-4">
                                    Sunday
                                </div>
                                <div class="col-md-9 col-xs-8">
                                    <div class="row">
                                        <div class="col-md-12">
                                            11:00 AM -
                                            11:00 PM
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-xs-4">
                                    Monday
                                </div>
                                <div class="col-md-9 col-xs-8">
                                    <div class="row">
                                        <div class="col-md-12">
                                            11:00 AM -
                                            11:00 PM
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-xs-4">
                                    Tuesday
                                </div>
                                <div class="col-md-9 col-xs-8">
                                    <div class="row">
                                        <div class="col-md-12">
                                            11:00 AM -
                                            11:00 PM
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-xs-4">
                                    Wednesday
                                </div>
                                <div class="col-md-9 col-xs-8">
                                    <div class="row">
                                        <div class="col-md-12">
                                            11:00 AM -
                                            11:00 PM
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-xs-4">
                                    Thursday
                                </div>
                                <div class="col-md-9 col-xs-8">
                                    <div class="row">
                                        <div class="col-md-12">
                                            11:00 AM -
                                            11:00 PM
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-xs-4">
                                    Friday
                                </div>
                                <div class="col-md-9 col-xs-8">
                                    <div class="row">
                                        <div class="col-md-12">
                                            11:00 AM -
                                            12:00 AM
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-xs-4">
                                    Saturday
                                </div>
                                <div class="col-md-9 col-xs-8">
                                    <div class="row">
                                        <div class="col-md-12">
                                            11:00 AM -
                                            12:00 AM
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <strong>Info Block 1</strong>
                            <p>Info Here</p>

                            <strong>Info Block 2</strong>
                            <p>Info Here</p>

                        </div>
                        <div class="col-md-4">
                            <strong>Info Block 3</strong>
                            <p>Info Here</p>

                            <strong>Info Block 4</strong>
                            <p>Info Here</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </body>
    </div>

    <div class="footer snfooter">
        <div class="text-center">
            Ⓒ 2018 Donations, Inc. |
            <a href="/privacy">Privacy</a> |
            <a href="/tos">Terms of Service</a> |
            <a href="/contact">Contact Us</a> |
            <a href="https://donate-to-church.com">Churchs Go Here</a>
        </div>
    </div>

</div>
<script>
    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 38.3244572, lng: -75.5652787},
            zoom: 17
        });
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCHFWeDOJ1SEjOn17DuXQTOUO3RvJzC3Hs&callback=initMap" async defer>

</script>


</body>
</html>