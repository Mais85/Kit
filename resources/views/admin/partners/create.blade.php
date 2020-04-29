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
                                    <div class="c-tabs__content tab-content" id="nav-tabContent" style="padding-top:0px ">
                                        <div class="c-tabs__pane active">
                                            <div class="c-field">
                                                <label class="c-field__label">Müştəri</label>
                                                <input type="text" class="c-input" name="name" value="{{ old('name') }}"/>
                                            </div>
                                            <div class="c-field">
                                                <label class="c-field__label">Şəkil</label>
                                                <input type="file" class="c-input" name="logo" accept="image/*"/>
                                            </div>
                                            <div class="c-field">
                                                <label class="c-field__label">Link</label>
                                                <input type="url" class="c-input" name="link" value="{{ old('link') }}"/>
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
