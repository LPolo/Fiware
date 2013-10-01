<?php
/**
 * @Entity @Table(name="tweets")
 * */
class Tweet {

    /** @Id @Column(type="integer") @GeneratedValue * */
    protected $id;

    /** @Column(type="string") * */
    protected $tweet;
    
    protected $tiempo

    public function getId() {
        return $this->id;
    }

    public function getTweet() {
        return $this->tweet;
    }

    public function setTweet($tweet) {
        $this->tweet = $tweet;
    }
    
    

?>
