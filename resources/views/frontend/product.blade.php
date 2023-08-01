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
<div class="container">
	<div class="row">
        <div class="col-lg-8 offset-lg-2 text-center">
            <div class="section-title">	
                <h3 style="margin-top: 60px;"><span class="gold-text">@lang('product.product')</h3>
            </div>
        </div>
    </div>
</div>
<center><a href="https://page.line.me/mariamocean" class="btn btn-warning">@lang('product.shopping')</a></center>
<div class="container">
    <div class="row product-lists mt-5">
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
                        <h3 class="mt-3">{!! nl2br(e($value->product_name_eng)) !!}</h3><hr>
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
</div>
@endsection