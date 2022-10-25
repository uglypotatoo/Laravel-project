@extends('layouts.master')

@section('title')
    KONEK | Establishment
@endsection

@section('content')


        <!--------------------------- ESTABLISHMENTS --------------------------->
        <div class="establishment_columns">
            <h1>Establishment</h1>
            <div class="establishments">
                <a href="{{ URL::to('/admin/dashboard') }}">
                <div class="tab">
                    <div class="icon">
                        <img src="{{asset('/assets/img/Picture1.png')}}">
                        <h3>Establishment 1</h3>
                    </div>
                </div>
                </a>
            <!--------------------------- DIVS --------------------------->
            <a href="{{ URL::to('/admin/dashboard') }}">
            <div class="tab">
                        <div class="icon">
                            <img src="{{asset('/assets/img/Picture2.png')}}">
                            <h3>Establishment 2</h3>
                        </div>
                </div>
            </a>
            <!--------------------------- DIVS --------------------------->
            <a href="{{ URL::to('/admin/dashboard') }}">
            <div class="tab">
                    
                        <div class="icon">
                            <img src="{{asset('/assets/img/Picture3.png')}}">
                            <h3>Establishment 3</h3>
                        </div>
                </div>
            </a>
            <!--------------------------- DIVS --------------------------->
            <a href="{{ URL::to('/admin/dashboard') }}">
            <div class="tab">

                        <div class="icon">
                            <img src="{{asset('/assets/img/Picture4.png')}}">
                            <h3>Establishment 4</h3>
                        </div>
                </div>
            </a>
            <!--------------------------- DIVS --------------------------->
            <a href="{{ URL::to('/admin/dashboard') }}">
            <div class="tab">
   
                        <div class="icon">
                            <img src="{{asset('/assets/img/Picture5.png')}}">
                            <h3>Establishment 5</h3>
                        </div>
                </div>
            </a>
            <!--------------------------- DIVS --------------------------->
            <a href="{{ URL::to('/admin/dashboard') }}">
            <div class="tab">

                        <div class="icon">
                            <img src="{{asset('/assets/img/Picture6.png')}}">
                            <h3>Establishment 6</h3>
                        </div>
                </div>
            </a>
            <!--------------------------- END OF DIVS --------------------------->
            </div>
        </div>
@endsection

    @section('scripts')
    
@endsection