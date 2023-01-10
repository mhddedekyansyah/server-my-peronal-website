@extends('layout.app', ['title' => 'Dashboard | Hero'])
@section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>About</h1>
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
                        <label for="hero">History</label>
                        <textarea class="form-control" name="history" id="hero" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hero Photo</label>
                        <input type="file" class="form-control" id="hero" aria-describedby="emailHelp" placeholder="Enter email">
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