<?php


namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class AboutController extends BaseController
{
    public function showDetails(){
        return 'About Details Infomation';
    }

    public function showSubject($theSubject){
        return "Details infomation about $theSubject";
    }
}
