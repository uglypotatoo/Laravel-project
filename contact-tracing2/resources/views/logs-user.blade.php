@extends('layouts.user')

@section('title')
    KONEK | Report
@endsection

@section('content')


        <!--------------------------- GENERAL REPORT --------------------------->
        <div class="report_layout">
            <h1>Report</h1>
            <div class="report_table">
                <div class="general_report">
                    <div class="chart" style="position: relative; height: 68vh; width 80vw">
                        <h2>Logs</h2>


                        <div class="active-cyan-4 mb-4">
                            <input style="font-size: 1rem; height: 1.8rem; width: 30rem; margin-bottom: 1rem;" class="form-control" type="text" placeholder="Search" aria-label="Search">
                          </div>
                        
                          <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true">
                            <input placeholder="Select date" type="text" id="example" class="form-control">
                            <label for="example">Try me...</label>
                            <i class="fas fa-calendar input-prefix"></i>
                          </div>


                          <table class="table table-hover" style="width: 130rem; height: 10rem;">
                            <thead>
                              <tr class="head">
                                <th scope="col">#</th>
                                <th scope="col">Establishment</th>
                                <th scope="col">Date</th>
                                <th scope="col">In</th>
                                <th scope="col">Out</th>
                                <th scope="col">Status</th>
                              </tr>
                            </thead>
                            <tbody class="body">
                              <tr>
                                <th scope="row">1</th>
                                <td>Establishment 1</td>
                                <td>March 16, 2022</td>
                                <td>16:35:03</td>
                                <td>17:15:08</td>
                                <td>1</td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
                        

@endsection

    @section('scripts')
    
    @endsection