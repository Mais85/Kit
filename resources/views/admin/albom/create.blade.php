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
                                                <input type="text" class="c-input" name="name" value="{{ old('name') }}"/>
                                            </div>
                                            <div class="c-field">
                                                <label class="c-field__label">Cover Şəkili</label>
                                                <input type="file" class="c-input" name="img" accept="image/*"/>
                                            </div>
                                            <div class="c-field">
                                                <label class="c-field__label">Şəkil(lər) yüklə</label>
                                                <input name="file"  type="file" accept="image/*" class="my-pond" multiple />
                                            </div>
                                            <label for="">Şəkil dərc olunsun ?</label><br>
                                            <input type="radio" id="no" name="isPublished" value="0" checked>
                                            <label for="no">Xeyir</label>
                                            <input type="radio" id="yes" name="isPublished" value="1">
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
                // url: 'http://kit/admin/alboms',
                process: {
                    url: '/admin/alboms/photo',
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
                    url: '/photo/delete',
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
            imageEditEditor: dokaCreate()
        });

        });
    </script>
@endsection
