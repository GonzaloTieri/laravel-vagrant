<?php

namespace App\Http\Controllers;

use App\Model\TypeFee;
use App\User;

class HomeController extends Controller
{
    public function index() {
        $type_of_fee = new TypeFee();
        //$type_of_fee->setDescription('diario');
//        $type_of_fee->description = 'diario';
//        $type_of_fee->save();

        $users = User::all();
        foreach($users as $u) {
            echo $u->name;
        }
        exit;


        $typeOfFee = TypeFee::all();
        foreach($typeOfFee as $tf) {
            echo $tf->description;
        }
        exit;



        return view('home');
    }

}