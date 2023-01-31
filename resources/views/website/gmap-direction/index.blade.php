@extends('website.master')
@section('title', 'Map Direction')
@section('body')
    <section class=" elementor-element elementor-element-c47e0df" data-id="c47e0df" data-element_type="section"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-44a0913"
                data-id="44a0913" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    {{-- <div class="elementor-element elementor-element-8320d55 animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                        data-id="8320d55" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h5 class="elementor-heading-title elementor-size-default">Driving Lessons</h5>
                        </div>
                    </div> --}}
                    <div class="elementor-element elementor-element-becf20c elementor-widget elementor-widget-heading"
                        data-id="becf20c" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">View Map Direction
                            </h2>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-52754fa elementor-widget elementor-widget-text-editor"
                        data-id="52754fa" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua </div>
                    </div>
                    <div class="container py-5">
                        <div class="row">
                            <div class="col-md-6  mb-5">
                                <h3>Get Direction</h3>
                                <div class="card border-0 shadow  ">
                                    <iframe class="p-2 rounded" src="{{ $location->short_path_destination_link }}"
                                        height="400" frameborder="0"></iframe>
                                </div>
                            </div>

                            <div class="col-md-6  mb-5">
                                <h3>Parking Area</h3>
                                <div class="card border-0 shadow ">
                                    <iframe class="p-2 rounded" src="{{ $location->short_path_parking_link }}"
                                        height="247" frameborder="0"></iframe>

                                    <div class="card-body ">
                                        <h3 class="card-title m-0 text-start">Time</h3>
                                        <span class="badge text-bg-warning">Short Time:
                                            {{ $location->short_path_time }}</span>
                                        <span class="badge text-bg-warning">Long Time:
                                            {{ $location->long_path_time }}</span>
                                        <h3 class="card-title text-start">Distance</h3>
                                        <span class="badge text-bg-warning">Short Distance:
                                            {{ $location->short_path_distance }}</span>
                                        <span class="badge text-bg-warning">Long Distance:
                                            {{ $location->long_path_distance }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h3>More Information</h3>
                                <hr>
                                <div class="card border-0 shadow">
                                    <div class="card-body">
                                       <h3 class="card-title">About Time</h3>
                                       <ul>
                                        <li>
                                            If you following the <mark>Short path</mark> from the map you will reached your destination quickly. And it will take you <mark class="badge text-bg-warning">{{ $location->short_path_time }}</mark>.
                                        </li>
                                        <li>
                                            If you following the <mark> Long path</mark> from the map it will take long time about <mark class="badge text-bg-warning">{{ $location->long_path_time }}</mark>
                                        </li>
                                       </ul>
                                    </div>
                                </div>
                                <br>
                                <hr>
                                <div class="card border-0 shadow">
                                    <div class="card-body">
                                        <h3 class="card-title">About Distance</h3>
                                        <ul>
                                            <li>
                                                If you following the <mark>Short path</mark> from the map you will reached your destination quickly. And distance will be <mark class="badge text-bg-warning">{{ $location->short_path_distance }}</mark>.
                                            </li>
                                            <li>
                                                If you following the <mark> Long path</mark> from the map it will take long time and distance will be <mark class="badge text-bg-warning">{{ $location->long_path_distance }}</mark>
                                            </li>
                                           </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>
        </div>
    </section>



    </div>
    </section>
@endsection
