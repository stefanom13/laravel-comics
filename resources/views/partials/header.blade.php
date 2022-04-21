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
                <p>scritta1</p>
                <p>scritta2</p>
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
                        <li>ciaooo</li>
                        <li>ciaooo</li>
                        <li>ciaooo</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
