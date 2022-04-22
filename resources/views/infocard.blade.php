@extends('layouts.standard')


@section('mainContent')
    <div class="infoCard">
        <div class="container dflexInfocard">
            <div class="contThumb">
               <img src="{{$comics['thumb']}}" alt="">
            </div>
            <div class="firstSection">
                <div class="contText">
                    <h2>{{$comics['title']}}</h2>

                    <div class="avaible">
                        <p class="priceAvaible">prezzo</p>
                        <div class="infoAvaible">
                            <p>disponibilita</p>
                            <p>disponibilita</p>
                        </div>
                    </div>

                    <p>testo</p>
                </div>
                <div class="advertisement">
                    <p>advertisement</p>
                    <figure>
                      <img src="{{asset('img/adv.jpg')}}" alt="">
                    </figure>
                  </div>
            </div>
            <div class="secondSection">
                <div>
                    testo
                </div>
                <div>
                    testo
                </div>
            </div>
        </div>
    </div>
@endsection