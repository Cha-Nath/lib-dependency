<?php

namespace nlib\Dependency\Classes;

use nlib\Dependency\Interfaces\CheckerInterface;
use nlib\Dependency\Interfaces\ActiveInterface;

use nlib\Dependency\Classes\Missing;
use nlib\Dependency\Traits\ActiveTrait;
use nlib\Instance\Traits\InstanceTrait;

class Checker implements CheckerInterface, ActiveInterface {

    use ActiveTrait;
    use InstanceTrait;

    public function check() {
        if(!empty($missings = $this->get_missing_plugins())) throw new Missing($missings);
    }

    public function get_missing_plugins() {

        $missings = [];
        
        foreach(Dependency::i($this->_i())->getDependencies() as $name => $path)
            if(!$this->is_plugin_active($path)) $missings[] = $name;
        return $missings;
    }
}