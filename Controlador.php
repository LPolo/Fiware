<?php

require_once "bootstrap.php";

class Controlador{
    protected $entityManager;
    
    public function Controlador($entity) {
        $this->entityManager=$entity;
    }
    
    public function CrearUsuario($Nombre,$Email,$Contraseña){
        $Creado=false;
        $Comprobacion = $this->entityManager->find('Usuario', $Email);
        if($Comprobacion!=NULL){
            $Creado = true;
            $Usuario = new Usuario($Nombre,$Email,$Contraseña);
            $this->entityManager->persist($Usuario);
            $this->entityManager->flush();
        }
        return $Creado;
    }
    
    public function Loguearse($email,$Contraseña){
        $Usuario = $this->entityManager->find('Usuario', $email);
        $id=null;
        if($Usuario!=null){
            if($Usuario->getContraseña()== md5($Contraseña)){
                $id=$Usuario->getID();
            }
        }
        return $id;
    }
    
    public function EditarUsuario($Id,$Campo,$Valor){
        $Usuario = $this->entityManager->find("Usuario",$Id);
        if($Campo=="nombre"){
            $Usuario->setNombre($Valor);
        }else if($Campo=="email"){
            $Usuario->setEmail($Valor);
        }else if($Campo=="contraseña"){
            $Usuario->setContraseña($Valor);
        }
    }
    
    public function EliminarContratante(){
        
    }
    
    public function DarDeAltaCuentaTwitter(){
        
    }
    
    public function DarDeBajaCuentaTwitter(){
        
    }
    
    public function CrearEncuestaCerrada(){
        
    }
    
    public function CrearEncuestaAbierta(){
        
    }
    
}
?>