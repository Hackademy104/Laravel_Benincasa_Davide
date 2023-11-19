<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function welcome() {
        $smartphones = [
            [
                'name' => 'Xiaomi Redmi 12 Pro',
                'price'=> '499,00 €',
                'img' => '/media/Xiaomi.jfif'
            ],
            [
                'name' => 'Iphone 15 Nero',
                'price'=> '899,00 €',
                'img' => '/media/Iphone.jpg' 
            ],
            [
                'name' => 'Samsung galaxy S23 Ultra',
                'price'=> '999,00 €',
                'img' => '/media/Samsung.jpg'
            ],
            [
                'name' => 'Motorola Edge 40 Pro',
                'price'=> '549,00 €',
                'img' => '/media/Motorola.jpg'
            ],
        ];
    
        return view('welcome', ['telefoni' => $smartphones ]);
    }

    public function contatti(){
        return view('contatti');
    }


    public function team(){
        $members = [
            [
            'name' => 'Lara',
            'role'=> 'Social Media Menager',
            'img' => '/media/Menager.png',
            ],
            [
            'name' => 'Francesco',
            'role'=> 'Coordinatore di ufficio',
            'img' => '/media/coordinatore.jpeg',
            ],
            [
            'name' => 'Alessandro',
            'role'=> 'Il nostro amministratore',
            'img' => '/media/admin.jpg',
            ],
            [
            'name' => 'Alessia',
            'role'=> 'Contabile',
            'img' => '/media/contabile.png'
            ],
        ];
        return view('team', ['membri' => $members]);
    }
}