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
        

    </head>
    <body onload="myFunction()">
        <div id="loading"></div>
         
    @include('partials.navbar')


           

            <div class="main" >
               <div class="content">
               <div style="" id="bm"> 
            </div>

<audio id="sound1" src="{{URL::asset('/music/music_zapsplat_on_the_job_140.mp3')}} " preload="auto"></audio>
  
                    @if (Route::has('login'))
                    <div id="play-button">
                            @auth  
                        <a href="{{ url('/game') }}" onclick="document.getElementById('sound1').play();"><img class="play-img" src="{{URL::asset('/images/play.png')}}" alt="play" ></a>

                       
                        <a href="{{ url('/game') }}"><p class="game">&lt;a href="#"&gt;Go to game&lt;/a&gt;</p></a>
                    
                        @else
                        <a href="{{ url('login') }}" onclick="document.getElementById('sound1').play();"><img class="play-img" src="{{URL::asset('/images/play.png')}}" alt="play" ></a>

                       
                        <a href="{{ url('login') }}"><p class="game">&lt;a href="#"&gt;Go to game&lt;/a&gt;</p></a>
                    

                       
                    @endauth

                        
                    </div>

                    @endif
                </div>

                 <h1>&lt;h1&gt; <span class="respo">Respo</span>nsiblegame is an easy way to learn web accessiblity&lt;/h1&gt; </h1>

                                  <h2>&lt;h2&gt; What is <a class="web" href="http://">web accessiblity</a>?&lt;/h2&gt; </h2>

                </div>

               
            <div class="web-text">
            <h2>&lt;h2&gt; What is <a class="web" href="http://">web accessiblity</a>?&lt;/h2&gt; </h2>


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

                   

                         <h3>&lt;h3&gt; Do you want to learn more about  web accessiblity ?&lt;/h3&gt; </h3>

 <p class="link-p">&lt;p&gt; Helpful Links </p>

<a href="https://www.w3.org/WAI/fundamentals/accessibility-intro/">&lt;a&gt;https://www.w3.org/WAI/fundamentals/accessibility-intro/&lt;/a&gt;</a>
<a href="https://de.wikipedia.org/wiki/Web_Accessibility_Initiative">&lt;a&gt;https://de.wikipedia.org/wiki/Web_Accessibility_Initiative&lt;/a&gt;</a>
<a href="https://developers.google.com/web/fundamentals/accessibility">&lt;a&gt;https://developers.google.com/web/fundamentals/accessibility&lt;/a&gt;</a>




<p> &lt;/p&gt; </p>



                </div>




@include('partials.footer')
                  

                    <script type="text/javascript" src="{{URL::asset('js/bodymovin.js')}}"></script>
         <script type="text/javascript" src="{{URL::asset('js/script.js')}}"></script>

         <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.5.9/lottie.min.js"></script>
         <script type="text/javascript" src="{{URL::asset('js/loading.js')}}"></script>

    </body>
</html>
