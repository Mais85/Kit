@extends('layouts.site')

@section('title', '| '. __('header.OurProjects'))

@section('content')

    <div class="content">

        <div class="project-item-page-header-block mb-40" style="background-image: url({{$item->img1}});">
            <div class="container-fluid">
                <div class="row">
                    <div class="offset-xl-2 col-xl-8 offset-sm-1 col-sm-10 col-12">
                        <div class="project-item-page-header">
                            <a href="{{ route('ourprojects',app()->getLocale()) }}" class="link link_blue link_page mb-45">{{ __('header.OurProjects') }}</a>
                            <h1 class="project-item-page__title">{{ $item->getTranslation('title1',app()->getLocale(),false)}}</h1>
                            <div class="project-item-page__add-info">
                                <span class="project-item-page__category">– {{ $item->getTranslation('catname',app()->getLocale(),false)}}</span>
                                <span class="project-item-page__year">/ {{ $item->projectdate }} /</span>
                            </div>
                            <span class="project-item-page__description">{!! $item->getTranslation('desc',app()->getLocale(),false) !!} </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-sm-1 col-sm-10 col-12">
                    <h2 class="page-mini-title mb-40">{{ $item->getTranslation('title2',app()->getLocale(),false)}}</h2>
                    <div class="page-hr mb-40"></div>
                    <div class="project-item-page-mission-list row mb-75">
                        <div class="project-item-page-mission-list__item col-md-6 col-12">{!! $item->getTranslation('contents1',app()->getLocale(),false) !!} </div>
                        <div class="project-item-page-mission-list__item col-md-6 col-12">{!! $item->getTranslation('contents2',app()->getLocale(),false) !!} </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid mb-75">
            <div class="row">
                <div class="offset-1 col-1 flex-row-center-center">
                    <button href="javascript:void(0)" class="carousel-button-2 carousel-button-2_left"></button>
                </div>
                <div class="col-8">
                    <div class="project-item-carousel owl-carousel">
                        <div class="project-item-carousel__item">
                            <div class="project-item-carousel__img" style="background-image: url({{ $item->img2 }})"></div>
                        </div>
                    </div>
                </div>
                <div class="col-1 flex-row-center-center">
                    <button href="javascript:void(0)" class="carousel-button-2 carousel-button-2_right"></button>
                </div>
            </div>
        </div>

        <div class="container-fluid mb-50">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-sm-1 col-sm-10 col-12">
                    <h2 class="page-mini-title mb-40">{{ __('project.gi') }}</h2>
                    <div class="page-hr mb-55"></div>

                    <ul class="project-info-list">
                        <li class="project-info-list__item">
                            <span class="project-info-list__name">{{__('project.website')}}</span>
                            <a href="#" class="project-info-list__link">{{$item->link}}</a>
                        </li>
                        <li class="project-info-list__item">
                            <span class="project-info-list__name">{{ __('project.Phone') }}</span>
                            <span class="project-info-list__value">+{{ $item->phone }}</span>
                        </li>
                        <li class="project-info-list__item">
                            <span class="project-info-list__name">Email</span>
                            <span class="project-info-list__value">{{$item->email}}</span>
                        </li>
                    </ul>

                </div>
            </div>
        </div>

        @if(isset($item->albom_id))
        <div class="container-fluid">
            <div class="row">
                <div class="offset-xl-2 col-xl-9 offset-sm-1 col-sm-10 col-12">
                    <div class="learn-more-section">
                        <a href="{{  route('getPhotos',['local' => App::getLocale(),'id'=>$item->albom_id])  }}" class="learn-more-section__link">/ {{ __('project.proAlb') }} /</a>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <div class="container-fluid bc-light-blue">
            <div class="other-more-section">
                <div class="row">
                    <div class="offset-xl-2 col-xl-8 offset-sm-1 col-sm-10 col-12">
                        <h2 class="page-mini-title mb-40">{{ __('project.Opro') }}</h2>
                        <div class="page-hr mb-65"></div>
                        <div class="row">
                            @foreach($projects as $items)
                                @if($items->slug != $item->slug)
                                    <div class="col-xl-6 col-12 mb-20">
                                        <div class="project-item" style="background-image: url({{ $items->smallimg }});">
                                            <span class="project-item__category">– {{ $items->getTranslation('catname',app()->getLocale(),false)}}</span>
                                            <h2 class="project-item__title">{{ $items->getTranslation('title1',app()->getLocale(),false)}}</h2>
                                            <span class="project-item__year">/{{ $items->projectdate }}/</span>
                                            <span class="project-item__description">{!! $items->getTranslation('desc',app()->getLocale(),false) !!} </span>
                                            <a href="{{ route('project',[app()->getLocale(),$items->slug]) }}" class="button button_light-blue button_uppercase">{{ __('project.vmi') }}</a>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop
