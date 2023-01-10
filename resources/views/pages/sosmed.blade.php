@extends('layout.app', ['title' => 'Dashboard | Social Media'])
@section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Social Media</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
       <div class="container-fluid">
       <form action="#" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="hero">Name</label>
                        <input type="text" class="form-control" id="hero" >
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="sosmed">Sosmed Photo</label>
                        <input type="file" class="form-control" id="sosmed">
                    </div>
                </div>
            </div>
           
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
       </div>
    </section>
    <!-- /.content -->
  </div>
@endsection