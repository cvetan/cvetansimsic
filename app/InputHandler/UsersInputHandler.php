<?php


namespace App\InputHandler;

use App\Http\Requests\StoreUserRequest;
use Carbon\Carbon;
use LaravelLocalization;

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
        $data = [
            'first_name'        => $this->request->get('first_name'),
            'last_name'         => $this->request->get('last_name'),
            'username'          => $this->request->get('username'),
            'email'             => $this->request->get('email'),
            'is_admin'          => $this->request->has('is_admin') ? true : false,
            'email_verified_at' => Carbon::now()
        ];

        $password = $this->request->get('password');

        if ($password !== null) {
            $data['password'] = Hash::make($password);
        }

        foreach (LaravelLocalization::getSupportedLanguagesKeys() as $lang) {
            $data[$lang] = [
                'title_tag'       => $this->request->get("title_tag_{$lang}"),
                'description_tag' => $this->request->get("description_tag_{$lang}")
            ];
        }

        return $data;
    }
}
