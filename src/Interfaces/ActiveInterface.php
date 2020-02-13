<?php

namespace nlib\Dependency\Interfaces;

interface ActiveInterface {

    /**
     *
     * @param [type] $plugin
     * @return boolean
     */
    public function is_plugin_active($plugin);

    /**
     *
     * @return string[]
     */
    public function get_active_plugins();
}