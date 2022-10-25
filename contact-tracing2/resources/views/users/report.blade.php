@extends('layouts.master')

@section('title')
    KONEK | Report
@endsection

@section('content')


        <!--------------------------- GENERAL REPORT --------------------------->
        <div class="report_layout">
            <h1>Report</h1>
            <div class="report_table">
                <div class="general_report">
                    <div class="chart" style="position: relative; height: 68vh; width 50vw">
                        <h2>Users Alerted</h2>
                       <!--<canvas id="tableChart"></canvas>--> 

                       <div class="active-cyan-4 mb-4">
                        <input style="font-size: 1rem; height: 1.8rem; width: 30rem; margin-bottom: 1rem;" class="form-control" type="text" placeholder="Search" aria-label="Search">
                      </div>
                    
                      <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true">
                        <input placeholder="Select date" type="text" id="example" class="form-control">
                        <label for="example">Try me...</label>
                        <i class="fas fa-calendar input-prefix"></i>
                      </div>


                      <table class="table table-hover" style="width: 130rem; height: 10rem;">
                            <thead >
                              <tr class="head" style="justify-content:center; text-align:center">
                                <th scope="col">#</th>
                                <th scope="col" style="text-align:left">Establishment</th>
                                <th scope="col">Date</th>
                                <th scope="col">In</th>
                                <th scope="col">Out</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Address</th>
                                <th scope="col">Contact No.</th>
                                <th scope="col">Status</th>
                              </tr>
                            </thead>
                            <tbody class="body">
                              <tr>
                                <th scope="row">1</th>
                                <th scope="col">Establishment 1</th>
                                <td>March 16, 2022</td>
                                <td>16:35:03</td>
                                <td>17:15:08</td>
                                <td>Peter</td>
                                <td>Cruz</td>
                                <td>Tarlac City</td>
                                <td>+639157584262</td>
                                <td>1</td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <th scope="col">Establishment 1</th>
                                <td>March 16, 2022</td>
                                <td>15:20:35</td>
                                <td>16:02:54</td>
                                <td>Pedro</td>
                                <td>Gomez</td>
                                <td>Tarlac City</td>
                                <td>+639153618459</td>
                                <td>1</td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <th scope="col">Establishment 1</th>
                                <td>March 16, 2022</td>
                                <td>13:24:12</td>
                                <td>14:26:41</td>
                                <td>Isko</td>
                                <td>Ramos</td>
                                <td>Tarlac City</td>
                                <td>+639150146842</td>
                                <td>1</td>
                              </tr>
                            </tbody>
                          </table>

                        
                    </div>
                </div>
            </div>
        </div>
@endsection

    @section('scripts')
    
@endsection