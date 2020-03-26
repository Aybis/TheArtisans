@foreach ($list as $item)
<div class="col-xl-4 col-lg-6">
    <!--begin::Portlet-->
    <div class="kt-portlet kt-portlet--height-fluid">
        <div class="kt-widget kt-widget--general-2">
            <div class="kt-portlet__body kt-portlet__body--fit">
                <div class="kt-widget__top">
                    <div class="kt-media kt-media--lg kt-media--circle">
                        <img src="{{asset('assets/media/users/100_6.jpg')}}" alt="image">
                    </div>
                    <div class="kt-widget__wrapper">
                        <div class="kt-widget__label">
                            <a href="#" class="kt-widget__title">
                                {{$item->name}}
                            </a>
                            <span class="kt-widget__desc">
                                    {{$item->nik}}
                            </span>
                        </div>
                        <div class="kt-widget__toolbar">
                            <a href="#" class="btn btn-icon btn-circle btn-label-facebook">
                                <i class="socicon-facebook"></i>
                            </a>
                            <a href="#" class="btn btn-icon btn-circle btn-label-twitter">
                                <i class="socicon-twitter"></i>
                            </a>
                            <a href="#" class="btn btn-icon btn-circle btn-label-linkedin">
                                <i class="socicon-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="kt-widget__bottom">
                    <div class="kt-widget__progress">
                        <div class="kt-widget__stat">
                            <span class="kt-widget__caption">{{$item->email}}</span>
                            {{-- <span class="kt-widget__value">40</span> --}}
                        </div>
                    </div>
                    <div class="kt-widget__actions">
                        <a href="#" class="btn btn-default btn-sm btn-bold btn-upper">chat</a>
                        <a href="custom/profile/overview-1.html" target="_blank"
                            class="btn btn-default btn-sm btn-bold btn-upper">profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--end::Portlet-->
</div>
@endforeach


