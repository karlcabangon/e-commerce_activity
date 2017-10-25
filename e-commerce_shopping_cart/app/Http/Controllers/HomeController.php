<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\ordered_product;
use App\shipping_info;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $user_id = Auth::user()->id;
        $prod = Auth::user()->id;
        
        $new_prod = product::all();
        $show_cart = ordered_product::select('*')->where('user_id', '=', $user_id)->get();
        $show_count = ordered_product::select('*')->where('user_id', '=', $user_id)->count();

        $numprod = ordered_product::select('*')->where('product_id', '=',$prod)->get();
        return view('/home', compact('new_prod','show_cart','numprod', 'show_count'));
    }
    
    public function addtocart(request $request, $id){

        $product = product::find($id);

        $id = $product->id;
        $name = $product->name;
        $description = $product->description;
        $price = $product->price;

        $new_oredered_products = new ordered_product;

        $new_oredered_products->user_id = auth::user()->id;
        $new_oredered_products->product_name = $name;
        $new_oredered_products->product_description = $description;
        $new_oredered_products->product_price = $price;

        $new_oredered_products->save();

        return redirect('/home');
     }

     public function removetocart(request $request, $id){

        $user_id = Auth::user()->id;

        $new_prod = ordered_product::select('*')->where([
                ['user_id', '=', $user_id],
                ['product_id', '=', $id],
            ])->delete();
            
        return redirect('/viewcart');
     }
     public function itemsoncart(){

        $user_id = Auth::user()->id;
        $show_cart = ordered_product::select('*')->where('user_id', '=', $user_id)->get();

        return view('/itemsoncart',compact('show_cart'));
     }
     public function checkout(){

        return view('/shipping');
     }
     public function backtocart(){

        return redirect('/viewcart');
     }
     public function shipping_info(Request $request){

            $user_id = auth::user()->id;

            $firstname = $request->firstname;
            $lastname = $request->lastname;
            $completeaddress = $request->completeaddress;
            $contactnumber = $request->contactnumber;
            $paymentmethod = $request->paymentmethod;

            $new_var = new shipping_info;

            $new_var->user_id = $user_id;
            $new_var->first_name = $firstname;
            $new_var->last_name = $lastname;
            $new_var->complete_address = $completeaddress;
            $new_var->contact_number = $contactnumber;
            $new_var->payment_method = $paymentmethod;

            $new_var-> save();

            return view('/thankyou');

    }
     public function invoice(){

        $user_id = auth::user()->id;
        
        $x = shipping_info::select('*')->where('user_id', '=', $user_id)->get();
        
        
        $show_count = ordered_product::select('*')->where('user_id', '=', $user_id)->count();        
        $new_user = Auth::user()->id;
        $show_cart = ordered_product::select('*')->where('user_id', '=', $new_user)->get();

            return view('invoice', compact('x','show_cart','show_count'));

     }
 
}
