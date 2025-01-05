<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;


class AdminHomeController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.body');
    }
    public function home()
    {
        return view('admin.pages.profile.profile');
    }
    protected function profileImg($request)
    {
        $file           =   $request->file('profile_img');
        $filetype       =   $file->getClientOriginalExtension();
        $shortName      =   substr($request->name, 0, 3);
        $filename       =   strtolower($shortName) . '.' . $filetype;
        $directory      =   'upload/admin_images/';
        $imageUrl       =   $file->move($directory, $filename);
        return  $imageUrl;
    }
    protected function profileStore($request, $imageUrl)
    {
        $profile                    =   new Home();
        $profile->name              =   trim($request->name);
        $profile->work_experience   =   trim($request->work_experience);
        $profile->description       =   trim($request->description);
        $profile->status            =   $request->status;
        $profile->profile_img       =   $imageUrl;
    }
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'profile_img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Max size 2MB
                'name' => 'required',
                'work_experience' => 'required',
                'description' => 'required',
                'status' => 'required',
            ],
            [
                'profile_img.required' => 'Please upload an image.',
                'profile_img.image' => 'The file must be an image.',
                'profile_img.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif.',
                'profile_img.max' => 'The image size may not be greater than 2MB.',
                'name.required' => 'Input Correct Name!',
                'work_experience.required' => 'Write Your Experience!',
                'description.required' => 'Write your Description!',
                'status.required' => 'Select Status!',
            ]
        );
        if ($validator->passes()) {
            $profile                    =   new Home();
            $profile->name              =   trim($request->name);
            $profile->work_experience   =   trim($request->work_experience);
            $profile->description       =   trim($request->description);
            $profile->status            =   $request->status;

            $file           =   $request->file('profile_img');
            $shortName      =   substr($profile->name, 0, 5);
            $filetype       =   $file->getClientOriginalExtension();
            $filename       =   strtolower($shortName) . '-' . date('YmdHi') . '.' . $filetype;
            $directory      =   public_path('upload/admin_images/');
            $file->move($directory, $filename);
            $profile->profile_img = $filename;
            // return $profile;
            $profile->save();
            // $profile->profile_img = 'upload/admin_images/' . $filename;
            // return redirect()->back()->with('success', 'Profile Info Save Successfully ');
            // $request->session()->flash('success', 'Profile Info Save Successfully ');
            // return response()->json([
            //     'status' => true,
            //     'errors' => "Profile Info Save Successfully "
            // ]);
        } else {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }
    }
    public function profileList()
    {
        $profileData   =   Home::latest()->get();
        $data['profiles'] = $profileData;
        // dd($data);
        return view('admin.pages.profile.profile_list', $data);
    }
    public function profileEdit($id, Request $request)
    {
        $profile    =   Home::find($id);
        if (empty($profile)) {
            $request->session()->flash('error', 'Records Not Found!');
            return redirect()->route('admin.profileList');
        }
        return view('admin.pages.profile.profile_edit', compact('profile'));
    }

    public function about()
    {
        return view('admin.pages.about.about');
    }
    public function portfolio()
    {
        return view('admin.pages.portfolio.portfolio');
    }
    public function contact()
    {
        return view('admin.pages.contact.contact');
    }

    public function blog()
    {
        return view('admin.pages.blog.blog');
    }
}
