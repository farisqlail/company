@extends('admin.app')

@section('content')

<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Blogs</h1>
    
    {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the.</p> --}}
    
    <br>

 
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Blogs</h6>
      <a href="{{ route('blog.create') }}" class="float-right btn btn-danger btn-sm"><i class="fas fa-plus"></i>&nbsp; Tambah Blog</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead class="text-center">
              <tr>
                <th>Judul Blog</th>
                <th>Content</th>
                <th>Gambar</th>
                <th>Detail</th>
              </tr>
            </thead>
            <tbody class="text-center">
              @foreach ($blogs as $blog)
                 {{-- Modal --}}
            <div class="modal fade show" id="showBlog{{ $blog->id }}" tabindex="-1" role="dialog" aria-labelledby="showBlogTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="showBlogTitle">{{ $blog->title }}</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body float-center">
                    <p>{{ $blog->content }}</p>
                    <img src="{{ asset('storage/'.$blog->image) }}" width="128" alt="">
                    </div>
                    {{-- <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div> --}}
                  </div>
                </div>
              </div>
              <tr>
                <td>{{ $blog->title }}</td>
                <td>{{ str_limit($blog->deskripsi, 50) }}</td>
                <td><img src="{{ asset('storage/'.$blog->image) }}" height="128" alt=""></td>
                <td>
               
                  <button type="button" class="btn btn-danger deleteBlog" data-id="{{ $blog->id }}">Hapus</button>
          
                  <a href="{{ route('blog.edit', $blog) }}" class="btn btn-primary">Edit</a>

                <button type="button" class="btn btn-info show" data-toggle="modal" data-target="#showBlog{{ $blog->id }}">
                      Detail
                  </button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>

          <div class="pagination d-flex justify-content-center">
            {{ $blogs->links() }}
          </div>
        </div>
      </div>
    </div>

    
@endsection

@section('script')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  $(document).ready(function(){
   $('.deleteBlog').on('click', function(){
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
            url:'/blog/'+id,
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