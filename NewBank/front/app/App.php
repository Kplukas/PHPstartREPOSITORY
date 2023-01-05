<?php

namespace Front;

class App {

    public static function start()
    {
        $url = explode('/',$_SERVER['REQUEST_URI']);
        array_shift($url);
        self::router($url);
    }

    private static function router(array $url)
    {
        if ($url[0] == 'Titulinis') {

        }
        if ($url[0] == 'Sarasas') {

        }
        if ($url[0] == 'Saskaita') {

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