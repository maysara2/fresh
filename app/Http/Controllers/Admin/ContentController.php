<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function edit(){
        $data['content']=Content::find(1);
        return view('admin.content.edit',$data);
    }
    public function update(Request $request){

//        return $request;
        $content=Content::find(1);
        if ($request->file('image')){
            $image = uploadImage('contents', $request->file('image'));
        }else{

            $image=$content->image;

        }


        $content->title=['ar'=>$request->title_ar,'he'=>$request->title_he];
        $content->sub_title=['ar'=>$request->sub_title_ar,'he'=>$request->sub_title_he];
        $content->url=$request->url;
        $content->image=$image;
        $content->save();
        notify()->success('تم تحديث المجتوى بنجاح','عملية ناجحة');
        return redirect()->back();
    }
}
