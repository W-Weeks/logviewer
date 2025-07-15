<?php

namespace logviewer;

abstract class Base
{

    /**
     * @var string
     */
    protected string $pluginPath = 'weeks' . DIRECTORY_SEPARATOR . 'logviewer';

    public function __construct()
    {
        $this->initialize();
    }

    protected function initialize()
    {

    }

    protected function getPluginBasePath(): string
    {
        return $this->pluginPath . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR;
    }

    protected function getPluginBaseViewPath(string $framework = 'thinkphp'): string
    {
        return $this->getPluginBasePath() . $framework . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR;
    }
}
