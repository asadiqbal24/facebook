<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin_home()
    {
        return view('admin.adminhome');
    }

    public function user_list()
    {
        return view('admin.user_list');
    }

    public function engagement_performance()
    {
      return view('admin.engagement_performance');   
    }

    public function demographic_performance()
    {
     return view('admin.demographic_performance');   
    }

    public function gender_targeting()
    {
     return view('admin.gender_targeting');   
    }
}
