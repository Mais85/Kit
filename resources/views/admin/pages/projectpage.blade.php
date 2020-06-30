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
                                <form action="{{ route('projects') }}" method="post">
                                    @csrf
                                    <div class="c-tabs__list nav nav-tabs" id="myTab" role="tablist">
                                        @foreach($__languages as $language_key => $language_title )
                                            <a class="c-tabs__link {{tabActive($language_key)}}" id="nav-home-tab" data-toggle="tab" href="#{{$language_key}}" role="tab" aria-controls="nav-home" aria-selected="true">{{$language_title[0]}}</a>
                                        @endforeach
                                    </div>
                                    <div class="c-tabs__content tab-content" id="nav-tabContent" style="padding-top:0px ">
                                        @foreach($__languages as $language_key => $language_title )
                                            <div class="c-tabs__pane {{tabActive($language_key)}}" id="{{$language_key}}" role="tabpanel" aria-labelledby="nav-home-tab"  style="padding: 0">
                                                <h3>Layihələr (ümumi məlumat)</h3>
                                                <div class="c-field">
                                                    <textarea class="editor" name="contents_{{$language_key}}" rows="10" >@if(empty($items)){{old('contents_'.$language_key) }}@else{{$items->getTranslation('contents',$language_key,false)}}@endif</textarea>
                                                </div>
                                            </div>
                                        @endforeach
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
