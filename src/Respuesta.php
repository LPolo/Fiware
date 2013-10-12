<?php

/**
 * @Entity @Table(name="Respuestas")
 * */
class Respuesta{
     /** @Id @Column(type="integer") @GeneratedValue * */
    protected $id;
    
     /** @Column(type="string") * */
    protected $respuesta;
    
     /** @ManyToOne(targetEntity="Pregunta", inversedBy="respuestas")**/
    protected $pregunta;
    
      /**
    * @return Pregunta
    */
   public function getPregunta(){
       return $this->pregunta;
   }
   
    
}
?>
