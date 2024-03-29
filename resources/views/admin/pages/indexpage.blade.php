@extends('layouts.admin')
@section('title',' | '.$title)
@section('content')
    <div class="row justify-content-center" >
        <div class="col-lg-10">
            <div class="row u-mb-medium">
                <div class="col-12">
                    <div class="c-card">
                        <div class="row u-mb-medium">
                            <div class="col-lg-12 u-mb-xsmall">
                                <form action="{{ route('indexcreate') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="c-tabs__list nav nav-tabs" id="myTab" role="tablist">
                                        @foreach($__languages as $language_key => $language_title )
                                            <a class="c-tabs__link {{tabActive($language_key)}}" id="nav-home-tab" data-toggle="tab" href="#{{$language_key}}" role="tab" aria-controls="nav-home" aria-selected="true">{{$language_title[0]}}</a>
                                        @endforeach
                                    </div>
                                    <div class="c-tabs__content tab-content" id="nav-tabContent" style="padding-top:0px ">
                                        @foreach($__languages as $language_key => $language_title )

                                            <div class="c-tabs__pane {{tabActive($language_key)}}" id="{{$language_key}}" role="tabpanel" aria-labelledby="nav-home-tab" style="padding: 0">

                                                <div class="c-field">
                                                    <label class="c-field__label">Əsas Başlıq </label>
                                                    <input type="text" class="c-input" name="head_title_{{$language_key}}"  @if(!empty($items)) value="{{ $items->getTranslation('head_title',$language_key,false) }}" @else value="{{ old('head_title_'.$language_key) }}" @endif />
                                                </div>
                                                <h3>Blok 1</h3>
                                                <div class="c-field">
                                                    <label class="c-field__label">Başlıq 1</label>
                                                    <input type="text" class="c-input" name="title1_{{$language_key}}"  @if(!empty($items)) value="{{ $items->getTranslation('title1',$language_key,false) }}" @else value="{{ old('title1_'.$language_key) }}" @endif />
                                                </div>
                                                <div class="c-field">
                                                    <label class="c-field__label">Mətn Bloku 1</label>
                                                    <textarea class="c-input" name="contents1_{{$language_key}}" rows="10" {{requiredFall($language_key)}} >@if(empty($items)){{old('contents1'.$language_key)}}@else{{$items->getTranslation('contents1',$language_key,false)}}@endif</textarea>
                                                </div>
                                                <hr>
                                                <br>
                                                <h3>Blok 2</h3>
                                                <div class="c-field">
                                                    <label class="c-field__label">Başlıq 2 (aşağıda kampaniyaların mətni basligi)</label>
                                                    <input type="text" class="c-input" name="title2_{{$language_key}}" {{ requiredFall($language_key) }} @if(!empty($items)) value="{{ $items->getTranslation('title2',$language_key,false) }} " @else value="{{ old('title2_'.$language_key) }}" @endif  />
                                                </div>
                                                <hr>
                                                <div class="c-field">
                                                    <label class="c-field__label"> Mətn 2 (aşağıda kampaniyaların mətni)</label>
                                                    <textarea class="c-input" name="contents2_{{$language_key}}" rows="10" {{requiredFall($language_key)}} >@if(empty($items)){{old('contents2_'.$language_key)}}@else{{$items->getTranslation('contents2',$language_key,false)}}@endif</textarea>
                                                </div>

                                                <hr>
                                                <br>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="c-field">
                                        <label class="c-field__label">1.Blok - Video</label>
                                        @if(isset($items->video))
                                            <div class="admin_video old_video">
                                                <video src="{{$items->video}}"style="width: 190px;border: 1px solid #aaa;" controls="controls" autoplay="autoplay"></video>
                                                <div class="admin_image_close" onclick="delete_old_image('old_video')"><i class="c-sidebar__icon feather icon-x-circle"></i></div>
                                                <input type="hidden" name="old_video" value="{{$items->video}}">
                                            </div>
                                        @endif
                                        <input type="file" class="c-input" name="video" accept="video/*"/>
                                    </div>
                                    <div class="c-field">
                                        <label class="c-field__label">1.Blok - Şəkil 1</label>
                                        @if(isset($items->img1))
                                            <div class="admin_image old_img1">
                                                <img src="{{$items->img1}}"style="max-width: 190px;border: 1px solid #aaa;">
                                                <div class="admin_image_close" onclick="delete_old_image('old_img1')"><i class="c-sidebar__icon feather icon-x-circle"></i></div>
                                                <input type="hidden" name="old_img1" value="{{$items->img1}}">
                                            </div>
                                        @endif
                                        <input type="file" class="c-input" name="img1" accept="image/*"/>
                                    </div>

                                    <div class="c-field">
                                        <label class="c-field__label">1.Blok - Şəkil 2</label>
                                        @if(isset($items->img2))
                                            <div class="admin_image old_img2">
                                                <img src="{{$items->img2}}"style="max-width: 190px;border: 1px solid #aaa;">
                                                <div class="admin_image_close" onclick="delete_old_image('old_img2')"><i class="c-sidebar__icon feather icon-x-circle"></i></div>
                                                <input type="hidden" name="old_img2" value="{{$items->img2}}">
                                            </div>
                                        @endif
                                        <input type="file" class="c-input" name="img2" accept="image/*"/>
                                    </div>
                                    <div class="c-field">
                                        <hr>
                                        <br>
                                        <label class="c-field__label">2.Blok - Şəkil 1</label>
                                        @if(isset($items->img3))
                                            <div class="admin_image old_img3">
                                                <img src="{{$items->img3}}"style="max-width: 190px;border: 1px solid #aaa;">
                                                <div class="admin_image_close" onclick="delete_old_image('old_img3')"><i class="c-sidebar__icon feather icon-x-circle"></i></div>
                                                <input type="hidden" name="old_img3" value="{{$items->img3}}">
                                            </div>
                                        @endif
                                        <input type="file" class="c-input" name="img3" accept="image/*"/>
                                    </div>
                                    <div class="c-field">
                                        <label class="c-field__label">2.Blok - Şəkil 2</label>
                                        @if(isset($items->img4))
                                            <div class="admin_image old_img4">
                                                <img src="{{$items->img4}}"style="max-width: 190px;border: 1px solid #aaa;">
                                                <div class="admin_image_close" onclick="delete_old_image('old_img4')"><i class="c-sidebar__icon feather icon-x-circle"></i></div>
                                                <input type="hidden" name="old_img4" value="{{$items->img4}}">
                                            </div>
                                        @endif
                                        <input type="file" class="c-input" name="img4" accept="image/*"/>
                                    </div>
                                    <div class="c-field">
                                        <label class="c-field__label">2.Blok - Şəkil 3</label>
                                        @if(isset($items->img5))
                                            <div class="admin_image old_img5">
                                                <img src="{{$items->img5}}"style="max-width: 190px;border: 1px solid #aaa;">
                                                <div class="admin_image_close" onclick="delete_old_image('old_img5')"><i class="c-sidebar__icon feather icon-x-circle"></i></div>
                                                <input type="hidden" name="old_img5" value="{{$items->img5}}">
                                            </div>
                                        @endif
                                        <input type="file" class="c-input" name="img5" accept="image/*"/>
                                    </div>
                                    <hr>
                                    <br>
                                    <div class="c-field">
                                        <label class="c-field__label">3.Blok - Şirkətlərin şəkili</label>
                                        @if(isset($items->img6))
                                            <div class="admin_image old_img6">
                                                <img src="{{$items->img6}}"style="max-width: 190px;border: 1px solid #aaa;">
                                                <div class="admin_image_close" onclick="delete_old_image('old_img6')"><i class="c-sidebar__icon feather icon-x-circle"></i></div>
                                                <input type="hidden" name="old_img6" value="{{$items->img6}}">
                                            </div>
                                        @endif
                                        <input type="file" class="c-input" name="img6" accept="image/*"/>
                                    </div>
                                    <div class="c-field">
                                        <button class="c-btn c-btn--info u-mb-xsmall" type="submit" name="btn">Yarat</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function deloldimg(oldimg) {
            var elem = document.getElementById(oldimg);
            elem.remove();
        }
    </script>
@endsection
