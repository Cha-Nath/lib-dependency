<?php

namespace nlib\Dependency\Interfaces;

interface SetupInterface {

    /**
     *
     * @param string $current
     * @param array $dependencies
     * @return boolean
     */
    public function init($current, array $dependencies);

    /**
     *
     * @return void
     */
    public function disable_plugin();

    /**
     *
     * @return string
     */
    public function getClassFile();

    /**
     *
     * @param [type] $class_file
     * @return self
     */
    public function setClassFile($class_file);
}