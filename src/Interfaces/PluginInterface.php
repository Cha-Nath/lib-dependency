<?php

namespace nlib\Dependency\Interfaces;

interface PluginInterface {

    /**
     *
     * @return string[]
     */
    public function getPlugins();

    /**
     *
     * @param array $plugins
     * @return self
     */
    public function setPlugins(array $plugins);
}