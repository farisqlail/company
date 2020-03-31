@extends('admin.app')

@section('content')


<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Edit Agent</h1>

        <div class="card shadow mb-4 mt-3">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Edit Agent</h6>
            </div>
            <div class="card-body">

            <form action="{{ route('agent.update', $agents) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}

                    <div class="form-goup">
                        <label for="">Nama</label>
                    <input type="text" name="{{ $agents->name }}" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">Jabatan</label>
                        <input type="text" name="{{$agents->jabatan}}" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="{{$agents->email}}" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">No Telepon</label>
                        <input type="number" name="{{$agents->telp}}" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Gambar</label>
                        <input type="file" class="form-control-file" required name="image" id="">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary float-right" value="save" type="submit">Tambah</button>
                    </div>
                   
                </form>

            </div>
        </div>

    </div>

@endsection