@extends('admin.app')

@section('content')


<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Tambah Blog</h1>

        <div class="card shadow mb-4 mt-3">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Blog</h6>
            </div>
            <div class="card-body">

            <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                    <div class="form-goup">
                        <label for="">Judul Blog</label>
                            <input type="text"  name="title" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">Deskripsi Blog</label>
                        <textarea class="form-control" name="deskripsi" required rows="3"></textarea>
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

    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'deskripsi' );
    </script>

@endsection
