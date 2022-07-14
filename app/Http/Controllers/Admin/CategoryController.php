<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Admin\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = Category::all();
        return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request){
        $request->validated();
        $category = new Category;
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->description = $request->description;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = "blog-".time()."_.".$file->getClientOriginalExtension();
            $file->storeAs('public/categories',$filename);
            $category->image = $filename;
        }
        $category->meta_title = $request->meta_title;
        $category->meta_description = $request->meta_description;
        $category->meta_keywords = $request->meta_keywords;
        $category->created_by = auth()->user()->id;
        $category->status = $request->status?1:0;
        $category->save();

        return redirect(route('category.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //edit
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category){
        return view('admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Admin\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, Category $category){
        $fileName=$category->image;
        if ($request->hasFile('image')) {
            $image_path = "/storage/categories/".$fileName;  // prev image path
            if( File::exists(public_path($image_path)) ) {
                File::delete(public_path($image_path));
            }
            $fileName = "blog-".time().".".$request->file('image')->getClientOriginalExtension() ;
            $request->file('image')->storeAs('public/categories',$fileName);
        }
        $category->update([
        'name'=>$request->name,
        'slug'=>$request->slug,
        'description'=>$request->description,
        'image'=>$fileName,
        'meta_title'=>$request->meta_title,
        'meta_description'=>$request->meta_description,
        'meta_keywords'=>$request->meta_keywords,
        'status'=> $request->status?1:0,
        ]);
        return redirect(route('category.index'))->with('message','info|'.$category->name.' Updated Successfully! ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $fileName=$category->image;
        $image_path = "/storage/categories/".$fileName;  // prev image path
        if( File::exists(public_path($image_path)) ) {
            File::delete(public_path($image_path));
        }
        $category->delete();
        return redirect(route('category.index'))->with('message','error|Category Deleted Successfully!!');
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Category::class, 'slug', $request->name);
        return response()->json(['slug'=>$slug]);
    }
}
