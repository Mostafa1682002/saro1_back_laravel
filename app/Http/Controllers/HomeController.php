<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::latest()->paginate(5);
        return view('home', compact('products'));
    }

    public function products($id)
    {
        $categories = Category::all();
        $products = Category::find($id)->products;
        return view('products', compact('products', 'id', 'categories'));
    }
    public function product($id)
    {
        $product = product::findOrFail($id);
        $products = product::paginate(5);
        return view('product-details', compact('product', 'products'));
    }

    public function cart()
    {
        $products = [];
        if (session()->has('saro1_cart')) {
            $products = session()->get('saro1_cart');
        }
        // return $products;
        return view('cart', compact('products'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function contactSend(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => "required|string",
            'email' => "required|email",
            'object' => "required|string",
            'message' => "required|string",
        ]);
        Contact::create($validate->validated());
        return redirect()->back()->with('success', 'تم الارسال بنجاح');
    }
}
