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
                                <form action="{{ route('testimonialsUpdate')  }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="c-tabs__list nav nav-tabs" id="myTab" role="tablist">
                                        @foreach($__languages as $language_key => $language_title )
                                            <a class="c-tabs__link {{tabActive($language_key)}}" id="nav-home-tab" data-toggle="tab" href="#{{$language_key}}" role="tab" aria-controls="nav-home" aria-selected="true">{{$language_title[0]}}</a>
                                        @endforeach
                                    </div>
                                    <div class="c-tabs__content tab-content" id="nav-tabContent">
                                        <div class="c-tabs__pane active">
                                            <div class="c-field">
                                                <label class="c-field__label">Rəyverən</label>
                                                <input type="text" class="c-input" name="username" value="@if(isset($items->username)){{ $items->username }}@else{{ old('username') }} @endif"/>
                                            </div>
                                            <div class="c-field">
                                                <label class="c-field__label">Şirkəti</label>
                                                <input type="text" class="c-input" name="company" value="@if(isset($items->company)){{ $items->company}}@else{{ old('company') }} @endif"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="c-tabs__content tab-content" id="nav-tabContent" style="padding-top:0px ">
                                        @foreach($__languages as $language_key => $language_title )
                                            <div class="c-tabs__pane {{tabActive($language_key)}}" id="{{$language_key}}" role="tabpanel" aria-labelledby="nav-home-tab">
                                                <div class="c-field">
                                                    <label class="c-field__label">Vəzifəsi</label>
                                                    <input type="text" class="c-input" name="position_{{$language_key}}" value="@if(isset($items->position)){{$items->getTranslation('position',$language_key,false)}} @else {{old('position_'.$language_key) }}@endif"/>
                                                </div>
                                                <div class="c-field">
                                                    <label class="c-field__label">Mətni &nbsp;<span style="font: italic  bold 12px/30px 'Verdana'; color:#FA5661;text-decoration: underline">( max: 191 simvol )</span></label>
                                                    <textarea class="editor" name="contents_{{$language_key}}" rows="3" >@if(empty($items->contents)){{old('contents_'.$language_key) }}@else{{$items->getTranslation('contents',$language_key,false)}}@endif</textarea>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="c-tabs__content tab-content" id="nav-tabContent" style="padding-top:0px ">
                                        <div class="c-tabs__pane active">
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
                                                <label class="c-field__label">Facebook</label>
                                                <input class="c-input" type="text" name="facebook" value="@if(isset($items->facebook)){{ $items->facebook }}@else{{ old('facebook') }} @endif"/>
                                            </div>
                                            <div class="c-field">
                                                <label class="c-field__label">Twitter</label>
                                                <input class="c-input" type="text" name="twitter" value="@if(isset($items->twitter)){{ $items->twitter }}@else{{ old('twitter') }} @endif"/>
                                            </div>
                                            <div class="c-field">
                                                <label class="c-field__label">Instagram</label>
                                                <input class="c-input" type="text" name="instagram" value="@if(isset($items->instagram)){{ $items->instagram }}@else{{ old('instagram') }} @endif" />
                                            </div>
                                            <div class="c-field">
                                                <label class="c-field__label">Linkedin</label>
                                                <input class="c-input" type="text" name="linkedin"  value="@if(isset($items->linkedin)){{ $items->linkedin }}@else{{ old('linkedin') }} @endif"/>
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
