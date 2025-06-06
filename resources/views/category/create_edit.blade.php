
@extends('Layout.app')

@section('title', 'create_edit')

@section('content')
    <!-- Page content-->
    <div class="container my-5">
      <div class="row">
        <div class="d-flex justify-content-between mb-2">
          <h3>Create Category</h3>
          <a class="btn btn-success" href="index.html" role="button">Back</a>
        </div>
        <!-- Blog entries-->
        <div class="col-lg-12">
          <div class="card p-3">
            <form method="POST">
              <div class="mb-3">
                <label for="tag" class="form-label">Category</label>
                <input type="text" class="form-control" id="tag" name="tag" />
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection
