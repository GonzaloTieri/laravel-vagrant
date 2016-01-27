<?php
/**
 * Created by PhpStorm.
 * User: gtieri
 * Date: 25/1/2016
 * Time: 10:16 AM
 */

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function index() {
        return view('home');
    }

}