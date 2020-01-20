<!DOCTYPE html>
<html lang="en">
@include('master_layouts.head')
<body id="page1">
<div class="body6">
	<div class="body1">
		<div class="body5">
			<div class="main zerogrid">
			<!-- header -->
				@include('master_layouts.header')
			<!-- / header -->
			<!-- content -->
				@include('master_layouts.content')
			<!-- / content -->
<div class="body3">
	<div class="main zerogrid">
<!-- footer -->
		@include('master_layouts.footer')
<!-- / footer -->
	</div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
@yield('jsContent')
</body>
</html>