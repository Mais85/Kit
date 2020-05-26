
    @foreach($items as $item)
        <div  class="col-xl-3 col-md-6 col-12 mb-40">
            <a href="{{ route('newsItem', ['local' => app()->getLocale(),'slug'=> $item->slug , 'id'=>$item->id] ) }}" class="news-item">
                <div class="news-item__img-box" style="background-image: url({{ $item->smallimg }});"></div>
                <h2 class="news-item__title">{{ $item->title }}</h2>
                <span class="news-item__description">{{ $item->desc }}</span>
                <span class="news-item__date">{{ $item->created_at }}</span>
            </a>
        </div>
    @endforeach
