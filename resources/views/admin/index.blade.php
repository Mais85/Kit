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
                <h3 class="c-text--subtitle">Şirkət sayı</h3>
                <h1>{{$metrics['company']}}</h1>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="c-card">
			<span class="c-icon c-icon--danger u-mb-small">
				<i class="feather icon-file"></i>
			</span>
                <h3 class="c-text--subtitle">İşçi sayı</h3>
                <h1>{{$metrics['employee']}}</h1>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="c-card">
			<span class="c-icon c-icon--success u-mb-small">
				<i class="feather icon-file"></i>
			</span>
                <h3 class="c-text--subtitle">Xəbər sayı</h3>
                                <h1>{{$metrics['news']}}</h1>
            </div>
        </div>
        <br>
        <div class="col-md-6 col-xl-3">
            <div class="c-card">
			<span class="c-icon c-icon--info u-mb-small">
				<i class="feather icon-file-plus"></i>
			</span>
                <h3 class="c-text--subtitle">Xidmət sayı</h3>
                                <h1>{{$metrics['service']}}</h1>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="c-card">
			<span class="c-icon c-icon--danger u-mb-small">
				<i class="feather icon-file"></i>
			</span>
                <h3 class="c-text--subtitle">Layihə sayı</h3>
                <h1>{{$metrics['project']}}</h1>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="c-card">
			<span class="c-icon c-icon--success u-mb-small">
				<i class="feather icon-file"></i>
			</span>
                <h3 class="c-text--subtitle">Müştəri sayı</h3>
                <h1>{{$metrics['client']}}</h1>
            </div>
        </div>
        <br>
        <div class="col-md-6 col-xl-3">
            <div class="c-card">
			<span class="c-icon c-icon--info u-mb-small">
				<i class="feather icon-file-plus"></i>
			</span>
                <h3 class="c-text--subtitle">Rəy sayı</h3>
                                <h1>{{$metrics['testi']}}</h1>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="c-card">
			<span class="c-icon c-icon--danger u-mb-small">
				<i class="feather icon-file"></i>
			</span>
                <h3 class="c-text--subtitle">Referans sayı</h3>
                                <h1>{{$metrics['referans']}}</h1>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="c-card">
			<span class="c-icon c-icon--success u-mb-small">
				<i class="feather icon-file"></i>
			</span>
                <h3 class="c-text--subtitle">Sertifikat sayı</h3>
                                <h1>{{$metrics['sertificat']}}</h1>
            </div>
        </div>
        <br>

        <div class="col-md-6 col-xl-3">
            <div class="c-card">
			<span class="c-icon c-icon--info u-mb-small">
				<i class="feather icon-file"></i>
			</span>

                <h3 class="c-text--subtitle">Albom sayı</h3>
                                <h1>{{$metrics['albums']}}</h1>
            </div>
        </div>
        <br>
    </div>
@endsection
