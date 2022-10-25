@extends('layouts.master')

@section('title')
    KONEK | Users
@endsection

@section('content')


        <!--------------------------- GENERAL REPORT --------------------------->
        <div class="report_layout">
            <h1>Users</h1>
            <div class="report_table">
                <div class="general_report">
                    <div class="chart" style="position: relative; height: 68vh; width 80vw">
                        
                        <canvas id="tableChart"></canvas>
                    </div>
                </div>

@endsection

    @section('scripts')
    
@endsection