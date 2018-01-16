<?php


class ConexionBD {
    const SERVER="localhost";
    const USER="root";
    const PASS="";
    const DATABASE="gps";
    private  $cn=null;
    
    public function getconexionBD() {
        try {
            $this->cn= mysqli_connect(self::SERVER,self::USER, self::PASS, self::DATABASE);
        } catch (Exception $exc) {
          
        }
        return $this->cn;
        }
}
?>