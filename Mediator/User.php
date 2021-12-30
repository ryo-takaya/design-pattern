<?php
require_once dirname(__FILE__). '/ChatRoom.php';

class User {
    private $chatroom;
    private $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $chatroom
     */
    public function setChatroom($chatroom): void
    {
        $this->chatroom = $chatroom;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getChatroom()
    {
        return $this->chatroom;
    }

    public function sendMessage($to, $message){
        $this->chatroom->sendMessage($this->name, $to, $message);
    }

    public function receiveMessage($from, $message){
        echo "{$from}さんからメッセージ : {$message}" ;
    }
}