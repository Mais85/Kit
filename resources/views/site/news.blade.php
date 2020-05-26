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

                <div class="row mb-25  news endless-pagination" data-next-page="{{ $items->nextPageUrl() }}">
                    @foreach($items as $item)
                    <div  class="col-xl-3 col-md-6 col-12 mb-40 ">
                        <a href="{{ route('newsItem', ['local' => app()->getLocale(),'slug'=> $item->slug , 'id'=>$item->id] ) }}" class="news-item">
                            <div class="news-item__img-box" style="background-image: url({{ $item->smallimg }});"></div>
                            <h2 class="news-item__title">{{ $item->title }}</h2>
                            <span class="news-item__description">{{ $item->desc }}</span>
                            <span class="news-item__date">{{ $item->created_at }}</span>
                        </a>
                    </div>
                    @endforeach
                </div>
                <a id="load_more" href="{{ route('news',app()->getLocale()) }}" class="button button_white button_uppercase button_full mb-70">{{ __('news.LMViews') }}</a>

            </div>
        </div>
    </div>
</div>
<script>

    $(document).ready(function() {


    })

</script>
@stop
