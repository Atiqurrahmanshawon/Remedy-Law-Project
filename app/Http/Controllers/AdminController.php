<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
    {
        return view('admin.index');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function blog()
    {
        return view('admin.blog');
    }

    public function service()
    {
        return view('admin.service');
    }

    public function lawyer()
    {
        return view('admin.lawyer');
    }

    public function category()
    {
        return view('admin.category');
    }
    public function case()
    {
        return view('admin.case');
    }

    public function appoint()
    {
        return view('admin.appointment');
    }

    public function testimonial()
    {
        return view('admin.testimonial');
    }

    public function tableCaseStudy()
    {
        return view('admin.caseStudyTable');
    }
    public function tableAppointment()
    {
        return view('admin.AppointmentTable');
    }

    public function tableBlog()
    {
        return view('admin.blogTable');
    }
    public function tableService()
    {
        return view('admin.ServiceTable');
    }
    public function tableTestimonials()
    {
        return view('admin.testimonialsTable');
    }
    public function tableLawyer()
    {
        return view('admin.lawyerTable');
    }
    public function tableCategory()
    {
        return view('admin.categoryTable');
    }
}
