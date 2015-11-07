<?php

class MyDbListener
{
    public function afterConnect()
    {
        echo 'afterConnect' . PHP_EOL;
    }

    public function beforeQuery()
    {
        echo 'beforeQuery' . PHP_EOL;
    }

    public function afterQuery()
    {
        echo 'afterQuery' . PHP_EOL;
    }

}