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
            'text' => 'The attribute provides an alternate text for an image, if the user for some reason cannot view it (because of slow connection, an error in the src attribute, or if the user uses a screen reader).

                     The value of the attribute should describe the image:',
            'answer'=>'alt'
                       
    
        ]);
        Levels::create([

            
            'title' =>'level2',
            'text' => ' Declaring a language is important for screen readers and search engines,
                        and is declared with the <strong>lang</strong> attribute. Use the following to show a web page in English:',
            'answer'=>'lang'
        ]);
    


        Levels::create([

            
            'title' =>'level3',
            'text' => 'The autofocus attribute is a boolean attribute.
                       When present,
                       it specifies that an input 
                       element should automatically get focus when the page loads.',
            'answer'=>'autofocus'
                           
                        
                       
    
        ]);


        Levels::create([

            
            'title' =>'level4',
            'text' => 'For instance, one useful attribute is the role attribute. When added to an element, this will provide the screen reader
                      with extra context about what that element’s 
                     function is in context of a page. For instance, the following HTML code is easily understood by a human to be a menu.',
            'answer'=>'role'
                       
    
        ]);



    
















        }
}

