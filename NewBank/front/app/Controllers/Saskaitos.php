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
    public function create()
    {
        $pageTitle = 'Nauja sąskaita';
        return App::view('saskaitos-create', compact('pageTitle'));
    }
    public function save()
    {
        (new FR('saskaitos'))->create($_POST);
        return App::redirect('saskaitos');
    }
    public function edit($id)
    {
        $pageTitle = 'Sąskaitos redagavimas';
        $saskaita = (new FR('saskaitos'))->show($id);
        return App::view('saskaitos-edit', compact('pageTitle', 'saskaita'));
    }
    public function update($id)
    {
        (new FR('saskaitos'))->update($id, $_POST);
        return App::redirect('saskaitos');
    }
    public function delete($id)
    {
        (new FR('saskaitos'))->delete($id);
        return App::redirect('saskaitos');
    }
}