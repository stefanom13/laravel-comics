@php
  $socialIcon = [
        [
          'icon' => '/img/footer-facebook.png'
        ],
        [
          'icon' => '/img/footer-twitter.png'
        ],
        [
          'icon' => 'img/footer-youtube.png'
        ],
        [
          'icon' => 'img/footer-pinterest.png'
        ],
        [
          'icon' => 'img/footer-periscope.png'
        ],
      ]
@endphp


<footer >
   <div class="contLinkFooter">
      <div class="container ContBckImg">
         ciaoo
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
               @foreach($socialIcon as $value)

               <li>{{$value['icon']}}</li>

               @endforeach
            </ul>
         </div>
     
   </div>
   </div>
</footer>