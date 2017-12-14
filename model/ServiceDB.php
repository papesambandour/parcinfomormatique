<?php
/**
 * Created by PhpStorm.
 * User: macintosh
 * Date: 02/11/2017
 * Time: 18:34
 */
namespace model\service;
require_once "model/BD.php";

function addService($noms,$ports,$etats,$idserv)
{
    $sql = "INSERT INTO service VALUES(NULL,'$noms',$ports,'$etats',$idserv);";
    return \model\bd\executeSQL($sql) ;
}

function deleteService($ids)
{
    $sql = "DELETE FROM service where ids = $ids ;" ;
    return \model\bd\executeSQL($sql );
}

function updateService($ids,$noms,$ports,$etats,$idserv)
{
    $sql = "UPDATE service SET noms = '$noms', ports = $ports, idserv = $idserv,etats = '$etats' WHERE ids = $ids  ;";
    return \model\bd\executeSQL($sql);
}

function listeService()
{
    $sql = "SELECT * FROM service ;";
    return \model\bd\executeSQL($sql) ;
}

function getService($ids)
{
    $sql = "SELECT * FROM service WHERE ids= $ids;";
    return \model\bd\executeSQL($sql);
}


