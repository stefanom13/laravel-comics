@extends('layouts.standard')

@section('mainContent')
    <div class="section">
        <div class="container prCont">
            <div class="SerieCorrente">
                <button>
                    current series
                </button>
            </div>

            <div class="contWrapper">
                @foreach ($comics as $indice => $value)
                    <div class="cardComics">
                        <a class="" href="{{route('comic.show', ['id' => $indice])}}">
                            <div class="comic-card">
                              <figure>
                                <img src="{{$value['thumb']}}" alt="">
                              </figure>
                              <h3>{{$value['title']}}</h3>
                            </div>
                          </a>
                         
                    </div>
                @endforeach
            </div>
            <div class="contButton">
                <button class=" btn-primary">
                    load more
                </button>
            </div>
        </div>
    </div>
@endsection
