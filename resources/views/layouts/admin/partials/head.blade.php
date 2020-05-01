<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="stylesheet" href="{{asset('css/animate.css')}}">
<link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
<link rel="stylesheet" href="{{asset('css/odometer.css')}}">
<link rel="stylesheet" href="{{asset('css/nice-select.css')}}">

<link rel="stylesheet" href="{{asset('plugins/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('css/adminlte.min.css')}}">
<link rel="stylesheet" href="{{asset('css/admin-salon.css')}}">
<link rel="stylesheet" href="{{asset('css/custom-style.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatables/dataTables.bootstrap4.css')}}">

<link rel="stylesheet" href="{{asset('css/admin-bootstrap-rtl.min.css')}}">

<link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>

<title>Admin-Bilito</title>
<style>
    .btn-sm{
        padding:.1rem .2rem !important
    }
    .form-check-inline label {
    margin: 0;
    padding-left:20px;
    color: #495057;
    position: relative;
    }
    .form-check-inline label::before {
        width: 14px;
        height: 14px;
        border: 1px solid #000;
        border-radius: 1px;
        left: 0px;
        top: 6px;
        position: absolute;
        content: '';
    }
    .form-check-inline input:checked ~ label::before {
        color: #000;
        content: "\f00c";
        font-family: "FontAwesome";
        font-weight: 600;
        font-size:12px;
        line-height: 1;
        line-height: 14px;
        text-align: center;
    }
    .form-check-inline input {
        width: 14px;
        height: 14px;
        opacity: 0;
        z-index: -9;
    }
</style>
