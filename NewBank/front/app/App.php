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
        }
        if ($url[0] == 'saskaitos' && $url[1] == 'create' && count($url) == 2 && $method == 'GET') {
            return (new Saskaitos)->create();
        }
        if ($url[0] == 'saskaitos' && $url[1] == 'save' && count($url) == 2 && $method == 'POST') {
            return (new Saskaitos)->save();
        }

        return '404';
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