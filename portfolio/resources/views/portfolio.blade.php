@extends('layout')

@section('contenu')
<?php $page = "portfolio"; ?>
<!-- Body -->
	@include('inc.menu')
	<div class="container contenu">
		<div class="row justify-content-center vertical-center-carousel">
	
			<!-- Carousel Wrapper -->
			<div id="carousel-example-2" class="col-12 carousel slide carousel-fade" data-ride="carousel">
    			<!-- Indicators -->
			    <ol class="carousel-indicators">
			    	@foreach($projets as $key => $value)
			        <li data-target="#carousel-example-2" data-slide-to="{{$key}}" @if($key==0) class="active" @endif></li>
			        @endforeach
			    </ol>
    			<!-- End Indicators -->
    			<!-- Slides -->
    			<div class="carousel-inner" role="listbox">
    				@foreach($projets as $key => $value)
			        <div class="carousel-item @if($key==0) active @endif">
			            <div class="view hm-black-light">
			                <img class="d-block w-100" src="{{asset('img/perso/projets/'.$value->src)}}" alt="{{$value->alt}}">
			                <div class="mask pattern-6"></div>
			            </div>
			            <div class="carousel-caption">
			                <h3 id="titleslider" class="h3-responsive">{{$value->title}}</h3>
			                <p id="descrslider">{{$value->description}}</p>
			            </div>
			        </div>
			        @endforeach
    			</div>
    			<!-- End Slides -->
    			<!--Controls-->
			    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
			        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			        <span class="sr-only">Previous</span>
			    </a>
			    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
			        <span class="carousel-control-next-icon" aria-hidden="true"></span>
			        <span class="sr-only">Next</span>
			    </a>
			    <!-- End Controls -->
			</div>
			<!-- End Carousel Wrapper -->

		</div>
	</div>
<!-- End Body -->
@endsection	