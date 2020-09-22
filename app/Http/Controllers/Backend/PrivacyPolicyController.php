<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\backend\PrivacyPolicyRequest;
use App\Traits\CanUpload;
use App\PrivacyPolicy;
class PrivacyPolicyController extends Controller
{
    use CanUpload;
    public function __construct()

    {

        $this->middleware('auth:admin');

    }
    public function index()
    {
       $privacypolices=PrivacyPolicy::all(); 
       return view("backend.pages.privacypolicy.index",compact('privacypolices'));
    }
    public function privacypolices()
    {
       $privacypolicy =PrivacyPolicy::first(); 
       return view("backend.pages.privacypolicy.create",compact('privacypolicy'));
    }
       public function privacypolicestore(PrivacyPolicyRequest $request)
    {
        $privacypolicy= new PrivacyPolicy();
        $privacypolicy->title = $request->get('title');
        $privacypolicy->description =$request->get('description');

        if ($request->file('bannerimage')) {
            $privacypolicy->bannerimage = $this->upload($request->file('bannerimage'), 'privacypolicy')->getFileName();
        } else {
            $privacypolicy->bannerimage = $privacypolicy->bannerimage;
        }
        $privacypolicy->save();

        return redirect()->route('privacypolicypage')->with('message', 'PrivacyPolicy successfully inserted ');
    }
    public function edit($id)
    {
        $privacypolicy=PrivacyPolicy::find($id);
        return view('backend.pages.privacypolicy.edit',compact('privacypolicy'));
    }
    public function update(PrivacyPolicyRequest $request, $id)
    {
        $privacypolicy=PrivacyPolicy::find($id);
        $privacypolicy->title = $request->get('title');
        $privacypolicy->description =$request->get('description');

   
        if ($request->file('bannerimage')) {
            $privacypolicy->bannerimage = $this->upload($request->file('bannerimage'), 'privacypolicy')->getFileName();
        } else {
            $privacypolicy->bannerimage = $privacypolicy->bannerimage;
        }
        $privacypolicy->save();
        return redirect()->route('privacypolicypage')->with('message', 'PrivacyPolicy successfully updated ');
    }

    public function destroy(Request $request)
    {
        $privacypolicy=PrivacyPolicy::find($request->privacypolicy_id);
        $privacypolicy->delete();
        return redirect()->back()->with('messagedelete', 'PrivacyPolicy successfully deleted ');
    }
}
