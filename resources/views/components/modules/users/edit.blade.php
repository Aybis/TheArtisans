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
Edit
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
<div class="kt-portlet kt-portlet--tabs">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-toolbar">
            <ul class="nav nav-tabs nav-tabs-space-xl nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#kt_users_edit_tab_1" role="tab">
                        <i class="flaticon2-calendar-3"></i> Profile
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_users_edit_tab_2" role="tab">
                        <i class="flaticon2-protected"></i> Account
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_users_edit_tab_3" role="tab">
                        <i class="flaticon2-lock"></i> Change Password
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_users_edit_tab_4" role="tab">
                        <i class="flaticon2-gear"></i> Settings
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_users_edit_tab_5" role="tab">
                        <i class="flaticon2-calendar-5"></i> Remarks
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="kt-portlet__body">
        <form action="" method="" id="kt_user_form">

            <!--begin: Tab Content-->
            <div class="tab-content kt-margin-t-20 kt-margin-b-20">

                <!--begin: Tab-->
                <div class="tab-pane active" id="kt_users_edit_tab_1" role="tabpanel">
                    <div class="kt-form kt-form--label-right">
                        <div class="kt-form__body">
                            <div class="kt-section kt-section--first">
                                <div class="kt-section__body">
                                    <div class="row">
                                        <label class="col-xl-3"></label>
                                        <div class="col-lg-9 col-xl-6">
                                            <h3 class="kt-section__title kt-section__title-sm">Customer Info:</h3>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="kt-avatar kt-avatar--outline kt-avatar--circle-" id="kt_user_avatar">
                                                <div class="kt-avatar__holder" style="background-image: url('{{ asset('assets/media/users/300_13.jpg')}}');"></div>
                                                <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
                                                    <i class="fa fa-pen"></i>
                                                    <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg">
                                                </label>
                                                <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
                                                    <i class="fa fa-times"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">First Name</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <input class="form-control" type="text" value="Aaron">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Last Name</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <input class="form-control" type="text" value="Sterling">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Company Name</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <input class="form-control" type="text" value="Artlict Inc.">
                                            <span class="form-text text-muted">If you want your invoices addressed to a company. Leave blank to use your full name.</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-xl-3"></label>
                                        <div class="col-lg-9 col-xl-6">
                                            <h3 class="kt-section__title kt-section__title-sm">Customer Contacts:</h3>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Contact Phone</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
                                                <input type="text" class="form-control" value="+56666553712" placeholder="Phone" aria-describedby="basic-addon1">
                                            </div>
                                            <span class="form-text text-muted">We'll never share your email with anyone else.</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
                                                <input type="text" class="form-control" value="aaron@artlict.com" placeholder="Email" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-group-last row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Company Site</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Username" value="artlict">
                                                <div class="input-group-append"><span class="input-group-text">.com</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--end: Tab-->

                <!--begin: Tab-->
                <div class="tab-pane" id="kt_users_edit_tab_2" role="tabpanel">
                    <div class="kt-form kt-form--label-right">
                        <div class="kt-form__body">
                            <div class="kt-section kt-section--first">
                                <div class="kt-section__body">
                                    <div class="row">
                                        <label class="col-xl-3"></label>
                                        <div class="col-lg-9 col-xl-6">
                                            <h3 class="kt-section__title kt-section__title-sm">Account:</h3>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Username</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="kt-spinner kt-spinner--sm kt-spinner--success kt-spinner--right kt-spinner--input">
                                                <input class="form-control" type="text" value="aaron84">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
                                                <input type="text" class="form-control" value="aaron.sterling@artlics.com" placeholder="Email" aria-describedby="basic-addon1">
                                            </div>
                                            <span class="form-text text-muted">Email will not be publicly displayed. <a href="#" class="kt-link">Learn more</a>.</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Language</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <select class="form-control">
                                                <option>Select Language...</option>
                                                <option value="id">Bahasa Indonesia - Indonesian</option>
                                                <option value="msa">Bahasa Melayu - Malay</option>
                                                <option value="ca">Català - Catalan</option>
                                                <option value="cs">Čeština - Czech</option>
                                                <option value="da">Dansk - Danish</option>
                                                <option value="de">Deutsch - German</option>
                                                <option value="en" selected="">English</option>
                                                <option value="en-gb">English UK - British English</option>
                                                <option value="es">Español - Spanish</option>
                                                <option value="eu">Euskara - Basque (beta)</option>
                                                <option value="fil">Filipino</option>
                                                <option value="fr">Français - French</option>
                                                <option value="ga">Gaeilge - Irish (beta)</option>
                                                <option value="gl">Galego - Galician (beta)</option>
                                                <option value="hr">Hrvatski - Croatian</option>
                                                <option value="it">Italiano - Italian</option>
                                                <option value="hu">Magyar - Hungarian</option>
                                                <option value="nl">Nederlands - Dutch</option>
                                                <option value="no">Norsk - Norwegian</option>
                                                <option value="pl">Polski - Polish</option>
                                                <option value="pt">Português - Portuguese</option>
                                                <option value="ro">Română - Romanian</option>
                                                <option value="sk">Slovenčina - Slovak</option>
                                                <option value="fi">Suomi - Finnish</option>
                                                <option value="sv">Svenska - Swedish</option>
                                                <option value="vi">Tiếng Việt - Vietnamese</option>
                                                <option value="tr">Türkçe - Turkish</option>
                                                <option value="el">Ελληνικά - Greek</option>
                                                <option value="bg">Български език - Bulgarian</option>
                                                <option value="ru">Русский - Russian</option>
                                                <option value="sr">Српски - Serbian</option>
                                                <option value="uk">Українська мова - Ukrainian</option>
                                                <option value="he">עִבְרִית - Hebrew</option>
                                                <option value="ur">اردو - Urdu (beta)</option>
                                                <option value="ar">العربية - Arabic</option>
                                                <option value="fa">فارسی - Persian</option>
                                                <option value="mr">मराठी - Marathi</option>
                                                <option value="hi">हिन्दी - Hindi</option>
                                                <option value="bn">বাংলা - Bangla</option>
                                                <option value="gu">ગુજરાતી - Gujarati</option>
                                                <option value="ta">தமிழ் - Tamil</option>
                                                <option value="kn">ಕನ್ನಡ - Kannada</option>
                                                <option value="th">ภาษาไทย - Thai</option>
                                                <option value="ko">한국어 - Korean</option>
                                                <option value="ja">日本語 - Japanese</option>
                                                <option value="zh-cn">简体中文 - Simplified Chinese</option>
                                                <option value="zh-tw">繁體中文 - Traditional Chinese</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Time Zone</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <select class="form-control">
                                                <option data-offset="-39600" value="International Date Line West">(GMT-11:00) International Date Line West</option>
                                                <option data-offset="-39600" value="Midway Island">(GMT-11:00) Midway Island</option>
                                                <option data-offset="-39600" value="Samoa">(GMT-11:00) Samoa</option>
                                                <option data-offset="-36000" value="Hawaii">(GMT-10:00) Hawaii</option>
                                                <option data-offset="-28800" value="Alaska">(GMT-08:00) Alaska</option>
                                                <option data-offset="-25200" value="Pacific Time (US &amp; Canada)">(GMT-07:00) Pacific Time (US &amp; Canada)</option>
                                                <option data-offset="-25200" value="Tijuana">(GMT-07:00) Tijuana</option>
                                                <option data-offset="-25200" value="Arizona">(GMT-07:00) Arizona</option>
                                                <option data-offset="-21600" value="Mountain Time (US &amp; Canada)">(GMT-06:00) Mountain Time (US &amp; Canada)</option>
                                                <option data-offset="-21600" value="Chihuahua">(GMT-06:00) Chihuahua</option>
                                                <option data-offset="-21600" value="Mazatlan">(GMT-06:00) Mazatlan</option>
                                                <option data-offset="-21600" value="Saskatchewan">(GMT-06:00) Saskatchewan</option>
                                                <option data-offset="-21600" value="Central America">(GMT-06:00) Central America</option>
                                                <option data-offset="-18000" value="Central Time (US &amp; Canada)">(GMT-05:00) Central Time (US &amp; Canada)</option>
                                                <option data-offset="-18000" value="Guadalajara">(GMT-05:00) Guadalajara</option>
                                                <option data-offset="-18000" value="Mexico City">(GMT-05:00) Mexico City</option>
                                                <option data-offset="-18000" value="Monterrey">(GMT-05:00) Monterrey</option>
                                                <option data-offset="-18000" value="Bogota">(GMT-05:00) Bogota</option>
                                                <option data-offset="-18000" value="Lima">(GMT-05:00) Lima</option>
                                                <option data-offset="-18000" value="Quito">(GMT-05:00) Quito</option>
                                                <option data-offset="-14400" value="Eastern Time (US &amp; Canada)">(GMT-04:00) Eastern Time (US &amp; Canada)</option>
                                                <option data-offset="-14400" value="Indiana (East)">(GMT-04:00) Indiana (East)</option>
                                                <option data-offset="-14400" value="Caracas">(GMT-04:00) Caracas</option>
                                                <option data-offset="-14400" value="La Paz">(GMT-04:00) La Paz</option>
                                                <option data-offset="-14400" value="Georgetown">(GMT-04:00) Georgetown</option>
                                                <option data-offset="-10800" value="Atlantic Time (Canada)">(GMT-03:00) Atlantic Time (Canada)</option>
                                                <option data-offset="-10800" value="Santiago">(GMT-03:00) Santiago</option>
                                                <option data-offset="-10800" value="Brasilia">(GMT-03:00) Brasilia</option>
                                                <option data-offset="-10800" value="Buenos Aires">(GMT-03:00) Buenos Aires</option>
                                                <option data-offset="-9000" value="Newfoundland">(GMT-02:30) Newfoundland</option>
                                                <option data-offset="-7200" value="Greenland">(GMT-02:00) Greenland</option>
                                                <option data-offset="-7200" value="Mid-Atlantic">(GMT-02:00) Mid-Atlantic</option>
                                                <option data-offset="-3600" value="Cape Verde Is.">(GMT-01:00) Cape Verde Is.</option>
                                                <option data-offset="0" value="Azores">(GMT) Azores</option>
                                                <option data-offset="0" value="Monrovia">(GMT) Monrovia</option>
                                                <option data-offset="0" value="UTC">(GMT) UTC</option>
                                                <option data-offset="3600" value="Dublin">(GMT+01:00) Dublin</option>
                                                <option data-offset="3600" value="Edinburgh">(GMT+01:00) Edinburgh</option>
                                                <option data-offset="3600" value="Lisbon">(GMT+01:00) Lisbon</option>
                                                <option data-offset="3600" value="London">(GMT+01:00) London</option>
                                                <option data-offset="3600" value="Casablanca">(GMT+01:00) Casablanca</option>
                                                <option data-offset="3600" value="West Central Africa">(GMT+01:00) West Central Africa</option>
                                                <option data-offset="7200" value="Belgrade">(GMT+02:00) Belgrade</option>
                                                <option data-offset="7200" value="Bratislava">(GMT+02:00) Bratislava</option>
                                                <option data-offset="7200" value="Budapest">(GMT+02:00) Budapest</option>
                                                <option data-offset="7200" value="Ljubljana">(GMT+02:00) Ljubljana</option>
                                                <option data-offset="7200" value="Prague">(GMT+02:00) Prague</option>
                                                <option data-offset="7200" value="Sarajevo">(GMT+02:00) Sarajevo</option>
                                                <option data-offset="7200" value="Skopje">(GMT+02:00) Skopje</option>
                                                <option data-offset="7200" value="Warsaw">(GMT+02:00) Warsaw</option>
                                                <option data-offset="7200" value="Zagreb">(GMT+02:00) Zagreb</option>
                                                <option data-offset="7200" value="Brussels">(GMT+02:00) Brussels</option>
                                                <option data-offset="7200" value="Copenhagen">(GMT+02:00) Copenhagen</option>
                                                <option data-offset="7200" value="Madrid">(GMT+02:00) Madrid</option>
                                                <option data-offset="7200" value="Paris">(GMT+02:00) Paris</option>
                                                <option data-offset="7200" value="Amsterdam">(GMT+02:00) Amsterdam</option>
                                                <option data-offset="7200" value="Berlin">(GMT+02:00) Berlin</option>
                                                <option data-offset="7200" value="Bern">(GMT+02:00) Bern</option>
                                                <option data-offset="7200" value="Rome">(GMT+02:00) Rome</option>
                                                <option data-offset="7200" value="Stockholm">(GMT+02:00) Stockholm</option>
                                                <option data-offset="7200" value="Vienna">(GMT+02:00) Vienna</option>
                                                <option data-offset="7200" value="Cairo">(GMT+02:00) Cairo</option>
                                                <option data-offset="7200" value="Harare">(GMT+02:00) Harare</option>
                                                <option data-offset="7200" value="Pretoria">(GMT+02:00) Pretoria</option>
                                                <option data-offset="10800" value="Bucharest">(GMT+03:00) Bucharest</option>
                                                <option data-offset="10800" value="Helsinki">(GMT+03:00) Helsinki</option>
                                                <option data-offset="10800" value="Kiev">(GMT+03:00) Kiev</option>
                                                <option data-offset="10800" value="Kyiv">(GMT+03:00) Kyiv</option>
                                                <option data-offset="10800" value="Riga">(GMT+03:00) Riga</option>
                                                <option data-offset="10800" value="Sofia">(GMT+03:00) Sofia</option>
                                                <option data-offset="10800" value="Tallinn">(GMT+03:00) Tallinn</option>
                                                <option data-offset="10800" value="Vilnius">(GMT+03:00) Vilnius</option>
                                                <option data-offset="10800" value="Athens">(GMT+03:00) Athens</option>
                                                <option data-offset="10800" value="Istanbul">(GMT+03:00) Istanbul</option>
                                                <option data-offset="10800" value="Minsk">(GMT+03:00) Minsk</option>
                                                <option data-offset="10800" value="Jerusalem">(GMT+03:00) Jerusalem</option>
                                                <option data-offset="10800" value="Moscow">(GMT+03:00) Moscow</option>
                                                <option data-offset="10800" value="St. Petersburg">(GMT+03:00) St. Petersburg</option>
                                                <option data-offset="10800" value="Volgograd">(GMT+03:00) Volgograd</option>
                                                <option data-offset="10800" value="Kuwait">(GMT+03:00) Kuwait</option>
                                                <option data-offset="10800" value="Riyadh">(GMT+03:00) Riyadh</option>
                                                <option data-offset="10800" value="Nairobi">(GMT+03:00) Nairobi</option>
                                                <option data-offset="10800" value="Baghdad">(GMT+03:00) Baghdad</option>
                                                <option data-offset="14400" value="Abu Dhabi">(GMT+04:00) Abu Dhabi</option>
                                                <option data-offset="14400" value="Muscat">(GMT+04:00) Muscat</option>
                                                <option data-offset="14400" value="Baku">(GMT+04:00) Baku</option>
                                                <option data-offset="14400" value="Tbilisi">(GMT+04:00) Tbilisi</option>
                                                <option data-offset="14400" value="Yerevan">(GMT+04:00) Yerevan</option>
                                                <option data-offset="16200" value="Tehran">(GMT+04:30) Tehran</option>
                                                <option data-offset="16200" value="Kabul">(GMT+04:30) Kabul</option>
                                                <option data-offset="18000" value="Ekaterinburg">(GMT+05:00) Ekaterinburg</option>
                                                <option data-offset="18000" value="Islamabad">(GMT+05:00) Islamabad</option>
                                                <option data-offset="18000" value="Karachi">(GMT+05:00) Karachi</option>
                                                <option data-offset="18000" value="Tashkent">(GMT+05:00) Tashkent</option>
                                                <option data-offset="19800" value="Chennai">(GMT+05:30) Chennai</option>
                                                <option data-offset="19800" value="Kolkata">(GMT+05:30) Kolkata</option>
                                                <option data-offset="19800" value="Mumbai">(GMT+05:30) Mumbai</option>
                                                <option data-offset="19800" value="New Delhi">(GMT+05:30) New Delhi</option>
                                                <option data-offset="19800" value="Sri Jayawardenepura">(GMT+05:30) Sri Jayawardenepura</option>
                                                <option data-offset="20700" value="Kathmandu">(GMT+05:45) Kathmandu</option>
                                                <option data-offset="21600" value="Astana">(GMT+06:00) Astana</option>
                                                <option data-offset="21600" value="Dhaka">(GMT+06:00) Dhaka</option>
                                                <option data-offset="21600" value="Almaty">(GMT+06:00) Almaty</option>
                                                <option data-offset="21600" value="Urumqi">(GMT+06:00) Urumqi</option>
                                                <option data-offset="23400" value="Rangoon">(GMT+06:30) Rangoon</option>
                                                <option data-offset="25200" value="Novosibirsk">(GMT+07:00) Novosibirsk</option>
                                                <option data-offset="25200" value="Bangkok">(GMT+07:00) Bangkok</option>
                                                <option data-offset="25200" value="Hanoi">(GMT+07:00) Hanoi</option>
                                                <option data-offset="25200" value="Jakarta">(GMT+07:00) Jakarta</option>
                                                <option data-offset="25200" value="Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
                                                <option data-offset="28800" value="Beijing">(GMT+08:00) Beijing</option>
                                                <option data-offset="28800" value="Chongqing">(GMT+08:00) Chongqing</option>
                                                <option data-offset="28800" value="Hong Kong">(GMT+08:00) Hong Kong</option>
                                                <option data-offset="28800" value="Kuala Lumpur">(GMT+08:00) Kuala Lumpur</option>
                                                <option data-offset="28800" value="Singapore">(GMT+08:00) Singapore</option>
                                                <option data-offset="28800" value="Taipei">(GMT+08:00) Taipei</option>
                                                <option data-offset="28800" value="Perth">(GMT+08:00) Perth</option>
                                                <option data-offset="28800" value="Irkutsk">(GMT+08:00) Irkutsk</option>
                                                <option data-offset="28800" value="Ulaan Bataar">(GMT+08:00) Ulaan Bataar</option>
                                                <option data-offset="32400" value="Seoul">(GMT+09:00) Seoul</option>
                                                <option data-offset="32400" value="Osaka">(GMT+09:00) Osaka</option>
                                                <option data-offset="32400" value="Sapporo">(GMT+09:00) Sapporo</option>
                                                <option data-offset="32400" value="Tokyo">(GMT+09:00) Tokyo</option>
                                                <option data-offset="32400" value="Yakutsk">(GMT+09:00) Yakutsk</option>
                                                <option data-offset="34200" value="Darwin">(GMT+09:30) Darwin</option>
                                                <option data-offset="34200" value="Adelaide">(GMT+09:30) Adelaide</option>
                                                <option data-offset="36000" value="Canberra">(GMT+10:00) Canberra</option>
                                                <option data-offset="36000" value="Melbourne">(GMT+10:00) Melbourne</option>
                                                <option data-offset="36000" value="Sydney">(GMT+10:00) Sydney</option>
                                                <option data-offset="36000" value="Brisbane">(GMT+10:00) Brisbane</option>
                                                <option data-offset="36000" value="Hobart">(GMT+10:00) Hobart</option>
                                                <option data-offset="36000" value="Vladivostok">(GMT+10:00) Vladivostok</option>
                                                <option data-offset="36000" value="Guam">(GMT+10:00) Guam</option>
                                                <option data-offset="36000" value="Port Moresby">(GMT+10:00) Port Moresby</option>
                                                <option data-offset="36000" value="Solomon Is.">(GMT+10:00) Solomon Is.</option>
                                                <option data-offset="39600" value="Magadan">(GMT+11:00) Magadan</option>
                                                <option data-offset="39600" value="New Caledonia">(GMT+11:00) New Caledonia</option>
                                                <option data-offset="43200" value="Fiji">(GMT+12:00) Fiji</option>
                                                <option data-offset="43200" value="Kamchatka">(GMT+12:00) Kamchatka</option>
                                                <option data-offset="43200" value="Marshall Is.">(GMT+12:00) Marshall Is.</option>
                                                <option data-offset="43200" value="Auckland">(GMT+12:00) Auckland</option>
                                                <option data-offset="43200" value="Wellington">(GMT+12:00) Wellington</option>
                                                <option data-offset="46800" value="Nuku'alofa">(GMT+13:00) Nuku'alofa</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group form-group-last row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Communication</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="kt-checkbox-inline">
                                                <label class="kt-checkbox">
                                                    <input type="checkbox" checked=""> Email
                                                    <span></span>
                                                </label>
                                                <label class="kt-checkbox">
                                                    <input type="checkbox" checked=""> SMS
                                                    <span></span>
                                                </label>
                                                <label class="kt-checkbox">
                                                    <input type="checkbox"> Phone
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>
                            <div class="kt-section kt-section--first">
                                <div class="kt-section__body">
                                    <div class="row">
                                        <label class="col-xl-3"></label>
                                        <div class="col-lg-9 col-xl-6">
                                            <h3 class="kt-section__title kt-section__title-sm">Security:</h3>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Login verification</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <button type="button" class="btn btn-label-brand btn-bold btn-sm kt-margin-t-5 kt-margin-b-5">Setup login verification</button>
                                            <span class="form-text text-muted">
                                                After you log in, you will be asked for additional information to confirm your identity and protect your account from being compromised.
                                                <a href="#" class="kt-link">Learn more</a>.
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Password reset verification</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="kt-checkbox-single">
                                                <label class="kt-checkbox">
                                                    <input type="checkbox"> Require personal information to reset your password.
                                                    <span></span>
                                                </label>
                                            </div>
                                            <span class="form-text text-muted">
                                                For extra security, this requires you to confirm your email or phone number when you reset your password.
                                                <a href="#" class="kt-link">Learn more</a>.
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group row kt-margin-t-10 kt-margin-b-10">
                                        <label class="col-xl-3 col-lg-3 col-form-label"></label>
                                        <div class="col-lg-9 col-xl-6">
                                            <button type="button" class="btn btn-label-danger btn-bold btn-sm kt-margin-t-5 kt-margin-b-5">Deactivate your account ?</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--end: Tab-->

                <!--begin: Tab-->
                <div class="tab-pane" id="kt_users_edit_tab_3" role="tabpanel">
                    <div class="kt-form kt-form--label-right">
                        <div class="kt-form__body">
                            <div class="kt-section kt-section--first">
                                <div class="kt-section__body">
                                    <div class="alert alert-solid-primary alert-bold fade show kt-margin-t-20 kt-margin-b-40" role="alert">
                                        <div class="alert-icon"><i class="fa fa-exclamation-triangle"></i></div>
                                        <div class="alert-text">Configure user passwords to expire periodically.
                                            <br>Users will need warning that their passwords are going to expire, or they might inadvertently get locked out of the system!</div>
                                            <div class="alert-close">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true"><i class="la la-close"></i></span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-xl-3"></label>
                                            <div class="col-lg-9 col-xl-6">
                                                <h3 class="kt-section__title kt-section__title-sm">Change Or Recover Your Password:</h3>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Current Password</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input type="password" class="form-control" value="" placeholder="Current password">
                                                <a href="#" class="kt-link kt-font-sm kt-font-bold kt-margin-t-5">Forgot password ?</a>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">New Password</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input type="password" class="form-control" value="" placeholder="New password">
                                            </div>
                                        </div>
                                        <div class="form-group form-group-last row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Verify Password</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input type="password" class="form-control" value="" placeholder="Verify password">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-separator kt-separator--space-lg kt-separator--fit kt-separator--border-solid"></div>
                            <div class="kt-form__actions">
                                <div class="row">
                                    <div class="col-xl-3"></div>
                                    <div class="col-lg-9 col-xl-6">
                                        <a href="#" class="btn btn-label-brand btn-bold">Save changes</a>
                                        <a href="#" class="btn btn-clean btn-bold">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--end: Tab-->

                    <!--begin: Tab-->
                    <div class="tab-pane" id="kt_users_edit_tab_4" role="tabpanel">
                        <div class="kt-form kt-form--label-right">
                            <div class="kt-form__body">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">
                                        <div class="row">
                                            <label class="col-xl-3"></label>
                                            <div class="col-lg-9 col-xl-6">
                                                <h3 class="kt-section__title kt-section__title-sm">Setup Email Notification:</h3>
                                            </div>
                                        </div>
                                        <div class="form-group form-group-sm row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Email Notification</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <span class="kt-switch">
                                                    <label>
                                                        <input type="checkbox" checked="checked" name="email_notification_1">
                                                        <span></span>
                                                    </label>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group form-group-last row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Send Copy To Personal Email</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <span class="kt-switch">
                                                    <label>
                                                        <input type="checkbox" name="email_notification_2">
                                                        <span></span>
                                                    </label>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">
                                        <div class="row">
                                            <label class="col-xl-3"></label>
                                            <div class="col-lg-9 col-xl-6">
                                                <h3 class="kt-section__title kt-section__title-sm">Activity Related Emails:</h3>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">When To Email</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="kt-checkbox-list">
                                                    <label class="kt-checkbox">
                                                        <input type="checkbox"> You have new notifications.
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-checkbox">
                                                        <input type="checkbox"> You're sent a direct message
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-checkbox">
                                                        <input type="checkbox" checked="checked"> Someone adds you as a connection
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group form-group-last row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">When To Escalate Emails</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="kt-checkbox-list">
                                                    <label class="kt-checkbox kt-checkbox--brand">
                                                        <input type="checkbox"> Upon new order.
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-checkbox kt-checkbox--brand">
                                                        <input type="checkbox"> New membership approval
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-checkbox kt-checkbox--brand">
                                                        <input type="checkbox" checked="checked"> Member registration
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">
                                        <div class="row">
                                            <label class="col-xl-3"></label>
                                            <div class="col-lg-9 col-xl-6">
                                                <h3 class="kt-section__title kt-section__title-sm">Updates From Keenthemes:</h3>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Email You With</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="kt-checkbox-list">
                                                    <label class="kt-checkbox">
                                                        <input type="checkbox"> News about Keen product and feature updates
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-checkbox">
                                                        <input type="checkbox"> Tips on getting more out of Keen
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-checkbox">
                                                        <input type="checkbox" checked="checked"> Things you missed since you last logged into Keen
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-checkbox">
                                                        <input type="checkbox" checked="checked"> News about Keen on partner products and other services
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-checkbox">
                                                        <input type="checkbox" checked="checked"> Tips on Keen business products
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--end: Tab-->

                    <!--begin: Tab-->
                    <div class="tab-pane" id="kt_users_edit_tab_5" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-8">
                                <form>
                                    <div class="form-group">
                                        <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Type remark"></textarea>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <a href="#" class="btn btn-label-brand btn-bold">Add remark</a>
                                            <a href="#" class="btn btn-clean btn-bold">Cancel</a>
                                        </div>
                                    </div>
                                </form>
                                <div class="kt-separator kt-separator--space-lg kt-separator--border-dashed"></div>
                                <div class="kt-notes">
                                    <div class="kt-notes__items">
                                        <div class="kt-notes__item">
                                            <div class="kt-notes__media">
                                                <span class="kt-notes__icon">
                                                    <i class="flaticon2-shield kt-font-brand"></i>
                                                </span>
                                            </div>
                                            <div class="kt-notes__content">
                                                <div class="kt-notes__section">
                                                    <div class="kt-notes__info">
                                                        <a href="#" class="kt-notes__title">
                                                            New reminder
                                                        </a>
                                                        <span class="kt-notes__desc">
                                                            12:40AM 20 June, 2020
                                                        </span>
                                                        <span class="kt-badge kt-badge--danger kt-badge--inline">pending</span>
                                                    </div>
                                                    <div class="kt-notes__dropdown">
                                                        <a href="#" class="btn btn-sm btn-icon-md btn-icon" data-toggle="dropdown">
                                                            <i class="flaticon-more-1 kt-font-brand"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">

                                                            <!--begin::Nav-->
                                                            <ul class="kt-nav">
                                                                <li class="kt-nav__section kt-nav__section--first">
                                                                    <span class="kt-nav__section-text">Export Tools</span>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon la la-print"></i>
                                                                        <span class="kt-nav__link-text">Print</span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon la la-copy"></i>
                                                                        <span class="kt-nav__link-text">Copy</span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                                        <span class="kt-nav__link-text">Excel</span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon la la-file-text-o"></i>
                                                                        <span class="kt-nav__link-text">CSV</span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                                                                        <span class="kt-nav__link-text">PDF</span>
                                                                    </a>
                                                                </li>
                                                            </ul>

                                                            <!--end::Nav-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="kt-notes__body">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                                                </span>
                                            </div>
                                        </div>
                                        <div class="kt-notes__item">
                                            <div class="kt-notes__media">
                                                <span class="kt-notes__icon">
                                                    <i class="flaticon2-settings kt-font-success"></i>
                                                </span>
                                            </div>
                                            <div class="kt-notes__content">
                                                <div class="kt-notes__section">
                                                    <div class="kt-notes__info">
                                                        <a href="#" class="kt-notes__title">
                                                            System update
                                                        </a>
                                                        <span class="kt-notes__desc">
                                                            10:30AM 23 May, 2019
                                                        </span>
                                                    </div>
                                                    <div class="kt-notes__dropdown">
                                                        <a href="#" class="btn btn-sm btn-icon-md btn-icon" data-toggle="dropdown">
                                                            <i class="flaticon-more-1 kt-font-brand"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">

                                                            <!--begin::Nav-->
                                                            <ul class="kt-nav">
                                                                <li class="kt-nav__section kt-nav__section--first">
                                                                    <span class="kt-nav__section-text">Export Tools</span>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon la la-print"></i>
                                                                        <span class="kt-nav__link-text">Print</span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon la la-copy"></i>
                                                                        <span class="kt-nav__link-text">Copy</span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                                        <span class="kt-nav__link-text">Excel</span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon la la-file-text-o"></i>
                                                                        <span class="kt-nav__link-text">CSV</span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                                                                        <span class="kt-nav__link-text">PDF</span>
                                                                    </a>
                                                                </li>
                                                            </ul>

                                                            <!--end::Nav-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="kt-notes__body">
                                                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum
                                                </span>
                                            </div>
                                        </div>
                                        <div class="kt-notes__item">
                                            <div class="kt-notes__media">
                                                <span class="kt-notes__icon">
                                                    <i class="flaticon2-digital-marketing kt-font-danger"></i>
                                                </span>
                                            </div>
                                            <div class="kt-notes__content">
                                                <div class="kt-notes__section">
                                                    <div class="kt-notes__info">
                                                        <a href="#" class="kt-notes__title">
                                                            New notification
                                                        </a>
                                                        <span class="kt-notes__desc">
                                                            10:30AM 3 Feb, 2019
                                                        </span>
                                                        <span class="kt-badge kt-badge--info kt-badge--inline">settled</span>
                                                    </div>
                                                    <div class="kt-notes__dropdown">
                                                        <a href="#" class="btn btn-sm btn-icon-md btn-icon" data-toggle="dropdown">
                                                            <i class="flaticon-more-1 kt-font-brand"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">

                                                            <!--begin::Nav-->
                                                            <ul class="kt-nav">
                                                                <li class="kt-nav__section kt-nav__section--first">
                                                                    <span class="kt-nav__section-text">Export Tools</span>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon la la-print"></i>
                                                                        <span class="kt-nav__link-text">Print</span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon la la-copy"></i>
                                                                        <span class="kt-nav__link-text">Copy</span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                                        <span class="kt-nav__link-text">Excel</span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon la la-file-text-o"></i>
                                                                        <span class="kt-nav__link-text">CSV</span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                                                                        <span class="kt-nav__link-text">PDF</span>
                                                                    </a>
                                                                </li>
                                                            </ul>

                                                            <!--end::Nav-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="kt-notes__body">
                                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium aque ipsa quae ab illo inventore veritatis et quasi architecto.
                                                </span>
                                            </div>
                                        </div>
                                        <div class="kt-notes__item">
                                            <div class="kt-notes__media">
                                                <span class="kt-notes__icon">
                                                    <i class="flaticon2-pie-chart-1 kt-font-warning"></i>
                                                </span>
                                            </div>
                                            <div class="kt-notes__content">
                                                <div class="kt-notes__section">
                                                    <div class="kt-notes__info">
                                                        <a href="#" class="kt-notes__title">
                                                            New order
                                                        </a>
                                                        <span class="kt-notes__desc">
                                                            11:40AM 14 March, 2012
                                                        </span>
                                                    </div>
                                                    <div class="kt-notes__dropdown">
                                                        <a href="#" class="btn btn-sm btn-icon-md btn-icon" data-toggle="dropdown">
                                                            <i class="flaticon-more-1 kt-font-brand"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">

                                                            <!--begin::Nav-->
                                                            <ul class="kt-nav">
                                                                <li class="kt-nav__head">
                                                                    Export Options
                                                                    <i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
                                                                </li>
                                                                <li class="kt-nav__separator"></li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon flaticon2-drop"></i>
                                                                        <span class="kt-nav__link-text">Users</span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                                                                        <span class="kt-nav__link-text">Reports</span>
                                                                        <span class="kt-nav__link-badge">
                                                                            <span class="kt-badge kt-badge--bold kt-badge--danger">9</span>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon flaticon2-drop"></i>
                                                                        <span class="kt-nav__link-text">Statements</span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon flaticon2-new-email"></i>
                                                                        <span class="kt-nav__link-text">Customer Support</span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__separator"></li>
                                                                <li class="kt-nav__foot">
                                                                    <a class="btn btn-label-brand btn-bold btn-sm" href="#">Proceed</a>
                                                                    <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                                                                </li>
                                                            </ul>

                                                            <!--end::Nav-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="kt-notes__body">
                                                    Sed ut perspiciatis unde omnis iste natus error ipsa quae ab illo inventore veritatis et quasi architecto.
                                                </span>
                                            </div>
                                        </div>
                                        <div class="kt-notes__item">
                                            <div class="kt-notes__media">
                                                <img class="kt-hidden-" src="{{ asset('assets/media/users/100_6.jpg')}}" alt="image">
                                                <span class="kt-notes__icon kt-font-boldest kt-hidden">
                                                    <i class="flaticon2-cup"></i>
                                                </span>
                                                <h3 class="kt-notes__user kt-font-boldest kt-hidden">
                                                    AS
                                                </h3>
                                            </div>
                                            <div class="kt-notes__content">
                                                <div class="kt-notes__section">
                                                    <div class="kt-notes__info">
                                                        <a href="#" class="kt-notes__title">
                                                            New reminder
                                                        </a>
                                                        <span class="kt-notes__desc">
                                                            19:30AM 16 Jul, 2019
                                                        </span>
                                                        <span class="kt-badge kt-badge--success kt-badge--inline">new</span>
                                                    </div>
                                                    <div class="kt-notes__dropdown">
                                                        <a href="#" class="btn btn-sm btn-icon-md btn-icon" data-toggle="dropdown">
                                                            <i class="flaticon-more-1 kt-font-brand"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">

                                                            <!--begin::Nav-->
                                                            <ul class="kt-nav">
                                                                <li class="kt-nav__section kt-nav__section--first">
                                                                    <span class="kt-nav__section-text">Export Tools</span>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon la la-print"></i>
                                                                        <span class="kt-nav__link-text">Print</span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon la la-copy"></i>
                                                                        <span class="kt-nav__link-text">Copy</span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                                        <span class="kt-nav__link-text">Excel</span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon la la-file-text-o"></i>
                                                                        <span class="kt-nav__link-text">CSV</span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                                                                        <span class="kt-nav__link-text">PDF</span>
                                                                    </a>
                                                                </li>
                                                            </ul>

                                                            <!--end::Nav-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="kt-notes__body">
                                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words
                                                </span>
                                            </div>
                                        </div>
                                        <div class="kt-notes__item">
                                            <div class="kt-notes__media">
                                                <span class="kt-notes__icon kt-notes__icon--danger kt-font-boldest">
                                                    <i class="flaticon2-rocket kt-font-danger"></i>
                                                </span>
                                            </div>
                                            <div class="kt-notes__content">
                                                <div class="kt-notes__section">
                                                    <div class="kt-notes__info">
                                                        <a href="#" class="kt-notes__title">
                                                            System Update
                                                        </a>
                                                        <span class="kt-notes__desc">
                                                            9:45AM 23 Jun, 2019
                                                        </span>
                                                    </div>
                                                    <div class="kt-notes__dropdown">
                                                        <a href="#" class="btn btn-sm btn-icon-md btn-icon" data-toggle="dropdown">
                                                            <i class="flaticon-more-1 kt-font-danger"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">

                                                            <!--begin::Nav-->
                                                            <ul class="kt-nav">
                                                                <li class="kt-nav__section kt-nav__section--first">
                                                                    <span class="kt-nav__section-text">Export Tools</span>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon la la-print"></i>
                                                                        <span class="kt-nav__link-text">Print</span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon la la-copy"></i>
                                                                        <span class="kt-nav__link-text">Copy</span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                                        <span class="kt-nav__link-text">Excel</span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon la la-file-text-o"></i>
                                                                        <span class="kt-nav__link-text">CSV</span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                                                                        <span class="kt-nav__link-text">PDF</span>
                                                                    </a>
                                                                </li>
                                                            </ul>

                                                            <!--end::Nav-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="kt-notes__body">
                                                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old
                                                </span>
                                            </div>
                                        </div>
                                        <div class="kt-notes__item">
                                            <div class="kt-notes__media">
                                                <h3 class="kt-notes__user kt-font-brand kt-font-boldest">
                                                    DS
                                                </h3>
                                            </div>
                                            <div class="kt-notes__content">
                                                <div class="kt-notes__section">
                                                    <div class="kt-notes__info">
                                                        <a href="#" class="kt-notes__title">
                                                            System alert
                                                        </a>
                                                        <span class="kt-notes__desc">
                                                            7:10AM 21 February, 2016
                                                        </span>
                                                    </div>
                                                    <div class="kt-notes__dropdown">
                                                        <a href="#" class="btn btn-sm btn-icon-md btn-icon" data-toggle="dropdown">
                                                            <i class="flaticon2-soft-icons kt-font-brand"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">

                                                            <!--begin::Nav-->
                                                            <ul class="kt-nav">
                                                                <li class="kt-nav__head">
                                                                    Export Options
                                                                    <i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
                                                                </li>
                                                                <li class="kt-nav__separator"></li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon flaticon2-drop"></i>
                                                                        <span class="kt-nav__link-text">Users</span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                                                                        <span class="kt-nav__link-text">Reports</span>
                                                                        <span class="kt-nav__link-badge">
                                                                            <span class="kt-badge kt-badge--bold kt-badge--danger">9</span>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon flaticon2-drop"></i>
                                                                        <span class="kt-nav__link-text">Statements</span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon flaticon2-new-email"></i>
                                                                        <span class="kt-nav__link-text">Customer Support</span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__separator"></li>
                                                                <li class="kt-nav__foot">
                                                                    <a class="btn btn-label-brand btn-bold btn-sm" href="#">Proceed</a>
                                                                    <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                                                                </li>
                                                            </ul>

                                                            <!--end::Nav-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="kt-notes__body">
                                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.
                                                </span>
                                            </div>
                                        </div>
                                        <div class="kt-notes__item kt-notes__item--clean">
                                            <div class="kt-notes__media">
                                                <img class="kt-hidden" src="{{ asset('assets/media/users/100_1.jpg')}}" alt="image">
                                                <span class="kt-notes__icon kt-font-boldest kt-hidden">
                                                    <i class="flaticon2-cup"></i>
                                                </span>
                                                <h3 class="kt-notes__user kt-font-boldest kt-hidden">
                                                    M E
                                                </h3>
                                                <span class="kt-notes__circle kt-hidden-"></span>
                                            </div>
                                            <div class="kt-notes__content">
                                                <div class="kt-notes__section">
                                                    <div class="kt-notes__info">
                                                        <a href="#" class="kt-notes__title">
                                                            New Order
                                                        </a>
                                                        <span class="kt-notes__desc">
                                                            11:10AM 20 Mar, 2019
                                                        </span>
                                                        <span class="kt-badge kt-badge--warning kt-badge--inline">important</span>
                                                    </div>
                                                </div>
                                                <span class="kt-notes__body">
                                                    Sed ut sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.
                                                </span>
                                            </div>
                                        </div>
                                        <div class="kt-notes__item kt-notes__item--clean">
                                            <div class="kt-notes__media">
                                                <img class="kt-hidden" src="{{ asset('assets/media/users/100_1.jpg')}}" alt="image">
                                                <span class="kt-notes__icon kt-font-boldest kt-hidden">
                                                    <i class="flaticon2-cup"></i>
                                                </span>
                                                <h3 class="kt-notes__user kt-font-boldest kt-hidden">
                                                    N B
                                                </h3>
                                                <span class="kt-notes__circle kt-hidden-"></span>
                                            </div>
                                            <div class="kt-notes__content">
                                                <div class="kt-notes__section">
                                                    <div class="kt-notes__info">
                                                        <a href="#" class="kt-notes__title">
                                                            Reminder
                                                        </a>
                                                        <span class="kt-notes__desc">
                                                            08:40AM 23 Apr, 2020
                                                        </span>
                                                    </div>
                                                </div>
                                                <span class="kt-notes__body">
                                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.
                                                </span>
                                            </div>
                                        </div>
                                        <div class="kt-notes__item kt-notes__item--clean">
                                            <div class="kt-notes__media">
                                                <span class="kt-notes__circle"></span>
                                            </div>
                                            <div class="kt-notes__content">
                                                <div class="kt-notes__section">
                                                    <div class="kt-notes__info">
                                                        <a href="#" class="kt-notes__title">
                                                            Ana Cooper
                                                        </a>
                                                        <span class="kt-notes__desc">
                                                            11:30AM 23 May, 2019
                                                        </span>
                                                    </div>
                                                </div>
                                                <span class="kt-notes__body">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2"></div>
                        </div>
                    </div>

                    <!--end: Tab-->
                </div>

                <!--end: Tab Content-->
            </form>
        </div>
    </div>
    @endsection

    @section('external_js')]

    <!--begin::Page Scripts(used by this page) -->
    <script src="{{ asset('assets/js/pages/custom/users/edit.js')}}" type="text/javascript"></script>
    @endsection
