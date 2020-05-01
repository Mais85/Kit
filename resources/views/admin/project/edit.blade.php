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
                                <form action="{{ route('projectsUpdate') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="c-tabs__list nav nav-tabs" id="myTab" role="tablist">
                                        @foreach($__languages as $language_key => $language_title )
                                            <a class="c-tabs__link {{tabActive($language_key)}}" id="nav-home-tab" data-toggle="tab" href="#{{$language_key}}" role="tab" aria-controls="nav-home" aria-selected="true">{{$language_title[0]}}</a>
                                        @endforeach
                                    </div>
                                    <div class="c-tabs__content tab-content" id="nav-tabContent" style="padding-top:0px ">
                                        @foreach($__languages as $language_key => $language_title )
                                            <div class="c-tabs__pane {{tabActive($language_key)}}" id="{{$language_key}}" role="tabpanel" aria-labelledby="nav-home-tab">
                                                <h3>Bölmə 1</h3>
                                                <div class="c-field">
                                                    <label class="c-field__label">Layihənin adı</label>
                                                    <input type="text" class="c-input" name="title1_{{$language_key}}" value="@if(isset($items->title1)){{$items->getTranslation('title1',$language_key,false)}} @else {{old('title1_'.$language_key) }}@endif"/>
                                                </div>
                                                <div class="c-field">
                                                    <label class="c-field__label">Kateqoriyası</label>
                                                    <input type="text" class="c-input" name="catname_{{$language_key}}" value="@if(isset($items->catname)){{$items->getTranslation('catname',$language_key,false)}} @else {{old('catname_'.$language_key) }}@endif"/>
                                                </div>
                                                <div class="c-field">
                                                    <label class="c-field__label">Qısa Başlıq</label>
                                                    <textarea class="c-input" name="desc_{{$language_key}}" rows="4" >@if(empty($items->desc)){{old('desc_'.$language_key) }}@else{{$items->getTranslation('desc',$language_key,false)}}@endif</textarea>
                                                </div>
                                                <hr>
                                                <h3>Bölmə 2</h3>
                                                <div class="c-field">
                                                    <label class="c-field__label">Başlıq 2</label>
                                                    <input type="text" class="c-input" name="title2_{{$language_key}}" value="@if(isset($items->title2)){{$items->getTranslation('title2',$language_key,false)}} @else {{old('title2_'.$language_key) }}@endif"/>
                                                </div>
                                                <div class="c-field">
                                                    <label class="c-field__label">Mətn 1</label>
                                                    <textarea class="c-input" name="contents1_{{$language_key}}" rows="7" >@if(empty($items->contents1)){{old('contents1_'.$language_key) }}@else{{$items->getTranslation('contents1',$language_key,false)}}@endif</textarea>
                                                </div>
                                                <div class="c-field">
                                                    <label class="c-field__label">Mətn 2</label>
                                                    <textarea class="c-input" name="contents2_{{$language_key}}" rows="7" >@if(empty($items->contents2)){{old('contents2_'.$language_key) }}@else{{$items->getTranslation('contents2',$language_key,false)}}@endif</textarea>
                                                </div>
                                                <hr>
                                                <h3>Bölmə 3</h3>
                                                <div class="c-field">
                                                    <label class="c-field__label">Başlıq 1</label>
                                                    <input type="text" class="c-input" name="title3_{{$language_key}}" value="@if(isset($items->title3)){{$items->getTranslation('title3',$language_key,false)}} @else {{old('title3_'.$language_key) }}@endif"/>
                                                </div>
                                                <div class="c-field">
                                                    <label class="c-field__label">Başlıq 2</label>
                                                    <input type="text" class="c-input" name="title4_{{$language_key}}" value="@if(isset($items->title4)){{$items->getTranslation('title4',$language_key,false)}} @else {{old('title4_'.$language_key) }}@endif"/>
                                                </div>
                                                <div class="c-field">
                                                    <label class="c-field__label">Başlıq 3</label>
                                                    <input type="text" class="c-input" name="title5_{{$language_key}}" value="@if(isset($items->title5)){{$items->getTranslation('title5',$language_key,false)}} @else {{old('title5
                                                    _'.$language_key) }}@endif"/>
                                                </div>
                                                <div class="c-field">
                                                    <label class="c-field__label">Başlıq 4</label>
                                                    <input type="text" class="c-input" name="title6_{{$language_key}}" value="@if(isset($items->title6)){{$items->getTranslation('title6',$language_key,false)}} @else {{old('title6_'.$language_key) }}@endif"/>
                                                </div>
                                                <div class="c-field">
                                                    <label class="c-field__label">İnfo 1</label>
                                                    <input type="text" class="c-input" name="info3_{{$language_key}}" value="@if(isset($items->info3)){{$items->getTranslation('info3',$language_key,false)}} @else {{old('info3_'.$language_key) }}@endif"/>
                                                </div>
                                                <div class="c-field">
                                                    <label class="c-field__label">İnfo 2</label>
                                                    <input type="text" class="c-input" name="info4_{{$language_key}}" value="@if(isset($items->info4)){{$items->getTranslation('info4',$language_key,false)}} @else {{old('info4_'.$language_key) }}@endif"/>
                                                </div>
                                                <div class="c-field">
                                                    <label class="c-field__label">İnfo 3</label>
                                                    <input type="text" class="c-input" name="info5_{{$language_key}}" value="@if(isset($items->info5)){{$items->getTranslation('info5',$language_key,false)}} @else {{old('info5_'.$language_key) }}@endif"/>
                                                </div>
                                                <div class="c-field">
                                                    <label class="c-field__label">İnfo 4</label>
                                                    <input type="text" class="c-input" name="info6_{{$language_key}}" value="@if(isset($items->info6)){{$items->getTranslation('info6',$language_key,false)}} @else {{old('info6_'.$language_key) }}@endif"/>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="c-tabs__content tab-content" id="nav-tabContent" style="padding-top:0px ">
                                        <div class="c-tabs__pane active">
                                            <div class="c-field">
                                                <label class="c-field__label">İnfo 1 <span style="font: italic  bold 12px/30px 'Verdana'; color:#000000;text-decoration: underline">( rəqəmlərlə )</span></label>
                                                <input type="number" class="c-input" name="val3" value="@if(isset($items->value3)){{ $items->value3 }}@else{{ old('val3') }} @endif"/>
                                            </div>
                                            <div class="c-field">
                                                <label class="c-field__label">İnfo 2 <span style="font: italic  bold 12px/30px 'Verdana'; color:#000000;text-decoration: underline">( rəqəmlərlə )</span></label>
                                                <input type="number" class="c-input" name="val4" value="@if(isset($items->value4)){{ $items->value4 }}@else{{ old('val4') }} @endif"/>
                                            </div>
                                            <div class="c-field">
                                                <label class="c-field__label">İnfo 3 <span style="font: italic  bold 12px/30px 'Verdana'; color:#000000;text-decoration: underline">( rəqəmlərlə )</span></label>
                                                <input type="number" class="c-input" name="val5" value="@if(isset($items->value5)){{ $items->value5 }}@else{{ old('val5') }} @endif"/>
                                            </div>
                                            <div class="c-field">
                                                <label class="c-field__label">İnfo 4 <span style="font: italic  bold 12px/30px 'Verdana'; color:#000000;text-decoration: underline">( rəqəmlərlə )</span></label>
                                                <input type="number" class="c-input" name="val6" value="@if(isset($items->value6)){{ $items->value6 }}@else{{ old('val6') }} @endif"/>
                                            </div>
                                            <div class="c-field">
                                                <label class="c-field__label">Layihənin tarixi</label>
                                                <input type='text'  id='date' class='c-input datepicker-here' data-language='az' data-timepicker="false" data-time-format='yy-mm-dd' name="projectdate" value="{{ DateTime::createFromFormat('d/m/Y',$items->projectdate)->format('Y-d-m') }}" placeholder="iiii-aa-gg ss:dd:00">
                                            </div>
                                            <hr>
                                            <div class="c-field">
                                                <label class="c-field__label">Şəkil </label>
                                                @if($items->img1)
                                                    <div id="old_img1" class="admin_image old_img">
                                                        <img src="{{$items->img1}}" style="max-width: 190px;border: 1px solid #aaa;">
                                                        <div class="admin_image_close" onclick="deloldimg('old_img1');"><i class="c-sidebar__icon feather icon-x-circle"></i></div>
                                                        <input type="hidden" name="old_img1" value="{{$items->img1}}">
                                                    </div>
                                                @endif
                                                <input type="file" class="c-input" name="img1" accept="image/*"/>
                                            </div>
                                            <div class="c-field">
                                                <label class="c-field__label">Şəkil </label>
                                                @if($items->img2)
                                                    <div id="old_img2" class="admin_image old_img">
                                                        <img src="{{$items->img2}}" style="max-width: 190px;border: 1px solid #aaa;">
                                                        <div class="admin_image_close" onclick="deloldimg('old_img2');"><i class="c-sidebar__icon feather icon-x-circle"></i></div>
                                                        <input type="hidden" name="old_img2" value="{{$items->img2}}">
                                                    </div>
                                                @endif
                                                <input type="file" class="c-input" name="img2" accept="image/*"/>
                                            </div>
                                            <hr>
                                            <h3>Bölmə 4</h3>
                                            <div class="c-field">
                                                <label class="c-field__label">Email</label>
                                                <input type="text" class="c-input" name="email" value="@if(isset($items->email)){{ $items->email }}@else{{ old('email') }} @endif"/>
                                            </div>

                                            <div class="c-field">
                                                <label class="c-field__label">Mob. Telefon</label>
                                                <input type="text" class="c-input" name="mobphone" value="@if(isset($items->phone)){{ $items->phone }}@else{{ old('mobphone') }} @endif"/>
                                            </div>
                                            <div class="c-field">
                                                <label class="c-field__label">Sayt</label>
                                                <input type="text" class="c-input" name="link" value="@if(isset($items->link)){{ $items->link }}@else{{ old('link') }} @endif"/>
                                            </div>
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
    <script type="text/javascript">
        function deloldimg(oldimg) {
            var elem = document.getElementById(oldimg);
            elem.remove();
        }
    </script>
@endsection
