@extends('admin.master')
@section('title')
    Edit Traffic Sign
@endsection
@section('body')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card card-body border-0 shadow">
                        <div class="card-header">
                            <h2 class="text-center">Edit Traffic Signs</h2>
                        </div>
                        <form action="{{route('traffic_sign.update', ['id' => $trafficSign->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="my-3">
                                <label for="" class="form-label">Sign Title</label>
                                <input type="text" name="sign_title" value="{{ $trafficSign->sign_title }}" class="form-control">
                            </div>
                            <div class="my-3">
                                <label for="" class="form-label">Select Sign Category</label> 
                                
                                <select class="form-select" name="category_id" aria-label="Default select example">
                                    
                                    @foreach ($categories as $category)
                                    <option selected value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach  
                                    
                                  </select>
                                
                            </div>
                            <div class="my-3">
                                <label for="" class="form-label">Sign No.</label>
                                <input type="text" name="sign_no" value="{{ $trafficSign->sign_no }}" class="form-control">
                            </div>
                            <div class="my-3">
                                <label for="" class="form-label">Sign Description</label>
                                <textarea name="sign_description" class="form-control" rows="6">{{ $trafficSign->sign_description }}</textarea>
                            </div>
                            <div class="my-3">
                                <label for="" class="form-label">Sign Application</label>
                                <textarea name="sign_application" class="form-control" rows="6">{{ $trafficSign->sign_application }}</textarea>
                            </div>
                            <div class="my-3">
                                <label for="" class="form-label">Sign Location</label>
                                <textarea name="sign_location" class="form-control" rows="6">{{ $trafficSign->sign_location }}</textarea>
                            </div>
                            <div class="my-3">
                                <label for="" class="form-label">Image</label>
                                <input type="file" class="form-control mb-3" name="image" id="">
                                <img src="{{ asset($trafficSign->image) }}" width="120" alt="">
                            </div>
                            <div class="my-3">
                                <button type="submit" class="btn btn-success">Update Traffic Sign</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script>
        @if(Session::has('success'))
        iziToast.success({
            title: 'OK',
            message: '{{Session::get("success")}}',
            position: 'topCenter',
        });
        @endif
    </script>
    @endpush



