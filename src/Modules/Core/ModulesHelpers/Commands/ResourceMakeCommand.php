<?php

namespace Modules\Core\ModulesHelpers\Commands;

use Nwidart\Modules\Commands\ResourceMakeCommand as NwidartResourceMakeCommand;
use Nwidart\Modules\Support\Stub;
use Symfony\Component\Console\Input\InputArgument;


class ResourceMakeCommand extends NwidartResourceMakeCommand
{

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['name', InputArgument::REQUIRED, 'The name of the resource class.'],
            ['module', InputArgument::REQUIRED, 'The name of module will be used.'],
            ['resource', InputArgument::OPTIONAL, 'The name of the RESOURCE will be used.'],
        ];
    }

    /**
     * @return mixed
     */
    protected function getTemplateContents()
    {
        $module = $this->laravel['modules']->findOrFail($this->getModuleName());

        return (new Stub($this->getStubName(), [
            'NAMESPACE' => $this->getClassNamespace($module),
            'CLASS'     => $this->getClass(),
            'RESOURCE'  => $this->argument('resource'),
        ]))->render();
    }
}
