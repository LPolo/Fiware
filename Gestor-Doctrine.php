<?php

require_once 'bootstrap.php';

class Gestor{
    
    public function introducirTweet($tweet){
        $entityManager->persist($tweet);
        $entityManager->flush();
    } 
    
    public function buscarTweet($prop){
        $tweet = $entityManager->find('Tweet',$prop);
        return $tweet;
    }
    
    public function borrarTweet($prop){
        $tweet = $entityManager->find('Tweet',$prop);
        if ($tweet === null) {
            echo "No product found.\n";
            exit(1);
    }
        $entityManager->remove($tweet);
        $entityManager->flush();
    }
    
    public function modificarTweet(){
        
    }
    
}

?>
