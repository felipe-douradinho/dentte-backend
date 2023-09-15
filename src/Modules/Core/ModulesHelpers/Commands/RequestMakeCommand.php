<?php

namespace Modules\Core\ModulesHelpers\Commands;

use Illuminate\Support\Str;
use Nwidart\Modules\Support\Config\GenerateConfigReader;
use Nwidart\Modules\Support\Stub;
use \Nwidart\Modules\Commands\RequestMakeCommand as NwidartRequestMakeCommand;


class RequestMakeCommand extends NwidartRequestMakeCommand
{

    /**
     * @return mixed
     */
    protected function getTemplateContents()
    {
        $module = $this->laravel['modules']->findOrFail($this->getModuleName());

        return (new Stub('/request.stub', [
            'NAMESPACE'         => $this->getClassNamespace($module),
            'CLASS'             => $this->getClass(),
            'CLASS_TO_EXTEND'   => $this->getClassToExtend(),
            'CLASS_TO_IMPORT'   => $this->getClassToImport(),
        ]))->render();
    }

    /**
     * @return mixed
     */
    protected function getDestinationFilePath()
    {
        $path = $this->laravel['modules']->getModulePath($this->getModuleName());

        $requestPath = GenerateConfigReader::read('request');

        return $path . $requestPath->getPath() . '/' . $this->getFileName() . '.php';
    }

    /**
     * @return string
     */
    protected function getFileName()
    {
        return Str::studly($this->argument('name'));
    }

    /**
     * @return string
     */
    protected function getClassToExtend() : string
    {
        if( strpos($this->getClass(), 'Update') !== false ) {
            return 'BaseUpdateRequest';

        } else if( strpos($this->getClass(), 'Store') !== false ) {
            return 'BaseStoreRequest';

        } else {
            return 'FormRequest';
        }
    }

    /**
     * @return string
     */
    protected function getClassToImport() : string
    {
        if( strpos($this->getClass(), 'Update') !== false ) {
            return "use Modules\\Core\\Http\\Requests\\{$this->getClassToExtend()};";

        } else if( strpos($this->getClass(), 'Store') !== false ) {
            return "use Modules\\Core\\Http\\Requests\\{$this->getClassToExtend()};";

        } else {
            return 'use Illuminate\Foundation\Http\FormRequest;';
        }
    }
}
