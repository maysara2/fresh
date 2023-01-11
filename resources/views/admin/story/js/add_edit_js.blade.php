{{--@section('js')--}}
{{--    <script src="{{asset('admin/assets/plugins/custom/tinymce/tinymce.bundle.js')}}"></script>--}}

{{--    --}}{{--    <script src="{{asset('admin/assets/js/pages/crud/forms/editors/tinymce.js')}}"></script>--}}
{{--    --}}{{--    <script src="{{asset('admin/assets/js/pages/crud/forms/editors/tinymce.js')}}"></script>--}}
{{--    <script src="{{asset('admin/assets/plugins/custom/uppy/uppy.bundle.js')}}"></script>--}}
{{--    <script src="{{asset('admin/assets/js/pages/crud/file-upload/uppy.js')}}"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.0/dropzone.js"></script>--}}
{{--    <script src="{{asset('admin/assets/js/pages/crud/forms/widgets/form-repeater.js')}}"></script>--}}

{{--    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>--}}
{{--    <script src="{{asset('assets/js/image_preview.js')}}"></script>--}}
{{--    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3GMMqEWU5bNm14rWuM1vcRBNdNDXRKKnfH/m4=" crossorigin="anonymous"></script>--}}

{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js" integrity="sha512-BmM0/BQlqh02wuK5Gz9yrbe7VyIVwOzD1o40yi1IsTjriX/NGF37NyXHfmFzIlMmoSIBXgqDiG1VNU6kB5dBbA==" crossorigin="anonymous"></script>--}}

{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>--}}

{{--    <script>--}}
{{--        tinymce.init({--}}
{{--            selector: 'textarea#editor', });--}}
{{--    </script>--}}
{{--    <script>--}}


{{--        // CKEDITOR.config.extraPlugins = 'youtube';--}}
{{--        // CKEDITOR.config.youtube_width = '640';--}}
{{--        // CKEDITOR. config.youtube_height = '480';--}}
{{--        // CKEDITOR. config.youtube_responsive = true;--}}
{{--        // CKEDITOR.config.youtube_autoplay = true;--}}
{{--        //--}}
{{--        // CKEDITOR.config.extraPlugins = 'embedbase';--}}
{{--        // CKEDITOR.config.extraPlugins = 'embed';--}}
{{--        // CKEDITOR.config.embed_provider = '//ckeditor.iframe.ly/api/oembed?url={url}&callback={callback}';--}}
{{--        // CKEDITOR.config.language = 'ar';--}}
{{--        // $(".descrption_editor").each(function(){--}}
{{--        //     CKEDITOR.replace( this, {filebrowserImageBrowseUrl: 'laravel-filemanager'});--}}
{{--        // });--}}



{{--        $('.kt_select2_1').select2({--}}
{{--            width: '100%',--}}

{{--        });--}}






{{--        $(function() {--}}
{{--            // Initialize form validation on the registration form.--}}
{{--            // It has the name attribute "registration"--}}
{{--            $("form[name='add_product']").validate({--}}
{{--                // Specify validation rules--}}
{{--                rules: {--}}
{{--                    // The key name on the left side is the name attribute--}}
{{--                    // of an input field. Validation rules are defined--}}
{{--                    // on the right side--}}
{{--                    title_ar: "required",--}}
{{--                    title_en: "required",--}}
{{--                    story_cd:"required",--}}
{{--                    ignore: [],--}}
{{--                    debug: false,--}}

{{--                    description_ar: {--}}
{{--                required: function()--}}
{{--                {--}}
{{--                    CKEDITOR.instances.description_ar.updateElement();--}}
{{--                },--}}

{{--                minlength:10--}}
{{--            },--}}

{{--                    description_en:"required",--}}
{{--                    image:{--}}
{{--                        required: true,--}}
{{--                        accept: "image/jpeg, image/pjpeg"--}}

{{--                    },--}}

{{--                    // attribute_id:"required",--}}






{{--                },--}}
{{--                // Specify validation error messages--}}
{{--                messages: {--}}
{{--                    title_ar:'@lang('admin.title_ar')',--}}
{{--                    title_en:'@lang('admin.title_en')',--}}
{{--                    sub_title_ar:'@lang('admin.sub_title_ar')',--}}
{{--                    sub_title_en:'@lang('admin.sub_title_en')',--}}
{{--                    story_cd:'@lang('admin.category_name')',--}}
{{--                    description_ar:'@lang('admin.description_ar')',--}}
{{--                    description_en:'@lang('admin.description_en')',--}}
{{--                    image: '@lang('admin.Images')',--}}


{{--                },--}}
{{--                // Make sure the form is submitted to the destination defined--}}
{{--                // in the "action" attribute of the form when valid--}}
{{--                submitHandler: function(form) {--}}
{{--                    form.submit();--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}

{{--        $(function() {--}}
{{--            // Initialize form validation on the registration form.--}}
{{--            // It has the name attribute "registration"--}}
{{--            $("form[name='edit_story']").validate({--}}
{{--                // Specify validation rules--}}
{{--                rules: {--}}
{{--                    // The key name on the left side is the name attribute--}}
{{--                    // of an input field. Validation rules are defined--}}
{{--                    // on the right side--}}
{{--                    name_ar: "required",--}}
{{--                    name_en: "required",--}}
{{--                    smell_product_en:"required",--}}
{{--                    smell_product_ar:"required",--}}

{{--                    category_id:"required",--}}
{{--                    ignore: [],--}}
{{--                    debug: false,--}}

{{--                    description_ar: {--}}
{{--                        required: function()--}}
{{--                        {--}}
{{--                            CKEDITOR.instances.description_ar.updateElement();--}}
{{--                        },--}}

{{--                        minlength:10--}}
{{--                    },--}}
{{--                    description_en:"required",--}}
{{--                    image_product:{--}}
{{--                        accept: "image/jpeg, image/pjpeg"--}}

{{--                    },--}}
{{--                    fragrance_image:{--}}
{{--                        accept: "image/jpeg, image/pjpeg"--}}

{{--                    },--}}
{{--                    formula_image:{--}}
{{--                        accept: "image/jpeg, image/pjpeg"--}}

{{--                    },--}}
{{--                    size:"required",--}}
{{--                    // attribute_id:"required",--}}






{{--                },--}}
{{--                // Specify validation error messages--}}
{{--                messages: {--}}
{{--                    name_ar:'@lang('admin.name_ar')',--}}
{{--                    name_en:'@lang('admin.name_ar')',--}}
{{--                    smell_product_ar:'@lang('admin.smell_product_ar')',--}}
{{--                    smell_product_en:'@lang('admin.smell_product_en')',--}}
{{--                    category_id:'@lang('admin.category_name')',--}}
{{--                    size:'@lang('admin.size')',--}}
{{--                    description_ar:'@lang('admin.description_ar')',--}}
{{--                    description_en:'@lang('admin.description_en')',--}}
{{--                    formula_image: '@lang('admin.formula_image')',--}}
{{--                    fragrance_image: '@lang('admin.fragrance_image')',--}}
{{--                    image_product: '@lang('admin.formula_image')',--}}


{{--                },--}}
{{--                // Make sure the form is submitted to the destination defined--}}
{{--                // in the "action" attribute of the form when valid--}}
{{--                submitHandler: function(form) {--}}
{{--                    form.submit();--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}

{{--    </script>--}}
{{--@endsection--}}
