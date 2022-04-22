@php
$links = [
    [
        'text' => 'Characters',
        'href' => 'characters.index',
    ],
    [
        'text' => 'Comics',
        'href' => 'comics.index',
    ],
    [
        'text' => 'Movies',
        'href' => 'movies.index',
    ],
    [
        'text' => 'Tv',
        'href' => 'tv.index',
    ],
    [
        'text' => 'Games',
        'href' => 'games.index',
    ],
    [
        'text' => 'Collectibles',
        'href' => 'collectibles.index',
    ],
    [
        'text' => 'Videos',
        'href' => 'videos.index',
    ],
    [
        'text' => 'Fans',
        'href' => 'fans.index',
    ],
    [
        'text' => 'News',
        'href' => 'news.index',
    ],
    [
        'text' => 'Shop',
        'href' => 'shop.index',
    ],
];
@endphp

<header>
    <div>
        <div class="bckg-blu">
            <div class="container dflex">
                <p>dc power visa</p>
                <p>additional dc site</p>
            </div>
        </div>
        <div class="container">
            <div class="contImg">
                {{-- logo --}}
                <figure class="logo">
                    <img src="{{ asset('img/dc-logo.png') }}" alt="">
                </figure>
                <nav class="navbarHeader">
                    <ul class="ulHeader">
                        @foreach($links as $value)

                        <li class="liHeader"><a href="{{route($value['href'])}}">{{$value['text']}}</a></li>

                        @endforeach
    
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
