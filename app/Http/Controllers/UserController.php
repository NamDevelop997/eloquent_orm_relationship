<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    function add(){
       User::create(
            [
                'name' => 'name 4',
                'email' => 'email 4',
                'password' => 'password 4'
            ]
        ); 
    }

    function show($id){
        $posts =  User::find($id)
        ->post;
        
        // print_r($posts);
       foreach($posts as $post){
            echo $post . "<br> <br>";
       }
    }
}
