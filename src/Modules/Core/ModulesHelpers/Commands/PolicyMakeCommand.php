<?php

namespace Modules\Core\ModulesHelpers\Commands;

use Nwidart\Modules\Support\Stub;
use Nwidart\Modules\Commands\PolicyMakeCommand as NwidartPolicyMakeCommand;
use Symfony\Component\Console\Input\InputArgument;

class PolicyMakeCommand extends NwidartPolicyMakeCommand
{

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['name', InputArgument::REQUIRED, 'The name of the policy class.'],
            ['model', InputArgument::REQUIRED, 'The name of model will be used.'],
            ['module', InputArgument::OPTIONAL, 'The name of module will be used.'],
        ];
    }

    /**
     * @return mixed
     */
    protected function getTemplateContents()
    {
        $module = $this->laravel['modules']->findOrFail($this->getModuleName());

        return (new Stub('/policy.plain.stub', [
            'NAMESPACE' => $this->getClassNamespace($module),
            'CLASS'     => $this->getClass(),
            'MODULE'    => $this->getModuleName(),
            'MODEL'     => $this->argument('model'),
        ]))->render();
    }

}
