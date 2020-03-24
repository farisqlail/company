@extends('admin.app')

@section('content')

<div class="container-fluid">

<h1 class="h3 mb-2 text-gray-800">Data Property</h1>

{{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the.</p> --}}

<br>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Property</h6>
  <a href="{{ route('property.create') }}" class="float-right btn btn-danger btn-sm"><i class="fas fa-plus"></i>&nbsp; Tambah Property</a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead class="text-center">
          <tr>
            <th>Nama Property</th>
            <th>Deskripsi</th>
            <th>Type Property</th>
            <th>Harga</th>
            <th>Gambar</th>
            <th>Detail</th>
          </tr>
        </thead>
        <tbody class="text-center">
          @foreach ($properties as $property)
          <tr>
            <td>{{ str_limit($property->title, 30) }}</td>
            <td>{{ str_limit($property->content, 100) }}</td>
            <td>{{ $property->type->name }}</td>
            <td>Rp.{{ number_format($property->harga,2) }}</td>
            <td><img src="{{ asset('storage/'.$property->image) }}" height="128" alt=""></td>
            <td>
           
              <button type="button" class="btn btn-danger delete" data-id="{{$property->id}}">Hapus</button>
      
              <a href="{{ route('property.edit', $property) }}" class="btn btn-primary">Edit</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

      <div class="pagination d-flex justify-content-center">
        {{ $properties->links() }}
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
       $('.delete').on('click', function(){
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
                url:'/property/'+id,
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