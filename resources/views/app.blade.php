
@extends('layouts.layout')
@section('content')
<head>
          <link rel="stylesheet" href="{{ url('admin/css/bootstrap.css') }}">
</head>
<div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
             <h3 class="font-weight-bold">Ice & Fire</h3>
            <h6 class="font-weight-normal mb-0">Books</h6>
          </div>
        </div>
      </div>
    </div>
      <!-- Categories Table Begins Here -->

      <div class="container">
        <div class="card">
          <div class="card-body">
            <p class="card-title">Bookds Table</p>
              <div class="col-12">
                 {{-- Success Response Display --}}
                    @if(Session::has('success_msg'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Alert:</strong> {{ Session::get('success_msg'); }}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    @endif {{-- Login Response Display Ends--}}

            <a href="{{ url('admin/add-edit-book') }}" style="max-width: 220px; display: inline-block; float: right;" class="btn btn-block btn btn-primary">Add Categories</a>
                <div class="table-responsive pt-3">
                  <table id="book" class="table table-bordered" style="width:100%">
                    <thead>
                      <tr>
                        <th>S/N#</th>
                        <th>Name</th>
                        <th>ISBN</th>
                        <th>Authors</th>
                         <th>Number of Pages</th>
                        <th>Publisher</th>
                        <th>Country</th>
                        <th>Release Date</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>                    
                      @foreach($books as $book)
                      <tr>
                        <td></td>
                        <td>{{$book->name}}</td>
                        <td>{{$book->isbn}}</td>
                        <td>{{$book->name}}</td>
                        <td>{{$book->numberOfPages}}</td>
                        <td>{{$book->publisher}}</td>
                        <td>{{$book->country}}</td>
                        <td>{{$book->released}}</td>
                        <td>
                          
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                </table>
                </div>
              </div>
            </div>
          </div>
        </div>

  </div>
  <!-- content-wrapper ends -->
@endsection
