<?php

/**
 * @Entity @Table(name="Preguntas")
 * */
class Pregunta{
     /** @Id @Column(type="integer") @GeneratedValue * */
    protected $id;
    
     /** @Column(type="string") **/
    protected $pregunta;
    
     /** @ManyToOne(targetEntity="Encuesta", inversedBy="preguntas")**/
    protected $encuesta;
    
    /** @OneToMany(targetEntity="Respuesta", mappedBy="pregunta") **/
    protected $respuestas;
    
    public function Pregunta($preg){
        $this->pregunta=$preg;
        
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getPregunta(){
        return $this->pregunta;
    }
    
    /**
     * @return Encuesta
     */
    public function getEncuesta(){
        return $this->encuesta;
    }
    
        /**
    * @param \Entity\Respusta $Respuesta
    * @return Pregunta
    */
   public function addRespuesta(\Entity\Respuesta $Respuesta) {
       $this->respuestas[] = $Respuesta;
       return $this;
   }

   /**
    * @param \Entity\Respuesta $Respuesta
    */
   public function removeRespuesta(\Entity\Respuesta $Respuesta) {
       $this->respuestas->removeElement($Respuesta);
   }
}
?>