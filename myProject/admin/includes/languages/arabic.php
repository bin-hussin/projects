<?php 


//language for web site -- ar or en --
function lang ($phrase){

    //array stable 
    static $lang = array(

        //HERE WHAT WORD NEED TO TRANSLATE
   //this is key  --   this is word wont printer
        'MESSAGE' => 'مرحبا',
        'ADMIN' => 'المدير'
    );

    return $lang [$phrase];

}