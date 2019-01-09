<?php
namespace App\Helpers;
use App\Noticia;
class AppHelper
{
      public function getLastsPubs($number)
      {
        return Noticia::orderBy('id', 'desc')->take($number)->get();
      }

     public static function instance()
     {
         return new AppHelper();
     }
}