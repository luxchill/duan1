<?php
session_start();
ob_start();
// Require filde core
require_once "./core/env.php";
require_once "./core/helper.php";
require_once "./core/connect.php";
// Require controllers
require_once CONTROLLER . 'HomeController.php';
require_once CONTROLLER . 'ShopController.php';
require_once CONTROLLER . 'CartController.php';
require_once CONTROLLER . 'AuthController.php';
require_once CONTROLLER . 'ProfileController.php';

$act = $_GET['act'] ?? '/';
$page = $_GET['page'] ?? 1;

match ($act) {
    '/' => homeIndex(),
    'shop' => shopIndex(),
    'product-detail' => detailProduct(),
    'cart' => cartIndex(),
    'checkout' => checkoutIndex(),
    'confirm' => confirmIndex(),

    // profile
    'check-your-order' => checkOrderIndex(),
    'my-order' => myOrderIndex(),
    'my-profile' => profileIndex(),

    // 


    // auth route
    'login' => loginIndex(),
    'register' => registerIndex(),
    'logout' => logout(),
    'forgotPassword' => forgotPassword(),
    default => require_once VIEW . 'layouts/404.php'
};




require_once "./Core/disconnect.php";
