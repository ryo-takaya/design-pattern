<?php
require_once dirname(__FILE__). '/abstractClass.php';

class ListDisplay extends AbstractDisplay{
    protected function displayHeader()
    {
        echo '<dl>';
    }

    protected function displayBody()
    {
        foreach ($this->getData() as $key => $value){
            echo "<dt>Item {$key} <?dt>";
            echo "<dd> {$value} </dd>";
        }
    }

    protected function displayFooter()
    {
        echo '</dl>';
    }
}


class TableDisplay extends AbstractDisplay{

    protected function displayHeader()
    {
        echo '<table border="1" cellpadding="2" cellspacing="2">';
    }

    protected function displayBody()
    {
        foreach ($this->getData() as $key => $value){
            echo "<tr>";
            echo "<th> {$key} </th>";
            echo "<td> {$value} </td>";
            echo "</tr>";
        }
    }



    protected function displayFooter()
    {
        echo "</table>";
    }
}