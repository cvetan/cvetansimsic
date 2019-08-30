<?php

namespace App\InputHandler;

use App\Http\Requests\StorePageRequest;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class PagesInputHandler extends AbstractInputHandler
{
    /**
     * PagesInputHandler constructor.
     *
     * @param StorePageRequest $request
     */
    public function __construct(StorePageRequest $request)
    {
        $this->request = $request;
    }

    /**
     * @return array
     */
    public function format(): array
    {
        $data = [
            'active' => $this->request->has('active') ? true : false
        ];

        foreach (LaravelLocalization::getSupportedLanguagesKeys() as $lang) {
            $data[$lang] = [
                'name'            => $this->request->get("name_{$lang}"),
                'slug'            => $this->request->get("slug_{$lang}"),
                'content'         => $this->request->get("content_{$lang}"),
                'title_tag'       => $this->request->get("title_tag_{$lang}"),
                'description_tag' => $this->request->get("description_tag_{$lang}")
            ];
        }

        return $data;
    }
}
