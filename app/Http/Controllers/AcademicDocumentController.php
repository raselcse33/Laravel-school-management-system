<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Setting;
use App\Student;
use App\ClassName;
use App\Section;
use Session;
use DB;
use PDF;
class AcademicDocumentController extends Controller
{
    //
   
    public function testimonialView() {
        return view('admin.academic_document.testimonial');
    }
    public function certificateView() {
        return view('admin.academic_document.certificate');
    }
    public function tcView() {
        return view('admin.academic_document.transfer_certificate');
    }
    public function documentDownload(Request $request) {
        $data['setting']=Setting::first();
        
            if($request->academic_document=='testimonial'){
                $data['testimonial'] = DB::table('students')->where('student_id', $request->student_id)->first();
                    if($data['testimonial']){
                     $pdf = PDF::loadView('admin.academic_document.certificate_pdf', $data);
                        return $pdf->download('certificate_pdf.pdf');
                 }
            }else if($request->academic_document=='certificate'){
                $data['testimonial'] = DB::table('students')->where('student_id', $request->student_id)->first();
                    if($data['testimonial']){
                     $pdf = PDF::loadView('admin.academic_document.certificate_pdf', $data);
                        return $pdf->download('certificate_pdf.pdf');
                 }
            }else if($request->academic_document=='tc'){
                $data['testimonial'] = DB::table('students')->where('student_id', $request->student_id)->first();
                    if($data['testimonial']){
                     $pdf = PDF::loadView('admin.academic_document.certificate_pdf', $data);
                        return $pdf->download('certificate_pdf.pdf');
                 }
            }
        return Redirect::back()->with('message','Please Enter Valid Informaion');
    }


   
}
