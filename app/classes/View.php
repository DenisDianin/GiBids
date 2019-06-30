<?php

namespace app\classes;

class View
{
    public static function render(string $nameTemplate, string $dataBids)
    {
        require_once __DIR__ . '/../../templates/' . $nameTemplate . '.phtml';
        return $dataBids;
    }
}
