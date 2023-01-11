@extends('layouts.admin')

@section('title','عرض محتويات  لابروسان')

@section('content')
<div class="col-12 p-3">
	<div class="col-12 col-lg-12 p-0 ">


		<form id="validate-form" class="row" enctype="multipart/form-data" method="POST" action="{{route('admin.labronsan.update')}}">
		@csrf


            <div class="col-12 col-lg-12 p-0 main-box">
                <div class="col-12 col-lg-12 p-0 main-box">
                    <div class="card card-custom example example-compact">
                        <div class="card-header">

                            <div class="col-12 px-0">
                                <div class="col-12 px-3 py-3" style="font-size: 20px;">
                                    بيانات لابروسان
                                </div>
                                <div class="col-12 divider" style="min-height: 2px;"></div>
                            </div>

                        </div>
                        <div class="card-body">

                            <div class="col-12 p-3 row">




                                <div class="col-12 col-lg-6 p-2">
                                    <div class="col-12">
                                        العنوان  باللغة العربية
                                    </div>
                                    <div class="col-12 pt-3">
                                        <input type="text" name="title_ar" required   maxlength="190" class="form-control" value="{{$labrosan->getTranslation('title','ar')}}" >
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 p-2">
                                    <div class="col-12">العنوان  باللغة العبرية
                                    </div>
                                    <div class="col-12 pt-3">
                                        <input type="text" name="title_he" required   maxlength="190" class="form-control" value="{{$labrosan->getTranslation('title','he')}}" >
                                    </div>
                                </div>

                                <div class="col-12 col-lg-6 p-2">
                                    <div class="col-12">
                                        العنوان الفرعي  باللغة العربية
                                    </div>
                                    <div class="col-12 pt-3">
                                        <input type="text" name="sub_title_ar" required   maxlength="190" class="form-control" value="{{$labrosan->getTranslation('sub_title','ar')}}" >
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 p-2">
                                    <div class="col-12">
                                        العنوان الفرعي  باللغة العبرية

                                    </div>
                                    <div class="col-12 pt-3">
                                        <input type="text" name="sub_title_he" required   maxlength="190" class="form-control" value="{{$labrosan->getTranslation('sub_title','he')}}" >
                                    </div>
                                </div>


                                <div class="col-12 col-lg-6 p-2">
                                    <div class="col-12">
                                        باللغة العربية	الوصف
                                    </div>
                                    <div class="col-12 pt-3">
                                        <textarea name="description_ar"  >{{$labrosan->getTranslation('description','ar')}}</textarea>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-6 p-2">
                                    <div class="col-12">
                                        باللغة العبرية	الوصف
                                    </div>
                                    <div class="col-12 pt-3">
                                        <textarea name="description_he"  >{{$labrosan->getTranslation('description','he')}}</textarea>
                                    </div>
                                </div>


                                {{--                <div class="col-12  p-2">--}}
                                {{--                    <div class="col-12">--}}
                                {{--                        الوصف--}}
                                {{--                    </div>--}}
                                {{--                    <div class="col-12 pt-3">--}}
                                {{--                        <textarea name="description" class="editor with-file-explorer" >{!!  $category->description!!}</textarea>--}}
                                {{--                    </div>--}}
                                {{--                </div>--}}
                            </div>


                            <div class="col-12 p-3">
                                <button class="btn btn-success" id="submitEvaluation">حفظ</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

		</form>
	</div>
</div>
@endsection

