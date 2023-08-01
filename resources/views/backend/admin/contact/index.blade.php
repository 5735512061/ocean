@extends("/backend/layouts/template/template")

@section("content")

<h1>ข้อมูลการติดต่อจากลูกค้า</h1><br>
<div class="row">
  <div class="col-xl-12">
    <div class="card">
      <div class="table-responsive">
        {{$contacts->links()}}
        <table class="table align-items-center table-flush">
          <thead class="thead-light">
            <tr>
              <th scope="col">#</th>
              <th scope="col">ชื่อลูกค้า</th>
              <th scope="col">เบอรโทรศัพท์ลูกค้า</th>
              <th scope="col">ข้อความติดต่อ</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($contacts as $contact => $value)
              <tr>
                <td>{{$NUM_PAGE*($page-1) + $contact+1}}</td>
                <td>{{$value->name}}</td>
                <td>{{$value->phone}}</td>
                <td>
                  <a href="" type="button" data-toggle="modal" data-target="#modal-message{{$value->id}}" data-id="{{$value->id}}">
                    ดูเพิ่มเติม
                  </a>
                </td>
              </tr>
              <!-- Modal -->
              <div class="modal fade" id="modal-message{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="Title" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-body">
                          <div class="col-md-12">
                            {!!$value->message!!}
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
@endsection
