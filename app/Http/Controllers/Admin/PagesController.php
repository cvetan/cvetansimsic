<?php

namespace App\Http\Controllers\Admin;

use App\InputHandler\PagesInputHandler;
use App\Models\Page;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

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
     * @param PagesInputHandler $inputHandler
     *
     * @return Response
     */
    public function store(PagesInputHandler $inputHandler)
    {
        Page::create($inputHandler->format());

        flash(__('pages.created'))->success();

        return redirect()->route('admin.pages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Page $page
     *
     * @return Page
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
     * @param PagesInputHandler $inputHandler
     * @param Page              $page
     *
     * @return RedirectResponse
     */
    public function update(PagesInputHandler $inputHandler, Page $page)
    {
        $page->update($inputHandler->format());

        flash(__('pages.updated'))->success();

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

        flash(__('pages.removed'))->success();

        return redirect()->route('admin.pages.index');
    }
}
