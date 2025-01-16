<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Imagick\Driver;
use Intervention\Image\Facades\Image;



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
    protected function validate($request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'profile_img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Max size 2MB
                'name' => 'required|string',
                'work_experience' => 'required',
                'description' => 'required',
                'status' => 'required',
            ],
            [
                'profile_img.required' => 'Please upload a image.',
                'profile_img.image' => 'The file must be a image.',
                'profile_img.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif.',
                'profile_img.max' => 'The image size may not be greater than 2MB.',
                'name.required' => 'Input Correct Name!',
                'work_experience.required' => 'Write Your Experience!',
                'description.required' => 'Write your Description!',
                'status.required' => 'Select Status!',
            ]
        );
        return $validator;
    }
    protected function imgUpload($request)
    {
        if ($request->file('profile_img')) {
            $imgfile            =   $request->file('profile_img');
            $name               =   $request->name;
            $shortName      =   substr($name, 0, 5);
            $imgtype       =   $imgfile->getClientOriginalExtension();
            $imgname       =   strtolower($shortName) . '-' . date('YmdHi') . '.' . $imgtype;
            // Define the upload directory
            $directory      =   'upload/admin_images/';
            $imgurl =   $directory . $imgname;
            $img = ImageManager::imagick()->read($imgfile);
            $img->resize(300, 168);
            $img->save($imgurl);
            return $imgurl;
        }
    }
    protected function profileStoreInfo($request, $imgurl)
    {
        $profile                    =   new Home();
        $profile->name              =   trim($request->name);
        $profile->work_experience   =   trim($request->work_experience);
        $profile->description       =   trim($request->description);
        $profile->status            =   $request->status;
        $profile->profile_img       =   $imgurl;
        $profile->save();
    }

    public function store(Request $request)
    {
        $validator = $this->validate($request);
        if ($validator->passes()) {
            $imgurl = $this->imgUpload($request);
            $this->profileStoreInfo($request, $imgurl);
            return redirect()->back()->with('success', 'Profile Info Save Successfully ');
            // $request->session()->flash('success', 'Profile Info Save Successfully ');
            // return response()->json([
            //     'status' => true,
            //     'errors' => "Profile Info Save Successfully "
            // ]);
        } else {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Validation failed. Please correct the errors below.');
            // return response()->json([
            //     'status' => false,
            //     'errors' => $validator->errors()
            // ]);
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
    public function profileUpdate(Request $request)
    {
        $profileInfo    =   $request->file('profile_img');
        if ($profileInfo) {
            $profile                    =   Home::find($request->profile_id);
            unlink($profile->profile_img);

            $name               =   $request->name;
            $shortName      =   substr($name, 0, 5);
            $imgtype       =   $profileInfo->getClientOriginalExtension();
            $imgname       =   strtolower($shortName) . '-' . date('YmdHi') . '.' . $imgtype;
            // Define the upload directory
            $directory      =   'upload/admin_images/';
            $imgurl =   $directory . $imgname;
            $img = ImageManager::imagick()->read($profileInfo);
            $img->resize(300, 168);
            $img->save($imgurl);

            $profile->name              =   trim($request->name);
            $profile->work_experience   =   trim($request->work_experience);
            $profile->description       =   trim($request->description);
            $profile->profile_img       =   $imgurl;
            $profile->status            =   $request->status;
            $profile->save();
            return redirect('/profile/list')->with('success', 'Profile Info Update Successfully ');
        } else {
            $profile                    =   Home::find($request->profile_id);
            $profile->name              =   trim($request->name);
            $profile->work_experience   =   trim($request->work_experience);
            $profile->description       =   trim($request->description);
            $profile->status            =   $request->status;
            $profile->save();
            return redirect('/profile/list')->with('success', 'Profile Info Update Successfully ');
        }
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
