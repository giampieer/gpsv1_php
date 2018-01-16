<?php
session_start();
require_once '../BEAN/GPSBean.php';
require_once '../DAO/GPSDao.php';

$opcion=$_REQUEST['op'];
switch ($opcion){
case 1:{
    $cod=$_REQUEST['txtcod'];
    $lugar=$_REQUEST['txtlugar'];
    $objdao=new GPSDao();
    $objbean=new GPSBean();
    $objbean->setCodgo($cod);
    $objbean->setLugar($lugar);
    $objdao->GrabarLocalizacion($objbean);
    
    break;
}
    
}
