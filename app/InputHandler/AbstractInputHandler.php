<?php

namespace App\InputHandler;

use Illuminate\Foundation\Http\FormRequest;

abstract class AbstractInputHandler
{
    /**
     * @var FormRequest;
     */
    protected $request;

    /**
     * @return array
     */
    abstract public function format(): array;
}
