<?php

namespace App\Http\Controllers\admin;

use App\admin\AppointmentForm;
use App\admin\BlogForm;
use App\admin\CaseForm;
use App\admin\CategoryForm;
use App\admin\LawyerForm;
use App\admin\ServiceForm;
use App\admin\TestimonialsForm;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function tableCaseStudy(){
        $case=CaseForm::get();
//        dd($case->all());
        return view('admin.caseStudyTable',compact('case'));
    }
    public function case()
    {
        return view('admin.case');
    }

    public function tableBlog()
    {
        $blog=BlogForm::get();
//        dd($blog->all());
        return view('admin.blogTable',compact('blog'));
    }
    public function blog()
    {
        return view('admin.blog');
    }

    public function tableService()
    {
        $service=ServiceForm::get();

//        dd($service->all());
        return view('admin.ServiceTable',compact('service'));
    }
    public function service()
    {
        return view('admin.service');
    }

    public function tableTestimonials()
    {
        $testimonials=TestimonialsForm::get();
//        dd($testimonials->all());
        return view('admin.testimonialsTable',compact('testimonials'));
    }
    public function testimonial()
    {
        return view('admin.testimonial');
    }

    public function tableLawyer()
    {
        $lawyer=LawyerForm::get();
//        dd($lawyer->all());
        return view('admin.lawyerTable',compact('lawyer'));
}
    public function lawyer()
    {
        return view('admin.lawyer');
    }

    public function tableCategory()
    {
        $category=CategoryForm::get();
//        dd($category->all());
        return view('admin.categoryTable',compact('category'));
    }
    public function category()
    {
        return view('admin.category');
    }

    public function tableAppointment()
    {
        $appointment=AppointmentForm::get();
//        dd($appointment->all());
        return view('admin.AppointmentTable',compact('appointment'));
    }
    public function appoint()
    {
        return view('admin.appointment');
    }

    public function caseEdit($id){

//            dd($id);
        $case = CaseForm::findOrFail($id);

//            dd($case);
        return view('admin.caseEdit',compact('case'));

    }

    public function blogEdit($id){

//        dd($id);
        $blog=BlogForm::findOrFail($id);

        return view('admin.blogEdit',compact('blog'));
    }

    public function serviceEdit($id){

//            dd($id);
            $service=ServiceForm::findOrFail($id);

            return view('admin.serviceEdit',compact('service'));
        }

        public function testimonialsEdit($id){

    //            dd($id);
                $testimonial=TestimonialsForm::findOrFail($id);
    //
                return view('admin.testimonialsEdit',compact('testimonial'));
            }
    public function categoryEdit($id){

//        dd($id);
        $category=CategoryForm::findOrFail($id);

        return view('admin.categoryEdit',compact('category'));
    }
    public function lawyerEdit($id){

//        dd($id);
        $lawyer=LawyerForm::findOrFail($id);

        return view('admin.lawyerEdit',compact('lawyer'));
    }

    public function appointmentEdit($id){

//        dd($id);
        $appointment=AppointmentForm::findOrFail($id);

        return view('admin.appointmentEdit',compact('appointment'));
    }

}
