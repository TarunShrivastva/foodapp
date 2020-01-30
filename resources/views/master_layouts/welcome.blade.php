@foreach($restaurents as $key => $restaurent)
@php $regions = '' @endphp
@foreach($restaurent->region as $key => $region)
	@php $regions .= $region->name . ',' @endphp
@endforeach
<section class="col-1-3">
	<div class="wrap-col">
		<div class="box">
			<div>
				<h2>{{ $restaurent->name }}</h2>
				{{-- <span>to Us!</span> --}}
				<figure><img src="{{ URL::to('/')}}/upload/{{ $restaurent->image }}" alt="" ></figure>
				<p class="pad_bot1">This <a href="http://blog.templatemonster.com/2011/08/01/free-website-template-jquery-slider-typography-restaurant/" class="list_1">Deliccio Template</a> {{ $regions }}</p>
				<a href="#" class="button1">Read More</a>
			</div>
		</div>
	</div>
</section>
@endforeach
					