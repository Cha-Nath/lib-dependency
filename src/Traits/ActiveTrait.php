<?php

namespace nlib\Dependency\Traits;

trait ActiveTrait {

    public function is_plugin_active($plugin) {
        return in_array($plugin, $this->get_active_plugins());
    }

    public function get_active_plugins() {
        return apply_filters('active_plugins', get_option('active_plugins'));
    }
}