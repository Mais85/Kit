@extends('layouts.site')

{{--@section('title', '| '. __('main.title'))--}}

@section('content')

@include('site.catalog')


<div class="content">

    <div class="container-fluid bg-navy-dark">
        <div class="row">
            <div class="col-xl-2 d-xl-block d-none pl-0 pr-0">
                <div class="gallery-block">
                    <h2 class="gallery-title mb-15">Albums</h2>
                    <ul class="gallery-nav">
                        <li class="gallery-nav__item active">
                            <a href="javascript:void(0)" class="gallery-nav__link" style="background-image: url(img/project_item_preview.png);" data-id="0">
                                <h3 class="gallery-nav__title">Qəhrəman Donorlar milion Ağac əkmə aksiyası</h3>
                                <span class="gallery-nav__date">/ 2017 /</span>
                            </a>
                        </li>
                        <li class="gallery-nav__item">
                            <a href="javascript:void(0)" class="gallery-nav__link" style="background-image: url(img/news_item_preview.png);" data-id="1">
                                <h3 class="gallery-nav__title">Qəhrəman Donorlar milion Ağac əkmə aksiyası</h3>
                                <span class="gallery-nav__date">/ 2017 /</span>
                            </a>
                        </li>
                        <li class="gallery-nav__item">
                            <a href="javascript:void(0)" class="gallery-nav__link" style="background-image: url(img/project_item_preview.png);" data-id="0">
                                <h3 class="gallery-nav__title">Qəhrəman Donorlar milion Ağac əkmə aksiyası</h3>
                                <span class="gallery-nav__date">/ 2017 /</span>
                            </a>
                        </li>
                        <li class="gallery-nav__item">
                            <a href="javascript:void(0)" class="gallery-nav__link" style="background-image: url(img/news_item_preview.png);" data-id="1">
                                <h3 class="gallery-nav__title">Qəhrəman Donorlar milion Ağac əkmə aksiyası</h3>
                                <span class="gallery-nav__date">/ 2017 /</span>
                            </a>
                        </li>
                        <li class="gallery-nav__item">
                            <a href="javascript:void(0)" class="gallery-nav__link" style="background-image: url(img/project_item_preview.png);" data-id="0">
                                <h3 class="gallery-nav__title">Qəhrəman Donorlar milion Ağac əkmə aksiyası</h3>
                                <span class="gallery-nav__date">/ 2017 /</span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="offset-xl-1 col-xl-9 col-12">

                <div class="row">
                    <div class="col-xl-10 col-12">
                        <h1 class="page-title page-title_center-white mt-10 mb-30">Gallery</h1>

                        <h2 id="gallery-title-main" class="gallery-title mb-10">New photos</h2>
                    </div>
                </div>

                <div class="gallery-carousel-wrapper">
                    <div class="row mb-15">
                        <div class="col-1 flex-row-center-center">
                            <button href="javascript:void(0)" class="carousel-button carousel-button_transparent carousel-button_left"></button>
                        </div>
                        <div class="col-xl-8 col-10">
                            <img src="img/project_item_preview.png" class="gallery-carousel-img" />
                        </div>
                        <div class="col-1 flex-row-center-center">
                            <button href="javascript:void(0)" class="carousel-button carousel-button_transparent carousel-button_right"></button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="offset-1 col-xl-8 col-10 flex-row-center-center">
                            <button href="javascript:void(0)" class="carousel-button-2 carousel-button-2_transparent carousel-button-2_left"></button>

                            <div class="gallery-carousel owl-carousel">
                                <div class="gallery-carousel__item">
                                    <img src="img/project_item_preview.png" class="gallery-carousel__img" />
                                </div>
                                <div class="gallery-carousel__item">
                                    <img src="img/project_item_preview.png" class="gallery-carousel__img" />
                                </div>
                                <div class="gallery-carousel__item">
                                    <img src="img/project_item_preview.png" class="gallery-carousel__img" />
                                </div>
                            </div>

                            <button href="javascript:void(0)" class="carousel-button-2 carousel-button-2_transparent carousel-button-2_right"></button>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

</div>
<script>

    var albom = [
        {
            name: "New photos 1",
            photos: [
                "project_item_preview.png",
                "project_item_preview.png",
                "project_item_preview.png",
                "project_item_preview.png",
                "project_item_preview.png"
            ]
        },
        {
            name: "New photos 2",
            photos: [
                "news_item_preview.png",
                "news_item_preview.png",
                "news_item_preview.png",
                "news_item_preview.png",
                "news_item_preview.png"
            ]
        }
    ]

</script>
@endsection
