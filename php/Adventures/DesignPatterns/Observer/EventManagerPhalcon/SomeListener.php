<?php

class SomeListener
{
    public function beforeSomeTask($event, $myComponent)
    {
        echo "Here, beforeSomeTask\n";
    }

    public function afterSomeTask($event, $myComponent)
    {
        echo "Here, afterSomeTask\n";
    }
}
