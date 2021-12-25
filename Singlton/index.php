<?php

class SingletonSample{
    private $id;
    private static $instance;

    private function __constructor(){
        $this->id = md5(mt_rand());
    }

    public static function getInstance(){
        if(!isset(self::$instance)){
            self::$instance = new SingletonSample();
            echo 'first time';
        }

        return self::$instance;
    }

    public function getId(){
        return $this->id;
    }

    public function __clone(){
        $class = SingletonSample::class;
        throw new RuntimeException("clone is prohibition {$class}");
    }
}

$ins1 = SingletonSample::getInstance();
$ins2 = SingletonSample::getInstance();

echo $ins1 === $ins2?'true':'false';
echo $ins1->getId() === $ins2->getId()?'true':'farse';