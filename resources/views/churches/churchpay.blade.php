<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd" >
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>
        Church Donation Page
    </title>
    <style type="text/css">
        label {
            display: block;
            margin: 5px 0px;
            color: #AAA;
        }
        input {
            display: block;
        }
        input[type=submit] {
            margin-top: 20px;
        }
    </style>

</head>
<body>


<div class="col-md-4">
    {!! Form::model($churches, ['method'=>'GET', 'action'=>['ChurchController@donate', $churches->id], 'files'=>true])  !!}

    <div class="card card-body">
        <div class="card-body">
            <h1>Please wait for the secure donation page...</h1>
            <h4 class="card-title">{{$churches->church_name}}</h4>
        </div>
    </div>
    <br>
</div>

<iframe action="https://demo.globalgatewaye4.firstdata.com/pay" method="POST" name="iframe_test" id="iframe_test">


</iframe>

<script type='text/javascript'>document.myForm.submit();</script>

</body>
</html>