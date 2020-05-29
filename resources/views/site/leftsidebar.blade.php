
<div class="d-xl-block col-xl-4 d-none bg-black px-0">
    <div class="company-left-block">
        <div class="row mb-60 mx-0">
            <div class="offset-xl-2 col-xl-8 offset-1 col-10">
                <h1 class="page-title page-title_white mt-70 mb-60">{{ __('companies.comp') }}</h1>
                <ul class="companies-list">
                    @php $counter = 0; @endphp
                    @foreach($__companies as $values)
                        @php   $counter++;  @endphp
                        <li class="companies-list__item {{ (Str::afterlast(request()->path(),'/') == $values->id) ? 'active': ''  }}">

                            <span class="companies-list__number">{{ $counter }}</span>
                            <a href="{{ route('companies',['local' => App::getLocale(),'slug'=> $values->slug, 'id'=>$values->id]) }}" class="companies-list__link">{{ $values->company }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <span class="company__iso">ISO 9001:2015</span>
    </div>
</div>
