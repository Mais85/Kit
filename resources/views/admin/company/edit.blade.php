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
                                <form action="" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="c-tabs__list nav nav-tabs" id="myTab" role="tablist">
                                        @foreach($__languages as $language_key => $language_title )
                                            <a class="c-tabs__link {{tabActive($language_key)}}" id="nav-home-tab" data-toggle="tab" href="#{{$language_key}}" role="tab" aria-controls="nav-home" aria-selected="true">{{$language_title[0]}}</a>
                                        @endforeach
                                    </div>
                                    <div class="c-tabs__content tab-content" id="nav-tabContent" style="padding-top:0px ">
                                        <div class="c-tabs__pane active">
                                            <div class="c-field">
                                                <label class="c-field__label">Şirkət</label>
                                                <input type="text" class="c-input" name="company" value="@if(isset($items->company)){{ $items->company }}@else{{ old('company') }} @endif"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="c-tabs__content tab-content" id="nav-tabContent" style="padding-top:0px ">
                                        @foreach($__languages as $language_key => $language_title )
                                            <div class="c-tabs__pane {{tabActive($language_key)}}" id="{{$language_key}}" role="tabpanel" aria-labelledby="nav-home-tab">
                                                <div class="c-field">
                                                    <label class="c-field__label">Mətn</label>
                                                    <textarea class="c-input" name="contents_{{$language_key}}" rows="10">@if(empty($items)){{old('contents_'.$language_key) }}@else{{$items->getTranslation('contents',$language_key,false)}}@endif</textarea>
                                                </div>
                                                <div class="c-field">
                                                    <label class="c-field__label">Kontakt Mətni</label>
                                                    <textarea class="c-input" name="contacttext_{{$language_key}}" rows="8" >@if(empty($items->contacttext)){{old('contacttext_'.$language_key) }}@else{{$items->getTranslation('contacttext',$language_key,false)}}@endif</textarea>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                    <div class="c-tabs__content tab-content" id="nav-tabContent" style="padding-top:0px ">
                                        <div class="c-tabs__pane active">
                                            <hr>
                                            <br>
                                            <div class="c-field">
                                                <label class="c-field__label">Email</label>
                                                <input type="text" class="c-input" name="email" value="@if(isset($items->email)){{ $items->email }}@else{{ old('email') }} @endif"/>
                                            </div>
                                            <div class="c-field">
                                                <label class="c-field__label">Unvan</label>
                                                <input type="text" class="c-input" name="address" value="@if(isset($items->address)){{ $items->address }}@else{{ old('address') }} @endif"/>
                                            </div>
                                            <div class="c-field">
                                                <label class="c-field__label">Telefon</label>
                                                <input type="text" class="c-input" name="phone" value="@if(isset($items->phone)){{ $items->phone }}@else{{ old('phone') }} @endif"/>
                                            </div>
                                            <div class="c-field">
                                                <label class="c-field__label">Mob. Telefon</label>
                                                <input type="text" class="c-input" name="mobphone" value="@if(isset($items->mobphone)){{ $items->mobphone }}@else{{ old('mobphone') }} @endif"/>
                                            </div>
                                            <div class="c-field">
                                                <label class="c-field__label">Facebook</label>
                                                <input type="text" class="c-input" name="fb" value="@if(isset($items->fb)){{ $items->fb }}@else{{ old('fb') }} @endif"/>
                                            </div>
                                            <div class="c-field">
                                                <label class="c-field__label">Twitter</label>
                                                <input type="text" class="c-input" name="twitter" value="@if(isset($items->twitter)){{ $items->twitter }}@else{{ old('twitter') }} @endif"/>
                                            </div>
                                            <div class="c-field">
                                                <label class="c-field__label">Instagram</label>
                                                <input type="text" class="c-input" name="instagram" value="@if(isset($items->instagram)){{ $items->instagram }}@else{{ old('instagram') }} @endif"/>
                                            </div>
                                            <div class="c-field">
                                                <label class="c-field__label">Youtube</label>
                                                <input type="text" class="c-input" name="youtube" value="@if(isset($items->youtube)){{ $items->youtube }}@else{{ old('youtube') }} @endif"/>
                                            </div>

                                            <div class="c-field">
                                                <label class="c-field__label">Pdf</label>
                                                @if(isset($items->pdf))
                                                 <div id="oldpdf"  style="margin-bottom: 7px; padding:6px; border:1px solid #99a5bd; border-radius: 4px" >
                                                     <i style="margin: 0; padding: 1px" class="c-sidebar__icon feather icon-file "></i>{{Str::afterlast($items->pdf,'/') }}
                                                     <input type="hidden" name="oldpdf" value="{{ $items->pdf }}">
                                                 </div>
                                                @endif
                                                <input type="file" class="c-input"  id="pdf" name="pdf" accept=".pdf" onclick="deletepdf()"/>
                                            </div>
                                                <script>
                                                   function deletepdf() {
                                                       var elem = document.getElementById('oldpdf');
                                                       elem.remove();
                                                   }
                                                </script>
                                            <div class="c-field">
                                                <label class="c-field__label">Şəkil 1</label>
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
                                                <label class="c-field__label">Şəkil 2</label>
                                                @if($items->img2)
                                                    <div id="old_img2" class="admin_image old_img">
                                                        <img src="{{$items->img2}}"style="max-width: 190px;border: 1px solid #aaa;">
                                                        <div class="admin_image_close" onclick="deloldimg('old_img2');"><i class="c-sidebar__icon feather icon-x-circle"></i></div>
                                                        <input type="hidden" name="old_img2" value="{{$items->img2}}">
                                                    </div>
                                                @endif
                                                <input type="file" class="c-input" name="img2" accept="image/*"/>
                                            </div>
                                            <div class="c-field">
                                                <label class="c-field__label">Loqo</label>
                                                @if($items->logo)
                                                    <div id="logo" class="admin_image old_img">
                                                        <img src="{{$items->logo}}"style="max-width: 190px;border: 1px solid #aaa;">
                                                        <div class="admin_image_close" onclick="deloldimg('logo');"><i class="c-sidebar__icon feather icon-x-circle"></i></div>
                                                        <input type="hidden" name="old_logo" value="{{$items->logo}}">
                                                    </div>
                                                @endif
                                                <input type="file" class="c-input" name="logo" accept="image/*"/>
                                            </div>
                                            <script type="text/javascript">
                                             function deloldimg(oldimg) {
                                                 var elem = document.getElementById(oldimg);
                                                 elem.remove();
                                             }
                                            </script>
                                            <div class="c-field">
                                                <label class="c-field__label">Albom</label>
                                                <select style="font-size:13px" class="c-input" name="albom_id" >
                                                    <option value="" disabled selected hidden>Albom seçin...</option>
                                                    @forelse($alboms as $key=>$value)
                                                        @if($value == getAlbomName($items->albom_id))
                                                            <option value="{{ $key}}" selected>{{ $value}}</option>
                                                        @else
                                                            <option value="{{ $key}}" >{{ $value }}</option>
                                                        @endif
                                                    @empty
                                                        <option value="">Şirkət tapılmadı !</option>
                                                    @endforelse

                                                </select>
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

@endsection
