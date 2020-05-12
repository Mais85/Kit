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
                                <form action="{{ route('referanceUpdate') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="c-tabs__list nav nav-tabs" id="myTab" role="tablist">
                                        @foreach($__languages as $language_key => $language_title )
                                            <a class="c-tabs__link {{tabActive($language_key)}}" id="nav-home-tab" data-toggle="tab" href="#{{$language_key}}" role="tab" aria-controls="nav-home" aria-selected="true">{{$language_title[0]}}</a>
                                        @endforeach
                                    </div>
                                    <div class="c-tabs__content tab-content" id="nav-tabContent" style="padding-top:0px ">
                                        <div class="c-tabs__pane active">
                                            <div class="c-field">
                                                <label class="c-field__label">Referans</label>
                                                <input type="text" class="c-input" name="referancer" value="@if(isset($items->referancer)){{ $items->referancer}}@else{{ old('referancer') }} @endif"/>
                                            </div>
                                            <div class="c-field">
                                                <label class="c-field__label">Referansverən Əməkdaş</label>
                                                <input type="text" class="c-input" name="name" value="@if(isset($items->name)){{$items->name}}@else {{ old('name') }} @endif"/>
                                            </div>
                                            <div class="c-field">
                                                <label class="c-field__label">Şirkət</label>
                                                <select style="font-size:13px" class="c-input" name="company_id" >
                                                    <option value="" disabled selected hidden>İşlədiyi şirkəti seçin...</option>
                                                    @forelse($companies as $key=>$value)
                                                        @if($key == $items->company_id)
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
                                        @foreach($__languages as $language_key => $language_title )
                                            <div class="c-tabs__pane {{tabActive($language_key)}}" id="{{$language_key}}" role="tabpanel" aria-labelledby="nav-home-tab">
                                                <div class="c-field">
                                                    <label class="c-field__label">Vəzifəsi</label>
                                                    <input type="text" class="c-input" name="position_{{$language_key}}" value="@if(isset($items->position)){{$items->getTranslation('position',$language_key,false)}} @else {{old('position_'.$language_key) }}@endif"/>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="c-tabs__content tab-content" id="nav-tabContent" style="padding-top:0px ">
                                        <div class="c-tabs__pane active">
                                            <div class="c-field">
                                                <label class="c-field__label">Referans şəkili</label>
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
                                                <label class="c-field__label">Verilmə tarixi</label>
                                                <input type='text'  id='date' class='c-input datepicker-here' data-language='az' data-timepicker="false" data-time-format='yy-mm-dd' name="ref_date" value="{{ DateTime::createFromFormat('d/m/Y',$items->ref_date)->format('Y-d-m') }}" placeholder="iiii-aa-gg ss:dd:00">
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
