<?php

class Controller
{
    public function view($view, $data = [])
    {
        extract($data);

        $content = "../app/views/$view.php";
        require "../app/views/layouts/main.php";
    }
}
