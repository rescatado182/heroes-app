@extends('layouts.app')

@section('title')
Heores Chef | View Heroe
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="media">
                
                <div class="img">
                    <img src="{{ @$heroe['picture'] }}" alt="{{ @$heroe['name'] }}" class="d-flex align-self-start" />
                </div>

                <div class="media-body pl-6 details">
                    <h3>{{ @$heroe['name'] }}</h3>
                    <input type="hidden" id="heroeName" readonly value="{{ @$heroe['name'] }}" />
                    <h4>{{ @$heroe['publisher'] }}</h4>
                    <p>{{ @$heroe['info'] }}</p>

                    <a href="#">Conocer más</a>

                    <div class="clearfix"></div>

                    <ul class="vote-us float-right">
                        <li><a href="#" class="thumbs-up"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="thumbs-down"><i class="fa fa-thumbs-down" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection