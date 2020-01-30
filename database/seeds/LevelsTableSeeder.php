<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Levels;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Levels::create([

            
            'title' =>'level1',
            'text' => 'Use headings correcly to organize the 
                        structure of content ! Screen reader users can use heading structure to navigate
                        content.By using headings (h1 , h2 , etc.) correctly
                        and strategically ,the the content of your website will be 
                        well-organized and easily <<a1>> interpreted by screen readers.
                        Use h1 for the primary tiutle of the page.Avoid using an 
                        h1 for anything other than the title of the website and the title of individual pages.
                        Use headings to indicate and organize your content structure.
                        Do not skip heading levels(e.g.,go from an h1 to an h3), as screen reader users will wonder a connection_statusis missing.',
            'answer'=>json_encode([
                            'h1', 'h1','h2','h2','h3','h3'
                        ])
                       
    
        ]);
        Levels::create([

            
            'title' =>'level2',
            'text' => ' Declaring a language is important for screen readers and search engines,
                        and is declared with the <strong>lang</strong> attribute. Use the following to show a web page in English:',
            'answer'=>json_encode([
                            'lang'
                        ])
        ]);
    


        Levels::create([

            
            'title' =>'level3',
            'text' => 'The autofocus attribute is a boolean attribute.
                       When present,
                       it specifies that an input 
                       element should automatically get focus when the page loads.',
            'answer'=>json_encode([
                           'autofocus'
                        ])
                       
    
        ]);


        Levels::create([

            
            'title' =>'level4',
            'text' => 'For instance, one useful attribute is the role attribute. When added to an element, this will provide the screen reader
                      with extra context about what that element’s 
                     function is in context of a page. For instance, the following HTML code is easily understood by a human to be a menu.',
            'answer'=>json_encode([
                           'role'
                        ])
                       
    
        ]);



    
















        }
}

