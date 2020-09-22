<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\backend\PayMentGateWayRequest;
use App\PayMentGateWay;
use App\Traits\CanUpload;
class PaymentGateWaysController extends Controller
{
    use CanUpload;
    public function __construct()

    {

        $this->middleware('auth:admin');

    }
    public function index()
    {
       $paymentgateways=PayMentGateWay::all(); 
       return view("backend.pages.paymentgateways.index",compact('paymentgateways'));
    }
    public function paymentgateway()
    {
       $paymentgateway=PayMentGateWay::first(); 
       return view("backend.pages.paymentgateways.paymentgateways",compact('paymentgateway'));
    }
       public function paymentgatewaystore(PayMentGateWayRequest $request)
    {
        $paymentgateway= new PayMentGateWay();
        $paymentgateway->title = $request->get('title');
        $paymentgateway->link = $request->get('link');

        if ($request->file('image')) {
            $paymentgateway->image = $this->upload($request->file('image'), 'paymentgateway')->getFileName();
        } else {
            $paymentgateway->image = $paymentgateway->image;
        }
        if ($request->file('bannerimage')) {
            $paymentgateway->bannerimage = $this->upload($request->file('bannerimage'), 'paymentgateway')->getFileName();
        } else {
            $paymentgateway->bannerimage = $paymentgateway->bannerimage;
        }
        if($request->showhomepage){
            $paymentgateway->showhomepage  =$request->showhomepage;

        }
        $paymentgateway->save();

        return redirect()->route('paymentgateway')->with('message', 'PayMentGateWay successfully inserted ');
    }
    public function edit($id)
    {
        $paymentgateway=PayMentGateWay::find($id);
        return view('backend.pages.paymentgateways.edit',compact('paymentgateway'));
    }
    public function update(PayMentGateWayRequest $request, $id)
    {
        $paymentgateway=PayMentGateWay::find($id);
        $paymentgateway->title = $request->get('title');
        $paymentgateway->link = $request->get('link');
        if ($request->file('image')) {
            $paymentgateway->image = $this->upload($request->file('image'), 'paymentgateway')->getFileName();
        } else {
            $paymentgateway->image = $paymentgateway->image;
        }
        if ($request->file('bannerimage')) {
            $paymentgateway->bannerimage = $this->upload($request->file('bannerimage'), 'paymentgateway')->getFileName();
        } else {
            $paymentgateway->bannerimage = $paymentgateway->bannerimage;
        }
        if(  $request->showhomepage){
            $paymentgateway->showhomepage  =$request->showhomepage;

        }else{
            $paymentgateway->showhomepage  =0;
        }
        $paymentgateway->save();
        return redirect()->route('paymentgateway')->with('message', 'PayMentGateWay successfully updated ');
    }

    public function destroy(Request $request)
    {
        $paymentgateway=PayMentGateWay::find($request->paymentgateway_id);
        $paymentgateway->delete();
        return redirect()->back()->with('messagedelete', 'PayMentGateWay successfully deleted ');
    }
}
