@extends('master_layouts.master')
@section('content')
<article id="content">
					<div class="slider_bg">
						@include('master_layouts.slider')
					</div>
					<div class="wrap">
						@include('master_layouts.welcome')
					</div>
				</article>
			</div>
		</div>
	</div>
</div>


<div class="body2">
	<div class="main zerogrid">
		<article id="content2">
			<div class="wrapper">
				<section class="col-2-3">
					@include('master_layouts.upcoming_events')</section>
				<section class="col-1-3">
					@include('master_layouts.testimonial')
				</section>
			</div>
		</article>
	</div>
</div>
@endsection