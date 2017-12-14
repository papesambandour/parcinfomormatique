<?php
require_once "helper/helper.php";
require_once "controller/ServeurController.php";
require_once "controller/ServiceController.php";
require_once "controller/HomeController.php";

if(isset($_GET['page']))
{
    switch ($_GET['page'])
    {
        // DEBUT ROUTE SERVEUR
        case 'addserveur':
            controller\serveur\addServeur();
        break;

        case 'listserveur' :
            controller\serveur\listServeurs();
        break;

        case 'editserveur':
            $id= \helper\postInput("id");
            controller\serveur\editServeur($id);
            break;
        case 'delserveur':
            $id= \helper\postInput("id");
            controller\serveur\delServeur($id);
            break;

        case 'saveseveur':
           controller\serveur\saveServeur();
            break;
        //DEBUT ROUTE SERVICE
        case 'addservice':
            controller\service\addService();
            break;

        case 'listservice' :
            controller\service\listServices();
            break;

        case 'editservice':
            $id = \helper\postInput('id');
            controller\service\editService($id);
            break;
        case 'delservice':
            $id = \helper\postInput('id');
            controller\service\delService($id);
            break;

        case 'savesevice':
            controller\service\saveService();
            break;

        default:
          helper\redirect('/');
            break;
    }
}
else
{
    controller\home\homeController();
   // call_user_func('homeController',array(12,65,87));
}