<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function add()
    {
        return view('admin.category.add');
    }
    public function create(Request $request)
    {
        Category::createCategory($request);
        return redirect('/category-add')->with('success', 'Category Added Successfully');
    }

    public function manage()
    {
        $categories = Category::all();

        return view('admin.category.manage',['categories' => $categories]);
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit',['category' => $category]);
    }
    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/category-manage')->with('delete', 'Category Delete Successfully');

    }
    public function update(Request $request ,$id)
    {
        Category::updateCategory($request, $id);
        return redirect('/category-manage')->with('success', 'Category Updated Successfully');

    }
}
