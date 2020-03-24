@extends('admin.app')

@section('content')

<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Agents</h1>
    
    {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the.</p> --}}
    
    <br>

 
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Agents</h6>
      <a href="{{ route('agent.create') }}" class="float-right btn btn-danger btn-sm"><i class="fas fa-plus"></i>&nbsp; Tambah Agent</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead class="text-center">
              <tr>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Email</th>
                <th>No Telepon</th>
                <th>Image</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody class="text-center">
              @foreach ($agents as $agent)
              <tr>
                <td>{{ $agent->name }}</td>
                <td>{{ $agent->jabatan }}</td>
                <td>{{ $agent->email }}</td>
                <td>{{ $agent->telp }}</td>
                <td><img src="{{ asset('storage/'.$agent->image) }}" height="128" alt=""></td>
                <td>
                  <button type="button" class="btn btn-danger deleteAgent" data-id="{{ $agent->id }}">Hapus</button>
          
                  <a href="{{ route('agent.edit', $agent) }}" class="btn btn-primary">Edit</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>

          <div class="pagination d-flex justify-content-center">
            {{ $agents->links() }}
          </div>
        </div>
      </div>
    </div>

    
@endsection

@section('script')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  $(document).ready(function(){
   $('.deleteAgent').on('click', function(){
      var id = $(this).data('id');
      swal({
      title: "Apakah Anda Yakin ?",
      text: "Apakah anda yakin ingin menghapus data ini ?",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
                    
        $.ajax({
            url:'/agent/'+id,
            method:'DELETE',
            success:function(data){
              swal("Data Berhasil Terhapus", {
                icon: "success",
              });
              setTimeout(function(){ location.reload(); }, 1500);
            }
        });
      } else {
        swal("Data Masih Tersimpan");
      }
    });
   });
    
  });

</script>
@endsection