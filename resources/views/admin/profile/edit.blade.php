@extends('admin.app')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Data Property</h1>

    <div class="card shadow mb-4 mt-3">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Edit About </h6>
        </div>
        <div class="card-body">

            <form action="{{ route('profile.update', $profiles) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
            
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ $profiles->email }}">
                </div>
            
                <div class="form-group">
                    <label for="">Telepon</label>
                    <input type="number" class="form-control" name="telp" value="{{ $profiles->telp }}">
                </div>
            
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="{{ $profiles->alamat }}">
                </div>
            
                <div class="form-group">
                    <label for="">About</label>
                    <textarea class="form-control" name="about" rows="3">
                        {{ $profiles->about }}
                    </textarea>

                </div>
                
                <div class="form-group">
                    <button class="btn btn-primary float-right" type="submit" value="save">Save</button>
                </div>
            </form>

        </div>
    </div>
</div>

@endsection

