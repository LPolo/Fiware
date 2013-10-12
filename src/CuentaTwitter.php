<?php

/**
 * @Entity @Table(name="CuentaTwitter")
 * */

class CuentaTwitter{
       /** @Id @Column(type="integer") @GeneratedValue * */
    protected $id;
    
     /** @ManyToOne(targetEntity="Usuario", inversedBy="cuentastwitter")**/
    protected $Usuario;
    
    /** @Column(type="string") **/
    protected $Token;
    
    /** @Column(type="string") **/
    protected $TokenSecret;


    /**
    * @return Usuario
    */
   public function getUsuario(){
       return $this->Usuario;
   }
}
?>
