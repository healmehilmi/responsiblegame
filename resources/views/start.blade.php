

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Responsible game</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="css/game.css" rel="stylesheet">
    <link href="css/load.css" rel="stylesheet">



</head>
<body>
        <div class="preloader">
                <img class="loader_logo" src="{{URL::asset('/images/respo_logo.png')}}" alt="logo" >
        </div>


        
        @include('partials.navbar')



   



                            <div class="maping">
                                
                        
                                        <img alt="loc img" class="loc-img"  src="{{URL::asset('/images/placeholder.png')}}">
                                
                            
                            
                                
                                        <img alt="map" class="map-img"  src="{{URL::asset('/images/mapp.png')}}">
                            
                                    
                                </div>
                        
                            
                                <div class="text-level">

                                    <h4>Prof. Respo</h4>
                                    <h3>Dr. Respo</h3>
                                    <h2>Junior Respo</h2>
                                    <h1> <span style="font-size:1rem; color:brown;">Your are hier</span> Beginner Respo</h1>
                                    <p>After 4 levels you'll became a Junior Respo :)</p>

                                    <a href="{{ url('/game') }}" ><img class="play-img" src="{{URL::asset('/images/play.png')}}" alt="play" ></a>


                                </div>
   


   
                                @include('partials.footer')

                                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

                                <script type="text/javascript" src="{{URL::asset('js/loading.js')}}"></script>

      </body>
</html>
