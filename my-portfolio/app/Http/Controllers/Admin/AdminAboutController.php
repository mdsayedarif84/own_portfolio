<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminAboutController extends Controller
{
    public function about()
    {
        return view('admin.pages.about.about');
    }
    protected function validation($request)
    {
        $validated = Validator::make(
            $request->all(),
            [
                'fullName' => 'required|max:255',
                'email' => 'required',
            ],
            [
                'fullName.required' => 'Please write Full Name',
            ]
        );
        return $validated;
    }
    public function aboutStore(Request $request)
    {
        $validated  =   $this->validation($request);

        if ($validated->passes()) {
        } else {
            return redirect()->back()
                ->withErrors($validated)
                ->withInput()
                ->with('error', 'Validation failed. Please correct the errors below.');
        }
    }
}
