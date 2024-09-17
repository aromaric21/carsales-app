@extends('layout.layout')
@section('content')

<div class="container">
    <div style="height: 20px"></div>
    <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow">
                    <div class="card-header">
                          Brand
                     </div>
                     <div class="card-body">
            <form method="POST" action="{{ route('brand.update', $brand->id) }}">
                {!! csrf_field() !!}
                  @method("PATCH")
                  <div class="mb-3">
                    <label>Brand Name</label>
                    <input type="text" class="form-control" name="name" id="exampleFormControlInput1"
                    value="{{$brand->name}}"  placeholder="Brand Name">
                  </div>
                  <div class="d-flex justify-conetnt-end">
                  <button type="submit" class="btn btn-primary me-2">Update</button>
                  <button type="reset" class="btn btn-warning">Reset</button>
                </div>
            </form>
            </div>
        </div>
            </div>
        </div>
        </div>

@endsection
