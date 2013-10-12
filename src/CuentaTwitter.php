<?php

/**
 * @Entity @Table(name="CuentaTwitter")
 * */

class CuentaTwitter{
       /** @Id @Column(type="integer") @GeneratedValue * */
    protected $id;
    
     /** @ManyToOne(targetEntity="Usuario", inversedBy="cuentastwitter")**/
    protected $Usuario;
}
?>
