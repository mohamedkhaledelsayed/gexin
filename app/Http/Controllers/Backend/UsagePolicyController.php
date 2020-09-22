<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\backend\UsagePolicyRequest;
use App\Traits\CanUpload;
use App\UsagePolicy;
class UsagePolicyController extends Controller
{ 
    use CanUpload;
    public function __construct()

    {

        $this->middleware('auth:admin');

    }
    public function index()
    {
       $usagepolicies =UsagePolicy::all(); 
       return view("backend.pages.usagepolicy.index",compact('usagepolicies'));
    }
    public function usagepolicy()
    {
       $usagepolicy =UsagePolicy::first(); 
       return view("backend.pages.usagepolicy.create",compact('usagepolicy'));
    }
       public function usagepolicystore(UsagePolicyRequest $request)
    {
        $usagepolicy= new UsagePolicy();
        $usagepolicy->title = $request->get('title');
        $usagepolicy->description =$request->get('description');

        if ($request->file('image')) {
            $usagepolicy->image = $this->upload($request->file('image'), 'usagepolicy')->getFileName();
        } else {
            $usagepolicy->image = $usagepolicy->image;
        }
        $usagepolicy->save();

        return redirect()->route('usagepolicypage')->with('message', 'UsagePolicy successfully inserted ');
    }
    public function edit($id)
    {
        $usagepolicy=UsagePolicy::find($id);
        return view('backend.pages.usagepolicy.edit',compact('usagepolicy'));
    }
    public function update(UsagePolicyRequest $request, $id)
    {
        $usagepolicy=UsagePolicy::find($id);
        $usagepolicy->title = $request->get('title');
        $usagepolicy->description =$request->get('description');
        if ($request->file('image')) {
            $usagepolicy->image = $this->upload($request->file('image'), 'usagepolicy')->getFileName();
        } else {
            $usagepolicy->image = $usagepolicy->image;
        }
        $usagepolicy->save();
        return redirect()->route('usagepolicypage')->with('message', 'UsagePolicy successfully updated ');
    }

    public function destroy(Request $request)
    {
        $usagepolicy=UsagePolicy::find($request->usagepolicy_id);
        $usagepolicy->delete();
        return redirect()->back()->with('messagedelete', 'UsagePolicy successfully deleted ');
    }
}
