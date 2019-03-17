<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ManagingCommittee;
use App\Teacher;
use App\Student;
use App\ClassName;
use App\Subject;
use App\Group;
use App\Section;
use App\Slider;
use App\Gallery;
use App\Page;
use App\Post;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $data['managing_committee'] = ManagingCommittee::count();
        $data['teacher'] = Teacher::count();
        $data['student'] = Student::count();
        $data['class']   = ClassName::count();
        $data['subject'] =Subject::count();
        $data['group']   = Group::count();
        $data['section'] = Section::count();
        $data['slider']  = Slider::count();
        $data['gallery'] = Gallery::count();
        $data['page'] = Page::count();
        $data['post'] = Post::count();
        return view('admin.home_content.home_content',$data);
    }

}
