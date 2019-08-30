<?php


namespace App\InputHandler;

use App\Http\Requests\StoreUserRequest;

class UsersInputHandler extends AbstractInputHandler
{
    /**
     * UsersInputHandler constructor.
     *
     * @param StoreUserRequest $request
     */
    public function __construct(StoreUserRequest $request)
    {
        $this->request = $request;
    }

    /**
     * @return array
     */
    public function format(): array
    {
        return [];
    }
}
