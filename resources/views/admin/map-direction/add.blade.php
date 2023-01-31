@extends('admin.master')
@section('title')
    Add Map Direction
@endsection
@section('body')
    <div class="page-wrapper py-5">
        <div class="page-content">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card card-body border-0 shadow">
                        <div class="card-header">
                            <h2 class="text-center">Add Map Direction From</h2>
                        </div>
                        <form action="{{ route('direction.create') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="my-3">
                                <label for="" class="form-label">Location</label>
                                <div class="d-flex">
                                    <input type="text" name="starting_location" placeholder="Starting Loacation" required
                                        class="form-control m-2">
                                    <input type="text" name="destination_location" required placeholder="Destination Loacation"
                                        class="form-control m-2">
                                </div>
                            </div>
                            <div class="my-3">
                                <label for="" class="form-label">Destination Link</label>
                                <div class="d-flex">
                                    <input type="text" name="short_path_destination_link" placeholder="Short Path Link" required
                                        class="form-control m-2">
                                    
                                </div>
                            </div>
                            <div class="my-3">
                                <label for="" class="form-label">Required Time</label>
                                <div class="d-flex">
                                    <input type="text" name="short_path_time" placeholder="Short Path Time" required
                                        class="form-control m-2">
                                    <input type="text" name="long_path_time" required placeholder="Long Path Time"
                                        class="form-control m-2">
                                </div>
                            </div>
                            <div class="my-3">
                                <label for="" class="form-label">Parking Link</label>
                                <div class="d-flex">
                                    <input type="text" name="short_path_parking_link" placeholder="Short Path Parking" required
                                        class="form-control m-2">
                                    
                                </div>
                            </div>
                            <div class="my-3">
                                <label for="" class="form-label">Location Distance</label>
                                <div class="d-flex">
                                    <input type="text" name="short_path_distance" placeholder="Short Path Distance" required
                                        class="form-control m-2">
                                    <input type="text" name="long_path_distance" required placeholder="Long Path Distance"
                                        class="form-control m-2">
                                </div>
                            </div>

                            <div class="my-3">
                                <button type="submit" class="btn btn-success">Add Map Destination</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('script')
        <script>
            @if (Session::has('success'))
                iziToast.success({
                    title: 'OK',
                    message: '{{ Session::get('success') }}',
                    position: 'topCenter',
                });
            @endif
        </script>
    @endpush
@endsection
