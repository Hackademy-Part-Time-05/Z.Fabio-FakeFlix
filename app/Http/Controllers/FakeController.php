<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FakeController extends Controller
{
    public static $fakeFilm = [
        [
            'id' => 1,
            'name' => 'Dahmer',
            'cover'=> '/img/esercizio/dahmer.jpg'
        ],
        [
            'id' => 2,
            'name' => 'Interstellar',
            'cover'=> '/img/esercizio/interstellar.jpg'
        ],
        [
            'id' => 3,
            'name' => 'Lotr',
            'cover'=> '/img/esercizio/lotr.jpg'
        ],
        [
            'id' => 4,
            'name' => 'Matrix',
            'cover'=> '/img/esercizio/matrix.jpg'
        ],
        [
            'id' => 5,
            'name' => 'Padrino',
            'cover'=> '/img/esercizio/padrino.jpg'
        ],
        [
            'id' => 6,
            'name' => 'Pulp',
            'cover'=> '/img/esercizio/pulp.jpg'
        ]
    ];
    public static $fakeTv = [
        [
            'id' => 7,
            'name' => 'breaking-bad',
            'cover'=> '/img/cover/breaking-bad.jpg'
        ],
        [
            'id' => 8,
            'name' => 'don-matteo',
            'cover'=> '/img/cover/don-matteo.jpg'
        ],
        [
            'id' => 9,
            'name' => 'friends',
            'cover'=> '/img/cover/friends.jpg'
        ],
        [
            'id' => 10,
            'name' => 'hof',
            'cover'=> '/img/cover/hof.jpg'
        ],
        [
            'id' => 11,
            'name' => 'the-boys',
            'cover'=> '/img/cover/the-boys.jpg'
        ],
        [
            'id' => 12,
            'name' => 'the-office',
            'cover'=> '/img/cover/the-office.jpg'
        ]
    ];

    public function index() {   
        return view('welcome');
    }


    public function filmsr() {   
        return view('filmsr', [ 'film' => self::$fakeFilm ]);
        
    }
    public function tvseries() {   
        return view('tvseries', [ 'tv' => self::$fakeTv ]);
    }

    public function catalogofm($id){

        
       
        foreach (self::$fakeFilm as $film) {  
            if($film['id'] == $id){
                return view('cataloguest', ['item' => $film]);
            }
        } 
        
        foreach (self::$fakeTv as $tv) {  
            if($tv['id'] == $id){
                return view('cataloguest', ['item' => $tv]);
            }
        } 
        abort(404); 
    }
    

}
