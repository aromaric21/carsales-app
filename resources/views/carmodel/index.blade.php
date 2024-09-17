@extends('layout.layout')
@section('content')

<div class="container">
    <div style="height: 20px"></div>
    <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow">
                    <div class="card-header">
                          Car Model
                     </div>
                     <div class="card-body">
                        <form>
                  <div class="mb-3">
                    <label>Model Name</label>
                    <input type="text" class="form-control" name="modelname" id="exampleFormControlInput1" placeholder="Car Model Name">
                  </div>

                  <div class="mb-3">
                    <label for="">Brand</label>
                  <select class="form-select" aria-label="Default select example">
                      <option selected>Open this select brand</option>
                        <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                    </select>
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
