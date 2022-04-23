@extends('layouts.standard')


@section('mainContent')
    <div class="infoCard">
        <div class="container dflexInfocard">
            <div class="contThumb">
                <img src="{{ $comics['thumb'] }}" alt="">
            </div>
            <div class="firstSection">
                <div class="contText">
                    <h2 class="titleComic">{{ $comics['title'] }}</h2>

                    <div class="avaible">
                        <p class="priceAvaible">U.S. Price: <span>{{ $comics['price'] }}</span></p>
                        <div class="infoAvaible">
                            <p class="infoAv">Avaible</p>
                            <select class="check" name="" id="" placeholder='Check Availability'>
                                <option value="">Check Availability</option>
                                <option value="">10</option>
                                <option value="">20</option>
                            </select>
                        </div>
                    </div>

                    <p>{{ $comics['description'] }}</p>
                </div>
                <div class="advertisement">
                    <p>advertisement</p>
                    <figure>
                        <img src="{{ asset('img/adv.jpg') }}" alt="">
                    </figure>
                </div>
            </div>
        </div>
        <div class="bckSecondSection">
            <div class="container dflexInfocard">
                <div class="secondSection">
                    <div class="contTalent dFlexts">
                        <h2 class="talentSpecs">Talent</h2>
                        <div class="dflexAuthor">
                            <p class="author">autori</p>
                            <div class="listAuthor">
                                @foreach ($comics['artists'] as $value)
                                    <a href="">{{ $value }},</a>
                                @endforeach
                            </div>
                        </div>
                        <div class="dflexWriteby">
                            <p class="writeBy">Writen by:</p>
                            <div class="listWriteby">
                                @foreach ($comics['writers'] as $value)
                                    <a href="">{{ $value }},</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="contSpecs dFlexts">
                        <h2 class="talentSpecs">Specs</h2>
                        <div class="contInfots">
                            <div class="row">
                                <p class="titleRow">Series:</p>
                                <p class="titleSeries"><a href="">{{$comics['series']}}</a><p>
                            </div>
                            <div class="row">
                                <p class="titleRow">U.S Price:</p>
                                <p><a href="">{{$comics['price']}}</a><p>
                            </div>
                            <div class="row bB">
                                <p class="titleRow">On Sale Date:</p>
                                <p><a href="">{{$comics['sale_date']}}</a><p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
