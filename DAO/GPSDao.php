<?php
require_once '../BEAN/GPSBean.php';
require_once '../UTIL/ConexionBD.php';
class GPSDao {
    public function GrabarLocalizacion(GPSBean $obj){
        $i=0;
        try {
            $lugar=$obj->getLugar();
            $sql="insert into localizacion(lugar,coda) values ('$lugar', null)";
            $objc=new ConexionBD();
            $cn=$objc->getconexionBD();
            $i= mysqli_query($cn, $sql);
            mysqli_close($cn);
        } catch (Exception $exc) {
            $i=0;
        }
        return$i;
        }
}
