@extends('admin.master')
@section('title')
    Add Category
@endsection
@section('body')
    <div class="page-wrapper py-5">
        <div class="page-content">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card card-body border-0 shadow">
                        <div class="card-header">
                            <h2 class="text-center">Add Sign Category From</h2>
                        </div>
                        {{-- <p class="text-success">{{Session::get('success')}}</p> --}}
                        <form action="{{route('category.create')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="my-3">
                                <label for="" class="form-label">Category Name</label>
                                <input type="text" name="category_name" class="form-control">
                            </div>
                            <div class="my-3">
                                <label for="" class="form-label">Category Description</label>
                                <textarea name="category_description" class="form-control" rows="6"  ></textarea>
                            </div>
                            <div class="my-3">
                                <button type="submit" class="btn btn-success">Add Category</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
@endsection





