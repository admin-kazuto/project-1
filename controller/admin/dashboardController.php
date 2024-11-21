<?php
class dashboardController
{
    function __construct() {}
    function dashboard()
    {
        require_once 'views/admin/dashboard.php';
    }
    function home()
    {
        require_once 'views/client/home.php';
    }
}
