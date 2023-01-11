<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class CategoryController extends Controller
{
    public function index(Request $request)
    {

        $categories = Category::where('parent_id', null)->orderby('id', 'desc')->get();

        return view('admin.categories.index')->with(['categories' => $categories]);
    }


    public function get_category(Request $request)
    {


        $data = Category::query()->orderby('id', 'desc');


        if ($request->input('category_id')) {
            $data = $data->where("parent_id", $request->input('category_id'));
        }
        if ($request->input('title')) {
            $data = $data->where('title', 'LIKE', '%' . $request->input('title') . '%');
        }
        return DataTables::of($data)
            ->addColumn('title', function ($data) {
                return $data->title ?? '';
            })->addColumn('parent_category', function ($data) {
                return $data->parent->title ?? '';
            })
            ->addColumn('images', function ($data) {

                $url = $data->images();

                return '<img src="' . $url . '" border="0" width="100" height="100" class="img-rounded" align="center" />';

            })
            ->addColumn('status_update', function ($data) {
                if ($data->status) {
                    $button = '<span class="switch switch-icon">
																<label>
																	<input type="checkbox" checked="checked" name="status" data-id="' . $data->id . '" data-status="' . $data->status . '" class="change_status"  />
																	<span></span>
																</label>
															</span>';
                } else {
                    $button = '<span class="switch switch-icon">
																<label>
																	<input type="checkbox" name="status" data-id="' . $data->id . '" data-status="' . $data->status . '" class="change_status" />
																	<span></span>
																</label>
															</span>';
                }


                return $button;
            })

            ->addColumn('action', function ($data) {

                $button = '<a name="edit" href="' . route('admin.categories.edit', $data->id) . '" . id="' . $data->id . '"><span><i style="color: #66afe9" class="fas fa-edit"></i></span></a>';
                $button .= '&nbsp;&nbsp;&nbsp;&nbsp;';
                $button .= '<a name="delete" id="' . $data->id . '" title="' . $data->title . '" class="delete "><span><i  style="color: red" class="fas fa-trash-alt"></i></span></button>';
                $button .= '&nbsp;&nbsp;&nbsp;&nbsp;';;
                return $button;

            })->rawColumns(['action', 'images','status_update'])
            ->make(true);

    }

    public function create()
    {
        $data['categories'] = Category::where('parent_id','null')->get();
        return view('admin.categories.create', $data);
    }


    public function store(Request $request)
    {

//        return $request;
        try {


            $request->validate([
//            'slug'=>"required|max:190|unique:categories,slug",
                'title_ar' => "required|max:190",
                'description' => "nullable|max:10000",
                'title_he' => "required|max:190",
                'meta_description' => "nullable|max:10000",
                'image' => 'required',
                'icon_image_blue' => 'required',
                'icon_image_white' => 'required',
            ]);
            if ($request->hasFile('image')) {
                $image = uploadImage('categories', $request->file('image'));
            }
            if ($request->hasFile('icon_image_blue')) {
                $icon_image_blue = uploadImage('categories', $request->file('icon_image_blue'));
            }
            if ($request->hasFile('image')) {
                $icon_image_white = uploadImage('categories', $request->file('icon_image_white'));
            }
            $category = Category::create([
                "slug" => ['ar' => $this->slug($request->title_ar), 'he' => Str::slug($request->title_he)],
                "title" => ['ar' => $request->title_ar, 'he' => $request->title_he],
                "description" => $request->description,
                "parent_id" => $request->parent_id ?? 0,
                "meta_description" => $request->meta_description,
                "image" => $image,
                "icon_image_blue" => $icon_image_blue,
                "icon_image_white" => $icon_image_white,
            ]);


            return response()->json(["status" => 201, "message" => 'تم اضافة التصنيف بنجاح']);
        } catch (\Exception $exception) {

            return response()->json([
                'success' => 'false',
                'errors' => $exception->getMessage(),
            ], 400);


        }
    }


    public function edit($id)
    {

        $category=Category::findorfail($id);
        return view('admin.categories.edit', compact('category'));
    }


    public function update(Request $request)
    {


        $request->validate([
//            'slug'=>"required|max:190|unique:categories,slug,".$category->id,
            'title_ar' => "required|max:190",
            'description' => "nullable|max:10000",
            'title_he' => "required|max:190",
            'meta_description' => "nullable|max:10000",

        ]);
$category=Category::findOrfail($request->category_id);
        if ($request->hasFile('image')) {
            $image = uploadImage('categories', $request->file('image'));
        } else {
            $image = $category->image;
        }
        if ($request->hasFile('icon_image_blue')) {
            $icon_image_blue = uploadImage('categories', $request->file('icon_image_blue'));
        } else {
            $icon_image_blue = $category->icon_image_blue;
        }
        if ($request->hasFile('icon_image_white')) {
            $icon_image_white = uploadImage('categories', $request->file('icon_image_white'));
        } else {
            $icon_image_white = $category->icon_image_white;
        }
        if ($request->has('parent_id')) {
            $patent_id = $request->parent_id;
        } else {
            $patent_id = $category->parent_id;
        }
        $category->update([
            "slug" => ['ar' => $this->slug($request->title_ar), 'he' => $this->slug($request->title_he)],
            "title" => ['ar' => $request->title_ar, 'he' => $request->title_he],
            "description" => $request->description,
            "parent_id" => $patent_id,
            "meta_description" => $request->meta_description,
            "image" => $image,
            "icon_image_blue" => $icon_image_blue,
            "icon_image_white" => $icon_image_white,
        ]);

        notify()->success('تم تحديث القسم بنجاح', 'عملية ناجحة');
        return redirect()->route('admin.categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function Delete(Request $request)
    {
        $category = Category::where('id', $request->id)->first();
        $category->delete();
        notify()->success('تم حذف القسم بنجاح', 'عملية ناجحة');
        return redirect()->route('admin.categories.index');
    }


    public function slug($string, $separator = '-')
    {
        if (is_null($string)) {
            return "";
        }

        $string = trim($string);

        $string = mb_strtolower($string, "UTF-8");;

        $string = preg_replace("/[^a-z0-9_\sءاأإآؤئبتثجحخدذرزسشصضطظعغفقكلمنهويةى]#u/", "", $string);

        $string = preg_replace("/[\s-]+/", " ", $string);

        $string = preg_replace("/[\s_]/", $separator, $string);

        return $string;
    }

    public function updateStatus(Request $request)
    {
        try {
            $category = Category::where('id', $request->id)->first();
            if ($category->count() > 0) {


                $category->update([
                    'status' => $request->status,
                ]);

                return response()->json(["status" => 201, 'message' => 'تم تغير الحالة  بنجاح']);
            } else {
                return response()->json(["status" => 404, 'message' => 'هذا التصنيف غير موجود']);

            }
        } catch (\Exception $exception) {
            return response()->json(["status" => 500, 'message' => 'هناك خطا ما يرجى المحاولة لاحقا']);
        }
    }
    public function search(Request $request)
    {
        $search = $request->get('search');
        if($search == ''){
            $categories = Category::orderby('title','asc')->select('id','title')->limit(5)->get();
        }else{
            $categories = Category::orderby('title','asc')->select('id','title')->where('title', 'like', '%' .$search . '%')->limit(5)->get();
        }

        $response = array();
        foreach($categories as $category){
            $response[] = array(
                "id"=>$category->id,
                "text"=>$category->title
            );
        }
        return response()->json($response);




    }
}
