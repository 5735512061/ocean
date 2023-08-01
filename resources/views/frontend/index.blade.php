@extends("frontend/layouts/template")
<style>
    @media (max-width: 575px) {
        #mobile {
            display: inline-block !important;
        }
        #desktop {
            display: none;
        }
    }
</style>
@section("content")
<img id="desktop" style="height:600px; width:100% !important;" src="{{url('/frontend/assets/img/hero-bg.jpg')}}" alt="">
<img id="mobile" style="display: none; width:100% !important; margin-top:20px;" src="{{url('/frontend/assets/img/hero-bg.jpg')}}" alt="">

<div class="product-section mt-5 mb-150">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<img src="{{url('/frontend/assets/img/about-us.jpg')}}" alt="">
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-md-12">
				<h3><strong>@lang('aboutus.mariam')</strong></h3>
				<p style="font-size: 18px;">
					@lang('aboutus.aboutus')
				</p>
			</div>
		</div>
	</div>
	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 text-center">
				<div class="section-title">	
					<h3><span class="gold-text">@lang('product.product')</h3>
				</div>
			</div>
		</div>
		<div class="row product-lists">
			@foreach ($products as $product => $value)
				<div class="col-lg-4 col-md-6 text-center strawberry">
					<div class="single-product-item">
						<img src="{{url('/image_upload/image_product')}}/{{$value->image}}" alt="{{$value->product_name}}">
						@if(\Session::get('locale') == "th")
							<h3 class="mt-3">{{$value->product_name}}</h3><hr>
							<h5>{{$value->detail}}</h5>
							<p class="product-price">{{$value->price}}</p>
							<center><a href="https://page.line.me/mariamocean" class="btn btn-warning">@lang('product.shopping')</a></center>
						@elseif(\Session::get('locale') == "en")
							<h3 class="mt-3">{{$value->product_name_eng}}</h3><hr>
							<h5>{{$value->detail_eng}}</h5>
							<p class="product-price">{{$value->price_eng}}</p>
							<center><a href="https://page.line.me/mariamocean" class="btn btn-warning">@lang('product.shopping')</a></center>
						@else
							<h3 class="mt-3">{{$value->product_name}}</h3><hr>
							<h5>{{$value->detail}}</h5>
							<p class="product-price">{{$value->price}}</p>
							<center><a href="https://page.line.me/mariamocean" class="btn btn-warning">@lang('product.shopping')</a></center>
						@endif
					</div>
				</div>
			@endforeach
		</div>
		<center><a href="{{url('/product')}}" class="mt-5 btn btn-warning" style="margin-bottom: 50px;">@lang('product.more')</a></center>
	</div>
</div>
@endsection