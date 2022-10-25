@extends('layouts.master')

@section('title')
    KONEK | Report
@endsection

@section('content')


        <!--------------------------- GENERAL REPORT --------------------------->
        <div class="report_layout">
            <h1>Users</h1>
            <div class="report_table">
                <div class="general_report">


                        <div class="active-cyan-4 mb-4">
                            <input style="font-size: 1rem; height: 1.8rem;  margin-bottom: 1rem;" class="form-control" type="text" placeholder="Search" aria-label="Search">
                          </div>

                          <table class="table table-hover" style=" height: 10rem; justify-content:end">
                            <thead style="text-align: center">
                              <tr class="head" style="">
                                <th scope="col">#</th>
                                <th scope="col">Role</th>
                                <th scope="col">Name</th>
                                <th scope="col">Address</th>
                                <th scope="col">Contact</th>
                                <th scope="col">Status</th>
                              </tr>
                            </thead>
                            <tbody class="body" style="height: 35rem;">
                              <tr>
                                <th scope="row">1</th>
                                <td>Establishment</td>
                                <td>Establishment 1</td>
                                <td>Tarlac City</td>
                                <td>sample.email@gmail.com</td>
                                <td>0</td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Establishment</td>
                                <td>Establishment 2</td>
                                <td>Tarlac City</td>
                                <td>sample.email@gmail.com</td>
                                <td>0</td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>Establishment</td>
                                <td>Establishment 3</td>
                                <td>Tarlac City</td>
                                <td>sample.email@gmail.com</td>
                                <td>0</td>
                              </tr>
                              <tr>
                                <th scope="row">4</th>
                                <td>Establishment</td>
                                <td>Establishment 4</td>
                                <td>Tarlac City</td>
                                <td>sample.email@gmail.com</td>
                                <td>0</td>
                              </tr>
                              <tr>
                                <th scope="row">5</th>
                                <td>Establishment</td>
                                <td>Establishment 5</td>
                                <td>Tarlac City</td>
                                <td>sample.email@gmail.com</td>
                                <td>0</td>
                              </tr>
                              <tr>
                                <th scope="row">6</th>
                                <td>Establishment</td>
                                <td>Establishment 6</td>
                                <td>Tarlac City</td>
                                <td>sample.email@gmail.com</td>
                                <td>0</td>
                              </tr>
                              <tr>
                                <th scope="row">7</th>
                                <td>Individual</td>
                                <td>Peter Cruz</td>
                                <td>Tarlac City</td>
                                <td>+639157584262</td>
                                <td>1</td>
                              </tr>
                              <tr>
                                <th scope="row">8</th>
                                <td>Individual</td>
                                <td>Pedro Gomez</td>
                                <td>Tarlac City</td>
                                <td>+639153618459</td>
                                <td>1</td>
                              </tr>
                              <tr>
                                <th scope="row">9</th>
                                <td>Individual</td>
                                <td>Isko Ramos</td>
                                <td>Tarlac City</td>
                                <td>+639150146842</td>
                                <td>1</td>
                              </tr>
                            </tbody>
                          </table>



                    </div>

@endsection

    @section('scripts')
    
@endsection