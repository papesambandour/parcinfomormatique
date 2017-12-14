<?php
/**
 * Created by PhpStorm.
 * User: macintosh
 * Date: 02/11/2017
 * Time: 18:33
 */
namespace model\serveur;
require_once "model/BD.php";

function addServeur($nomServ,$addrServ)
{
    $sql = "INSERT INTO serveur VALUES(NULL,'$nomServ','$addrServ')";
    return \model\bd\executeSQL($sql) ;
}

function deleteServeur($idserv)
{
    $sql = "DELETE FROM serveur where idserv = $idserv ;" ;
    return \model\bd\executeSQL($sql) ;
}

function updateServeur($idserv,$nomserv,$addserv)
{
    $sql = "UPDATE serveur SET nomserv = '$nomserv', addrserv = '$addserv' WHERE idserv = $idserv ;";
    return \model\bd\executeSQL($sql);
}

function listeServeur()
{
    $sql = "SELECT * FROM serveur ;";
    return \model\bd\executeSQL($sql) ;
}

function getServeur($idserv)
{
    $sql = "SELECT * FROM serveur WHERE idserv = $idserv ;";
    return \model\bd\executeSQL($sql);
}