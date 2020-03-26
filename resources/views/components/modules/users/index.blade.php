@extends('components.includes.master')

@section('title')
Users
@endsection

@section('breadcumb-title')
Artisans
@endsection

@section('breadcumb-parent')
Users
@endsection

@section('breadcumb-menu')
Index
@endsection

@section('external_css')
<link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
<style>
    #body-collapse {
        background: #efeff5
    }

</style>
@endsection

@section('content')
<div class="kt-header kt-grid__item animated fadeInRight">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
        </div>
        <div class="kt-subheader__toolbar">
            <a href="#" class="">
            </a>
            <a href="/user/add/" class="btn btn-brand btn-bold">Add User </a>
        </div>
    </div>
</div>
<div class="row animated fadeInDown">
    <x-modules.users.data.list-data />
</div>
<!--begin: Pagination-->
<div class="kt-pagination kt-pagination--brand kt-margin-t-10 animated fadeInDown">
    <ul class="kt-pagination__links">
        <li class="kt-pagination__link--first">
            <a href="#"><i class="fa fa-angle-double-left"></i></a>
        </li>
        <li class="kt-pagination__link--next">
            <a href="#"><i class="fa fa-angle-left"></i></a>
        </li>
        <li>
            <a href="#">...</a>
        </li>
        <li>
            <a href="#">29</a>
        </li>
        <li>
            <a href="#">30</a>
        </li>
        <li class="kt-pagination__link--active">
            <a href="#">32</a>
        </li>
        <li>
            <a href="#">34</a>
        </li>
        <li>
            <a href="#">...</a>
        </li>
        <li class="kt-pagination__link--prev">
            <a href="#"><i class="fa fa-angle-right"></i></a>
        </li>
        <li class="kt-pagination__link--last">
            <a href="#"><i class="fa fa-angle-double-right"></i></a>
        </li>
    </ul>
    <div class="kt-pagination__toolbar">
        <select class="form-control" style="width: 60px;">
            <option value="10">10</option>
            <option value="20">20</option>
            <option value="30">30</option>
            <option value="50">50</option>
            <option value="100">100</option>
        </select>
        <span class="pagination__desc">
            10 of 230
        </span>
    </div>
</div>
@endsection

@section('external_js')]

@endsection
