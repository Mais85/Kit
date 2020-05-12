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
                                        <div class="c-tabs__content tab-content" id="nav-tabContent">
                                            <div class="c-tabs__pane active">
                                                <div class="c-field">
                                                    <label class="c-field__label">Ad</label>
                                                    <input type="text" class="c-input" name="name" value="{{ old('name') }}"/>
                                                </div>
                                                <div class="c-field">
                                                    <label class="c-field__label">Soyad</label>
                                                    <input type="text" class="c-input" name="surname" value="{{ old('surname') }}"/>
                                                </div>
                                                <div class="c-field">
                                                    <label class="c-field__label">Şirkət</label>
                                                    <select style="font-size:13px" class="c-input" name="company" >
                                                        <option value="" disabled selected hidden>İşlədiyi şirkəti seçin...</option>
                                                        @forelse($companies as $key=>$value)
                                                            <option value="{{ $value}}">{{ $value}}</option>
                                                        @empty
                                                            <option value="">Şirkət tapılmadı !</option>
                                                        @endforelse
                                                    </select>
                                                </div>
                                                 <div class="c-field">
                                                    <label  class="c-field__label">Sıra nömrəsi</label>
                                                    <input type="number" name="pos_number" class="c-input" min='0' value="{{ old('pos_number') }}">
                                                </div>
                                             </div>
                                        </div>
                                    <div class="c-tabs__content tab-content" id="nav-tabContent" style="padding-top:0px ">
                                        @foreach($__languages as $language_key => $language_title )
                                            <div class="c-tabs__pane {{tabActive($language_key)}}" id="{{$language_key}}" role="tabpanel" aria-labelledby="nav-home-tab">
                                                <div class="c-field">
                                                    <label class="c-field__label">Vəzifəsi</label>
                                                    <input type="text" class="c-input" name="position_{{$language_key}}" value="{{ old('position_'.$language_key) }}"/>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="c-tabs__content tab-content" id="nav-tabContent" style="padding-top:0px ">
                                        <div class="c-tabs__pane active">
                                            <div class="c-field">
                                                <label class="c-field__label">Şəkil</label>
                                                <input type="file" class="c-input" name="img" accept="image/*"/>
                                            </div>
                                            <div class="c-field">
                                                <label class="c-field__label">Email</label>
                                                <input type="text" class="c-input" name="email" value="{{ old('email') }}"/>
                                            </div>
                                            <div class="c-field">
                                                <label class="c-field__label">Telefon</label>
                                                <input type="text" class="c-input" name="phone" value="{{ old('phone') }}"/>
                                            </div>
                                            <div class="c-field">
                                                <label class="c-field__label">Mob. Telefon</label>
                                                <input type="text" class="c-input" name="mobphone" value="{{ old('mobphone') }}"/>
                                            </div>
                                            <div class="c-field">
                                                <label class="c-field__label">Facebook</label>
                                                <input class="c-input" type="text" name="fb" value="{{ old('fb') }}">
                                            </div>
                                            <div class="c-field">
                                                <label class="c-field__label">Twitter</label>
                                                <input class="c-input" type="text" name="twitter" value="{{ old('twitter') }}">
                                            </div>
                                            <div class="c-field">
                                                <label class="c-field__label">Instagram</label>
                                                <input class="c-input" type="text" name="instagram" value="{{ old('instagram') }}" >
                                            </div>
                                            <div class="c-field">
                                                <label class="c-field__label">Linkedin</label>
                                                <input class="c-input" type="text" name="linkedin"  value="{{ old('linkedin') }}">
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
