@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@if (count($errors) > 0)
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>@lang('home.'.$error)</li>
                @endforeach
            </ul>
        </strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@if ($echec = Session::get('echec'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>
        @lang('home.'.$echec)
    </strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif



<div class="u-expanded-width u-form u-form-1">
    <form action="{{ url('postuler') }}" method="POST"
        class="u-clearfix u-form-spacing-18 u-form-vertical u-inner-form" style="padding: 0px;" source="email"
        name="postulerform" enctype="multipart/form-data">
        @csrf
        <input type="hidden" id="siteId" name="siteId" value="498158" wfd-invisible="true">
        <input type="hidden" id="pageId" name="pageId" value="498262" wfd-invisible="true">
        <div class="u-form-group u-form-name">

            <input type="text" placeholder="@lang('home.Nom')" id="nom" name="nom"
                class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle u-input-1"
                required="">
        </div>
        <div class="u-form-group u-form-name u-form-group-2">

            <input type="text" placeholder="@lang('home.Prénom(s)') " id="prenoms" name="prenoms"
                class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle u-input-2"
                required="">
        </div>
        <div class="u-form-email u-form-group">

            <input type="email" placeholder="@lang('home.Email')" id="email" name="email"
                class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle u-input-3"
                required="">
        </div>
        <div class="u-form-group u-form-phone u-form-group-4">

            <input type="tel"
                pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})"
                placeholder="@lang('home.Téléphone')" id="telephone" name="telephone"
                class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle u-input-4"
                required="">
        </div>
        <div class="u-form-email u-form-group">
            <label for="cv-f0d0" class="u-label u-label-3" wfd-invisible="true">@lang('home.CV')</label>
            <input type="file" placeholder="@lang('home.CV')" id="cv-f0d0" name="cv"
                class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle u-input-3"
                required=""
                accept=".doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document, .pdf">
        </div>
        <div class="u-align-left u-form-group u-form-submit">
            <button
                class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-palette-1-base u-radius-7 u-btn-1">@lang('home.Soumettre')</button>
            <input type="submit" value="submit" class="u-form-control-hidden" wfd-invisible="true">
        </div>

    </form>
</div>
