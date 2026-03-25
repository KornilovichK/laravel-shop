<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showindex(){
        return view('home');
    }
        public $array = [
            ['id' => 1, 'title' => 'продукт 1', 'price' => 500, 'path' => '../img/rico.jpg'],
            ['id' => 2, 'title' => 'продукт 2', 'price' => 1500, 'path' => '../img/all.jpg'],
            ['id' => 3, 'title' => 'продукт 3', 'price' => 800, 'path' => '../img/prap.jpg'],
            ['id' => 4, 'title' => 'продукт 4', 'price' => 2000, 'path' => '../img/shkip.jpg'],
            ['id' => 5, 'title' => 'продукт 5', 'price' => 1200, 'path' => '../img/koval.webp'],
            ['id' => 6, 'title' => 'продукт 6', 'price' => 500, 'path' => '../img/rico.jpg'],
            ['id' => 7, 'title' => 'продукт 7', 'price' => 1500, 'path' => '../img/all.jpg'],
            ['id' => 8, 'title' => 'продукт 8', 'price' => 800, 'path' => '../img/prap.jpg']
        ];
        public function showArray()
        {
        return view('array', ['array' => $this->array]);
    }

        public function shuffleArray()
   {
       $newArray = $this->array;
       shuffle($newArray);
       return view('array', ['array' => $newArray]);
   }
   public function sortArray()
   {
       $newArray = $this->array;
       usort($newArray, function($a, $b) {
           return $a['price'] <=> $b['price'];
       });
       return view('array', ['array' => $newArray]);
   }
   public function filterArray()
   {
       $newArray = $this->array;
       $newArray = array_filter($newArray, function($item) {
           return $item['price'] > 1000;
       });
       $newArray = array_values($newArray); 
       return view('array', ['array' => $newArray]);
   }
}