<?php

namespace App\Http\Controllers;

use App\Models\BreakFast;
use App\Models\Footer;
use App\Models\Navbar;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function showOrderPage($id)
    {
        $foodItem = BreakFast::findOrFail($id);
        $footerView=Footer::get();
        return view('font-site.pages.order', compact('foodItem', 'footerView'));
    }

    public function placeOrder(Request $request)
{
    // Order placing logic here
    // Example:
    $order=[
        'food_id' => $request->food_id,
        'foodName'=>$request->foodName,
        'foodPrice'=>$request->foodPrice,
        'payment_method'=>$request->payment_method,
        'number'=>$request->number,
        'trx_id'=>$request->trx_id,
        'address'=>$request->address,
    ];
    
   Order::create($order);
    return redirect()->back()->with('success', 'Order placed successfully!');
}

public function orderList(){
    $user=Auth::user();
    $navbar=Navbar::get();
  $orderDataStor=Order::get();
  return view('admin-site.pages.order.orderList', [
    'NavbarView'=>$navbar,
    'orderDataStor'=>$orderDataStor, 
    'user'=>$user]);
   }
    
}
