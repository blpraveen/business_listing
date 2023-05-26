@extends('public.template')

@section('screen')
         <div style="width:800px;margin:auto">
         <div  class ="sm:flex sm:flex-start" >
            <div class="container">
                @foreach ($business as $busines) 
                <div style="width:250px;border:1px solid #FFFFF;">
 
                    <!-- First product box start here-->
                    <div class="prod-info-main prod-wrap clearfix">
    
                        <div class="row">

                            <div class="col-md-5 col-sm-12 col-xs-12">

                            <div class="product-image">
                                @php
                                    $image = '';
                                    if($busines->feature_image){
                                        $image = json_decode($busines->feature_image)[0];
                                    }
                                @endphp
                                <img src="images/{{$image}}" class="img-responsive">

                        </div>
    
                    </div>
 
                    <div class="col-md-7 col-sm-12 col-xs-12">
    
                    <div class="product-deatil">
    
                                <h5 class="name">
    
                                <a href="listing/{{$busines->id}}">
    
                                {{$busines->name}}
    
                                </a>
                            
    
                            </h5>
    
                        </div>
    

    
                        <div class="product-info smart-form">
                    
                            <div class="row">
                    
                                <div class="col-md-12">
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
                            </div>
                    
                        </div>
    
                    </div>
 
             </div>
             @endforeach
        </div>
 
 <!-- end product -->
 
</div>
</div>
</div>
</div>
</div>

@endsection

