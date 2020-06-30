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
                                <form action="{{ route('aboutus') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="c-tabs__list nav nav-tabs" id="myTab" role="tablist">
                                        @foreach($__languages as $language_key => $language_title )
                                            <a class="c-tabs__link {{tabActive($language_key)}}" id="nav-home-tab" data-toggle="tab" href="#{{$language_key}}" role="tab" aria-controls="nav-home" aria-selected="true">{{$language_title[0]}}</a>
                                        @endforeach
                                    </div>
                                    <div class="c-tabs__content tab-content" id="nav-tabContent" style="padding-top:0px ">
                                        @foreach($__languages as $language_key => $language_title )
                                            <div class="c-tabs__pane {{tabActive($language_key)}}" id="{{$language_key}}" role="tabpanel" aria-labelledby="nav-home-tab"  style="padding: 0">

                                                <h3>Blok 1</h3>
                                                <div class="c-field">
                                                    <label class="c-field__label">Başlıq 1</label>
                                                    <input type="text" class="c-input" name="title1_{{$language_key}}"  @if(!empty($items)) value="{{ $items->getTranslation('title1',$language_key,false) }}" @else value="{{ old('title1_'.$language_key) }}" @endif />
                                                </div>
                                                <div class="c-field">
                                                    <label class="c-field__label">Məlumat 1</label>
                                                    <textarea class="editor" name="content1_{{$language_key}}" rows="8" >@if(empty($items)){{old('content1_'.$language_key) }}@else{{$items->getTranslation('content1',$language_key,false)}}@endif</textarea>
                                                </div>
                                                <hr>

                                                <h3>Blok 2</h3>
                                                <div class="c-field">
                                                    <label class="c-field__label">Başlıq 2</label>
                                                    <input type="text" class="c-input" name="title2_{{$language_key}}"  @if(!empty($items)) value="{{ $items->getTranslation('title2',$language_key,false) }}" @else value="{{ old('title2_'.$language_key) }}" @endif />
                                                </div>
                                                <div class="c-field">
                                                    <label class="c-field__label">Alt Başlıq 1</label>
                                                    <input type="text" class="c-input" name="desc1_{{$language_key}}"  @if(!empty($items)) value="{{ $items->getTranslation('desc1',$language_key,false) }}" @else value="{{ old('desc1_'.$language_key) }}" @endif />
                                                </div>

                                                <div class="c-field">
                                                    <label class="c-field__label">Alt Mətn 1</label>
                                                    <input type="text" class="c-input" name="smtxt1_{{$language_key}}"  @if(!empty($items)) value="{{ $items->getTranslation('smtxt1',$language_key,false) }}" @else value="{{ old('smtxt1_'.$language_key) }}" @endif />
                                                </div>

                                                <div class="c-field">
                                                    <label class="c-field__label">Alt Başlıq 2</label>
                                                    <input type="text" class="c-input" name="desc2_{{$language_key}}"  @if(!empty($items)) value="{{ $items->getTranslation('desc2',$language_key,false) }}" @else value="{{ old('desc2_'.$language_key) }}" @endif />
                                                </div>

                                                <div class="c-field">
                                                    <label class="c-field__label">Alt Mətn 2</label>
                                                    <input type="text" class="c-input" name="smtxt2_{{$language_key}}"  @if(!empty($items)) value="{{ $items->getTranslation('smtxt2',$language_key,false) }}" @else value="{{ old('smtxt2_'.$language_key) }}" @endif />
                                                </div>


                                                <div class="c-field">
                                                    <label class="c-field__label">Alt Başlıq 3</label>
                                                    <input type="text" class="c-input" name="desc3_{{$language_key}}"  @if(!empty($items)) value="{{ $items->getTranslation('desc3',$language_key,false) }}" @else value="{{ old('desc3_'.$language_key) }}" @endif />
                                                </div>

                                                <div class="c-field">
                                                    <label class="c-field__label">Alt Mətn 3</label>
                                                    <input type="text" class="c-input" name="smtxt3_{{$language_key}}"  @if(!empty($items)) value="{{ $items->getTranslation('smtxt3',$language_key,false) }}" @else value="{{ old('smtxt3_'.$language_key) }}" @endif />
                                                </div>


                                                <div class="c-field">
                                                    <label class="c-field__label">Alt Başlıq 4</label>
                                                    <input type="text" class="c-input" name="desc4_{{$language_key}}"  @if(!empty($items)) value="{{ $items->getTranslation('desc4',$language_key,false) }}" @else value="{{ old('desc4_'.$language_key) }}" @endif />
                                                </div>

                                                <div class="c-field">
                                                    <label class="c-field__label">Alt Mətn 4</label>
                                                    <input type="text" class="c-input" name="smtxt4_{{$language_key}}"  @if(!empty($items)) value="{{ $items->getTranslation('smtxt4',$language_key,false) }}" @else value="{{ old('smtxt4_'.$language_key) }}" @endif />
                                                </div>
                                                <hr>
                                                <h3>Blok 3</h3>
                                                <div class="c-field">
                                                    <label class="c-field__label">Başlıq 3</label>
                                                    <input type="text" class="c-input" name="title3_{{$language_key}}"  @if(!empty($items)) value="{{ $items->getTranslation('title3',$language_key,false) }}" @else value="{{ old('title3_'.$language_key) }}" @endif />
                                                </div>
                                                <div class="c-field">
                                                    <label class="c-field__label">Məlumat 3.1</label>
                                                    <textarea class="editor" name="content2_{{$language_key}}" rows="8" >@if(empty($items)){{old('content2_'.$language_key) }}@else{{$items->getTranslation('content2',$language_key,false)}}@endif</textarea>
                                                </div>

                                               <div class="c-field">
                                                <label class="c-field__label">Məlumat 3.2</label>
                                                <textarea class="editor" name="content3_{{$language_key}}" rows="8" >@if(empty($items)){{old('content3_'.$language_key) }}@else{{$items->getTranslation('content3',$language_key,false)}}@endif</textarea>
                                            </div>
                                            </div>
                                        @endforeach
                                        <div class="c-field">
                                            <label class="c-field__label">1.Blok - Şəkil 1</label>
                                            @if(isset($items->img))
                                                <div class="admin_image old_img">
                                                    <img src="{{$items->img}}"style="max-width: 190px;border: 1px solid #aaa;">
                                                    <div class="admin_image_close" onclick="delete_old_image('old_img')"><i class="c-sidebar__icon feather icon-x-circle"></i></div>
                                                    <input type="hidden" name="old_img" value="{{$items->img}}">
                                                </div>
                                            @endif
                                            <input type="file" class="c-input" name="img" accept="image/*"/>
                                        </div>


                                        <div class="c-field">
                                            <button class="c-btn c-btn--info u-mb-xsmall" type="submit" name="btn">Yarat</button>
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
