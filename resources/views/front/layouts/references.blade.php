<style>
    @media (max-width: 575.98px) {
        ul{
            margin-left: 20px;
        }
    }
</style>
<section class="u-align-center u-clearfix u-image u-shading u-section-2" id="sec-e700" data-image-width="1280"
        data-image-height="853">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <h2 class="u-text u-text-default u-text-1">@lang('home.références')</h2>
            <div class="u-expanded-width u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    @foreach ($references as $reference)
                        <div class="u-align-center u-container-style u-list-item u-repeater-item">
                            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><span
                                    class="u-icon u-icon-circle u-palette-3-base u-spacing-21 u-text-black u-icon-1">
                                    <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 128 128"
                                        style="">
                                        <use xlink:href="#svg-998c"></use>
                                    </svg>
                                    <svg viewBox="0 0 128 128" id="svg-998c" class="u-svg-content">
                                        <path
                                            d="m92.7 22c2.4 0 4.4 2 4.4 4.5v4.2h-89.1v-4.2c0-2.5 2-4.5 4.4-4.5h80.3m4.4 14.6v7.8h-61.8-0.6-26.7v-7.8h89.1m18.5 13.7c2.4 0 4.4 2 4.4 4.5v46.7c0 2.5-2 4.5-4.4 4.5h-80.3c-2.4 0-4.4-2-4.4-4.5v-46.7c0-2.3 1.8-4.3 4.1-4.4l80.6-0.1m-91.6 0.1c-0.6 1.3-1 2.9-1 4.4v22.9h-10.6c-2.4 0-4.4-2-4.4-4.5v-22.8h18m66.7-36.4h-80.3c-6.8 0-12.4 5.6-12.4 12.5v46.8c0 6.9 5.6 12.5 12.4 12.5h10.6v15.9c0 6.9 5.6 12.5 12.4 12.5h80.3c6.8 0 12.4-5.6 12.4-12.5v-46.7c0-6.9-5.6-12.5-12.4-12.5h-10.6v-15.9c-0.1-7-5.6-12.6-12.4-12.6z">
                                        </path>
                                        <path
                                            d="m67.6 69.9c2 0 3.8 0.7 5.3 1.8-1.1 2-1.7 4.3-1.7 6.8 0 2.4 0.6 4.7 1.7 6.8-1.5 1.2-3.4 1.8-5.3 1.8-4.7 0-8.6-3.9-8.6-8.6s3.8-8.6 8.6-8.6m18.4 0c4.7 0 8.6 3.9 8.6 8.6s-3.9 8.6-8.6 8.6-8.6-3.9-8.6-8.6 3.8-8.6 8.6-8.6m-18.4-8c-9.2 0-16.6 7.5-16.6 16.6 0 9.2 7.5 16.6 16.6 16.6 3.3 0 6.5-1 9.2-2.8 2.6 1.8 5.8 2.8 9.2 2.8 9.2 0 16.6-7.5 16.6-16.6 0-9.2-7.5-16.6-16.6-16.6-3.4 0-6.6 1-9.2 2.8-2.7-1.8-6-2.8-9.2-2.8z">
                                        </path>
                                    </svg>
                                </span>
                                <h4 class="u-text u-text-3">@lang('home.'. $reference->title)</h4>

                                @if (Config::get('app.locale') == 'fr')
                                    <p class="u-text u-text-4 reference_moins{{ $reference->id }}">
                                        {{ \Illuminate\Support\Str::limit(strip_tags($reference->description), 80, $end = '...') }}
                                    </p>
                                    <div class="u-text u-text-4 reference_plus{{ $reference->id }}"
                                        style="text-align: left">
                                        {{-- {!! $reference->description !!} --}}
                                        {!! $reference->description !!}
                                    </div>
                                @elseif (Config::get('app.locale') == 'en')
                                    <p class="u-text u-text-4 reference_moins{{ $reference->id }}">
                                        {{ \Illuminate\Support\Str::limit(strip_tags($reference->anglais), 80, $end = '...') }}
                                    </p>
                                    <p class="u-text u-text-4 reference_plus{{ $reference->id }}"
                                        style="text-align: justify">
                                        {!! $reference->anglais !!}
                                    </p>
                                @endif

                                <a href="#"
                                    class="reference_plus_btn{{ $reference->id }} u-active-none u-border-3 u-border-palette-3-base u-btn u-btn-rectangle u-button-style u-hover-none u-none u-text-active-palette-3-base u-text-body-alt-color u-text-hover-palette-3-base u-btn-1"
                                    data-toggle="modal" data-target="#reference{{ $reference->id }}">
                                    @lang('home.Lire plus')
                                </a>
                                <a href="#"
                                    class="reference_moins_btn{{ $reference->id }} u-active-none u-border-3 u-border-palette-3-base u-btn u-btn-rectangle u-button-style u-hover-none u-none u-text-active-palette-3-base u-text-body-alt-color u-text-hover-palette-3-base u-btn-1"
                                    data-toggle="modal" data-target="#reference{{ $reference->id }}">
                                    @lang('home.Lire moins')
                                </a>
                            </div>
                        </div>
                        <script>
                            $(function() {
                                var reference_moins = $('.reference_moins{{ $reference->id }}');
                                var reference_plus = $('.reference_plus{{ $reference->id }}');
                                var reference_plus_btn = $('.reference_plus_btn{{ $reference->id }}')
                                var reference_moins_btn = $('.reference_moins_btn{{ $reference->id }}')

                                reference_plus.hide()
                                reference_moins_btn.hide()

                                reference_plus_btn.on('click', () => {
                                    reference_plus_btn.hide(1000)
                                    reference_plus.show(1000)
                                    reference_moins.hide(1000)
                                    reference_moins_btn.show(1000)
                                })

                                reference_moins_btn.on('click', () => {
                                    reference_plus_btn.show(1000)
                                    reference_plus.hide(1000)
                                    reference_moins.show(1000)
                                    reference_moins_btn.hide(1000)
                                })
                            })
                        </script>
                    @endforeach
                </div>
            </div>
        </div>
    </section>