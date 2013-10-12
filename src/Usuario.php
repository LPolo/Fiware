<?php

/**
 * @Entity @Table(name="Usuarios")
 * */
class Usuario{
     /** @Id @Column(type="integer") @GeneratedValue * */
    protected $id;

    /** @Column(type="string") * */
    protected $nombre;
    
    /** @Column(type="string") **/
    protected $email;
    
    /** @Column(type="string") **/
    protected $contraseña;
    
    /** @OneToMany(targetEntity="Encuesta", mappedBy="usuario")**/
    protected $encuestas;
    
    public function Usuario($Nomb,$Ema,$Contr){
        $this->nombre=$Nomb;
        $this->emaill=$Ema;
        $this->contrasea = md5($Contr);  
        
    }
    
    public function getID(){
        return $this->id;
    }
    
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($ema){
        $this->email=$ema;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nomb){
        $this->nombre=$nomb;
    }
    public function getContraseña(){
        return $this->contraseña;
    }
    public function setContraseña($contr){
        $this->contraseña= md5($contr);
    }
    
     /**
    * @param \Entity\Encuesta $Encuestas
    * @return Usuario
    */
   public function addEncuesta(\Entity\Encuesta $Encuestas) {
       $this->encuestas[] = $Encuestas;
       return $this;
   }

   /**
    * @param \Entity\Encuesta $Encuestas
    */
   public function removeEncuesta(\Entity\Encuesta $Encuestas) {
       $this->encuestas->removeElement($Encuestas);
   }
}
?>

