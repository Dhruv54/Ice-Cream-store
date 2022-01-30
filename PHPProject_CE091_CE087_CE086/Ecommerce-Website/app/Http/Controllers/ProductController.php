<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Cart;
use App\Models\order;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    function index()
    {
        $data=product::all();
        return view('product',['products'=>$data]);
    }

    function detail($id)
    {
        $data =product::find($id);
        return view('detail',['product'=>$data]);
    }

    function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
            $cart=new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/index');
        }
        else
        {
            return redirect('/login');
        }
    }

    static function cartItem()
    {
        $userId=Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }

    function cartList()
    {
        $userId=Session::get('user')['id'];
        $products = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->get();

        return view('cartlist',['products'=>$products]);
    }

    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }


    function orderNow()
    {
        $userId=Session::get('user')['id'];
        $total=$products = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->sum('products.price');

        return view('ordernow',['total'=>$total]);
    }
    

    function orderPlace(Request $req)
    {
        $userId=Session::get('user')['id'];
        $allCart=Cart::where('user_id',$userId)->get();
        foreach($allCart as $cart)
        {
            $order=new order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status="pending";
            $order->payment_method=$req->payment;
            $order->payment_status="pending";
            $order->address=$req->address;
            $order->save();
            Cart::where('user_id',$userId)->delete();
        }
        $req->input();
        return redirect('/index');
    }

    function myOrders()
    {
        $userId=Session::get('user')['id'];
        $orders= DB::table('orders')
        ->join('products','orders.product_id','=','products.id')
        ->where('orders.user_id',$userId)
        ->get();

        return view('myorders',['orders'=>$orders]);
    }

    function Aboutus()
    {
        return view('aboutus');
    }

    function Contactus()
    {
        return view('contactus');
    }

    function Search(Request $req)
    {
        $q=$req->get('search');
        // $data=product::where('name','like','%'.$search.'%');
        // $products= DB::table('products')->where('name','like','%'.$search.'%');
        // return view('product',['products'=>$products]);

        // $data=product::all();
        // return view('product',['products'=>$data]);
        // return $data;
        if($q != "")
        {
            $products=product::where('name','LIKE','%'. $q .'%')
                                ->orWhere('category','LIKE','%'. $q .'%')
                                ->get();
            if(count($products) > 0)
            {
                return view('product',['products'=>$products]);

            }
        }
        return "Nothing happen!!!!!";
    }
}