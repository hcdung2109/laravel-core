<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Route;

class CategoryController extends Controller
{
    public function __construct()
    {
        $allCategory = Category::all();
        view()->share(compact('allCategory'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::with('parent')->latest()->paginate();

        return view('backend.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate
        $this->validate($request,[
                'name' => 'required'
            ]);

        $attrs = $request->all();
        Category::create($attrs);

        return redirect('backend/category')->with('msg', __('backend.finished'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param Category $category
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Category $category)
    {
        return view('backend.category.edit',compact('category'));
    }


    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param Category $category
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Category $category)
    {
        $category->update($request->all());
        return redirect()->route('category.edit',$category)->with('msgSuccess', __('backend.updated'));
    }

    /**
     * Remove the specified resource from storage.
     * @param Category $category
     * @throws \Exception
     */
    public function destroy(Category $category)
    {
        Category::findOrFail($category)->delete();
        //return response()->json($category);
    }
}
