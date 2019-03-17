<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use Session;

class PagesController extends Controller {

    public function create() {
        return view('admin.pages.pages');
    }

    public function storePage(Request $request) {
        //   dd($request);
        $r = request();
        $this->validate($r, [
            'title' => 'required',
            'slug' => 'unique:pages',
            'content' => 'required',
        
        ]);
        if (!$request->file('image')) {
            $page = new Page;
            $page->title =$request->title;
            $page->slug =str_slug($request->title, "-");
            $page->summary = $request->summary;
            $page->content = $request->content;
            $page->dateTime = $request->dateTime;
            $page->save();
            return redirect('pages/create')->with('message', 'page insert Successfully');
        } else {

            $image = $request->file('image');
            $uploadPath = 'public/images/pages/';
            $imageEx = $image->getClientOriginalExtension();
            $imageName = time() . '.' . $imageEx;
            $imageUrl = $imageName;
            $image->move($uploadPath, $imageName);
            $page = new Page;
            $page->title =$request->title;
            $page->slug = str_slug($request->title, "-");
            $page->summary = $request->summary;
            $page->content = $request->content;
            $page->dateTime = $request->dateTime;
            $page->image = $imageUrl;
            $page->save();
            return redirect('pages/create')->with('message', 'page insert Successfully');
        }
    }

    /* show page  27-1-2019*/
    public function showPage() {
        $data['pages'] = Page::where('status',0)->orWhere('status',NULL)->paginate(10);
        return view('admin.pages.page_list', $data);
    }

    /* Edit page */

    public function editPage($id) {
        $data['page'] = Page::find($id);
        return view('admin.pages.update_page', $data);
    }

    /* update image */

    public function updatePage(Request $request, $id) {
        $r = request();
        $this->validate($r, [
            'title' => 'required',
            'slug' => 'unique:pages,slug,' . $id,
            'content' => 'required',
           
        ]);

        if (!$request->file('image')) {

            $page = Page::find($id);
            $page->title = $request->title;
//            $page->slug = str_slug($request->title, "-");
            $page->summary = $request->summary;
            $page->content = $request->content;
            $page->dateTime = $request->dateTime;
            $page->save();
            return redirect('pages/list')->with('message', 'page update Successfully');
        } else {
            $image = $request->file('image');
            $uploadPath = 'public/images/pages/';
            $imageEx = $image->getClientOriginalExtension();
            $imageName = time() . '.' . $imageEx;
            $imageUrl = $imageName;
            $image->move($uploadPath, $imageName);
            $page = Page::find($id);
            if ($page->image) {
                $imageun = $page->image;
                unlink('public/images/pages/' . $imageun);
            }
            $page->title = $request->title;
//            $page->slug = str_slug($request->title, "-");
            $page->summary = $request->summary;
            $page->content = $request->content;
            $page->dateTime = $request->dateTime;
            $page->image = $imageUrl;
            $page->save();
            return redirect('pages/list')->with('message', 'page update Successfully');
        }
    }

    /*delet page 27-1-2019*/

    public function deletePage($id)
    {
         $page = Page::where('id',$id)->update(['status'=>1]);
         return redirect('pages/list')->with('message', 'Delete Successfully'); 
    }

}
