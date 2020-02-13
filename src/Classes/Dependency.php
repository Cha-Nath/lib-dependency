<?php

namespace nlib\Dependency\Classes;

use nlib\Dependency\Interfaces\DependencyInterface;

class Dependency implements DependencyInterface {
    
    private static $_i = null;

    private $_path = '';
    private $_current = '';
    private $_dependencies = [];

    private function __construct() { $this->setPath(); }

    public static function i() {

        if(empty(self::$_i)) self::$_i = new Dependency();

        return self::$_i;
    }

    #region Getter

    public function getDependencies() { return $this->_dependencies; }
    public function getCurrent() { return $this->_current; }
    public function getPath() { return $this->_path; }

    #endregion

    #region Setter

    public function setDependencies(array $dependencies) { $this->_dependencies = $dependencies; return $this; }
    public function setCurrent($current) { $this->_current = $current; return $this; }
    private function setPath() { $this->_path = dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR; return $this; }

    #endregion
}