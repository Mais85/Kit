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
                                <form action="{{ route('newsupdate') }}" method="POST" enctype="multipart/form-data">
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
                                                    <label class="c-field__label">Vəzifəsi</label>
                                                    <input type="text" class="c-input" name="title_{{$language_key}}" value="@if(isset($items->title)){{$items->getTranslation('title',$language_key,false)}} @else {{old('title_'.$language_key) }}@endif"/>
                                                </div>
                                                <div class="c-field">
                                                    <label class="c-field__label">Mətn</label>
                                                    <textarea class="c-input" name="contents_{{$language_key}}" rows="8" >@if(empty($items->contents)){{old('contents_'.$language_key) }}@else{{$items->getTranslation('contents',$language_key,false)}}@endif</textarea>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                    <div class="c-tabs__content tab-content" id="nav-tabContent" style="padding-top:0px ">
                                        <div class="c-tabs__pane active">
                                            <hr>
                                            <br>
                                            <div class="c-field">
                                                <label class="c-field__label">Şəkil </label>
                                                @if($items->img)
                                                    <div id="old_img" class="admin_image old_img">
                                                        <img src="{{$items->img}}" style="max-width: 190px;border: 1px solid #aaa;">
                                                        <div class="admin_image_close" onclick="deloldimg('old_img');"><i class="c-sidebar__icon feather icon-x-circle"></i></div>
                                                        <input type="hidden" name="old_img" value="{{$items->img}}">
                                                    </div>
                                                @endif
                                                <input type="file" class="c-input" name="img" accept="image/*"/>
                                            </div>
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
                                            <label for="">Xəbər dərc olunsun ?</label><br>
                                            <input type="radio" id="no" name="status" value="0" {{ checked('0',$items->isPublished) }}>
                                            <label for="no">Xeyir</label>
                                            <input type="radio" id="yes" name="status" value="1" {{ checked('1',$items->isPublished) }}>
                                            <label for="yes">Bəli</label><br><br>
                                            <label for="">Yeni müştəri ?</label><br>
                                            <input type="radio" id="no" name="client" value="0" {{ checked('0',$items->newClient) }}>
                                            <label for="no">Xeyir</label>
                                            <input type="radio" id="yes" name="client" value="1" {{ checked('1',$items->newClient) }}>
                                            <label for="yes">Bəli</label>

                                            <div style="margin-top: 10px" class="c-field">
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
