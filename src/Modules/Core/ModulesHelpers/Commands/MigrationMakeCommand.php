<?php

namespace Modules\Core\ModulesHelpers\Commands;

use Nwidart\Modules\Commands\MigrationMakeCommand as NwidartMigrationMakeCommand;
use Nwidart\Modules\Support\Migrations\NameParser;
use Nwidart\Modules\Support\Stub;
use Symfony\Component\Console\Input\InputArgument;


class MigrationMakeCommand extends NwidartMigrationMakeCommand
{

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['name', InputArgument::REQUIRED, 'The migration name will be created.'],
            ['model', InputArgument::REQUIRED, 'The model of module will be created.'],
            ['module', InputArgument::OPTIONAL, 'The name of module will be created.'],
        ];
    }

    /**
     * @throws \InvalidArgumentException
     *
     * @return mixed
     */
    protected function getTemplateContents()
    {
        $parser = new NameParser($this->argument('name'));

        if ($parser->isCreate()) {
            return Stub::create('/migration/create.stub', [
                'class'     => $this->getClass(),
                'table'     => $parser->getTableName(),
                'fields'    => $this->getSchemaParser()->render(),
                'module'    => $this->argument('module'),
                'model'     => $this->argument('model'),
            ]);
        } elseif ($parser->isAdd()) {
            return Stub::create('/migration/add.stub', [
                'class' => $this->getClass(),
                'table' => $parser->getTableName(),
                'fields_up' => $this->getSchemaParser()->up(),
                'fields_down' => $this->getSchemaParser()->down(),
            ]);
        } elseif ($parser->isDelete()) {
            return Stub::create('/migration/delete.stub', [
                'class' => $this->getClass(),
                'table' => $parser->getTableName(),
                'fields_down' => $this->getSchemaParser()->up(),
                'fields_up' => $this->getSchemaParser()->down(),
            ]);
        } elseif ($parser->isDrop()) {
            return Stub::create('/migration/drop.stub', [
                'class' => $this->getClass(),
                'table' => $parser->getTableName(),
                'fields' => $this->getSchemaParser()->render(),
            ]);
        }

        return Stub::create('/migration/plain.stub', [
            'class' => $this->getClass(),
        ]);
    }

}
