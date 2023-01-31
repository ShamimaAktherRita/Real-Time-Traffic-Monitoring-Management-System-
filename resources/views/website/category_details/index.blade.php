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
                            <h2 class="elementor-heading-title elementor-size-default">All {{ $category->category_name }}
                            </h2>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-52754fa elementor-widget elementor-widget-text-editor"
                        data-id="52754fa" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">{{ $category->category_description }}</div>
                    </div>



                    <div class="container py-5">
                        <div class="row">
                            @foreach ($trafficSigns as $trafficSign)
                                <div class="col-md-3 mb-5">
                                    <div class="card border-0 shadow h-100">
                                        <div class="card-body text-center">
                                            <div class="icon-box icon-box-body">
                                                <img src="{{ asset($trafficSign->image) }}" class="w-25 my-2 pt-2 " alt="">
                                                <h3 class="title">{{ $trafficSign->sign_title }}</h3>
                                            </div>

                                        </div>
                                        <div class="icon-box-button card-footer border-0 text-center p-4 bg-transparent">
                                            <div class="btn-wrapper icon-position-after">
                                                <a class="icon-box-link text-dark btn btn-warning fw-bold" href="{{ route('signDetail', ['id' => $trafficSign->id]) }}">View Details <i aria-hidden="true"class="fas fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        </div>
                    </div>


                </div>



    </div>
    </div>
    </section>
    </div>
    </section>

@endsection
