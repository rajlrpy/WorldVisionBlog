@extends('admin.layouts.main')
@section('css')
    <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet"/>

@section('main-content')
       <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title"><a href="{{ route('post.create') }}" class="btn btn-primary">Add Post</a></h5>
                    <div class="table-responsive">
                      <table id="zero_config" class="table table-striped table-bordered text-center">
                        <thead>
                          <tr>
                            <th>SN</th>
                            <th>Post Name</th>
                            <th>Category Name</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $post->name }}</td>
                                <td>{{ $post->category->name }}</td>
                                <td>
                                    @if ($post->status)
                                        <span class=" bg-success text-center text-white">Online</span>
                                    @else
                                        <span class=" bg-danger text-center text-white">Offline</span>
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route('post.edit', $post) }}" style="display:inline">
                                        <button type="submit" class="btn btn-primary text-white">Edit</button>
                                    </form>
                                    <form action="{{ route('post.destroy', $post) }}" style="display:inline" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" onclick="return confirm('Are You Sure?')" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                              <th>SN</th>
                              <th>Post Name</th>
                              <th>Category Name</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
          </div>
          <!-- ============================================================== -->
          <!-- End Container fluid  -->
          <!-- ============================================================== -->
@endsection

@section('script')
 <!-- this page js -->
 <script src="{{ asset('assets/extra-libs/multicheck/datatable-checkbox-init.js') }}"></script>
 <script src="{{ asset('assets/extra-libs/multicheck/jquery.multicheck.js') }}"></script>
 <script src="{{ asset('assets/extra-libs/DataTables/datatables.min.js') }}"></script>
    <script>
       $("#zero_config").DataTable();
    </script>
@endsection
