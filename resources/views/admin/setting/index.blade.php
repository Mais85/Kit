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
                                <form action="{{ route('settingstore') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="c-tabs__list nav nav-tabs" id="myTab" role="tablist">
                                        @foreach($__languages as $language_key => $language_title )
                                            <a class="c-tabs__link {{tabActive($language_key)}}" id="nav-home-tab" data-toggle="tab" href="#{{$language_key}}" role="tab" aria-controls="nav-home" aria-selected="true">{{$language_title[0]}}</a>
                                        @endforeach
                                    </div>
                                    <div class="c-tabs__content tab-content" id="nav-tabContent">
                                        <div class="c-tabs__pane active">
                                            <div class="c-field">
                                                <label class="c-field__label">Başlıq (saytın adı)</label>
                                                <input class="c-input" type="text" name="title" @if(!empty($items->title)) value="{{ $items->title }}" @else value="{{ old('title') }}" @endif/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="c-tabs__content tab-content" id="nav-tabContent">
                                        @foreach($__languages as $language_key => $language_title )
                                            <div class="c-tabs__pane {{tabActive($language_key)}}" id="{{$language_key}}" role="tabpanel" aria-labelledby="nav-home-tab">


                                                <div class="c-field">
                                                    <label class="c-field__label">Meta İzah</label>
                                                    <textarea class="c-input" name="meta_description_{{$language_key}}" rows="4" {{requiredFall($language_key)}}>@if(empty($items)){{old('meta_description_'.$language_key) }}@else{{$items->getTranslation('meta_description',$language_key,false)}}@endif</textarea>
                                                </div>

                                                <div class="c-field">
                                                    <label class="c-field__label">Meta Açar Sözlər</label>
                                                    <textarea class="c-input" name="meta_keywords_{{$language_key}}" rows="4" {{requiredFall($language_key)}}>@if(empty($items)){{old('meta_keywords_'.$language_key) }}@else{{$items->getTranslation('meta_keywords',$language_key,false)}}@endif</textarea>
                                                </div>

                                                <div class="c-field">
                                                    <label class="c-field__label">Əlaqə Footer Metni</label>
                                                    <textarea class="editor" name="footcontent_{{$language_key}}" rows="4" {{requiredFall($language_key)}}>@if(empty($items)){{old('footcontent_'.$language_key) }}@else{{$items->getTranslation('footcontent',$language_key,false)}}@endif</textarea>
                                                </div>
                                            </div>
                                        @endforeach
                                        <hr>
                                        <div class="c-tabs__pane active">
                                            <div class="c-field">
                                                <div class="c-field">
                                                    <div class="c-field">
                                                        <label class="c-field__label">Ünvan</label>
                                                        <input class="c-input" type="text" name="address"@if(!empty($items))  value='{{$items->address}}' @else value="{{ old('address') }}" @endif >
                                                    </div>
                                                    <div class="c-field">
                                                        <label class="c-field__label">Email</label>
                                                        <input class="c-input" type="text" name="email"@if(!empty($items))  value='{{$items->email}}' @else value="{{ old('email') }}" @endif >
                                                    </div>
                                                    <div class="c-field">
                                                        <label class="c-field__label">Email 2</label>
                                                        <input class="c-input" type="text" name="email2"@if(!empty($items))  value='{{$items->email2}}' @else value="{{ old('email2') }}" @endif >
                                                    </div>
                                                    <label class="c-field__label">Telefon</label>
                                                    <input class="c-input" type="text" name="phone" placeholder='+994 XX XXX XX XX' @if(!empty($items)) value={{$items->phone}} @else value="{{ old('phone') }}" @endif>
                                                    <label class="c-field__label">Qısa nömrə</label>
                                                    <input class="c-input" type="text" name="shortphone" placeholder='*999' @if(!empty($items)) value={{$items->shortphone}} @else value="{{ old('shortphone') }}" @endif>
                                                    <label class="c-field__label">Mob.Telefon</label>
                                                    <input class="c-input" type="text" name="mobphone" placeholder='+994 XX XXX XX XX' @if(!empty($items)) value={{$items->mobphone}} @else value="{{ old('mobphone') }}" @endif>
                                                    <label class="c-field__label">Mob.Telefon 2</label>
                                                    <input class="c-input" type="text" name="mobphone2" placeholder='+994 XX XXX XX XX' @if(!empty($items)) value={{$items->mobphone2}} @else value="{{ old('mobphone2') }}" @endif>
                                                </div>
                                                <div class="c-field">
                                                    <label class="c-field__label">Facebook</label>
                                                    <input class="c-input" type="text" name="fb"@if(!empty($items))  value='{{$items->fb}}' @else value="{{ old('fb') }}" @endif >
                                                </div>
                                                <div class="c-field">
                                                    <label class="c-field__label">Linkedin</label>
                                                    <input class="c-input" type="text" name="linkedin" @if(!empty($items))  value='{{$items->linkedin}}' @else value="{{ old('linkedin') }}" @endif >
                                                </div>
                                                <div class="c-field">
                                                    <label class="c-field__label">Instagram</label>
                                                    <input class="c-input" type="text" name="instagram" @if(!empty($items))  value='{{$items->instagram}}' @else value="{{ old('instagram') }}" @endif >
                                                </div>
                                                <div class="c-field">
                                                    <label class="c-field__label">Youtube</label>
                                                    <input class="c-input" type="text" name="youtube" @if(!empty($items))  value='{{$items->youtube}}' @else value="{{ old('youtube') }}" @endif >
                                                </div>

                                                @if(!empty($items->logo))
                                                    <div class="admin_image old_logo">
                                                        <label class="c-field__label">Logo</label>
                                                        <img src="{{$items->logo}}"style="max-width: 190px;border: 1px solid #aaa;">
                                                        <div class="admin_image_close" onclick="delete_old_image('old_logo')"><i class="c-sidebar__icon feather icon-x-circle"></i></div>
                                                        <input type="hidden" name="old_logo" value="{{$items->logo}}">
                                                    </div>
                                                @endif
                                                <label class="c-field__label">Logo</label>
                                                <input type="file" class="c-input" name="logo" accept="image/*"/>
                                                <br>
                                                <button class="c-btn c-btn--info u-mb-xsmall" type="submit" name="btn">Yenilə</button>
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
    <script type="text/javascript">
        function deloldimg(oldimg) {
            var elem = document.getElementById(oldimg);
            elem.remove();
        }
    </script>
@endsection
