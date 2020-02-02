<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Responsible game</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:500&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="css/master.css" rel="stylesheet">
        <link href="css/load.css" rel="stylesheet">

        

    </head>
    <body>
            <div class="preloader">
                    <img class="loader_logo" src="{{URL::asset('/images/respo_logo.png')}}" alt="logo" >
            </div>

         
    @include('partials.navbar')


           

            <div class="main" style="height: 767px;" >
               <div class="content">
                
                <div style="position:relative;" class="interactifmenu">
                    <img style="height:400px;" class="navi_logo" src="{{URL::asset('/images/respoo.png')}}"  alt="logo" >

                <a href="{{ route('respobook') }}">   <img style="height: 125px;
                    position: absolute;
                    top: 108px;
                    left: 153px;
                    z-index: 30;" class="navi_logo2" src="{{URL::asset('/images/book.png')}}"  alt="logo2" ></a> 
                  
                  
                 <a href="{{ route('start') }}">  <img style="height: 219px;
                    position: absolute;
                    top: 135px;
                    left: 403px;
                    z-index: 30;" class="navi_logo3" src="{{URL::asset('/images/plazit.png')}}"  alt="logo3" ></a> 




                </div>
                    

  
                    @if (Route::has('login'))
                    <div id="play-button">
                            @auth  
                        <a href="{{ url('/start') }}" onclick="document.getElementById('sound1').play();"><img class="play-img" src="{{URL::asset('/images/play.png')}}" alt="play" ></a>

                       
                        <a href="{{ url('/start') }}"><p class="game">&lt;a href="#"&gt;Go to game&lt;/a&gt;</p></a>
                    
                        @else
                        <a href="{{ url('login') }}" onclick="document.getElementById('sound1').play();"><img class="play-img" src="{{URL::asset('/images/play.png')}}" alt="play" ></a>

                       
                        <a href="{{ url('login') }}"><p class="game">&lt;a href="#"&gt;Go to game&lt;/a&gt;</p></a>
                    

                       
                    @endauth

                        
                    </div>

                    @endif
                </div>
                              <div class="main-text" style="margin-top:5%;">
                                 <h1>&lt;h1&gt; <span class="respo">Respo</span>nsiblegame is an easy way to learn web accessiblity&lt;/h1&gt; </h1>

                                </div>
                </div>

               
            <div class="web-text">
            <h2>&lt;h2&gt; What is web accessiblity ?&lt;/h2&gt; </h2>


              <p class="web-p">&lt;p&gt;  Web accessibility means that websites, tools, and technologies are designed and developed so that people with disabilities can use them. More specifically, people can:

                        - perceive, understand, navigate, and interact with the Web
                        - contribute to the Web
                        Web accessibility encompasses all disabilities that affect access to the Web, including:</p>
                        <ul class="listing-web">&lt;ul&gt;
                        <li>&lt;li&gt;- auditory &lt;/li&gt; </li>
                        <li>&lt;li&gt;- cognitive&lt;/li&gt; </li>
                        <li>&lt;li&gt;- neurological &lt;/li&gt; </li>
                        <li>&lt;li&gt;- physical &lt;/li&gt; </li>
                        <li>&lt;li&gt;- speech &lt;/li&gt; </li>
                        <li>&lt;li&gt;- visual &lt;/li&gt; </li>


                        &lt;/ul&gt; </ul>

                        <p>Web accessibility also benefits people without disabilities, for example:

                        people using mobile phones, smart watches, smart TVs, and other devices with small screens, different input modes, etc.
                        older people with changing abilities due to ageing
                        people with “temporary disabilities” such as a broken arm or lost glasses
                        people with “situational limitations” such as in bright sunlight or in an environment where they cannot listen to audio
                        people using a slow Internet connection, or who have limited or expensive bandwidth &lt;/p&gt; </p>

                                    </div>




                
                <div class="links">

                   <div class="links_box">

                         <h3>&lt;h3&gt; Do you want to learn more about  web accessiblity ?&lt;/h3&gt; </h3>

 <p class="link-p">&lt;p&gt; Helpful Links </p>

<a href="https://www.w3.org/WAI/fundamentals/accessibility-intro/">&lt;a&gt;https://www.w3.org/WAI/fundamentals/accessibility-intro/&lt;/a&gt;</a>
<a href="https://de.wikipedia.org/wiki/Web_Accessibility_Initiative">&lt;a&gt;https://de.wikipedia.org/wiki/Web_Accessibility_Initiative&lt;/a&gt;</a>
<a href="https://developers.google.com/web/fundamentals/accessibility">&lt;a&gt;https://developers.google.com/web/fundamentals/accessibility&lt;/a&gt;</a>




<p> &lt;/p&gt; </p>
</div>


                </div>




@include('partials.footer')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script type="text/javascript" src="{{URL::asset('js/loading.js')}}"></script>

                    <script type="text/javascript" src="{{URL::asset('js/bodymovin.js')}}"></script>
         <script type="text/javascript" src="{{URL::asset('js/script.js')}}"></script>

         <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.5.9/lottie.min.js"></script>
         

    </body>
</html>
