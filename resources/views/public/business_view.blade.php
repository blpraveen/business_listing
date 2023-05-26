@extends('public.template')

@section('screen')

            <div class="container primary-content">
	<!-- PRIMARY CONTENT HEADING -->
    <div style="width:900px;margin:auto;margin-top:60px;">
    <div class="row">
		<div class="col-md-12">
            <div class="image-wrapper">
                                 @php
                                    $image = '';
                                    if($busines->feature_image){
                                        $image = json_decode($busines->feature_image)[0];
                                    }
                                @endphp
                                <img src="{{url('images/'.$image)}}" class="img-responsive" width="250px">
            </div>
	<div class="primary-content-heading clearfix">
		<h2><strong>Business Name :</strong> {{$busines->name}}</h2>
        <p>
        <div style="display:inline-block">
            <strong style="display:inline;">About :</strong>
        </div>
        <div style="display:inline-block">
        {!! $busines->description !!}
        </div>
        </p>
        <p><strong>Address :</strong> {{ $busines->address }}</p>
        <p><strong>Email :</strong> {{ $busines->email }}</p>
        <p><strong>Website :</strong><a href=" {{ $busines->website }}"> {{ $busines->website }} </a></p>
        <p><strong>Phone :</strong> {{ $busines->phone }}</p>
        @php
            $rate = 0 ;
            if($busines->ratings) {
                $rate = $busines->ratings->avg('rate');
            }
        @endphp
            <div class="rating"><strong>Rating :</strong>
            @if($rate > 0)
            <label for="stars-rating-1"><i class="fa fa-star star_colour"></i></label>
            @else
            <label for="stars-rating-1"><i class="fa fa-star-o"></i></i></label>
            @endif
            
            @if($rate > 1)
            <label for="stars-rating-2"><i class="fa fa-star star_colour"></i></label>
            @else
            <label for="stars-rating-2"><i class="fa fa-star-o"></i></label>
            @endif
            @if($rate > 2)
            <label for="stars-rating-3"><i class="fa fa-star star_colour"></i></label>
            @else
            <label for="stars-rating-3"><i class="fa fa-star-o"></i></label>
            @endif
            @if($rate > 3)
            <label for="stars-rating-4"><i class="fa fa-star star_colour"></i></label>
            @else
            <label for="stars-rating-4"><i class="fa fa-star-o"></i></label>
            @endif
            @if($rate > 4)
            <label for="stars-rating-5"><i class="fa fa-star star_colour" ></i></label>
            @else
            <label for="stars-rating-5"><i class="fa fa-star-o"></i></label>
            @endif
            </div>
        <hr style="border:1px solid #fff">
		
	<!-- END PRIMARY CONTENT HEADING -->

        </div>
        <div class="col-md-8">
			<!-- MY TODO LIST -->
			<div class="widget">
            @auth
            @if (Session::has('success'))
            <div class="w3-panel w3-blue" style="width:50%;margin-left:10px;padding:10px"><h3>Success!</h3> <p>{{ Session::get('success') }}</p></div>
            @endif
            <div class="widget-content">
                    <form method="post" action="{{ route('rating') }}" onsubmit="return validateForm();">
                        @csrf
                        <div style="display:inline"><strong>Submit Rating : </strong</div>
                        <div class="rating edit-rating" style="display:inline">
                            @if($rate > 0)
                            <label class="rating-select" for="stars-rating-1" onmouseover="change(this,1);"><i class="rating-edit fa fa-star star_colour"></i></label>
                            @else
                            <label class="rating-select" for="stars-rating-1" onmouseover="change(this,1);"><i class="rating-edit fa fa-star-o"></i></i></label>
                            @endif
                            
                            @if($rate > 1)
                            <label class="rating-select" for="stars-rating-2" onmouseover="change(this,2);"><i class="rating-edit fa fa-star star_colour"></i></label>
                            @else
                            <label class="rating-select" for="stars-rating-2" onmouseover="change(this,2);"><i class="rating-edit fa fa-star-o"></i></label>
                            @endif

                            @if($rate > 2)
                            <label class="rating-select" for="stars-rating-3" onmouseover="change(this,3);"><i class="rating-edit fa fa-star star_colour"></i></label>
                            @else
                            <label class="rating-select" for="stars-rating-3" onmouseover="change(this,3);"><i class="rating-edit fa fa-star-o"></i></label>
                            @endif
                            
                            @if($rate > 3)
                            <label class="rating-select" for="stars-rating-4" onmouseover="change(this,4);"><i class="rating-edit fa fa-star star_colour"></i></label>
                            @else
                            <label class="rating-select" for="stars-rating-4" onmouseover="change(this,4);"><i class="rating-edit fa fa-star-o"></i></label>
                            @endif

                            @if($rate > 4)
                            <label class="rating-select" for="stars-rating-5" onmouseover="change(this,5);"><i class="rating-edit fa fa-star star_colour" ></i></label>
                            @else
                            <label class="rating-select" for="stars-rating-5" onmouseover="change(this,5);"><i class="rating-edit fa fa-star-o"></i></label>
                            @endif
                        </div>
                        <div style="display:block">
                            <input type="hidden" name="rate_value" id="list_rating" value="0">
                            <input type="hidden" name="listing_id" id="listing_id" value="{{$listing_id}}">
                            <input class="button" type="button" value="Clear" name="clear_rating" id="clear-rating">
                            <input class="button" type="submit" value="Submit" name="submit_rating">
                        </div>
                    </form>
                </div>
            @else
                <div class="widget-header clearfix">
					<h3><i class="fa fa-user"></i> <span>Please Login to Rate the Listing</span></h3>
                </div>
            @endauth
				
            </div>
        </div>
		
	</div>
</div>
</div>
@endsection