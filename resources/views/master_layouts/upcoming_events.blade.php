<h2>Upcoming Events</h2>
<div class="wrapper">
	@foreach($restaurents as $key => $restaurent)
		@php $regions = '' @endphp
		@foreach($restaurent->region as $key => $region)
			@php $regions .= $region->name . ',' @endphp
		@endforeach
		<div class="col-1-2">
			<div class="wrap-col">
				<div class="wrapper pad_bot2">
					<h3> {{ $restaurent->name }}</h3>
					<figure class="left marg_right1"><img src="{{ URL::to('/')}}/upload/{{ $restaurent->image }}" alt=""></figure>
					<p>
						<a href="#">{{ $restaurent->created_at }}. Sed perspiciatis</a><br>
						{{ $regions }}
					</p>
				</div>
			</div>
		</div>
	@endforeach
</div>
				