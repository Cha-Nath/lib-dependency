<?php

namespace nlib\Dependency\Traits;

trait PluginTrait {

    private $_plugins;

    #region Getter

    public function getPlugins() { return $this->_plugins; }

    #endregion

    #region Setter
    
    public function setPlugins(array $plugins) { $this->_plugins = $plugins; return $this; }
    
    #endregion
}