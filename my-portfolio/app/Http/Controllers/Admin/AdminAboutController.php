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
                'first_name' => 'required',
                'last_name' => 'required',
                'age' => 'required',
                'email' => 'required',
                'phone_number' => 'required',
                'social_id' => 'required',
                'nationality' => 'required',
                'frelance' => 'required',
                'language' => 'required',
                'address' => 'required',
                'happy_customers' => 'required',
                'awards_won' => 'required',
                'year_experience' => 'required',
                'project' => 'required',
                'year' => 'required',
                'designatio' => 'required',
                'compnay' => 'required',
                'description' => 'required',

            ],
            [
                'first_name.required' => 'Please write First Name',
                'last_name.required' => 'Please write Last Name',
                'age.required' => 'Please Input Right Age',
                'phone_number.required' => 'Please Input Phone Number',
                'social_id.required' => 'Please Input Your Social ID',
                'nationality.required' => 'Please Input Your Nationality',
                'frelance.required' => 'Please Input Your frelance',
                'language.required' => 'Please Input Your language',
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
