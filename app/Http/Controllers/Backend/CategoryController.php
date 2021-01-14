<?php

namespace App\Http\Controllers\Backend;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Post_Internship;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function Category()
    {
        return view('backend.contents.category');
    }
    public function CategoryPost(Request $request)
    {
        $data = $request->except('_token');
        Category::create($data);
        return redirect()->back()->with('message', 'Add Category Successfully');
    }
    public function Category_list()
    {
         $data=Category::all();
        return view('backend.contents.categoryList',compact('data'));
    }
    public function CategoryView($id)
    {
        $data=Post_Internship::where('category_id',$id)->get();
        return view('frontend.category_wise_view',compact('data'));
    }

    public function categoryEdit($id)
    {
        $category = Category::find($id);

        return view('backend.contents.category_edit',compact('category'));
    }
    public function categoryUpdate(Request $request,$id)
    {
        $category = Category::find($id);
        $category->update([
            "category"=>$request->category
        ]);
        return redirect()->route('category_list');
    }
    public function categoryDelete($id)
    {
        $category=Category::find($id);
        if(!empty($category))
        {
            $category->delete();
            $message=" deleted Successfully";
        }else{
            $message="No data found.";
        }
        return redirect()->back()->with('message',$message);
    }


}
