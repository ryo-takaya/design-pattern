<?php
require_once dirname(__FILE__). '/User.php';

class ChatRoom{
    private $users = [];
    public function login(User $user){
        $user->setChatroom($this);
        if(!array_key_exists($user->getName(), $this->users)){
            $this->users[] = $user->getName();
            echo "{$user->getName()}さんが入室しました";
        }
    }

    public function sendMessage($from, $to, $message){
        if(array_key_exists($to, $this->users)){
            $this->users[$to]->receiveMessage($from, $message);
        } else {
            echo "{$to}さんは入室していません";
        }
    }
}