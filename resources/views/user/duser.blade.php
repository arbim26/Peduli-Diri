@extends('layout.admin')

@section('content')
<div class=" grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h3 class="text-center">Data User
                  </h3>
                  <div class="table-responsive mt-3">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Nama</th>
                          <th>Email</th>
                          <th>Nik</th>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($data as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td>{{$row->name}}</td>
                            <td>{{$row->email}}</td>
                            <td>{{$row->nik}}</td>
                            <td>
                              <a class="btn btn-link ms-auto text-end text-primary px-3 mb-0" href="/dpuser/{{$row->id}}"><i class="fa fa-calendar" style="height: 5px;"></i>Data Perjalanan</a>
                            </td>
                            <td>
                            <a class="btn btn-link ms-auto text-end text-dark px-3 mb-0" href="/viewuser/{{$row->id}}"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                        <a class="btn btn-link ms-auto text-end text-danger text-gradient px-3 mb-0" href="/deleteuser/{{$row->id}}"><i class="far fa-trash-alt me-2"></i>Delete</a></td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
@endsection