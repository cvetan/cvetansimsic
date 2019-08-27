<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreQuoteCategoryRequest;
use App\Models\QuoteCategory;
use Illuminate\Http\Request;

class QuoteCategoriesController extends BaseAdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.quote-categories.index', [
            'categories' => QuoteCategory::orderBy('id', 'desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.quote-categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuoteCategoryRequest $request)
    {
        QuoteCategory::create($request->all());

        flash(__('quote_categories.created'))->success();

        return redirect()->route('admin.quote-categories.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param QuoteCategory $quote_category
     * @param QuoteCategory $quoteCategory
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(QuoteCategory $quoteCategory)
    {
        return view('admin.quote-categories.edit', [
            'quoteCategory' => $quoteCategory
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreQuoteCategoryRequest $request
     * @param QuoteCategory             $quote_category
     * @param QuoteCategory             $quoteCategory
     *
     * @return \Illuminate\Http\Response
     */
    public function update(StoreQuoteCategoryRequest $request, QuoteCategory $quoteCategory)
    {
        $quoteCategory->update($request->all());

        flash(__('quote_categories.updated'))->success();

        return redirect()->route('admin.quote-categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param QuoteCategory $quote_category
     * @param QuoteCategory $quoteCategory
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuoteCategory $quoteCategory)
    {
        $quoteCategory->delete();

        flash(__('quote_categories.removed'));

        return redirect()->route('admin.quote-categories.index');
    }
}
