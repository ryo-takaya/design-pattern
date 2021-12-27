<?php


/**
 * Recieverクラスに相当　
 */
class File{
    private $name;

    public function __construct($name){
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    public function decompres(){
        return $this->name. 'を展開しました';
    }

    public function compress(){
        return $this->name. "を圧縮しました";
    }

    public function create(){
        echo $this->name. 'の名前でファイルを作成しました';
    }
}