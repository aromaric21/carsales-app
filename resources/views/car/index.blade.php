@extends('layout.layout')
@section('content')

<div class="container">
    <div style="height: 20px"></div>
    <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow">
                    <div class="card-header">
                          Cars
                     </div>
                     <div class="card-body">
            <form>
                  <div class="mb-3">
                    <label>Car title</label>
                    <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="Car title">
                  </div>
                  <div class="mb-3">
                    <label>Car description</label>
                    <input type="text" class="form-control" name="description" id="exampleFormControlInput1" placeholder="Car description">
                  </div>

                  <div class="mb-3">
                    <label for="">Model</label>
                  <select class="form-select" aria-label="Default select example">
                      <option selected>Open this select</option>
                        <option value="1">Active</option>
                        <option value="2">Deactive</option>
                    </select>
                  </div>

                  <div class="mb-3">
                    <label for="">Member</label>
                  <select class="form-select" aria-label="Default select example">
                      <option selected>Open this select</option>
                        <option value="1">Active</option>
                        <option value="2">Deactive</option>
                    </select>
                  </div>

                  <div class="mb-3">
                    <label for="">Fuel Type</label>
                  <select class="form-select" aria-label="Default select example">
                      <option selected>Open this select</option>
                        <option value="1">Active</option>
                        <option value="2">Deactive</option>
                    </select>
                  </div>

                  <div class="mb-3">
                    <label>Year</label>
                    <input type="date" class="form-control" name="year" id="exampleFormControlInput1" placeholder="year">
                  </div>

                  <div class="mb-3">
                    <label>Mileage</label>
                    <input type="text" class="form-control" name="mileage" id="exampleFormControlInput1" placeholder="Mileage">
                  </div>

                  <div class="mb-3">
                    <label>Price</label>
                    <input type="number" class="form-control" name="price" id="exampleFormControlInput1" placeholder="Price">
                  </div>

                  <div class="mb-3">
                    <label>Photo</label>
                    <input type="file" class="form-control" name="photo" id="exampleFormControlInput1" placeholder="Price">
                  </div>

                  <div class="mb-3">
                    <label>Sold</label>
                    <input type="text" class="form-control" name="sold" id="exampleFormControlInput1" placeholder="Sold">
                  </div>

                  <div class="d-flex justify-content-end">
                  <button type="submit" class="btn btn-primary">Register</button>
                  <button type="submit" class="btn btn-warning">Reset</button>
                </div>
            </form>
            </div>
        </div>
            </div>
        </div>
        </div>

       <div style="height: 20px;"></div>

       <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header">
                    <table class="table table-dark table-striped">
                        <tr>
                            <td>sada</td>
                            <td>sada</td>
                            <td>sada</td>
                        </tr>
                        <tr>
                            <td>sada</td>
                            <td>sada</td>
                            <td>sada</td>
                        </tr>
                        <tr>
                            <td>sada</td>
                            <td>sada</td>
                            <td>sada</td>
                        </tr>
                        <tr>
                            <td>sada</td>
                            <td>sada</td>
                            <td>sada</td>
                        </tr>
                        <tr>
                            <td>sada</td>
                            <td>sada</td>
                            <td>sada</td>
                        </tr>
                        <tr>
                            <td>sada</td>
                            <td>sada</td>
                            <td>sada</td>
                        </tr>
                        <tr>
                            <td>sada</td>
                            <td>sada</td>
                            <td>sada</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
       </div>

@endsection
