<?php

namespace Front;

use Front\Controllers\Saskaitos;

class App {

    public static function start()
    {
        $url = explode('/',$_SERVER['REQUEST_URI']);
        array_shift($url);
        self::router($url);
    }

    private static function router(array $url)
    {
        $method = $_SERVER['REQUEST_METHOD'];

        if ($url[0] == 'saskaitos' && count($url) == 1 && $method == 'GET') {
            return (new Saskaitos)->index();
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
}