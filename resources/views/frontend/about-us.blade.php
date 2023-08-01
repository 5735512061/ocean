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
                <h3 style="margin-top: 60px;"><span class="gold-text">@lang('index.aboutus')</h3>
            </div>
        </div>
    </div>
</div>
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
		<div class="col-md-12 mt-5">
			<center><h3>การันตีความอร่อยด้วยรางวัล Thai Select</h3></center>
			<center><img src="{{url('/frontend/assets/img/thaiselect.png')}}" alt="" width="50%"></center>
		</div>
	</div>
</div>
@endsection


