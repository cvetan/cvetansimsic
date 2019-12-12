<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreQuoteCategoryRequest;
use App\Models\QuoteCategory;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class QuoteCategoriesController extends BaseAdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index(): View
    {
        return view('admin.quote-categories.index', [
            'categories' => QuoteCategory::orderBy('id', 'desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create(): View
    {
        return view('admin.quote-categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreQuoteCategoryRequest $request
     *
     * @return RedirectResponse
     */
    public function store(StoreQuoteCategoryRequest $request): RedirectResponse
    {
        QuoteCategory::create($request->all());

        flash(__('quote_categories.created'))->success();

        return redirect()->route('admin.quote-categories.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param QuoteCategory $quoteCategory
     *
     * @return Factory|View
     */
    public function edit(QuoteCategory $quoteCategory): View
    {
        return view('admin.quote-categories.edit', [
            'quoteCategory' => $quoteCategory
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreQuoteCategoryRequest $request
     * @param QuoteCategory             $quoteCategory
     *
     * @return RedirectResponse
     */
    public function update(
        StoreQuoteCategoryRequest $request,
        QuoteCategory $quoteCategory
    ): RedirectResponse {
        $quoteCategory->update($request->all());

        flash(__('quote_categories.updated'))->success();

        return redirect()->route('admin.quote-categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param QuoteCategory $quoteCategory
     *
     * @return RedirectResponse
     *
     * @throws Exception
     */
    public function destroy(QuoteCategory $quoteCategory): RedirectResponse
    {
        $quoteCategory->delete();

        flash(__('quote_categories.removed'));

        return redirect()->route('admin.quote-categories.index');
    }
}
