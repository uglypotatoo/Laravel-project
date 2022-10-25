@extends('layouts.master')

@section('title')
    KONEK | Dashboard
@endsection

@section('content')


        <!--------------------------- MAIN --------------------------->
        <main>
            <h1>Dashboard</h1>

            <div class="date">
                <input type="date">
            </div>

            <div class="insights">
                <div class="logs">
                    <div class="middle">
                        <div class="left">
                            <h3>Establishment 1</h3>
                            <h1>23</h1>
                            <small class="text-caps">Today's Log Count</small>
                        </div>
                    </div>
                        <div class="icon">
                            <img src="{{asset('/assets/img/Picture1.png')}}">
                        </div>
                </div>
            <!--------------------------- LOGS --------------------------->

            <div class="logs">
                    <div class="middle">
                        <div class="left">
                            <h3>Establishment 2</h3>
                            <h1>12</h1>
                            <small class="text-caps">Today's Log Count</small>
                        </div>
                    </div>
                        <div class="icon">
                            <img src="{{asset('/assets/img/Picture2.png')}}">
                        </div>
                </div>
            <!--------------------------- LOGS --------------------------->

            <div class="logs">
                    <div class="middle">
                        <div class="left">
                            <h3>Establishment 3</h3>
                            <h1>45</h1>
                            <small class="text-caps">Today's Log Count</small>
                        </div>
                    </div>
                        <div class="icon">
                            <img src="{{asset('/assets/img/Picture3.png')}}">
                        </div>
                </div>
            <!--------------------------- LOGS --------------------------->

            <div class="logs">
                    <div class="middle">
                        <div class="left">
                            <h3>Establishment 4</h3>
                            <h1>67</h1>
                            <small class="text-caps">Today's Log Count</small>
                        </div>
                    </div>
                        <div class="icon">
                            <img src="{{asset('/assets/img/Picture4.png')}}">
                        </div>
                </div>
            <!--------------------------- LOGS --------------------------->

            <div class="logs">
                    <div class="middle">
                        <div class="left">
                            <h3>Establishment 5</h3>
                            <h1>234</h1>
                            <small class="text-caps">Today's Log Count</small>
                        </div>
                    </div>
                        <div class="icon">
                            <img src="{{asset('/assets/img/Picture5.png')}}">
                        </div>
                </div>
            <!--------------------------- LOGS --------------------------->

            <div class="logs">
                    <div class="middle">
                        <div class="left">
                            <h3>Establishment 6</h3>
                            <h1>76</h1>
                            <small class="text-caps">Today's Log Count</small>
                        </div>
                    </div>
                        <div class="icon">
                            <img src="{{asset('/assets/img/Picture6.png')}}">
                        </div>
                </div>
            <!--------------------------- END OF LOGS --------------------------->
            </div>
            <!--------------------------- END OF LOGS --------------------------->

            <div class="monthly-logs">
                <div class="chart" style="position: relative; height: 68vh; width 80vw">
                    <h2>Monthly Logs</h2>
                    <canvas id="lineChart"></canvas>
                </div>
            </div>
        </main>
    </div>
@endsection

    @section('scripts')

@endsection