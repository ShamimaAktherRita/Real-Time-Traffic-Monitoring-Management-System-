
@extends('admin.master')
@section('title', 'Manage Direction')
@section('body')
    <div class="page-wrapper ">
        <div class="page-content py-5">
            <div class="container ">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <h2>Manage Direction</h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Required Time</th>
                                    <th scope="col">Location Distance</th>                                    
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($directions as $direction)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$direction->starting_location}} -- To -- {{$direction->destination_location}}</td>
                                    <td>{{$direction->short_path_time}} - {{$direction->long_path_time}}</td>
                                    <td>{{$direction->short_path_distance}} - {{$direction->long_path_distance}}</td>
                                    <td class="btn-group">
                                        <a href="{{ route('direction.edit',['id'=>$direction->id]) }}" class="btn btn-success">Edit</a>
                                        <a href="{{ route('direction.delete',['id'=>$direction->id]) }}" class="btn btn-danger">Delete</a>
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

        @if(Session::has('delete'))
        iziToast.error({
            title: 'OK',
            message: '{{Session::get("delete")}}',
            position: 'topCenter',
        });
        @endif
    </script>
    @endpush
