<button id="comapnies-view-button-open" class="button button_white">View Group of companies</button>

<div class="comapnies-view">
    <div class="comapnies-view__head mb-50">
        <h2 class="comapnies-view__title">Group of companies</h2>
        <a id="comapnies-view-button-close" href="javascript:void(0)" class="link link_icon link_icon_arrow-right ml-50"></a>

    </div>

    <ul class="comapnies-view-list mb-30">
        @php $counter = 0; @endphp
        @foreach($__companies as $el)
            @php   $counter++;  @endphp
            <li class="comapnies-view-list__item">
                <a href="{{ route('companies') }}" class="comapnies-view-list__link">
                    <span class="comapnies-view-list__number">{{ $counter }}</span>
                    <span class="comapnies-view-list__name">{{ $el->company }}</span>
                </a>
            </li>
        @endforeach
    </ul>

    <span class="comapnies-view__iso">ISO 9001:2015</span>
</div>
