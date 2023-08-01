@extends("/backend/layouts/template/template")

@section("content")
<div class="row">
<div class="col-md-2"></div>
<div class="col-xl-8 order-xl-1">
    <div class="card">
      <div class="card-header">
        <div class="row align-items-center">
          <div class="col-8">
            <h3 class="mb-0">เพิ่มข้อมูลสินค้า</h3>
          </div>
        </div>
      </div>
      <div class="card-body">
        <form action="{{url('/admin/create-product')}}" enctype="multipart/form-data" method="post">@csrf
          <div class="pl-lg-4">
            <div class="flash-message">
              @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                  @if(Session::has('alert-' . $msg))
                      <p class="alertdesign alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                  @endif
              @endforeach
            </div>
            <div class="row">
                <div class="col-lg-6">
                    @if ($errors->has('product_name'))
                      <span class="text-danger" style="font-size: 17px;">({{ $errors->first('product_name') }})</span>
                    @endif
                    <div class="form-group">
                        <label class="form-control-label">ชื่อสินค้า</label>
                        <input type="text" class="form-control" name="product_name" placeholder="กรุณากรอกชื่อสินค้า">
                    </div>
                </div>
                <div class="col-lg-6">
                  @if ($errors->has('product_name_eng'))
                    <span class="text-danger" style="font-size: 17px;">({{ $errors->first('product_name_eng') }})</span>
                  @endif
                  <div class="form-group">
                      <label class="form-control-label" for="input-username">ชื่อสินค้า (ภาษาอังกฤษ)</label>
                      <input type="text" id="input-username" class="form-control" name="product_name_eng" placeholder="กรุณากรอกชื่อสินค้า (ภาษาอังกฤษ)">
                  </div>
                </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                @if ($errors->has('price'))
                    <span class="text-danger" style="font-size: 17px;">({{ $errors->first('price') }})</span>
                @endif
                <div class="form-group">
                    <label class="form-control-label" for="input-username">ราคาสินค้า</label>
                    <input type="text" id="input-username" class="form-control" name="price" placeholder="กรุณากรอกราคาสินค้า">
                </div>
              </div>
              <div class="col-lg-6">
                @if ($errors->has('price_eng'))
                    <span class="text-danger" style="font-size: 17px;">({{ $errors->first('price_eng') }})</span>
                @endif
                <div class="form-group">
                    <label class="form-control-label" for="input-username">ราคาสินค้า (ภาษาอังกฤษ)</label>
                    <input type="text" id="input-username" class="form-control" name="price_eng" placeholder="กรุณากรอกราคาสินค้า (ภาษาอังกฤษ)">
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                  @if ($errors->has('detail'))
                    <span class="text-danger" style="font-size: 17px;">({{ $errors->first('detail') }})</span>
                  @endif
                    <div class="form-group">
                      <label class="form-control-label">รายละเอียดสินค้า</label>
                      <textarea rows="2" class="form-control" placeholder="กรุณากรอกรายละเอียดสินค้า" id="detail-ckeditor1" name="detail"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                @if ($errors->has('detail_eng'))
                    <span class="text-danger" style="font-size: 17px;">({{ $errors->first('detail_eng') }})</span>
                @endif
                  <div class="form-group">
                    <label class="form-control-label">รายละเอียดสินค้า (ภาษาอังกฤษ)</label>
                    <textarea rows="2" class="form-control" placeholder="กรุณากรอกรายละเอียดสินค้า (ภาษาอังกฤษ)" id="detail-ckeditor2" name="detail_eng"></textarea>
                  </div>
              </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                  @if ($errors->has('image'))
                    <span class="text-danger" style="font-size: 17px;">({{ $errors->first('image') }})</span>
                  @endif
                    <div class="form-group">
                        <label class="form-control-label">รูปภาพสินค้า ขนาดรูปภาพ 378*300 pixel</label>
                        <input type="file" class="form-control form-control-alternative mitr" name="image">
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="{{asset('/vendor/japonline/laravel-ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace('detail-ckeditor1');
    CKEDITOR.replace('detail-ckeditor2');
</script>
@endsection