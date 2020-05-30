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
                                <form action="{{ route('serviceUpdate') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="c-tabs__list nav nav-tabs" id="myTab" role="tablist">
                                        @foreach($__languages as $language_key => $language_title )
                                            <a class="c-tabs__link {{tabActive($language_key)}}" id="nav-home-tab" data-toggle="tab" href="#{{$language_key}}" role="tab" aria-controls="nav-home" aria-selected="true">{{$language_title[0]}}</a>
                                        @endforeach
                                    </div>
                                    <div class="c-tabs__content tab-content" id="nav-tabContent" style="padding-top:0px ">
                                        @foreach($__languages as $language_key => $language_title )
                                            <div class="c-tabs__pane {{tabActive($language_key)}}" id="{{$language_key}}" role="tabpanel" aria-labelledby="nav-home-tab">
                                                <div class="c-field">
                                                    <label class="c-field__label">Xidmətin adı</label>
                                                    <input type="text" class="c-input" name="title_{{$language_key}}" value="@if(isset($items->title)){{$items->getTranslation('title',$language_key,false)}} @else {{old('title_'.$language_key) }}@endif"/>
                                                </div>
                                                <div class="c-field">
                                                    <label class="c-field__label">Mətni</label>
                                                    <textarea class="c-input" name="contents_{{$language_key}}" rows="8" >@if(empty($items->contents)){{old('contents_'.$language_key) }}@else{{$items->getTranslation('contents',$language_key,false)}}@endif</textarea>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="c-tabs__content tab-content" id="nav-tabContent">
                                        <div class="c-tabs__pane active">
                                            <div class="c-field">
                                                <label class="c-field__label">Şirkət</label>
                                                <select style="font-size:13px" class="c-input" name="company" >
                                                    <option value="" disabled selected hidden>Aid olduğu şirkəti seçin...</option>
                                                    @forelse($companies as $key=>$value)
                                                        @if($value == $items->company_name)
                                                            <option value="{{ $key}}" selected>{{ $value}}</option>
                                                        @else
                                                            <option value="{{ $key}}" >{{ $value}}</option>
                                                        @endif
                                                    @empty
                                                        <option value="">Şirkət tapılmadı !</option>
                                                    @endforelse
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="c-tabs__content tab-content" id="nav-tabContent" style="padding-top:0px ">
                                        <div class="c-tabs__pane active">
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
                                                <label class="c-field__label">Şəkil </label>
                                                @if($items->img1)
                                                    <div id="old_img2" class="admin_image old_img">
                                                        <img src="{{$items->img2}}" style="max-width: 190px;border: 1px solid #aaa;">
                                                        <div class="admin_image_close" onclick="deloldimg('old_img2');"><i class="c-sidebar__icon feather icon-x-circle"></i></div>
                                                        <input type="hidden" name="old_img2" value="{{$items->img2}}">
                                                    </div>
                                                @endif
                                                <input type="file" class="c-input" name="img2" accept="image/*"/>
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
    <script type="text/javascript">
        function deloldimg(oldimg) {
            var elem = document.getElementById(oldimg);
            elem.remove();
        }
    </script>
@endsection
