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
                <h3 style="margin-top: 60px;"><span class="gold-text">@lang('contact.contact')</h3>
            </div>
        </div>
    </div>
</div>
<div class="contact-from-section mb-150">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 mb-5 mb-lg-0">
				<div class="contact-form">
					<form action="{{url('/send-message')}}" enctype="multipart/form-data" method="post">@csrf
						<p>
							<input type="text" placeholder="@lang('contact.name')" name="name" onfocus="this.placeholder = ''" onblur="this.placeholder = '@lang('contact.name')'">
							<input type="text" placeholder="@lang('contact.phone')" name="phone" onfocus="this.placeholder = ''" onblur="this.placeholder = '@lang('contact.phone')'">
						</p>
						<p><textarea name="message" cols="30" rows="10" placeholder="@lang('contact.message')"></textarea></p>
						<p><input type="submit" value="@lang('contact.contact')"></p>
					</form>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="row mbr-justify-content-center">
                    <div class="col-lg-12 mbr-col-md-10">
                        <a href="tel:+0813956442">
                            <div class="wrap">
                                <div class="ico-wrap">
                                    <span class="mbr-iconfont fa fa-phone-square" style="color:#000000;"></span>
                                </div>
                                <div class="text-wrap vcenter">
                                    <h2 class="mt-2 mbr-fonts-style mbr-bold mbr-section-title3 display-5">081 395 6442</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-12 mbr-col-md-10">
                        <a href="https://www.facebook.com/Mariamoceanthailand" target="_blank">
                            <div class="wrap">
                                <div class="ico-wrap">
                                    <span class="mbr-iconfont fab fa-facebook-square" style="color: #1877f2;"></span>
                                </div>
                                <div class="text-wrap vcenter">
                                    <h2 class="mt-2 mbr-fonts-style mbr-bold mbr-section-title3 display-5">Mariam OCEAN Thailand</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-12 mbr-col-md-10">
                        <a href="https://page.line.me/mariamocean" target="_blank">
                            <div class="wrap">
                                <div class="ico-wrap">
                                    <span class="mbr-iconfont fab fa-line" style="color: #06c152;"></span>
                                </div>
                                <div class="text-wrap vcenter">
                                    <h2 class="mt-2 mbr-fonts-style mbr-bold mbr-section-title3 display-5">@mariamocean</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-12 mbr-col-md-10">
                        <a href="https://www.lazada.co.th/shop/mariam-ocean" target="_blank">
                            <div class="wrap">
                                <div class="ico-wrap">
                                    <span class="mbr-iconfont"><img src="https://img.icons8.com/plasticine/30/null/lazada.png"/></span>
                                </div>
                                <div class="text-wrap vcenter">
                                    <h2 class="mt-2 mbr-fonts-style mbr-bold mbr-section-title3 display-5">MARIAM OCEAN</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-12 mbr-col-md-10">
                        <a href="https://shopee.co.th/shop/74912315/" target="_blank">
                            <div class="wrap">
                                <div class="ico-wrap">
                                    <span class="mbr-iconfont"><img src="https://img.icons8.com/color/30/null/shopee.png"/></span>
                                </div>
                                <div class="text-wrap vcenter">
                                    <h2 class="mt-2 mbr-fonts-style mbr-bold mbr-section-title3 display-5">MARIAM OCEAN PRODUCTS</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
			</div>
		</div>
        <div class="row">
            <div class="col-md-12" style="margin-bottom: 50px;">
                <center><h3>@lang('contact.map')</h3></center><br>
                <center><img src="{{url('/frontend/assets/img/map.jpg')}}" alt="" width="100%"></center>
            </div>
        </div>
	</div>
</div>

@endsection