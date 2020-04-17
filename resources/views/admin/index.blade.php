@extends('layouts.admin')
@section('title',' | '.$title)

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="u-mb-xsmall" style="float:right;">
                <div class="c-dropdown " style="margin-top: 6px;">
                    <a href="?reMetrics=1" class="c-btn c-btn--success has-icon" role="button">
                        Yenilə &nbsp;&nbsp;<i class="c-btn__icon feather icon-refresh-ccw"></i>
                    </a>
                </div>
            </div>

            <div class="u-mb-xsmall" style="float:left;">
                <h3 class="u-mb-small">Sayğac
                    <p style="opacity: .7">Son yeniləmə {{date("Y/m/d H:i:s",$metrics['time'])}}</p>
                </h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="c-card">
			<span class="c-icon c-icon--info u-mb-small">
				<i class="feather icon-file-plus"></i>
			</span>

                <h3 class="c-text--subtitle">Gələn emaillər</h3>
{{--                <h1>{{$metrics['']}}</h1>--}}

            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="c-card">
			<span class="c-icon c-icon--danger u-mb-small">
				<i class="feather icon-file"></i>
			</span>

                <h3 class="c-text--subtitle">Oxunmayan emaillər</h3>
{{--                <h1>{{$metrics['']}}</h1>--}}
            </div>
        </div>
    </div>
@endsection
