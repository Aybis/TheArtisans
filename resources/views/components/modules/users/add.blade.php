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
Add
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
            {{-- <a href="/user/add/" class="btn btn-brand btn-bold">Back </a> --}}
            <button class="btn btn-brand btn-bold" onclick="window.history.back();">Back</button>
        </div>
    </div>
</div>
<div class="row animated fadeInDown">
    <!--begin::Portlet-->
<div class="kt-portlet">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">Add Users</h3>
        </div>
    </div>

    <!--begin::Form-->
    <form class="kt-form kt-form--label-right">
        <div class="kt-portlet__body">
            <div class="form-group row form-group-marginless kt-margin-t-20">
                <label class="col-lg-1 col-form-label">Full Name:</label>
                <div class="col-lg-3">
                    <input  type="email"
                            name="name"
                            class="form-control"
                            placeholder="Full name"
                            value="{{ old('name') }}">
                    <span class="form-text text-muted">Please enter your full name</span>
                </div>
                <label class="col-lg-1 col-form-label">Email:</label>
                <div class="col-lg-3">
                    <input  type="email"
                            name="email"
                            class="form-control"
                            placeholder="Email"
                            value="{{ old('email') }}">
                    <span class="form-text text-muted">Please enter your email</span>
                </div>
                <label class="col-lg-1 col-form-label">Username:</label>
                <div class="col-lg-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="la la-user"></i>
                            </span>
                        </div>
                        <input  type="text"
                                name="username"
                                class="form-control"
                                placeholder=""
                                value="{{ old('username') }}">
                    </div>
                    <span class="form-text text-muted">Please enter your username</span>
                </div>
            </div>
            <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
            <div class="form-group row form-group-marginless">
                <label class="col-lg-1 col-form-label">Phone:</label>
                <div class="col-lg-3">
                    <input  class="form-control"
                            name="phone"
                            id="kt_inputmask_indo"
                            type="text"
                            placeholder="(62) 8121-3141-51617"
                            value="{{old('phone')}}"/>
					<span class="form-text text-muted">Phone number mask: <code>62-81213141516</code></span>
                </div>
                <label class="col-lg-1 col-form-label">Position :</label>
                <div class="col-lg-3">
                    <div class="kt-input-icon">
                        <input  type="text"
                                class="form-control"
                                placeholder="CEO Aybis">
                        <span class="kt-input-icon__icon kt-input-icon__icon--right">
                            <span>
                                <i class="la la-info-circle"></i>
                            </span>
                        </span>
                    </div>
                    <span class="form-text text-muted">Please enter position </span>
                </div>
                <label class="col-lg-1 col-form-label">Permission :</label>
                <div class="col-lg-3">
                    <div class="kt-input-icon">
                        <select class="form-control kt-select2 select-user" name="param">
                            <option value="">Administrator</option>
                            <option value="">Admin</option>
                        </select>
                    </div>
                    <span class="form-text text-muted">Please choose your permission</span>
                </div>
            </div>
            <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
            <div class="form-group row">
                <label class="col-lg-1 col-form-label">Unit :</label>
                <div class="col-lg-3">
                    <div class="kt-input-icon">
						<select class="form-control kt-select2 select-user" name="param">
                            <option value="" selected disabled>Default</option>
                            <option value="active">Operation Support</option>
                            <option value="not">Finance</option>
						</select>
                    </div>
                    <span class="form-text text-muted">Please enter unit user</span>
                </div>
                <label class="col-lg-1 col-form-label">Status:</label>
                <div class="col-lg-3">
                    <div class="kt-radio-inline">
                        <label class="kt-radio kt-radio--solid">
                            <input type="radio" name="status" value="1"> Active
                            <span></span>
                        </label>
                        <label class="kt-radio kt-radio--solid">
                            <input type="radio" checked name="status" value="0"> Not Active
                            <span></span>
                        </label>
                    </div>
                    <span class="form-text text-muted">Please select status</span>
                </div>
                <label class="col-lg-1 col-form-label">User Status:</label>
                <div class="col-lg-3">
                    <div class="kt-radio-inline">
                        <label class="kt-radio kt-radio--solid">
                            <input type="radio" name="status_user" value="1"> Organik
                            <span></span>
                        </label>
                        <label class="kt-radio kt-radio--solid">
                            <input type="radio" name="status_user" checked value="0"> Non Organik
                            <span></span>
                        </label>
                    </div>
                    <span class="form-text text-muted">Please select user status</span>
                </div>
            </div>
        </div>
        <div class="kt-portlet__foot">
            <div class="kt-form__actions">
                <div class="row">
                    <div class="col-lg-5"></div>
                    <div class="col-lg-7">
                        <button type="reset" class="btn btn-brand">Submit</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!--end::Form-->
</div>
@endsection

@section('external_js')]
<script src="{{ asset('assets/js/pages/components/forms/widgets/input-mask.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/js/pages/components/forms/widgets/select2.js')}}" type="text/javascript"></script>


@endsection
