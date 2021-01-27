<?php
$page = "";
switch ($page){
    case "home":
        echo "Home page";
        break;
    case "about":
        echo "About page";
        break;
    case  "news":
        echo "News page";
        break;
    case "login":
        echo "Login page";
        break;
    case "links":
        echo "Links page";
        break;
    default:
        echo "Page not found";
}
