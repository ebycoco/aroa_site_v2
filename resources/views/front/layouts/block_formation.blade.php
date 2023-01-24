<style>
    ..menu-area {
        z-index: 10000;
    }

    .tm-copyright-text {
        position: absolute;
        color: #fff;
        top: 135%;
        width: 100%;
        text-align: center;
    }

    .copyaroa {
        position: fixed;
        top: 94%;
        z-index: 9999999;
    }

</style>
<div>
    <div class="formation mt-5 mb-5">
        <div class="row mb-4">
            <div class="col-md-6 col-lg-6 col-sm-6 flutter  block">
                <p>
                    <a href="{{ url('/' . Session::get('pole') . '/formations-details') }}"><img
                            src="{{ asset('assets/new/ressources/images/formation_default.jpg') }}" alt=""></a>
                </p>
            </div>
            <div class="col-md-6 block">
                <p><a href="#"><img src="{{ asset('assets/new/ressources/images/actuariat.jpg') }}" alt=""></a></p>
            </div>
            <div class="col-md-6 block">
                <p><a href="#"><img src="{{ asset('assets/new/ressources/images/risk.jpg') }}" alt=""></a></p>
            </div>
            <div class="col-md-6 block mb-5">
                <p><a href="#"><img src="{{ asset('assets/new/ressources/images/actuariat.jpg') }}" alt=""></a></p>
            </div>
        </div>
        <div class="cercle_milieu1">
            <span></span>
        </div>
        <div class="cercle_milieu">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <h1>@lang('home.Formation')</h1>
        </div>
    </div>
</div>
