@extends('layouts.site')

{{--@section('title', '| '. __('main.title'))--}}

@section('content')

    <div class="content">

        <div class="container-fluid pt-30 mb-15">
            <div class="row">
                <div class="offset-xl-3 col-xl-5 offset-sm-2 col-sm-7 col-12">
                    <a href="{{ route('news',app()->getLocale()) }}" class="link link_blue link_page mb-20">{{ __('header.News') }}</a>
                    <h1 class="news-item-page__title">{{ $item->getTranslation('title',app()->getLocale(),false) }}</h1>
                    <div class="news-item-page__add">
                        <span class="news-item-page__date">{{ $item->created_at }}</span>
                       @if($item->newClient == 1) <span class="news-item-page__type">/ {{ __('news.newClient') }} /</span>@endif
                    </div>
                    <div class="news-item-page__text-box">
                        <img src="{{ $item->img }}" />
                        <p>{{ $item->getTranslation('contents',app()->getLocale(),false) }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid bc-light-blue">
            <div class="other-more-section">
                <div class="row">
                    <div class="offset-xl-2 col-xl-8 offset-sm-1 col-sm-10 col-12">
                        <h2 class="page-mini-title mb-40">{{ __('news.otnews') }}</h2>
                        <div class="page-hr mb-50"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2 flex-row-center-center">
                        <button href="javascript:void(0)" class="carousel-button carousel-button_left"></button>
                    </div>
                    <div class="col-8">
                        <div class="news-carousel owl-carousel">
                            @foreach($othernews as $val)
                            <div class="news-carousel__item">
                                <a href="{{ route('newsItem',['local' => app()->getLocale(),'slug'=> $item->slug , 'id'=>$item->id] ) }}" class="news-item">
                                    <div class="news-item__img-box" style="background-image: url({{ $val->smallimg }});"></div>
                                    <h2 class="news-item__title">{{ $val->getTranslation('title',app()->getLocale(),false) }}</h2>
                                    <span class="news-item__description">{{ $val->getTranslation('desc',app()->getLocale(),false) }}</span>
                                    <span class="news-item__date">{{ $val->created_at }}</span>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-2 flex-row-center-center">
                        <button href="javascript:void(0)" class="carousel-button carousel-button_right"></button>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
