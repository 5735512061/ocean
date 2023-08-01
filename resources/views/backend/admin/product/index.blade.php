@extends("/backend/layouts/template/template")

@section("content")

<h1>จัดการข้อมูลสินค้า</h1><br>
<div class="row">
  <div class="col-xl-12">
    <div class="flash-message">
      @foreach (['danger', 'warning', 'success', 'info'] as $msg)
          @if(Session::has('alert-' . $msg))
              <p class="alertdesign alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
          @endif
      @endforeach
    </div>
    <div class="card">
      <div class="card-header border-0"  style="padding-left: 0;">
          <a href="{{url('/admin/create-product')}}" class="btn btn-primary">เพิ่มสินค้า</a>
      </div>
      <div class="table-responsive">
        {{$products->links()}}
        <table class="table align-items-center table-flush">
          <thead class="thead-light">
            <tr>
              <th scope="col">#</th>
              <th scope="col">ชื่อสินค้า</th>
              <th scope="col">ชื่อสินค้า (ภาษาอังกฤษ)</th>
              <th scope="col">ราคาสินค้า</th>
              <th scope="col">ราคาสินค้า (ภาษาอังกฤษ)</th>
              <th scope="col">รายละเอียดสินค้า</th>
              <th scope="col">รายละเอียดสินค้า (ภาษาอังกฤษ)</th>
              <th scope="col">รูปภาพสินค้า</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($products as $product => $value)
              <tr>
                <td>{{$NUM_PAGE*($page-1) + $product+1}}</td>
                <td>{{$value->product_name}}</td>
                <td>{{$value->product_name_eng}}</td>
                <td>{{$value->price}}</td>
                <td>{{$value->price_eng}}</td>
                <td>{{$value->detail}}</td>
                <td>{{$value->detail_eng}}</td>
                <td>
                  <a href="" type="button" data-toggle="modal" data-target="#modal-image-main{{$value->id}}" data-id="{{$value->id}}">
                    <i class="fa fa-folder" style="color:blue; font-size:18px;"></i>
                  </a>
                </td>
                <td>
                  <a href="{{url('/admin/edit-product/')}}/{{$value->id}}">
                    <i class="fa fa-pencil-square" style="color:blue; font-size:18px;"></i>
                  </a>
                  <a href="{{url('/admin/product-delete/')}}/{{$value->id}}" onclick="return confirm('Are you sure to delete ?')">
                    <i class="fa fa-trash" style="color:red; font-size:18px;"></i>
                  </a>
                </td>
              </tr>
              <!-- Modal -->
              <div class="modal fade" id="modal-image-main{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="Title" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-body">
                          <div class="col-md-12">
                            <img src="{{url('/image_upload/image_product')}}/{{$value->image}}" class="img-responsive" width="100%;">
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary prompt" data-dismiss="modal">ปิด</button>
                      </div>
                    </div>
                </div>
              </div>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="{{asset('/vendor/japonline/laravel-ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace('review-ckeditor3');
    CKEDITOR.replace('review-ckeditor4');
</script>
@endsection
