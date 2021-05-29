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

class AdminFormController extends Controller
{
    public function appointmentSave(Request $request)
    {
        //dd($request->all());

        $appoint_form = new AppointmentForm();

        $appoint_form->name = $request->name;
        $appoint_form->email = $request->email;
        $appoint_form->phone = $request->phone;
        $appoint_form->date = $request->date;
        $appoint_form->time = $request->time;
        $appoint_form->description = $request->description;

        $appoint_form->save();
        return redirect()->back();


    }

    public function lawyerSave(Request $request)
    {
//        dd($request->all());

        $lawyer_form = new LawyerForm();

        $lawyer_form->name = $request->name;
        $lawyer_form->email = $request->email;
        $lawyer_form->phone = $request->phone;
        $lawyer_form->designation = $request->designation;
        $lawyer_form->image = $request->image;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = 'assets/admin/lawyer/image';
            $file_name = 'image' . $request->phone . '.' . $file->getClientOriginalExtension();
            $file->move($path, $file_name);
            $lawyer_form->image = $path . '/' . $file_name;
        }

        $lawyer_form->save();
        return redirect()->back();


    }

    public function categorySave(Request $request)
    {
//        dd($request->all());

        $category_form = new CategoryForm();
        $category_form->name = $request->name;
        $category_form->description = $request->description;
        $category_form->image = $request->image;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = 'assets/admin/category/image';
            $file_name = 'image' . time() . '.' . $file->getClientOriginalExtension();
//            $file_name = 'image'.$request->name.'.'.$file->getClientOriginalExtension();
            $file->move($path, $file_name);
            $category_form->image = $path . '/' . $file_name;
        }

        $category_form->save();
        return redirect()->back();

    }

    public function testimonialsSave(Request $request)
    {

//        dd($request->all());

        $testimonials_form = new TestimonialsForm();

        $testimonials_form->client_name = $request->name;
        $testimonials_form->client_designation = $request->designation;
        $testimonials_form->client_comment = $request->comment;


        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = 'assets/admin/testimonials/image';
//            $file_name = 'image'.$request->name.'.'.$file->getClientOriginalExtension();
            $file_name = 'image' . time() . '.' . $file->getClientOriginalExtension();
//            $file_name = $file->getClientOriginalName().$request->name.'.'.$file->getClientOriginalExtension();

            $file->move($path, $file_name);
            $testimonials_form->image = $path . '/' . $file_name;
        }

        $testimonials_form->save();
        return redirect()->back();
    }

    public function serviceSave(Request $request)
    {
//        dd($request->all());

        $service_form = new ServiceForm();

        $service_form->title = $request->title;
        $service_form->description = $request->description;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = 'assets/admin/service/image';
//            $file_name = 'image'.$request->title.'.'.$file->getClientOriginalExtension();
            $file_name = 'image' . time() . '.' . $file->getClientOriginalExtension();
//            $file_name = $file->getClientOriginalName().$request->name.'.'.$file->getClientOriginalExtension();

            $file->move($path, $file_name);
            $service_form->image = $path . '/' . $file_name;
        }

        $service_form->save();
        return redirect()->back();
    }

    public function blogSave(Request $request)
    {

//        dd($request->all());

        $blog_form = new BlogForm();

        $blog_form->title = $request->title;
        $blog_form->description = $request->description;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = 'assets/admin/blog/image';
//            $file_name = 'image'.$request->title.'.'.$file->getClientOriginalExtension();
            $file_name = 'image' . time() . '.' . $file->getClientOriginalExtension();
//            $file_name = $file->getClientOriginalName().$request->name.'.'.$file->getClientOriginalExtension();

            $file->move($path, $file_name);
            $blog_form->image = $path . '/' . $file_name;
        }

        $blog_form->save();
        return redirect()->back();

    }

    public function caseSave(Request $request)
    {

//        dd($request->all());

        $case_form = new CaseForm();

        $case_form->case_name = $request->case_name;
        $case_form->lawyer_name = $request->lawyer_name;
        $case_form->description = $request->description;
        $case_form->date = $request->date;
        $case_form->client_type = $request->client_type;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = 'assets/admin/case/image';
//            $file_name = 'image'.$request->title.'.'.$file->getClientOriginalExtension();
            $file_name = 'image' . time() . '.' . $file->getClientOriginalExtension();
//            $file_name = $file->getClientOriginalName().$request->name.'.'.$file->getClientOriginalExtension();

            $file->move($path, $file_name);
            $case_form->image = $path . '/' . $file_name;
        }

        $case_form->save();
        return redirect()->back();

    }

    public function serviceDelete($id)
    {

//       dd($id);
        $service = ServiceForm::findOrFail($id);
//        ServiceForm::delete(array('id',$id));


        $service->delete();
        return redirect()->back();

    }

    public function update(Request $request, $id)
    {
        $service = ServiceForm::findOrFail($id);

        $service->title = $request->title;
        $service->description = $request->description;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = 'assets/admin/service/image';
//            $file_name = 'image'.$request->title.'.'.$file->getClientOriginalExtension();
            $file_name = 'image' . time() . '.' . $file->getClientOriginalExtension();
//            $file_name = $file->getClientOriginalName().$request->name.'.'.$file->getClientOriginalExtension();

            $file->move($path, $file_name);
            $service->image = $path . '/' . $file_name;
        }

        $service->save();
        return redirect()->back();

    }
}



