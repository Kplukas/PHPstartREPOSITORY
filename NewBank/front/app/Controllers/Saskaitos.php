<?php
namespace Front\Controllers;
use Front\App;
use Front\DB\FileReader as FR;

class Saskaitos {

    public function index()
    {
        $saskaitos = (new FR('saskaitos'))->showAll();
        $pageTitle = 'Sąskaitų sąrašas';
        return App::view('saskaitos-list', compact('saskaitos', 'pageTitle'));
    }
}