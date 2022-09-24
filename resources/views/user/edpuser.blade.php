@extends('layout.admin')

@section('content')
    <div class=" grid-margin stretch-card">
    <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Data Perjalanan User</h4>
                  <form class="forms-sample" action="/udpuser/{{ $data->id }}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="name">Tanggal</label>
                      <input type="date" name="tanggal" class="form-control" id="tanggal" placeholder="" value="{{$data->tanggal}}">
                    </div>
                    <div class="form-group">
                      <label for="tanggal">Waktu</label>
                      <input type="time" name="waktu" class="form-control" id="waktu" placeholder="" value="{{$data->waktu}}">
                    </div>
                    <div class="form-group">
                      <label for="waktu">Lokasi</label>
                      <input type="text" name="lokasi" class="form-control" id="lokasi" placeholder="" value="{{$data->lokasi}}">
                    </div>
                    <div class="form-group">
                      <label for="waktu">Suhu Tubuh</label>
                      <input type="decimal" name="suhu" class="form-control" id="suhu" placeholder="" value="{{$data->suhu}}">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="/duser" class="btn btn-light">Cancel</a>
                  </form>
                </div>
              </div>
            </div>
            </div>
@endsection