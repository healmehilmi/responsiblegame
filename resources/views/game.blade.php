
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Responsible game</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="css/game.css" rel="stylesheet">


</head>
<body>
@include('partials.navbar')

<div class="main">
    
                <div id="sidebar">
         
                                <div id="editor">
                                      <div id="css">
                                          <form id="exam_form" method="POST" action="/check" class="form-horizontal" >
                                           <div class="line-numbers">
                                               1<br>2<br>3<br>4<br>5<br>6<br>7<br>8<br>9<br>10
                                              </div>
                                             <div class="coding-1">
                                               
                                                 <pre><</pre>
                                             <input required pattern="a" type="text" class="check003" id="input001" size="15" style="height: 24px;width: 24px;" />
                                                  <pre>></pre>
                                              
                                              <pre id="before">I am a main Heading 
                                                    </pre>  
                              
                                                    <pre><</pre>
                                                    <pre>/</pre>
                                                    <input required pattern="" type="text" class="check003" id="input001" size="15" style="height: 24px;width: 24px;" />
                                                    <pre>></pre>
                                                    
                                              </div>
                                          
                                              <div class="coding-2">
                                                      <pre><</pre> 
                                                      <input required pattern="" type="text" class="check003" id="input002" size="15" style="height: 24px;width: 24px;" />
                                                       <pre>></pre>
                                                   
                                                   <pre id="before">I am a sub Heading 
                                                         </pre>
                                                         <pre><</pre><pre>/</pre> 
                                                         <input required pattern="" type="text" class="check003" id="input002" size="15" style="height: 24px;width: 24px;" />
                                                         <pre>></pre>
                                                         
                                                   </div>
                                                   <div class="coding-3">
                                                          <pre><</pre> 
                                                          <input required pattern="" type="text" class="check003" id="input003" size="15" style="height: 24px;width: 24px;" />
                                                           <pre>></pre>
                                                       
                                                       <pre id="before">I am a sub sub Heading 
                                                             </pre>
                                       
                                                             <pre><</pre><pre>/</pre>
                                                             <input required pattern="" type="text" class="check003" id="input003" size="15" style="height: 24px;width: 24px;" />
                                                              <pre>></pre>
                                                             
                                                       </div>
                                                       <div id="disappear001"><div id="center001">
                                                         <button type="submit" class="button001" onclick="submit001()">Submit</button>
                                                        </div></div><br />
                                                       <div id="center001"><p id="message001"></p><p id="reload001"></p></div>   
                                          </form>
                                      </div> 
                                  </div>
                              </div>
        <div style="width: 400px; margin-left: 46px;" id="exam">
            <div id="head"> 
                
              </div>
              

              <div id="SpeechBubble">Lets Start {{(Auth::user()->name)}} </div>
              
           

                                <div class="quiz" style="text-align: justify;">
                                    
                                    <div class="dropdown">
                          <button style="background-color:#7a7aa5" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Levels
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{ url('/game') }}">Level 1</a>
                            <a class="dropdown-item" href="{{ url('/game2') }}">Level 2</a>
                            <a class="dropdown-item" href="{{ url('/game3') }}">Level 3</a>
                            <a class="dropdown-item" href="{{ url('/game4') }}">Level 4</a>

                          </div>
                        </div>
                        
                                  <div id="quiztext">
                                    <p id="level-1">
                                      @foreach($levels as $level )
                                    <h3>{{$level->title}}</h3>
                                        {{ $level->text }}
                                        
                                    @endforeach
                                    </p>
                                  </div>
                                </div>
                                </div>
       
       
</div>



  <script type="text/javascript" src="{{URL::asset('js/bodymovin.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/head.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.5.9/lottie.min.js"></script>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
<script type="text/javascript" src="{{URL::asset('js/speak.js')}}"></script>


@include('partials.footer')

      </body>
</html>
