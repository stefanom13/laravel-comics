@php

$ban = [
    [
        'text' => 'Digital Comics',
        'img' => 'img/buy-comics-digital-comics.png',
    ],
    [
        'text' => 'Dc Merchandise',
        'img' => 'img/buy-comics-merchandise.png',
    ],
    [
        'text' => 'Subscription',
        'img' => 'img/buy-comics-subscriptions.png',
    ],
    [
        'text' => 'Comic Shop Locator',
        'img' => 'img\buy-comics-shop-locator.png',
    ],
    [
        'text' => 'Dc Power Visa',
        'img' => 'img\buy-dc-power-visa.svg',
    ],
];

@endphp





<div class="banner">
    <div class="container navBanner ">
        <ul class="contBanner">
            @foreach ($ban as $value)
                <h3><a href="">{{ $value['text'] }}</a></h3>
                <li class="imgBan"><img src="{{ asset($value['img']) }}" alt=""></li>
          
            
            @endforeach
        </ul>
    </div>
</div>
