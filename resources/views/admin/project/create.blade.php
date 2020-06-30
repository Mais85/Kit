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
                                        @foreach($__languages as $language_key => $language_title )
                                            <div class="c-tabs__pane {{tabActive($language_key)}}" id="{{$language_key}}" role="tabpanel" aria-labelledby="nav-home-tab">
                                                <h3>Bölmə 1</h3>
                                                <div class="c-field">
                                                    <label class="c-field__label">Layihənin adı</label>
                                                    <input type="text" class="c-input" name="title1_{{$language_key}}" value="{{ old('title1_'.$language_key) }}"/>
                                                </div>
                                                <div class="c-field">
                                                    <label class="c-field__label">Kateqoriyası</label>
                                                    <input type="text" class="c-input" name="catname_{{$language_key}}" value="{{ old('catname_'.$language_key) }}"/>
                                                </div>
                                                <div class="c-field">
                                                    <label class="c-field__label">Qısa Başlıq</label>
                                                    <textarea class="editor" name="desc_{{$language_key}}" rows="4" >{{old('desc_'.$language_key)}}</textarea>
                                                </div>
                                                <hr>
                                                <h3>Bölmə 2</h3>
                                                <div class="c-field">
                                                    <label class="c-field__label">Başlıq 2</label>
                                                    <input type="text" class="c-input" name="title2_{{$language_key}}" value="{{ old('title2_'.$language_key) }}"/>
                                                </div>
                                                <div class="c-field">
                                                    <label class="c-field__label">Mətn 1</label>
                                                    <textarea class="editor" name="contents1_{{$language_key}}" rows="7" >{{old('contents1_'.$language_key)}}</textarea>
                                                </div>
                                                <div class="c-field">
                                                    <label class="c-field__label">Mətn 2</label>
                                                    <textarea class="editor" name="contents2_{{$language_key}}" rows="7" >{{old('contents2_'.$language_key)}}</textarea>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="c-tabs__content tab-content" id="nav-tabContent" style="padding-top:0px ">
                                        <div class="c-tabs__pane active">
                                            <hr>
                                            <h3>Bölmə 3</h3>
                                            <div class="c-field">
                                                <label class="c-field__label">Layihənin tarixi</label>
                                                <input type='text'  id='date' class='c-input datepicker-here' data-language='az' data-timepicker="false" data-time-format='yy-mm-dd' name="projectdate" value="{{date("Y-m-d",(time()))}}" placeholder="iiii-aa-gg ss:dd:00">
                                            </div>
                                            <hr>
                                            <div class="c-field">
                                                <label class="c-field__label">Şəkil 1</label>
                                                <input type="file" class="c-input" name="img1" accept="image/*"/>
                                            </div>
                                            <div class="c-field">
                                                <label class="c-field__label">Şəkil 2</label>
                                                <input type="file" class="c-input" name="img2" accept="image/*"/>
                                            </div>

                                            <div class="c-field">
                                                <label class="c-field__label">Email</label>
                                                <input type="text" class="c-input" name="email" value="{{ old('email') }}"/>
                                            </div>

                                            <div class="c-field">
                                                <label class="c-field__label">Mob. Telefon</label>
                                                <input type="text" class="c-input" name="mobphone" value="{{ old('mobphone') }}"/>
                                            </div>
                                            <div class="c-field">
                                                <label class="c-field__label">Sayt</label>
                                                <input type="text" class="c-input" name="link" value="{{ old('link') }}"/>
                                            </div>
                                            <div class="c-field">
                                                <label class="c-field__label">Albom</label>
                                                <select style="font-size:13px" class="c-input" name="albom_id" >
                                                    <option value="" disabled selected hidden>Albom seçin...</option>
                                                    @forelse($alboms as $key=>$value)
                                                        <option value="{{ $key}}">{{ $value }}</option>
                                                    @empty
                                                        <option value="">Albom tapılmadı !</option>
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
