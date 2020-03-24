@extends('admin.app')

@section('content')

<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Data Property</h1>
    
    <br>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Type Property</h6>
      <a href="{{ route('type.create') }}" class="float-right btn btn-danger btn-sm"><i class="fas fa-plus"></i>&nbsp; Tambah Type</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead class="text-center">
              <tr>
                <th>Type</th>
                <th>action</th>
              </tr>
            </thead>
            <tbody class="text-center">
              @foreach ($types as $type)
              <tr>
                <td>{{ $type->name}}</td>
                <td>
               
                  <button type="button" class="btn btn-danger deleteType" data-id="{{$type->id}}">Hapus</button>
          
                  <a href="{{ route('type.edit', $type) }}" class="btn btn-primary">Edit</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="pagination d-flex justify-content-center">
              {{ $types->links() }}
          </div>
        </div>
      </div>
    </div>
    
    <!-- /.container-fluid -->
    
@endsection

@section('script')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $(document).ready(function(){
         $('.deleteType').on('click', function(){
            var id = $(this).data('id');
            swal({
            title: "Apakah Anda yakin ?",
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
                  url:'/type/'+id,
                  method:'DELETE',
                  success:function(data){
                    swal("Data berhasil dihapus", {
                      icon: "success",
                    });
                    setTimeout(function(){ location.reload(); }, 1500);
                  }
              });
            } else {
              swal("Data masih tersimpan");
            }
  });
         });
          
        });
      
      </script>
@endsection