
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="css/master.css" rel="stylesheet">


</head>
<body>
@include('partials.navbar')

<div style="text-align: center;">

        <img  style="height:400px;"src="{{URL::asset('/images/404.jpg')}}" alt="">
       
           <a href="/"><h2>Go home!</h2></a>
        
        </div>
     
           @include('partials.footer')

     
</body>
