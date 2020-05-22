<div class="d-xl-block col-xl-4 d-none bc-light-blue px-0">
    <div class="service-left-block">
        <div class="row mx-0">
            <div class="offset-xl-2 col-xl-8 offset-1 col-10">
                <h1 class="page-title mt-70 mb-35">{{ __('services.serv') }}</h1>
                <ul class="services-list">
                    @foreach($services as $key => $item)
                        <li class="services-list__item  {{  $loop->first && (Str::afterlast(request()->path(),'/') =='services') || (Str::afterlast(request()->path(),'/') == $item->slug) ? 'active': '' }} ">
                            <a href="{{ route('servicesItem', ['local' => App::getLocale(),'slug'=>$item->slug]) }}" class="services-list__link ">{{ $item->title }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <span class="service__iso">ISO 9001:2015</span>
    </div>
</div>
