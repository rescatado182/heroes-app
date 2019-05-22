@extends('layouts.app')

@section('content')

    
    <div class="container">
        <div class="row heading heading-icon">
            <h2>Heroes App</h2>
        </div>
        
        <ul id="heroes-collection" class="row">

            @foreach ($heroes as $member)
                <li class="col-6 col-md-6 col-lg-3">
                    <div class="cnt-block equal-hight" style="height: 349px;">
                    <figure><img src="{{ $member['picture'] }}" class="img-responsive" alt="{{ $member['name'] }}"></figure>
                        <h3><a href="/view/?name={{ $member['name'] }}">{{ $member['name'] }}</a></h3>
                        <p>{{ $member['publisher'] }}</p>

                        <ul class="vote-us clearfix">
                            <li><a href="#" class="thumbs-up" rel="{{ $member['name'] }}"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="thumbs-down" rel="{{ $member['name'] }}"><i class="fa fa-thumbs-down" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </li>
            @endforeach
            
        </ul>

        <div class="clearfix"></div>

        <div class="row justify-content-md-center">
            <nav class="pagination-content" aria-label="Page navigation">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="/">1</a></li>
                    <li class="page-item"><a class="page-link" href="/?page=2">2</a></li>
                    <li class="page-item"><a class="page-link" href="/?page=3">3</a></li>
                    <li class="page-item"><a class="page-link" href="/?page=4">4</a></li>
                    <li class="page-item"><a class="page-link" href="/?page=5">5</a></li>
                    <li class="page-item"><a class="page-link" href="/?page=6">6</a></li>
                </ul>
            </nav>
        </div>
    </div>

@endsection