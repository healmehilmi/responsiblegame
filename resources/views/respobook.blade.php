

<html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Document</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
            <link href="css/game.css" rel="stylesheet">
        
            <link href="css/load.css" rel="stylesheet">



        </head>
        <body>
                <div class="preloader">
                        <img class="loader_logo" src="{{URL::asset('/images/respo_logo.png')}}" alt="logo" >
                </div>


        @include('partials.navbar')
        

        <div class="container" style="margin-top: 101px;">
                <div class="row">
                <div class="col-12 offset-0 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                <article>
                
                <h1>ResponsibleGame Accessibility Documentation</h1>
                
                
                
                
              <div class="card" style="background-color:#cc4346;">
                <div class="card-body" style="padding: 2rem 6rem;">
                <h2 style="color:#ffe4c4" class="entry-title">Headings Are Important</h2>
                <p class="mt-5">Headings are defined with the h1 to h6 tags:</p>
                <p>Search engines use the headings to index the structure and content of your web pages.

                        Users skim your pages by its headings. It is important to use headings to show the document structure and the relationships between different sections.
                        
                        h1 headings should be used for main headings, followed by h2 headings, then the less important h3, and so on.</p>

                <strong style="color:bisque">Note: Use HTML headings for headings only. Don't use headings to make text BIG or bold.</strong>
                
                </div>
                </div>



                <div class="card" style="background-color:#cc4346;">
                        <div class="card-body" style="padding: 2rem 6rem;">
                        <h2 style="color:#ffe4c4" class="entry-title">Alternative Text</h2>
                        <p>The alt attribute provides an alternate text for an image, if the user for some reason cannot view it (because of slow connection, an error in the src attribute, or if the user uses a screen reader).

                                The value of the alt attribute should describe the image:</p>
        
                        <strong style="color:bisque">Note: If a browser cannot find an image, it will display the value of the alt attribute.</strong>
                        
                        </div>
                        </div>




                        <div class="card" style="background-color:#cc4346;">
                                <div class="card-body" style="padding: 2rem 6rem;">
                                <h2 style="color:#ffe4c4" class="entry-title">Declare the Language</h2>
                                <p>Declaring a language is important for screen readers and search engines, and is declared with the lang attribute. Use the following to show a web page in English:</p>
                
                                <strong style="color:bisque">Note: Use Clear Language.</strong>
                                
                                </div>
                                </div>




                        <div class="card" style="background-color:#cc4346;">
                                <div class="card-body" style="padding: 2rem 6rem;">
                                <h2 style="color:#ffe4c4" class="entry-title">Link Titles</h2>
                                <p>The title attribute specifies extra information about an element. The information is most often shown as a tooltip text when the mouse moves over the element.</p>
                
                                <strong style="color:bisque">Note:Write Good Links</strong>
                                
                                </div>
                                </div>
        
        


















                </article>
                </div>
                </div>
                </div>


        
        @include('partials.footer')
        <script type="text/javascript" src="{{URL::asset('js/loading.js')}}"></script>

              </body>

</html>