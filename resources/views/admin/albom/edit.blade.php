@extends('layouts.admin')
@section('title',' | '.$title)

@section('assets')
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/assets/admin/css/doka.min.css') }}">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-edit/dist/filepond-plugin-image-edit.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-file-poster/dist/filepond-plugin-file-poster.css" rel="stylesheet">
@endsection

@section('content')
    <div class="row justify-content-center" >
        <div class="col-lg-10">
            <div class="row u-mb-medium">
                <div class="col-12">
                    <div class="c-card">
                        <div class="row u-mb-medium">
                            <div class="col-lg-12 u-mb-xsmall">
                                <form action="" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="c-tabs__content tab-content" id="nav-tabContent" style="padding-top:0px ">
                                        <div class="c-tabs__pane active">
                                            <div class="c-field">
                                                <label class="c-field__label">Albom adı</label>
                                                <input type="text" class="c-input" name="name" value="@if(isset($items->name)){{ $items->name }}@else{{ old('name') }}@endif"/>
                                            </div>
                                            <div class="c-field">
                                                <label class="c-field__label">Şəkil </label>
                                                @if($items->coverimg)
                                                    <div id="old_img" class="admin_image old_img">
                                                        <img src="{{$items->coverimg}}" style="max-width: 190px;border: 1px solid #aaa;">
                                                        <div class="admin_image_close" onclick="deloldimg('old_img');"><i class="c-sidebar__icon feather icon-x-circle"></i></div>
                                                        <input type="hidden" name="old_img" value="{{$items->coverimg}}">
                                                    </div>
                                                @endif
                                                <input type="file" class="c-input" name="img" accept="image/*"/>
                                            </div>
                                            <div class="c-field">
                                                <label class="c-field__label">Qalereya</label>
                                                <style type="text/css">
                                                    .fake-gallery-item {}
                                                    .fake-gallerry-item img{position: relative;max-height: 256px;margin: auto;}
                                                </style>
                                                <input name="file" type="file" accept="image/*" class="my-pond" multiple />

                                                <div class="row">
                                                    @forelse($photos  as $photo)
                                                        <div class="fake-gallerry-item col-6 col-md-3 col-xl-3" style="position:relative;max-height: 256px;background-color: #222222;text-align: center;border-radius: 0.45em;overflow: hidden;" >
                                                            <div class="fg-close" style="position: absolute;top:9px;left: 9px;z-index: 3;cursor: pointer;">

                                                                <!--button onclick="delete_old_image('old_img')" class="filepond--file-action-button filepond--action-remove-item" type="button" data-align="left" style="transform:translate3d(0px, 0px, 0) scale3d(1, 1, 1) ;opacity:1;clear: both;"><i class="feather icon-trash-2 "></i><span></span></button-->
                                                                <!--br-->

                                                                <button onclick="confirm_gitem_delete(this,'/admin/alboms/photo/delete/{{$photo->id}}')" class="filepond--file-action-button filepond--action-remove-item" type="button" data-align="left" style="transform:translate3d(0px, 0px, 0) scale3d(1, 1, 1) ;opacity:1;clear: both;"><i class="feather icon-trash-2 "></i><span></span></button>
                                                                <br>
                                                                <button onclick='dc("{{$photo->id}}")' class="filepond--file-action-button filepond--action-remove-item" type="button" data-align="left" style="margin-left: -4px;margin-top: 2px;transform:translate3d(0px, 0px, 0) scale3d(1, 1, 1) ;opacity:1;"><i class="feather icon-edit "></i><span></span></button>


                                                            </div>

                                                            <div class="filepond--image-preview-overlay filepond--image-preview-overlay-idle" style="opacity:1;pointer-events:none;"><svg width="500" height="200" viewBox="0 0 500 200" preserveAspectRatio="none">
                                                                    <defs>
                                                                        <radialGradient id="gradient-1" cx=".5" cy="1.25" r="1.15">
                                                                            <stop offset="50%" stop-color="#000000"></stop>
                                                                            <stop offset="56%" stop-color="#0a0a0a"></stop>
                                                                            <stop offset="63%" stop-color="#262626"></stop>
                                                                            <stop offset="69%" stop-color="#4f4f4f"></stop>
                                                                            <stop offset="75%" stop-color="#808080"></stop>
                                                                            <stop offset="81%" stop-color="#b1b1b1"></stop>
                                                                            <stop offset="88%" stop-color="#dadada"></stop>
                                                                            <stop offset="94%" stop-color="#f6f6f6"></stop>
                                                                            <stop offset="100%" stop-color="#ffffff"></stop>
                                                                        </radialGradient>
                                                                        <mask id="mask-1">
                                                                            <rect x="0" y="0" width="500" height="200" fill="url(#gradient-1)"></rect>
                                                                        </mask>
                                                                    </defs>
                                                                    <rect x="0" width="500" height="200" fill="currentColor" mask="url(#mask-1)"></rect>
                                                                </svg></div>
                                                            <img src="{{ $photo->img }}" id="gal{{$photo->id}}">
                                                        </div>
                                                    @empty
                                                        <h4>Şəkil Yüklə</h4>
                                                    @endforelse
                                                </div>

                                            </div>
                                            <label for="">Xəbər dərc olunsun ?</label><br>
                                            <input type="radio" id="no" name="isPublished" value="0" {{ checked('0',$items->isPublished) }}>
                                            <label for="no">Xeyir</label>
                                            <input type="radio" id="yes" name="isPublished" value="1" {{ checked('1',$items->isPublished) }}>
                                            <label for="yes">Bəli</label>
                                            <div class="c-field">
                                                <button class="c-btn c-btn--info u-mb-xsmall" type="submit" name="btn">Yarat</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    @parent
    <script src="{{ asset('/assets/admin/js/doka.js') }}"></script>
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    <script src="https://unpkg.com/jquery-filepond/filepond.jquery.js"></script>

    <!-- include FilePond plugins -->
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-edit/dist/filepond-plugin-image-edit.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-transform/dist/filepond-plugin-image-transform.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-crop/dist/filepond-plugin-image-crop.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-resize/dist/filepond-plugin-image-resize.js"></script>
    {{--    <script src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.js"></script>--}}
    {{--    <script src="https://unpkg.com/filepond-plugin-file-encode/dist/filepond-plugin-file-encode.js"></script>--}}
    {{--    <script src="https://unpkg.com/filepond-plugin-file-rename/dist/filepond-plugin-file-rename.js"></script>--}}
    <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-validate-size/dist/filepond-plugin-image-validate-size.js"></script>
    {{--    <script src="https://unpkg.com/filepond-plugin-file-poster/dist/filepond-plugin-file-poster.js"></script>--}}

    <script>
        function deloldimg(oldimg) {
            var elem = document.getElementById(oldimg);
            elem.remove();
        }
        /* Prevent Form Submit Before Loading */
        var enter_count_fp = 0;
        var out_count_fp = 0;
        function fp_entered(){
            enter_count_fp++;
            $('#submit_main_form').prop("disabled", true);
        }
        function fp_out(){
            out_count_fp++;
            if(enter_count_fp == out_count_fp){
                $('#submit_main_form').prop("disabled", false);
            }
        }
        /* \prevent... */
        $(function(){

            // First register any plugins
            $.fn.filepond.registerPlugin(
                FilePondPluginImagePreview,
                FilePondPluginImageEdit,
                FilePondPluginImageTransform,
                FilePondPluginImageCrop,
                FilePondPluginImageResize,
                //	FilePondPluginImageExifOrientation,
                //	FilePondPluginFileEncode,
                //	FilePondPluginFileRename,
                FilePondPluginFileValidateSize,
                FilePondPluginFileValidateType,
                FilePondPluginImageValidateSize,
                //	FilePondPluginFilePoster
            );

            $('.my-pond').filepond( {
                server: {
                    url: 'http://kit/admin/alboms/',
                    process: {
                        url: '/photo',
                        method: 'POST',
                        withCredentials: false,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        },
                        timeout: 7000,
                        onload: null,
                        onerror: null,
                        ondata: null
                    },

                    revert: {
                        url: 'photo/delete',
                        method: 'DELETE',
                        withCredentials: true,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        },
                        timeout: 7000,
                        onload: null,
                        onerror: null,
                        ondata: null
                    }
                },
                labelIdle: `<i class="feather icon-camera" style='font-size: 30px;'></i> <br> Şəklinizi sürüşdürüb buraxın və ya <span class="filepond--label-action">Seçin</span>`,
                allowMultiple: 'true',

                //transform
                allowImageTransform: 'true',
                imageTransformOutputMimeType: 'image/png',

                //fileSizeValidation
                allowFileSizeValidation: 'true',
                maxFileSize: '10MB',
                maxTotalFileSize: '128MB',
                labelMaxFileSize: 'Şəkilin həcmi {filesize} -dən artıq ola bilməz!',


                //filetype
                allowFileTypeValidation: 'true',
                acceptedFileTypes: ['image/*'],
                onaddfilestart: (file) => { fp_entered(); },
                onaddfile: () => { fp_out(); },

                // Use Doka.js as image editor
                imageEditEditor: dokaCreate({
                    utils: ['crop', 'filter', 'color', 'markup', 'resize']
                })
            });

        });

        function dc(id){
            dokaCreate({
                "src": $("#gal"+id).attr("src"),
                onconfirm: function(out){
                    var post_data = new FormData();
                    var reader = new FileReader();
                    reader.readAsDataURL(out.file);
                    reader.onloadend = function() {
                        var base64data = reader.result;
                        post_data.append('img', base64data);
                        var imageUrl = URL.createObjectURL(out.file);
                        $.ajax({
                            type: 'POST',
                            url: '/admin/announcements/photo/update/'+id,
                            data: post_data,
                            processData: false,
                            contentType: false
                        }).done(function(data) {
                            $("#gal"+id).attr("src",imageUrl);
                        });
                    }
                }
            });

        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
@endsection
