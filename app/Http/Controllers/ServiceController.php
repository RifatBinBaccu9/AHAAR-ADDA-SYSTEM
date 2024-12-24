<?php

namespace App\Http\Controllers;

use App\Models\AddService;
use App\Models\Navbar;
use Illuminate\Support\Facades\Auth;
use App\Models\Footer;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service() {
        $footer=Footer::get();
        $navbar=Navbar::get();
        $serviceStor=AddService::get();
        $user=Auth::user();
        return view('font-site.pages.service', ['footerView'=>$footer,'navbarView'=>$navbar,'user'=>$user,'serviceView'=>$serviceStor]);
    }
    // Admin add service section  //
   public function addService() {
    $navbar=Navbar::get();
    $user=Auth::user();
    return view('admin-site.pages.service.addService',['NavbarView'=>$navbar,'user'=>$user]);
}
   public function addServicePush(Request $req){
    $req->validate([
        'ServiceImage'=> 'required',
        'ServiceTitle'=> 'required|max:50',
        'ServiceDetails'=> 'required|max:255',
    ]);
   

    if (! is_dir(public_path('admin-site/img/service'))) {
        mkdir(public_path('admin-site/img/service'), 0777, true);
    }

    $serviceData=[
        'ServiceTitle'=>$req->ServiceTitle,
        'ServiceDetails'=>$req->ServiceDetails,
    ];

    if($req->hasFile('ServiceImage')){
        $image=$req->file('ServiceImage');
        $name=$image->getClientOriginalName();
        $imageName = time() . '_' . $name;
        
        $image->move(public_path('admin-site/img/service'), $imageName);
        
        $serviceData['ServiceImage'] = 'admin-site/img/service/' . $imageName;
    }
    AddService::create($serviceData);
    toastr()->success('Service Create Successful.');
    return redirect()->back();
    // dd($serviceData);
   }
   public function serviceList() {
    $serviceStor=AddService::get();
    $navbar=Navbar::get();
    $user=Auth::user();
    return view('admin-site.pages.service.serviceList', ['NavbarView'=>$navbar,'serviceView'=>$serviceStor, 'user'=>$user]);
}

// Admin add servise update section
   public function serviceListUpdate($id){
    $user=Auth::user();
    $navbar=Navbar::get();
  $serviceDataStor=AddService::where(['id'=>$id])->first();
  return view('admin-site.pages.service.serviceUpdate', ['NavbarView'=>$navbar,'serviceDataUpdate'=>$serviceDataStor, 'user'=>$user]);
   }
   public function serviceListEdit(Request $req){
    if (! is_dir(public_path('admin-site/img/service'))) {
        mkdir(public_path('admin-site/img/service'), 0777, true);
    }

    $serviceData=[
        'ServiceTitle'=>$req->ServiceTitle,
        'ServiceDetails'=>$req->ServiceDetails,
    ];

    if($req->hasFile('ServiceImage')){
        $image=$req->file('ServiceImage');
        $name=$image->getClientOriginalName();
        $imageName = time() . '_' . $name;
        
        $image->move(public_path('admin-site/img/service'), $imageName);
        
        $serviceData['ServiceImage'] = 'admin-site/img/service/' . $imageName;
    }
    AddService::where(['id'=>$req->id])->update($serviceData);
    toastr()->success('Service Update Successful.');
    return redirect()->route('serviceList');
   }
   
//Admin delete section
   public function serviceListDelete($id){
    AddService::where(['id'=>$id])->delete();
    toastr()->success('Service delete Successful.');
    return redirect()->back();
   }

}
