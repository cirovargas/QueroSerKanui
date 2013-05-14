<?php
namespace QueroSerKanui;

class Numbers implements \Iterator
{
    private $array = array();
    private $position = 0;

    public function __construct()
    {
        $populate = function(){
            $return = array();
            for($i=1;$i<=100;$i++)
                $return[]=$i;
            return $return;
        };

        $this->array = $populate();
    }

    public function getArray()
    {
        return $this->array;
    }

    public function current()
    {
        return current($this->array);
    }

    public function next()
    {
        return next($this->array);
    }

    public function previous()
    {
        return prev($this->array);
    }


    public function rewind() {
        reset($this->array);
    }


    public function key() {
        return key($this->array);
    }

    public function valid() {
        return key($this->array) !== null;
    }
}
