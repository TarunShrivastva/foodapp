@extends('master_layouts.master')
@section('cssContent')
	<link rel="stylesheet" href="{{ URL::to('css/contactform.css') }}" type="text/css" media="all">
@endsection
@section('content')
<article id="content">
				<div class="wrap">
					<div class="box">
						<div>
							<h2 class="letter_spacing">Login <span>Form</span></h2>
							<!--Warning-->
							@error('email')
                                <center>{{ $message }}</center>
                            @enderror
                            @error('password')
                                <center>{{ $message }}</center>
                            @enderror
							<!---->
							<div id="contact_form">	
								{{-- <strong>Login Here</strong> --}}
								<form method="POST" action="{{ route('login') }}">
									@csrf
									 <label>
									 Email*:
									 <input type="email" placeholder="email" name="email" value="{{ old('email') }}" id="email" required autocomplete="off" autofocus>
									 </label>
									 <label>
									 Password*:
									 <input type="password" placeholder="password" name="password" value="{{ old('password') }}" id="password" required autocomplete="current-password" autofocus>
									 </label>
									 <input class="sendButton" type="submit" name="Submit" value="Send">
								</form>
							</div>
						</div>
					</div>
				</div>
			</article>
@endsection			