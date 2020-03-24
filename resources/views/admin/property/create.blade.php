@extends('admin.app')

@section('content')


    <div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Data Property</h1>

        <div class="card shadow mb-4 mt-3">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Property</h6>
            </div>
            <div class="card-body">

            <form action="{{ route('property.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                    <div class="form-goup">
                        <div class="row">
                            <div class="col">
                                <label for="">Nama Property</label>
                                <input type="text" name="title" required class="form-control">
                            </div>

                            <div class="col">
                                <label for="">Type Property</label>
                                <select class="form-control" required name="type_id">
                                    @foreach ($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <label for="">Harga Property</label>
                        <input type="text" id="harga" required name="harga" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Deskripsi Property</label>
                        <textarea class="form-control" name="deskripsi" rows="3"></textarea>
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

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>    
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $('#harga').mask('000.000.000.000', {reverse: true});
    </script>

    <script>
        CKEDITOR.replace('deskripsi');
    </script>
    @endsection