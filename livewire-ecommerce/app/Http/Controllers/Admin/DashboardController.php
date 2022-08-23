<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Brand;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        $category = Category::count();
        $product = Product::count();
        $brand = Brand::count();
        $users = User::where('role_as','0')->count();
        $admins = User::where('role_as','1')->count();
        $slider = Slider::count();
        return view('admin.dashboard', compact('category','product','brand','admins','users','slider'));
    }
}
