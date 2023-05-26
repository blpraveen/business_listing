@extends('public.template')

@section('screen')
<div class="w3">
	<style type="text/css">
@media screen and (min-width: 600px){
	#floatdiv {
		align-self: center !important;
		max-width: 60%;
		padding:64px 64px 64px 64px; 
	}
	#parentdiv {
		padding : 128px 64px 64px 64px;
}
}
@media screen and (max-width: 600px){
	#floatdiv {
		max-width: 90%;
		padding: 32px;
}
	#parentdiv {
		padding-top: 64px;
}
}

</style>


<div id="floatdiv" class="w3-card-8  w3-white">
<div class="w3-margin"><b class="w3-xlarge w3-text-teal w3-margin w3-serif">Register</b></div> <br>
<span class="w3-block w3-text-red">
	@if(Session::has('error'))
	{{session('error')}}
	@endif

</span>
<form action="{{ route('register') }}" method="POST">
	@csrf
<span class="w3-label">Name</span>
<input id="name" type="text"  name="name"  placeholder="Name" value="{{ old('name') }}" required autocomplete="name" autofocus  class="w3-input w3-margin" >
<br>

<span class="w3-label">Email</span>
<input type="text" name="email" placeholder="Email Address" class="w3-input w3-margin"  />
<span class="w3-label">Password</span>
<input type="password" name="password" placeholder="Password" class="w3-input w3-margin w3-animate-input" /><br>
<span class="w3-label">Confirm Password</span>
<input type="password" name="password_confirmation" placeholder="Password" class="w3-input w3-margin w3-animate-input" /><br>
<input type="submit" name="submit" value="Register" class="w3-btn w3-teal w3-hover-white w3-hover-text-teal w3-border w3-round-large w3-large">
<br>
</form>

@endsection
