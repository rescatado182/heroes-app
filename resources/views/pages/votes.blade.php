@extends('layouts.app')

@section('title')
Laravel 5.8 Basics | 10+ 
@endsection

@section('content')
    
    <div class="container container-carousel">

        <div class="row heading heading-icon">
            <h2>Heroes App 10 + Votados</h2>
        </div>

        <div class="row blog">
            <div class="col-md-12">
                <div id="heroes-carousel" class="carousel slide container-blog" data-ride="carousel">
                    <div class="carousel-inner"></div>

                    <ol class="carousel-indicators">
                        <li data-target="#heroes-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#heroes-carousel" data-slide-to="1"></li>
                        <li data-target="#heroes-carousel" data-slide-to="2"></li>
                        <li data-target="#heroes-carousel" data-slide-to="3"></li>
                    </ol>
                
                </div>
            <!--.Carousel-->
            </div>
        </div>
    </div>
      
@endsection