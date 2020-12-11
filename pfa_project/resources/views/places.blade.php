@extends('layout')

    @section('content')
    
    <div class="hero-wrap js-fullheight" style="background-image: url('app-assets/images/bg_4.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">Home</a></span> <span>Place</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Places</h1>
          </div>
        </div>
      </div>
    </div>


    <section class="ftco-section ftco-degree-bg">
      	<div class="container">
        	<div class="row">
        		<div class="col-lg-3 sidebar">
        			<div class="sidebar-wrap bg-light ftco-animate">
        				<h3 class="heading mb-4">Filter Results</h3>

        				<form action="{{route('post_request_places') }}" method ="POST">
        				
        					@csrf
        					<div class="fields">
		             	 		<div class="form-group">
		               		    	<div class="select-wrap one-third">
	                   					<div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                   					<select name="location" id="" class="form-control" placeholder="Keyword search">
	                      					<option value="">Select Location</option>
	                      					<option value="Al Hoceima">Al Hoceima</option>
	                      					<option value="Ajdir">Ajdir</option>
	                      					<option value="Targhist">Targhist</option>
	                   					</select>
	                 				</div>
		              			</div>
		              			
		                    	<div class="form-group">
		                			<input type="submit" value="Search" class="btn btn-primary py-3 px-5">
		                    	</div>
		            		</div>
	                	</form>

        			</div>
        			
        			
         		</div>
           		<div class="col-lg-9">

	          		<div class="row">

	          			@foreach($places as $place)
						<div class="col-md-4 ftco-animate">
			    			<div class="destination">
			    				<a href="places/{{$place->slug}}" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{ $place->photo }});">
			    					<div class="icon d-flex justify-content-center align-items-center">
	    								<span class="icon-search2"></span>
	    							</div>
			    				</a>
			    				<div class="text p-3">
			    					<div class="d-flex">
			    						<div class="one">
					    					<h3><a href="#">{{$place->nom}}</a></h3>
					    					
				    					</div>
				    					
			    					</div>
			    					<p>{{ $place->apropos }}</p>
			    					<hr>
			    					<p class="bottom-area d-flex">
			    							<span><i class="icon-map-o"></i> {{$place->location}}</span> 
			    					</p>
			    				</div>
			    			</div>
			    		</div>

						@endforeach

			    	</div>
			    	<div class="map-responsive">
	                	<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d104306.26289740235!2d-4.009556817535022!3d35.21716048094507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s%20plage%20Al%20Hoce%C3%AFma%20!5e0!3m2!1sfr!2sma!4v1595878023026!5m2!1sfr!2sma" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	                	</div>

          		</div>
			</div>
		</div>
	</section> <!-- .section -->
    @endsection