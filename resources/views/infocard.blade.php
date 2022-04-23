@extends('layouts.standard')


@section('mainContent')
    <div class="infoCard">
        <div class="container dflexInfocard">
            <div class="contThumb">
               <img src="{{$comics['thumb']}}" alt="">
            </div>
            <div class="firstSection">
                <div class="contText">
                    <h2 class="titleComic">{{$comics['title']}}</h2>

                    <div class="avaible">
                        <p class="priceAvaible">U.S. Price: <span>{{$comics['price']}}</span></p>
                        <div class="infoAvaible">
                            <p class="infoAv">Avaible</p>
                            <select class="check" name="" id="" placeholder='Check Availability'>
                                <option value="">Check Availability</option>
                                <option value="">10</option>
                                <option value="">20</option>
                              </select>
                        </div>
                    </div>

                    <p>{{$comics['description']}}</p>
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