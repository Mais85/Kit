@extends('layouts.site')

@section('title', '| '. __('index.clitit'))

@section('content')
    <div class="content">

        <div class="container-fluid bg-dark pt-50" style="min-height: calc(100vh - 120px)">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-sm-1 col-sm-10 col-12">
                    <h1 class="page-title page-title_center-white mb-50">{{ __('header.OurClients') }}</h1>

                    <div class="row mb-70">
                        @foreach($items as $item)
                        <div class="col-xl-3 col-md-6 col-12 mb-70">
                            <a href="{{ $item->link !=null ? $item->link : " javascript:void(0)" }}"  @if($item->link)target="_blank" @endif class="client-item">
                                <img src="{{ $item->logo }}" class="client-item__img" />
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop

