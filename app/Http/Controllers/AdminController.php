<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\contact;
use App\Models\Navbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function admin() {

        // Customers section
        $userCount = Auth::user()->count();
       if (Auth::user()->count() >= 5) {
        $percentageChange = Auth::user()->count();
        $isIncrease = true;
       }else{
        $percentageChange = Auth::user()->count();
        $isIncrease = false;
       }

    //  Booking section
       $bookingCount = Booking::count();
       if (Booking::count() >= 7) {
        $bookingChange = Booking::count();
        $isIncreases = true;
       }else{
        $bookingChange = Booking::count();
        $isIncreases = false;
       }

    //  Booking rejected section
    $bookingRejected = Booking::get();
    $bookingRejectedCount = $bookingRejected->where('status', 'rejected')->count();
    $bookingAcceptedCount = $bookingRejected->where('status', 'accepted')->count();
    

    // Contact section
    $contact=contact::count();
    if (Booking::count() >= 7) {
        $contactChange = contact::count();
        $iscontact = true;
       }else{
        $contactChange = contact::count();
        $iscontact = false;
       }


        $user=Auth::user();
        $navbar=Navbar::get();
        return view('admin-site.pages.home',[
            'user'=>$user,
            'NavbarView'=>$navbar,
        ],compact(
        'userCount',
        'percentageChange', 
        'isIncrease', 
        'bookingCount',
        'bookingChange',
        'isIncreases',
        'bookingRejectedCount',
        'bookingAcceptedCount',
        'contact',
        'contactChange',
        'iscontact'
    ));
    }
}
