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
                            <h2 class="elementor-heading-title elementor-size-default">Traffic Sign Details
                            </h2>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-52754fa elementor-widget elementor-widget-text-editor"
                        data-id="52754fa" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container"></div>
                    </div>



                    <div class="container py-5">
                        <div class="card mb-3 shadow border-0" >
                            <div class="row g-0">

                              <div class="col-md-8 shadow">
                                <div class="card-body">
                                    <small class="badge text-danger p-0">Sign No: {{ $trafficSign->sign_no }}</small>
                                  <h2 class="card-title text-warning"><span class="fw-bold ">Sign Title:</span> {{ $trafficSign->sign_title }}</h2>

                                  <p class="card-text text-black"><span class="fw-bold text-decoration-underline text-black">Description:</span> {{ $trafficSign->sign_description }}</p>

                                  <p class="card-text text-black"><span class="fw-bold text-decoration-underline text-black">Application:</span> {{ $trafficSign->sign_application }}</p>

                                  <p class="card-text text-black"><span class="fw-bold text-decoration-underline text-black">Location:</span> {{ $trafficSign->sign_location }}</p>

                                </div>
                              </div>
                              <div class="col-md-4 p-3 text-center py-5">
                                <img src="{{ asset($trafficSign->image) }}" class="img-fluid " alt="...">
                              </div>
                            </div>
                          </div>
                    </div>


                </div>
            </div>
        </div>


    </section>

@endsection
