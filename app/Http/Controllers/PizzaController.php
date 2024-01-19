<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index() {
        $pizzas = [
            ['type' => 'lorem', 'base' => 'lorem'],
            ['type' => 'lorem', 'base' => 'lorem'],
            ['type' => 'lorem', 'base' => 'lorem'],
            ['type' => 'lorem', 'base' => 'lorem'],
            ['type' => 'lorem', 'base' => 'lorem'],
        ];

        return view('pizzas', ['pizzas' => $pizzas]);
    }

    public function show($id) {
        return view("details", ["id" => $id]);
    }
}
