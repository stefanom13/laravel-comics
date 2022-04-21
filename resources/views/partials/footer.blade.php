@php

$socialIcon = [
    [
        'icon' => '/img/footer-facebook.png',
    ],
    [
        'icon' => 'img/footer-twitter.png',
    ],
    [
        'icon' => 'img/footer-youtube.png',
    ],
    [
        'icon' => 'img/footer-pinterest.png',
    ],
    [
        'icon' => 'img/footer-periscope.png',
    ],
];

$listFooter = [
    [
        'title' => 'DC comics',
        'links' => [
            [
                'text' => 'Character',
                'href' => '#',
            ],
            [
                'text' => 'Comics',
                'href' => '#',
            ],
            [
                'text' => 'Movies',
                'href' => '#',
            ],
            [
                'text' => 'TV',
                'href' => '#',
            ],
            [
                'text' => 'Games',
                'href' => '#',
            ],
            [
                'text' => 'Videos',
                'href' => '#',
            ],
            [
                'text' => 'News',
                'href' => '#',
            ],
        ],
    ],

    [
        'title' => 'Shop',
        'links' => [
            [
                'text' => 'Shop DC',
                'href' => '#',
            ],
            [
                'text' => 'Shop DC Collectibles',
                'href' => '#',
            ],
        ],
    ],

    [
        'title' => 'DC',
        'links' => [
            [
                'text' => 'Terms Of Use',
                'href' => '#',
            ],
            [
                'text' => 'Privacy policy (New)',
                'href' => '#',
            ],
            [
                'text' => 'Ad Choices',
                'href' => '#',
            ],
            [
                'text' => 'Advertising',
                'href' => '#',
            ],
            [
                'text' => 'Jobs',
                'href' => '#',
            ],
            [
                'text' => 'Subscriptions',
                'href' => '#',
            ],
            [
                'text' => 'Talent Workshops',
                'href' => '#',
            ],
            [
                'text' => 'CPSC Certificates',
                'href' => '#',
            ],
            [
                'text' => 'Ratings',
                'href' => '#',
            ],
            [
                'text' => 'Shop Help',
                'href' => '#',
            ],
            [
                'text' => 'Contact Us',
                'href' => '#',
            ],
        ],
    ],

    [
        'title' => 'Sites',
        'links' => [
            [
                'text' => 'DC',
                'href' => '#',
            ],
            [
                'text' => 'MAD Magazine',
                'href' => '#',
            ],
            [
                'text' => 'DC Kids',
                'href' => '#',
            ],
            [
                'text' => 'DC Universe',
                'href' => '#',
            ],
            [
                'text' => 'DC Power Visa',
                'href' => '#',
            ],
        ],
    ],
];

@endphp



<footer>
  
    <div class="contLinkFooter">
        <div class="container ContBckImg">
            <div class="listFooter">
               <ul>
                  @foreach($listFooter as $value)
                  <li class="item-wrap">
                     <h3 class="title">{{$value['title']}}</h3>
                     <ul>
                        @foreach($value['links'] as $link)
                        <li class="itemLIst">
                           <a href=" {{$link['href']}} ">{{$link['text']}}</a>
                        </li>
                        @endforeach
                     </ul>
                  </li>
                  @endforeach
               </ul>
            </div>
        </div>
    </div>
    <div class="contFooter">
        <div class="container dflexFooter">

            <button>
                sign-up now!
            </button>

            <div class="contIconsFooter">
                <p>follow us</p>
                <ul>
                    @foreach ($socialIcon as $value)
                        <li><img src="{{ asset($value['icon']) }}" alt=""></li>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
</footer>
