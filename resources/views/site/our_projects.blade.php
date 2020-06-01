@extends('layouts.site')

@section('title', '| '. __('header.OurProjects'))

@section('content')

    <div class="content">

        <div class="container-fluid mt-50">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-sm-1 col-sm-10 col-12">
                    <h1 class="page-title mb-50">{{ __('header.OurProjects') }}</h1>
                    <span class="page-description mb-60">{{ $contents  }}</span>
                    <div class="row mb-45">
                        @foreach($projects as $item)
                        <div class="col-xl-6 col-12 mb-20">
                            <div class="project-item" style="background-image: url({{ $item->smallimg}});">
                                <span class="project-item__category">– {{ $item->getTranslation('catname',app()->getLocale(),false)}}</span>
                                <h2 class="project-item__title">{{ $item->getTranslation('title1',app()->getLocale(),false)}}</h2>
                                <span class="project-item__year">/{{ $item->projectdate }}/</span>
                                <span class="project-item__description">{{ $item->getTranslation('desc',app()->getLocale(),false)}}</span>
                                <a href="{{ route('project',[app()->getLocale(),$item->slug]) }}" class="button button_light-blue button_uppercase">{{ __('project.vmi') }}</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
