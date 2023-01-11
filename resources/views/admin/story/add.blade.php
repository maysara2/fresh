@extends('Modules.admin._layout')
    @section('title','القصص')

@section('content')
    <div class="card card-custom">
        <div class="card-header flex-wrap py-5">
            <div class="card-title">
                <h1 class="card-label">@lang('admin.Add Story')</h1>
            </div>
            <div class="card-toolbar">
                <!--begin::Dropdown-->

                <!--end::Dropdown-->
                <!--begin::Button-->


                <!--end::Button-->
            </div>
        </div>
        <div class="card-body">
            <!--begin: Datatable-->
            <form class="needs-validation "  name="add_product"   action="{{route('admin.story.store')}}" method="POST" enctype="multipart/form-data">

                <div class="modal-body">
                    @csrf
                    <div class="form-group row">
                        <div class="col-lg-6 col-sm-12">

                            <label for="title_ar">
                                <h4>   @lang('admin.title_ar')
                                    <span class="text-danger">*</span>
                                </h4>

                            </label>
                            <input type="text" name="title_ar" class="form-control" id="title_ar"
                                   aria-describedby="emailHelp" placeholder="@lang('admin.title_ar')" >
                            <div class="invalid-feedback">
                                @lang('admin.title_ar')
                            </div>
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <label for="title_en">
                                <h4>   @lang('admin.title_en')
                                    <span class="text-danger">*</span>
                                </h4>

                            </label>
                            <input type="text" name="title_en" class="form-control" id="title_en"
                                   placeholder="@lang('admin.title_en')" >
                            <div class="invalid-feedback">
                                @lang('admin.title_en')
                            </div>
                        </div>

                    </div>



                    <div class="form-group row">
                        <div class="col-lg-6 col-sm-12">

                            <label for="description_ar">
                                <h4>   @lang('admin.description_ar')
                                    <span class="text-danger">*</span>
                                </h4>

                            </label>
                            <div class="editor">

                            <textarea class="form-control descrption_editor" name="description_ar"></textarea>
                            </div>
                            <div class="invalid-feedback">
                                @lang('admin.description_ar')
                            </div>

                        </div>

                        <div class="col-lg-6 col-sm-12">

                            <label for="short_note_en">
                                <h4>   @lang('admin.description_en')
                                    <span class="text-danger">*</span>
                                </h4>

                            </label>
                            <div class="editor">

                            <textarea class="form-control descrption_editor" name="description_en"></textarea>
                            <div class="invalid-feedback">
                                @lang('admin.description_en')
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6 col-sm-12">
                            <label for="category_id">
                                <h4>   @lang('admin.category_name')
                                    <span class="text-danger">*</span>
                                </h4>

                            </label>


                            <select class="kt_select2_1"  size='1' name="story_cd">

                                <option value=''>@lang('admin.select category')</option>
                                @foreach($stories_cd as $story_cd)
                                    <option value="{{$story_cd->id}}">{{$story_cd->name}}</option>
                                @endforeach
                            </select>

                        </div>




                    </div>

                    <div class="form-group row">
                        <div class="col-lg-6 col-sm-12">
                            <label for="image">
                                <h4>   @lang('admin.Images')
                                    <span class="text-danger">*</span>
                                </h4>

                            </label>
                            <input class="form-control " name="image" type="file" accept="image/*" onchange="document.getElementById('image_product').src = window.URL.createObjectURL(this.files[0])">
                            <div class="invalid-feedback">
                                @lang('admin.Images')
                            </div>
                        </div>


                        <div class="w-50 text-center">


                            <img src="{{ asset('assets/images/img1.jpg') }}" style="width: 100px"
                                 class="img-thumbnail product_image-preview"  id="image_product" alt="">

                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary"><span><i class="fa fa-paper-plane"
                                                                               aria-hidden="true"></i></span>
                            @lang('admin.submit')

                        </button>

                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i
                                class="fa fa-window-close" aria-hidden="true"></i>
                            @lang('admin.cancel')
                        </button>
                    </div>
            </form>

        </div>
    </div>
@endsection
@include('Modules.admin.story.js.add_edit_js')

