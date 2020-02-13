<?php

namespace nlib\Dependency\Interfaces;

interface CheckerInterface {

    /**
     *
     * @return void
     */
    public function check();

    /**
     *
     * @return string[]
     */
    public function get_missing_plugins();
}