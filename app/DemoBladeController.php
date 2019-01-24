<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class DemoBladeController extends Controller {

    public function index() {

        return view("blade_sample.index");
    }

    public function detail() {

        return view("blade_sample.detail");
    }

    public function conditional() {

        $nilai = 90;
        return view("blade_sample.if", ['nilai' => $nilai]);
    }

    public function looping() {

        $siswa = [
            "Jajang",
            "Sukmana",
            "Debby",
            "Ratu",
            "Clara",
            "Juminah",
            "Inem",
            "Supono"
        ];
        return view("blade_sample.loop", ['siswa' => $siswa]);
    }
}