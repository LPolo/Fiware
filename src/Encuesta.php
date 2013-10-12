<?php

/**
 * @Entity @Table(name="Encuestas")
 * */
class Encuesta{
     /** @Id @Column(type="integer") @GeneratedValue * */
    protected $id;

    /** @Column(type="string") * */
    protected $nombre;
    
    /** @ManyToOne(targetEntity="Usuario", inversedBy="encuestas")**/
    protected $usuario;
    
    /** @OneToMany(targetEntity="Pregunta", mappedBy="encuesta")**/
    protected $preguntas;
    
    public function Encuesta($Nomb){
        $this->nombre=$Nomb;
    }
    
    public function getID(){
        return $this->id;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nomb){
        $this->nombre=$nomb;
    }
      /**
    * @param \Entity\Pregunta $Preguntas
    * @return Encuesta
    */
   public function addPregunta(\Entity\Pregunta $Pregunta) {
       $this->pregutas[] = $Pregunta;
       return $this;
   }

   /**
    * @param \Entity\Pregunta $Encuestas
    */
   public function removePregunta(\Entity\Pregunta $Pregunta) {
       $this->preguntas->removeElement($Pregunta);
   }
   
   /**
    * @return Usuario
    */
   public function getUsuario(){
       return $this->usuario;
   }
   
}
?>