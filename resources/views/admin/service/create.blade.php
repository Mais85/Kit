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
                                <form action="" method="post" enctype="multipart/form-data">
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
                                                    <input type="text" class="c-input" name="title_{{$language_key}}" value="{{ old('title_'.$language_key) }}"/>
                                                </div>
                                                <div class="c-field">
                                                    <label class="c-field__label">Mətni</label>
                                                    <textarea class="editor" name="contents_{{$language_key}}" rows="8" >{{old('contents_'.$language_key) }}</textarea>
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
                                                        <option value="{{ $key}}">{{ $value}}</option>
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
                                                <input type="file" class="c-input" name="img1" accept="image/*"/>
                                            </div>
                                            <div class="c-field">
                                                <label class="c-field__label">Şəkil 2</label>
                                                <input type="file" class="c-input" name="img2" accept="image/*"/>
                                            </div>
                                            <div class="c-field">
                                                <label class="c-field__label">Pdf</label>
                                                <input type="file" class="c-input" name="pdf" accept=".pdf"/>
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
