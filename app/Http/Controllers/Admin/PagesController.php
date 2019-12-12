<?php

namespace App\Http\Controllers\Admin;

use App\InputHandler\PagesInputHandler;
use App\Models\Page;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PagesController extends BaseAdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index(): View
    {
        return view('admin.pages.index', [
            'pages' => Page::orderBy('id', 'desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create(): View
    {
        return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PagesInputHandler $inputHandler
     *
     * @return RedirectResponse
     */
    public function store(PagesInputHandler $inputHandler): RedirectResponse
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
    public function show(Page $page): Page
    {
        return $page;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Page $page
     *
     * @return Factory|View
     */
    public function edit(Page $page): View
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
    public function update(
        PagesInputHandler $inputHandler,
        Page $page
    ): RedirectResponse {
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
    public function destroy(Page $page): RedirectResponse
    {
        $page->delete();

        flash(__('pages.removed'))->success();

        return redirect()->route('admin.pages.index');
    }
}
