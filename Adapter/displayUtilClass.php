<?php

class displayUtilClass{

    private $filePath;


    /**
     * @param string $filePath
     * @throws Exception
     */
    public function __construct(string $filePath)
    {
        if (!is_readable($filePath)) {
            throw new Exception('ファイルが読み取れません');
        }

        $this->filePath = $filePath;
    }

    public function normalDisplayContent()
    {
        echo file_get_contents($this->filePath);
    }

    public function highlightDisplayContent()
    {
        echo highlight_file($this->filePath);
    }
}