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
                                <form action="{{ route('newscreate') }}" method="POST" enctype="multipart/form-data">
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
                                                    <label class="c-field__label">Xəbər başlığı</label>
                                                    <input type="text" class="c-input" name="title_{{ $language_key }}" value="{{ old('title_'.$language_key) }}"/>
                                                </div>
                                                <div class="c-field">
                                                    <label class="c-field__label">Mətn</label>
                                                    <textarea class="c-input" name="contents_{{$language_key}}" rows="10" >{{old('contents_'.$language_key)}}</textarea>
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
                                                <input type="file" class="c-input" name="img" accept="image/*"/>
                                            </div>
                                            <label for="">Xəbər dərc olunsun ?</label><br>
                                            <input type="radio" id="no" name="status" value="0" checked>
                                            <label for="no">Xeyir</label>
                                            <input type="radio" id="yes" name="status" value="1">
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
@endsection
