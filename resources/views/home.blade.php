@extends('components.includes.master')

@section('title')
Home
@endsection

@section('breadcumb-title')
Artisans
@endsection

@section('breadcumb-parent')
Index
@endsection

@section('breadcumb-menu')
Home
@endsection

@section('external_css')
<link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
<style>
    #body-collapse{
        background:#efeff5
    }
</style>
@endsection

@section('content')
<div class="row animated fadeInDown" >
        <x-dashboard.function/>
        <x-dashboard.ecom/>
        <x-dashboard.legal/>
</div>
@endsection

@section('external_js')
<script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/components/modules/ecom/spph/datatables/list-data.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/components/modules/dashboard/function.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/components/modules/dashboard/ecom.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/components/modules/dashboard/legal.js')}}" type="text/javascript"></script>

@endsection
