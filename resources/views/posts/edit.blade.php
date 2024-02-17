@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col">
      <div class="card mt-4">
        <div class="card-body">
          <form action="" method="POST">
            <div class="row mb-3">
              <div class="col">
                <label for="" class="label-control">Title</label>
                <input type="text" class="form-control" name="judul">
              </div>
              <div class="col">
                <label for="" class="label-control">Image</label>
                <input type="file" class="form-control" name="gambar">
              </div>
            </div>
            <div class="mb-3">
              <label for="content" class="label-control">Content</label>
              <textarea id="" cols="30" rows="10" class="form-control" name="content"></textarea>
            </div>
            <button type="submit" class="btn btn-success">edit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
