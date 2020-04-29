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
                                <form action="{{ route('partnersUpdate') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="c-tabs__content tab-content" id="nav-tabContent" style="padding-top:0px ">
                                        <div class="c-tabs__pane active">
                                            <div class="c-field">
                                                <label class="c-field__label">Müştəri</label>
                                                <input type="text" class="c-input" name="name" value="@if(isset($items->name)){{ $items->name }}@else{{ old('name') }} @endif"/>
                                            </div>
                                            <div class="c-field">
                                                <label class="c-field__label">Şəkil </label>
                                                @if($items->logo)
                                                    <div id="old_img" class="admin_image old_img">
                                                        <img src="{{$items->logo}}" style="max-width: 190px;border: 1px solid #aaa;">
                                                        <div class="admin_image_close" onclick="deloldimg('old_img');"><i class="c-sidebar__icon feather icon-x-circle"></i></div>
                                                        <input type="hidden" name="old_logo" value="{{$items->logo}}">
                                                    </div>
                                                @endif
                                                <input type="file" class="c-input" name="logo" accept="image/*"/>
                                            </div>
                                            <div class="c-field">
                                                <label class="c-field__label">Link</label>
                                                <input type="url" class="c-input" name="link" value="@if(isset($items->link)){{ $items->link }}@else{{ old('link') }} @endif"/>
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
