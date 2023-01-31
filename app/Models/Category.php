<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public static function createCategory($request)
    {
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->save();
    }
    public static function updateCategory($request,$id)
    {
        $category = Category::find($id);
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->save();
    }
}
