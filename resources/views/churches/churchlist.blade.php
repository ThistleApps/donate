<!DOCTYPE html>
<html lang="en">
<head>
    <title>Donations Site - Church List Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Donations</h2>
    <p>This will be the church list.</p>

    @if($churches)
        @foreach($churches as $church)
            <div class="card" style="width:400px">
                <img class="card-img-bottom" src="\storage\users\default.png" style="width:25%;" alt="Church image">
                <div class="card-body">
                    <h4 class="card-title">{{$church->church_name}}</h4>
                    <p class="card-text">{{$church->id}}</p>
                    <p class="card-text">{{$church->user->name}}</p>
                    <a href="{{route('profile',[$church->id])}}" class="btn btn-primary">Church Page</a>

                    <a href="{{route('donate',[$church->id])}}" class="btn btn-primary">Donate Route</a>

                    </form>

                </div>
                <br>
            </div>
            <br>
        @endforeach
    @endif
    </div>

</body>
</html>