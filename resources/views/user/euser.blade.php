@extends('layout.admin')

@section('content')
    <div class=" grid-margin stretch-card">
    <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Data User</h4>
                  <form class="forms-sample" action="/updateuser/{{ $data->id }}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="name">Nama</label>
                      <input type="text" name="name" class="form-control" id="name" placeholder="NAMA" value="{{$data->name}}">
                    </div>
                    <div class="form-group">
                      <label for="tanggal">Email</label>
                      <input type="email" name="email" class="form-control" id="email" placeholder="EMAIL" value="{{$data->email}}">
                    </div>
                    <div class="form-group">
                      <label for="waktu">Nik</label>
                      <input type="number" name="nik" class="form-control" id="nik" placeholder="NIK" value="{{$data->nik}}">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="/duser" class="btn btn-light">Cancel</a>
                  </form>
                </div>
              </div>
            </div>
            </div>
@endsection