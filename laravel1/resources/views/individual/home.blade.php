@extends('layouts.app')

@section('content')
{{ Auth::user()->role }}
testing
<div id="qrcode"></div>

<div id="user">{{ Auth::user()->username }} </div>

@endsection
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.js"></script>
<script>
    $(document).ready(function(){
        var qrc = new QRCode(document.getElementById("qrcode"), "http://site.com/"+ $("#user").text());
    });
    </script>
@endpush