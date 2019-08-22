<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StorePageRequest;
use App\Models\Page;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use LaravelLocalization;

class PagesController extends BaseAdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('admin.pages.index', [
            'pages' => Page::orderBy('id', 'desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePageRequest $request
     *
     * @return Response
     */
    public function store(StorePageRequest $request)
    {
        $data = [
            'active' => $request->has('active') ? true : false
        ];

        foreach (LaravelLocalization::getSupportedLanguagesKeys() as $lang) {
            $data[$lang] = [
                'name'            => $request->get("name_{$lang}"),
                'slug'            => $request->get("slug_{$lang}"),
                'content'         => $request->get("content_{$lang}"),
                'title_tag'       => $request->get("title_tag_{$lang}"),
                'description_tag' => $request->get("description_tag_{$lang}")
            ];
        }

        Page::create($data);

        flash(__('pages.page_created'))->success();

        return redirect()->route('admin.pages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Page $page
     *
     * @return Response
     */
    public function show(Page $page)
    {
        return $page;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Page $page
     *
     * @return Page
     */
    public function edit(Page $page)
    {
        return view('admin.pages.edit', [
            'page' => $page
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StorePageRequest $request
     * @param Page             $page
     *
     * @return RedirectResponse
     */
    public function update(StorePageRequest $request, Page $page)
    {
        $data = [
            'active' => $request->has('active') ? true : false
        ];

        foreach (LaravelLocalization::getSupportedLanguagesKeys() as $lang) {
            $data[$lang] = [
                'name'            => $request->get("name_{$lang}"),
                'slug'            => $request->get("slug_{$lang}"),
                'content'         => $request->get("content_{$lang}"),
                'title_tag'       => $request->get("title_tag_{$lang}"),
                'description_tag' => $request->get("description_tag_{$lang}")
            ];
        }

        $page->update($data);

        flash(__('pages.page_updated'))->success();

        return redirect()->route('admin.pages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Page $page
     *
     * @return RedirectResponse
     *
     * @throws Exception
     */
    public function destroy(Page $page)
    {
        $page->delete();

        flash(__('pages.page_deleted'))->success();

        return redirect()->route('admin.pages.index');
    }
}
