<!-- header -->
<div class="top-header-area" id="sticker">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-sm-12 text-center">
				<div class="main-menu-wrap">
					<!-- logo -->
					<div class="site-logo">
						<img src="{{ asset('frontend/assets/img/logo.png')}}" alt="">
					</div>
					<!-- logo -->
					<!-- menu start -->
					<nav class="main-menu">
						<ul>
							<li><a href="{{url('/')}}">@lang('index.home')</a></li>
							<li><a href="{{url('/product')}}">@lang('index.product')</a></li>
							<li><a href="{{url('/about-us')}}">@lang('index.aboutus')</a></li>
							<li><a href="{{url('/content')}}">@lang('index.content')</a></li>
							<li><a href="{{url('/contact-us')}}">@lang('index.contactus')</a></li>
							<li>
								<a href="#">
									<img src="https://img.icons8.com/color/24/null/shopee.png"/> 
									<img src="https://img.icons8.com/plasticine/24/null/lazada.png"/>
								</a>
								<ul class="sub-menu">
									<li><a href="https://shopee.co.th/shop/74912315/"><img src="https://img.icons8.com/color/24/null/shopee.png"/> Shopee</a></li>
									<li><a href="https://www.lazada.co.th/shop/mariam-ocean"><img src="https://img.icons8.com/plasticine/24/null/lazada.png"/> Lazada</a></li>
								</ul>
							</li>
							<li>
								<a href="#">
									<img src="https://img.icons8.com/color/30/000000/thailand.png"/>
									<img src="https://img.icons8.com/color/30/000000/great-britain.png"/>
								</a>
								<ul class="sub-menu">
									<li><a href="{{url('/locale/th')}}"><img src="https://img.icons8.com/color/30/000000/thailand.png"/> ไทย</a></li>
									<li><a href="{{url('/locale/en')}}"><img src="https://img.icons8.com/color/30/000000/great-britain.png"/> English</a></li>
								</ul>
							</li>
						</ul>
					</nav>
					<div class="mobile-menu"></div>
					<!-- menu end -->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end header -->