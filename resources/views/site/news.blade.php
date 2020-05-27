@extends('layouts.site')

{{--@section('title', '| '. __('main.title'))--}}

@section('content')

@include('site.catalog')

<div class="content">

    <div class="container-fluid bc-light-grey pt-50">
        @csrf
        <div class="row">
            <div class="offset-xl-2 col-xl-8 offset-sm-1 col-sm-10 col-12">
                <h1 class="page-title mb-50">{{ __('header.News') }}</h1>
                @csrf
                <div class="row mb-25 infinite">
                    @foreach($items as $item)
                    <div  class="col-xl-3 col-md-6 col-12 mb-40 post">
                        <a href="{{ route('newsItem', ['local' => app()->getLocale(),'slug'=> $item->slug , 'id'=>$item->id] ) }}" class="news-item">
                            <div class="news-item__img-box" style="background-image: url({{ $item->smallimg }});"></div>
                            <h2 class="news-item__title">{{ $item->getTranslation('title',app()->getLocale(),false) }}</h2>
                            <span class="news-item__description">{{ $item->getTranslation('desc',app()->getLocale(),false) }}</span>
                            <span class="news-item__date">{{ $item->created_at }}</span>
                        </a>
                    </div>
                    @endforeach
                </div>
                <a id="load_more" href="#" class="button button_white button_uppercase button_full mb-70 view-more-button">{{ __('news.LMViews') }}</a>
                    <div class="hid"> {{ $items->links() }} </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/infinite-scroll.min.js') }}"></script>
<script>



            $('.infinite').infiniteScroll({
                // options
                path: '.nxt',
                append: '.post',
                button: '.view-more-button',
                // using button, disable loading on scroll
                scrollThreshold: false,
                status: '.scroller-status',
                history: false,
                hideNav: '.hid',


            });
</script>

@stop
