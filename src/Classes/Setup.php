<?php

namespace nlib\Dependency\Classes;

use nlib\Dependency\Interfaces\SetupInterface;

use nlib\Dependency\Classes\Missing;
use nlib\Dependency\Classes\Reporter;
use nlib\Instance\Traits\InstanceTrait;

class Setup implements SetupInterface {

    use InstanceTrait;

    private $_class_file;

    public function __construct($class_file) { $this->setClassFile($class_file); }

    public function init($current, array $dependencies) {

        Dependency::i($i = $this->_i())->setCurrent($current)->setDependencies($dependencies);
        
        try { (new Checker)->setInstance($i)->check(); }
        catch (Missing $e) {
            
            (new Reporter($e->getPlugins()))->setInstance($i)->add_admin_notices();
            add_action('admin_init', [$this, 'disable_plugin']);
            return false;
        }

        return true;
    }

    public function disable_plugin() { deactivate_plugins( plugin_basename( $this->getClassFile() ) ); }

    #region Getter

    public function getClassFile() { return $this->_class_file; }

    #endregion

    #region Setter

    public function setClassFile($class_file) { $this->_class_file = $class_file; return $this;}

    #endregion
}