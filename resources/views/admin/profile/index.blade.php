@extends('admin.app')

@section('content')

    <div class="container-fluid">

        <h1 class="h3 mb-2 text-gray-800">Profile</h1>
        
        <div class="card shadow mb-4">
            <div class="card-header py-3">
            {{-- <a href="{{ route('blog.create') }}" class="float-right btn btn-danger btn-sm"><i class="fas fa-plus"></i>&nbsp; Edit Contact Website</a> --}}
            <h5 class="float-right">Edit Profile</h5>
        </div>
        <div class="card-body">  

            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <p>Email</p>
                        <p>Telepon</p>
                        <p>Alamat</p>
                        <p>About Website</p>
                        
                    </div>
                    <div class="col">

                            <p>{{ $profiles->alamat }}</p>
                            <p>{{ $profiles->telp }}</p>
                            <p>{{ $profiles->alamat }}</p>
                            <p>{{ $profiles->about }}</p>
                            
                            
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="card-footer">
                <a href="{{ route('profile.edit', $profiles) }}" class="btn btn-primary float-right">Edit</a>
            </div>
    </div>
        


@endsection