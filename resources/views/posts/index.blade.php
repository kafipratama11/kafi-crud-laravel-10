@extends('layouts.app')
@include('partials.navbar')
@include('partials.sidebar')
@section('content')
  <div class="p"></div>
  <div class="d-flex justify-content-center">
    <div class="alert" id="liveAlertPlaceholder"></div>
  </div>
  <div class="justify-content-center d-flex">
    <table class="table table-hover" style="width: 1000px">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col" style="width: 300px">Image</th>
          <th scope="col" style="width: 200px">Content</th>
          <th scope="col" style="width: 100px">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>
            <div class="d-flex justify-content-end align-items-center">
              <a type="button" class="btn btn-warning mx-3" href="index/edit">Edit</a>
              <button type="button" class="btn btn-danger" id="liveAlertBtn">Delete</button>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
@endsection
