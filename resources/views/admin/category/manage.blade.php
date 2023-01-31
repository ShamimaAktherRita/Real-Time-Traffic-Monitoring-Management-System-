@extends('admin.master')
@section('title', 'Manage Category')
@section('body')
    <div class="page-wrapper ">
        <div class="page-content py-5">
            <div class="container ">
                <div class="card">
                    <div class="card-header">
                        <h2>Manage Category</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered tablel-responsive">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Category Description</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $category->category_name }}</td>
                                        <td>{{ $category->category_description }}</td>
                                        <td class="btn-group">

                                            <a href="{{ route('category.edit', ['id' => $category->id]) }}"
                                                class="btn btn-success">Edit</a>
                                            <a href="{{ route('category.delete', ['id' => $category->id]) }}"
                                                class="btn btn-danger">Delete</a>


                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
<script>
    @if(Session::has('success'))
    iziToast.error({
        title: 'OK',
        message: '{{Session::get("success")}}',
        position: 'topCenter',
    });
    @endif

    @if(Session::has('delete'))
    iziToast.error({
        title: 'OK',
        message: '{{Session::get("delete")}}',
        position: 'topCenter',
    });
    @endif
</script>
@endpush
