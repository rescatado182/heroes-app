@extends('layouts.app')

@section('content')
    
    <div class="container">
        <div class="row heading heading-icon">
            <h2>Heroes App</h2>
        </div>
        
        <ul class="row">

            @foreach ($heroes['original'] as $member)
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
    </div>

@endsection