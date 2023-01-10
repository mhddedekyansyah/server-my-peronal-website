@extends('layout.app', ['title' => 'Dashboard'])
@section('content')
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
          <div class="col-12">
          <table id="example"class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Foto Hero</th>
                <th>About</th>
                <th>Foto About</th>
                <th>Project</th>
                <th>Skills</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
           
          
        </tbody>
      
    </table>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

@push('js')
    <script>
      $(document).ready(function () {
      $('#example').DataTable();
});
    </script>
@endpush