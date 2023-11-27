<?php

namespace App\Controllers;

use App\Models\Contact;

class HomeController extends Controller
{

    public function index()
    {   
        $contactModel = new Contact();
         
        //return $contactModel->find(3);
        //return $contactModel->where("name", "Iris Godoy' OR 'a' = 'a")->get();

        //return $contactModel->delete(5);
        return $contactModel->update(4,[
            "name"  => "Carlos Vega",
            "email" => "juanfernandez@gmail.com",
            "phone" => "45677878",
        ]);
        
        return $contactModel->create([
            "name"  => "Ricardo Darin",
            "email" => "ricardo@gmail.com",
            "phone" => "345678964",
        ]);

        return $this->view('home',[
            'title' => 'Home',
            'description' => 'Esta es la página Home',
        ]);
    }

 
}
