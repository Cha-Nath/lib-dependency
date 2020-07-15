<?php

namespace nlib\Dependency\Classes;

use nlib\Dependency\Interfaces\PluginInterface;
use nlib\Dependency\Interfaces\ReporterInterface;

use nlib\Dependency\Traits\PluginTrait;
use nlib\Instance\Traits\InstanceTrait;

class Reporter implements ReporterInterface, PluginInterface {

    use PluginTrait;
    use InstanceTrait;

    const CAPABILITY = 'activate_plugins';

    public function __construct(array $plugins) { $this->setPlugins($plugins); }

    public function add_admin_notices() { add_action('admin_notices', [$this, 'show']); }

    public function show() {

        if(!current_user_can(self::CAPABILITY)) return;

        $dependency = Dependency::i($this->_i());

        if(!file_exists($file = $dependency->getPath() . 'public' . DIRECTORY_SEPARATOR . 'admin-notice.php'))
            die('Notice file doesn\'t exist.');
        
        require_once $file;
    }
}