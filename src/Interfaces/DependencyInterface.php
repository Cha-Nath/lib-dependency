<?php

namespace nlib\Dependency\Interfaces;

interface DependencyInterface {

    /**
     *
     * @return self
     */
    public static function i();

    /**
     *
     * @return string[]
     */
    public function getDependencies();

    /**
     *
     * @return string
     */
    public function getCurrent();

    /**
     *
     * @return string
     */
    public function getPath();

    /**
     *
     * @param array $dependencies
     * @return self
     */
    public function setDependencies(array $dependencies);

    /**
     * Undocumented function
     *
     * @param string $current
     * @return self
     */
    public function setCurrent($current);

}