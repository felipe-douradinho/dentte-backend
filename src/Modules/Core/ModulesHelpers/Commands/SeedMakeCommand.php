<?php

namespace Modules\Core\ModulesHelpers\Commands;

use Illuminate\Support\Str;
use \Nwidart\Modules\Commands\SeedMakeCommand as NwidartSeedMakeCommand;
use Nwidart\Modules\Support\Config\GenerateConfigReader;
use Nwidart\Modules\Support\Stub;


class SeedMakeCommand extends NwidartSeedMakeCommand
{
    /**
     * @return mixed
     */
    protected function getTemplateContents()
    {
        $module = $this->laravel['modules']->findOrFail($this->getModuleName());

        return (new Stub('/seeder.stub', [
            'STUDLY_NAME' => $module->getStudlyName(),
            'NAME' => $this->getCustomSeederName() . $this->getEndName(),
            'MODULE' => $this->getModuleName(),
            'NAMESPACE' => $this->getClassNamespace($module),

        ]))->render();
    }

    /**
     * @return mixed
     */
    protected function getDestinationFilePath()
    {
        $this->clearCache();

        $path = $this->laravel['modules']->getModulePath($this->getModuleName());

        $seederPath = GenerateConfigReader::read('seeder');

        return $path . $seederPath->getPath() . '/' . $this->getCustomSeederName() . $this->getEndName() . '.php';
    }

    /**
     * Get seeder name.
     *
     * @return string
     */
    protected function getCustomSeederName() : string
    {
        return Str::studly($this->argument('name'));
    }

    /**
     * Get seeder name.
     *
     * @return string
     */
    protected function getEndName() : string
    {
        return $this->option('master') ? 'DatabaseSeeder' : 'Seeder';
    }
}
