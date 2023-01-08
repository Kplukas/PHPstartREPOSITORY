<?php

namespace Front;

use Front\Controllers\Saskaitos;

class App {

    public static function start()
    {
        $url = explode('/', $_SERVER['REQUEST_URI']);
        array_shift($url);
        return self::router($url);
    }

    private static function router(array $url)
    {
        $method = $_SERVER['REQUEST_METHOD'];

        if ($url[0] == 'saskaitos' && count($url) == 1 && $method == 'GET') {
            return (new Saskaitos)->index();
        } elseif ($url[0] == 'saskaitos' && $url[1] == 'create' && count($url) == 2 && $method == 'GET') {
            return (new Saskaitos)->create();
        } elseif ($url[0] == 'saskaitos' && $url[1] == 'save' && count($url) == 2 && $method == 'POST') {
            return (new Saskaitos)->save();
        } elseif ($url[0] == 'saskaitos' && $url[1] == 'edit' && count($url) == 3 && $method == 'GET') {
            return (new Saskaitos)->edit($url[2]);
        } elseif ($url[0] == 'saskaitos' && $url[1] == 'update' && count($url) == 3 && $method == 'POST') {
            return (new Saskaitos)->update($url[2]);
        } elseif ($url[0] == 'saskaitos' && $url[1] == 'delete' && count($url) == 3 && $method == 'POST') {
            return (new Saskaitos)->delete($url[2]);
        } elseif ($url[0] == 'saskaitos' && $url[1] == 'add' && count($url) == 3 && $method == 'GET') {
            return (new Saskaitos)->add($url[2]);
        } else {
            return (new Saskaitos)->titulinis();
        }
    }

    public static function view(string $__name, array $data)
    {
        ob_start();

        extract($data);

        require __DIR__ . '/../view/top.php';

        require __DIR__ . '/../view/'.$__name.'.php';

        require __DIR__ . '/../view/bottom.php';

        $out = ob_get_contents();
        ob_end_clean();

        return $out;
    }

    public static function redirect($url)
    {
        header('Location:'. URL . $url);
        return null;
    }
}