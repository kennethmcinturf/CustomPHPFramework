<?php

namespace App\Controllers;

use App\Core\App;

class UsersController{

    public function index(){
        $users = App::get('database')->selectAll('user');
        return view('users', compact('users'));
    }

    public function store(){
        App::get('database')->insert("user", [
            'names' => $_POST['name']
        ]);
        
        return redirect('users');
    }
}