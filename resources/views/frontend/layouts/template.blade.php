<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no"/>
    	<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>Mariam OCEAN Thailand อาหารทะเลแปรรูปจากปลาทะเล</title>
		@include("/frontend/layouts/css")
	</head>
	<body>
        
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
    @include("frontend/layouts/navbar")
	<div class="mt-100 mb-150">
		@yield("content")
	</div>
    @include("frontend/layouts/footer")
	@include("frontend/layouts/js")
	</body>
</html>