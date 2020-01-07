<?php
namespace Traits;
trait ToArray
{
    public function toArrays()
    {
        return get_object_vars($this);
    }

    public function toJSON()
    {
        return json_encode($this->toArrays());
    }
}
