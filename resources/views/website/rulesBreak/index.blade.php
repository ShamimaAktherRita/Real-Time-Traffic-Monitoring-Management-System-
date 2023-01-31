@extends('website.master')
@section('title', 'Traffic Sign')
@section('body')
    <section class=" elementor-element elementor-element-c47e0df" data-id="c47e0df" data-element_type="section"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-44a0913"
                data-id="44a0913" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-becf20c elementor-widget elementor-widget-heading"
                        data-id="becf20c" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">Rules Break & Punishment
                            </h2>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-52754fa elementor-widget elementor-widget-text-editor"
                        data-id="52754fa" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container"></div>
                    </div>



                    <div class="container py-5">
                        <div class="row">
                            @foreach ($allRulesBreak as $rulesBreak)
                                <div class="col-md-4 mb-5">
                                    <div class="card border-0 shadow h-100"  style="width: 21rem;">
                                        <div class="card-body text-center">
                                            <div class="icon-box icon-box-body">
                                                <img src="{{ asset('/website/assets/img/rulesBreak1.jpg') }}" class="w-75 mb-2" alt="">
                                                
                                                <h3 class="title">{{ $rulesBreak->offense }}</h3>
                                                <p class="icon-box-description">
                                                    {{ $rulesBreak->punishment }}
                                                </p>
                                                
                                            </div>
    
                                        </div>
                                        {{-- <div class="icon-box-button card-footer border-0 text-center p-4 bg-transparent">
                                            <div class="btn-wrapper icon-position-after">
                                                <a href="{{ route('categoryDetail', ['id' => $category->id]) }}" class="icon-box-link fw-bold btn btn-outline-warning">View Details <i aria-hidden="true"class="fas fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                                    
                            @endforeach
                        </div>
                    </div>


                </div>
    </section>


    </div>
    </div>
    </div>
    </section>


@endsection
