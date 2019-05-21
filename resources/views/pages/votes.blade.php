@extends('layouts.app')

@section('title')
Laravel 5.8 Basics | About Page
@endsection

@section('content')
    
    <div class="container">
        <div class="row blog">
            <div class="col-md-12">
                <div id="blogCarousel" class="carousel slide container-blog" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#blogCarousel" data-slide-to="1"></li>
                    </ol>

                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-4" >
                                    <div class="item-box-blog">
                                        <div class="item-box-blog-image">
                                            <!--Image-->
                                            <figure> 
                                                <img alt="" src="https://cdn.pixabay.com/photo/2017/02/08/14/25/computer-2048983_960_720.jpg"> 
                                            </figure>
                                        </div>
                                        <div class="item-box-blog-body">
                                            <!--Heading-->
                                            <div class="item-box-blog-heading">
                                                <a href="#" tabindex="0">
                                                    <h5>News Title</h5>
                                                </a>
                                            </div>
                                            <!--Data-->
                                            <div class="item-box-blog-data" style="padding: px 15px;">
                                                <p><i class="fa fa-user-o"></i> Admin, <i class="fa fa-comments-o"></i> Comments(3)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!--.row-->
            </div>
        <!--.item-->
        </div>
    <!--.carousel-inner-->
    </div>
<!--.Carousel-->
</div>
        </div>
    </div>
      
@endsection