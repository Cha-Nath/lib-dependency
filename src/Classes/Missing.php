<?php

namespace nlib\Dependency\Classes;

use nlib\Dependency\Interfaces\MissingInterface;
use nlib\Dependency\Interfaces\PluginInterface;

use nlib\Dependency\Traits\PluginTrait;

class Missing extends \Exception implements MissingInterface, PluginInterface {

    use PluginTrait;
    
    public function __construct(array $plugins) { $this->setPlugins($plugins); }
}