<?php

namespace App\Console\Commands;

use Illuminate\Foundation\Console\ModelMakeCommand as Command;

class ModelMakeCommand extends Command
{
    /**
     * @param string $rootNamespace
     *
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace): string
    {
        return "{$rootNamespace}\Models";
    }
}
