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
                <h3 style="margin-top: 60px;"><span class="gold-text">@lang('content.content')</h3>
            </div>
        </div>
    </div>
</div>
<div class="container">
	{{-- <div class="row">
		<div class="col-md-5">
			<img src="{{url('/frontend/assets/img/น้ำพริกปลาทราย.jpg')}}" alt="">
		</div>
		<div class="col-md-7">
			<h3><strong>@lang('content.title_1')</strong></h3>
			<p style="font-size: 18px;">@lang('content.content_1')</p> 
			<table class="table table-bordered table-responsive">
				<thead style="color: #fff;">
				  <tr style="text-align: center;">
					<th scope="col">Packing Size</th>
					<th scope="col">Contain<br>(Packing/Carton)</th>
					<th scope="col">Dimension<br>(cm)/Carton</th>
					<th scope="col">Net Weight<br>(kg)</th>
					<th scope="col">Gross Weight<br>(kg)</th>
				  </tr>
				</thead>
				<tbody style="color: #fff; text-align:center;">
				  <tr>
					<th>240 g</th>
					<td>1x24</td>
					<td>38x21x22</td>
					<td>6 kg</td>
					<td>6.3 kg</td>
				  </tr>
				</tbody>
			  </table>
		</div>
	</div> --}}
	<div class="row mt-5">
		<div class="col-md-5">
			<img src="{{url('/frontend/assets/img/content_2.jpg')}}" alt="">
		</div>
		<div class="col-md-7">
			<h3><strong>@lang('content.title_2')</strong></h3>
			<p style="font-size: 18px;">
				@lang('content.content_2')
			</p> 
			<table class="table table-bordered table-responsive">
				<thead style="color: #fff;">
				  <tr style="text-align: center;">
					<th scope="col">Packing Size</th>
					<th scope="col">Contain<br>(Packing/Carton)</th>
					<th scope="col">Dimension<br>(cm)/Carton</th>
					<th scope="col">Net Weight<br>(kg)</th>
					<th scope="col">Gross Weight<br>(kg)</th>
				  </tr>
				</thead>
				<tbody style="color: #fff; text-align:center;">
				  <tr>
					<th>20 g</th>
					<td>1x60</td>
					<td>45x55x40</td>
					<td>1.74 kg</td>
					<td>2.50 kg</td>
				  </tr>
				  <tr>
					<th>90 g</th>
					<td>1x40</td>
					<td>38x51x22</td>
					<td>5.2 kg</td>
					<td>5.90 kg</td>
				  </tr>
				</tbody>
			  </table>
		</div>
	</div>
	<div class="row mt-5">
		<div class="col-md-5">
			<img src="{{url('/frontend/assets/img/content_3.jpg')}}" alt="">
		</div>
		<div class="col-md-7">
			<h3><strong>@lang('content.title_3')</strong></h3>
			<p style="font-size: 18px;">
				@lang('content.content_3')
			</p> 
			<table class="table table-bordered table-responsive">
				<thead style="color: #fff;">
				  <tr style="text-align: center;">
					<th scope="col">Packing Size</th>
					<th scope="col">Contain<br>(Packing/Carton)</th>
					<th scope="col">Dimension<br>(cm)/Carton</th>
					<th scope="col">Net Weight<br>(kg)</th>
					<th scope="col">Gross Weight<br>(kg)</th>
				  </tr>
				</thead>
				<tbody style="color: #fff; text-align:center;">
				  <tr>
					<th>40 g</th>
					<td>1x60</td>
					<td>45x55x40</td>
					<td>2.91 kg</td>
					<td>4.20 kg</td>
				  </tr>
				</tbody>
			  </table>
		</div>
	</div>
	<div class="row mt-5">
		<div class="col-md-5">
			<img src="{{url('/frontend/assets/img/content_4.jpg')}}" alt="">
		</div>
		<div class="col-md-7">
			<h3><strong>@lang('content.title_4')</strong></h3>
			<p style="font-size: 18px;">
				@lang('content.content_4')
			</p> 
			<table class="table table-bordered table-responsive">
				<thead style="color: #fff;">
				  <tr style="text-align: center;">
					<th scope="col">Packing Size</th>
					<th scope="col">Contain<br>(Packing/Carton)</th>
					<th scope="col">Dimension<br>(cm)/Carton</th>
					<th scope="col">Net Weight<br>(kg)</th>
					<th scope="col">Gross Weight<br>(kg)</th>
				  </tr>
				</thead>
				<tbody style="color: #fff; text-align:center;">
				  <tr>
					<th>39 g</th>
					<td>1x60</td>
					<td>45x55x40</td>
					<td>2.91 kg</td>
					<td>4.20 kg</td>
				  </tr>
				</tbody>
			  </table>
		</div>
	</div>
	<div class="row mt-5">
		<div class="col-md-5">
			<img src="{{url('/frontend/assets/img/content_5.jpg')}}" alt="">
		</div>
		<div class="col-md-7">
			<h3><strong>@lang('content.title_5')</strong></h3>
			<p style="font-size: 18px;">
				@lang('content.content_5')
			</p> 
			<table class="table table-bordered table-responsive">
				<thead style="color: #fff;">
				  <tr style="text-align: center;">
					<th scope="col">Packing Size</th>
					<th scope="col">Contain<br>(Packing/Carton)</th>
					<th scope="col">Dimension<br>(cm)/Carton</th>
					<th scope="col">Net Weight<br>(kg)</th>
					<th scope="col">Gross Weight<br>(kg)</th>
				  </tr>
				</thead>
				<tbody style="color: #fff; text-align:center;">
				  <tr>
					<th>65 g</th>
					<td>1x60</td>
					<td>45x55x40</td>
					<td>3.9 kg</td>
					<td>4.70 kg</td>
				  </tr>
				</tbody>
			  </table>
		</div>
	</div>
	<div class="row mt-5" >
		<div class="col-md-5">
			<img src="{{url('/frontend/assets/img/content_6.jpg')}}" alt="" style="margin-bottom: 50px;">
		</div>
		<div class="col-md-7">
			<h3><strong>@lang('content.title_6')</strong></h3>
			<p style="font-size: 18px;">
				@lang('content.content_6')
			</p> 
			<table class="table table-bordered table-responsive">
				<thead style="color: #fff;">
				  <tr style="text-align: center;">
					<th scope="col">Packing Size</th>
					<th scope="col">Contain<br>(Packing/Carton)</th>
					<th scope="col">Dimension<br>(cm)/Carton</th>
					<th scope="col">Net Weight<br>(kg)</th>
					<th scope="col">Gross Weight<br>(kg)</th>
				  </tr>
				</thead>
				<tbody style="color: #fff; text-align:center;">
				  <tr>
					<th>50 g</th>
					<td>1x60</td>
					<td>45x55x40</td>
					<td>3.2 kg</td>
					<td>3.9 kg</td>
				  </tr>
				</tbody>
			  </table>
		</div>
	</div>
</div>
@endsection