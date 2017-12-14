<?php
/**
 * Created by PhpStorm.
 * User: macintosh
 * Date: 02/11/2017
 * Time: 18:35
 */

namespace controller\serveur;


//use function helper\postInput;
//use function model\serveur\getServeur;

require_once "model/ServeurDB.php";
function addServeur()
{
    return \helper\render('serveur/add');
}
function saveServeur()
{
    //pour nouveau enregistrement
    if (isset($_POST['valider']))
    {

       $ok =  \model\serveur\addServeur($_POST['nom'] ,$_POST['addresse']);
       if ($ok==1)
       {
           $_SESSION['flash']['success'] = "insertion reussit avec succes";
           \helper\redirect('/');
       }
        else
        {
            $_SESSION['flash']['danger'] = "Erreur d'insertion ressayer";
            \helper\redirect("?page=addserveur");
        }
    }
    // Pour edition
    if(isset($_POST['editer']))
    {
        $ok =  \model\serveur\updateServeur((int)$_POST['id'],$_POST['nom'] ,$_POST['addresse']);
        if ($ok==1)
        {
            $_SESSION['flash']['success'] = "Mise a jour reussit avec succes";
            \helper\redirect('?page=listserveur');
        }
        else
        {
            $_SESSION['flash']['danger'] = "Erreur de mise a jour ressayer";
            \helper\redirect('?page=listserveur');
        }
    }

}

function listServeurs()
{
    $listServeur = \model\serveur\listeServeur();
    return \helper\render('serveur/list',compact('listServeur'));
}

function editServeur($id)
{
    $serveur = \model\serveur\getServeur($id);
    $serveur = mysqli_fetch_object($serveur) ;
    return \helper\render('serveur/edit',compact('serveur'));
}
function delServeur($id)
{
    if(\helper\postInput("supripmer") == "Supprimer")
    {
        $res = \model\serveur\deleteServeur($id);
        if($res == 1)
        {
            $_SESSION['flash']['success'] = "Suppression reussit avec succes";
             \helper\redirect('?page=listserveur');
        }
        else
        {
            $_SESSION['flash']['danger'] = "Erreur de suppression ressayer";
            \helper\redirect("?page=listserveur");

        }
    }else
    {
        \helper\redirect('?page=listserveur');
    }

}