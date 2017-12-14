<?php
/**
 * Created by PhpStorm.
 * User: macintosh
 * Date: 02/11/2017
 * Time: 18:34
 */

namespace controller\service;
require_once "model/ServiceDB.php";
require_once "model/ServiceDB.php";


function addService()
{
    $serveur = \model\serveur\listeServeur();
    return \helper\render('service/add',compact('serveur'));
}
function saveService()
{
    if(isset($_POST['valider'])) {
        $ok = \model\service\addService($_POST['nom'], (int)$_POST['port'], $_POST['etat'], $_POST['idserv']);
        if ($ok == 1) {
            $_SESSION['flash']['success'] = "Ajout Reussit Avec succes";
            \helper\redirect('/');
        } else {
            $_SESSION['flash']['danger'] = "Erreur d'Ajout ressayer";
            \helper\redirect("?page=addservice");

        }
    }

    if(isset($_POST['editer']))
    {
        $ok =  \model\service\updateService((int)$_POST['id'],$_POST['nom'] ,(int)$_POST['port'],$_POST['etat'],(int)$_POST['idserv']);
        if ($ok==1)
        {
            $_SESSION['flash']['success'] = "Mise a jour reussit avec succes";
           \helper\redirect('?page=listservice');
        }
        else
        {
            $_SESSION['flash']['danger'] = "Erreur de mise a jour ressayer";
            \helper\redirect('?page=listservice');
        }
    }
}

function listServices()
{
    $listService = \model\service\listeService();
    \helper\render('service/list',compact('listService'));
}

function editService($id)
{
    $service = \model\service\getService($id);
    $service = mysqli_fetch_object($service);

    $listServeur = \model\serveur\listeServeur();
    \helper\render('service/edit',compact('service','listServeur'));
}
function delService($id)
{
    if(\helper\postInput("supripmer") == "Supprimer")
    {
        $res = \model\service\deleteService($id);
        if($res == 1)
        {
            $_SESSION['flash']['success'] = "Suppression reussit avec succes sercice";
            \helper\redirect('?page=listservice');
        }
        else
        {
            $_SESSION['flash']['danger'] = "Erreur de suppression ressayer";
            \helper\redirect("?page=listservice");

        }
    }else
    {
        \helper\redirect('?page=listservice');
    }

}