<?php

namespace App\Http\Controllers;

use App\Models\BreakFast;
use App\Models\Footer;
use App\Models\Order;
use Illuminate\Http\Request;

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
        'status' => 'Pending',
    ];
    
   dd($order);
    return redirect()->back()->with('success', 'Order placed successfully!');
}

    
}
