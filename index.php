<?php

use app\classes\{DataBids, View, VisualBidsFactory};

spl_autoload_register(function ($class) {
    require_once str_replace('\\', '/', $class . '.php');
});

// Get data
$dataBids = DataBids::getData();

// Building a page template
View::render('index', $dataBids);
