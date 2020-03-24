@extends('admin.app')

@section('content')

<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Data Type</h1>

        <div class="card shadow mb-4 mt-3">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Type</h6>
            </div>
            <div class="card-body">

            <form action="{{ route('type.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                    <div class="form-goup">
                        <label for="">Type</label>
                        <input type="text" name="name" required class="form-control">
                    </div><br><br>

                    <div class="form-group">
                        <button class="btn btn-primary float-right" value="save" type="submit">Tambah</button>
                    </div>
                   
                </form>

            </div>
        </div>

    </div>

@endsection