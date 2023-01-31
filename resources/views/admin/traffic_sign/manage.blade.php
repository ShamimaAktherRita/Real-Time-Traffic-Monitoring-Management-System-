
@extends('admin.master')
@section('title', 'Manage Traffic Rule')
@section('body')
    <div class="page-wrapper ">
        <div class="page-content py-5">
            <div class="container ">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <h2>Manage Traffic Rules</h2>
                        </div>
                        <div class="card-body">
                            <table id="myTable" class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Traffic Sign Title</th>
                                    <th scope="col">Traffic Sign Category</th>
                                    <th scope="col">Rule Sign No</th>
                                    {{-- <th scope="col">Description</th>
                                    <th scope="col">Application</th>
                                    <th scope="col">Location</th> --}}
                                    <th scope="col">Image</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($trafficSigns as $trafficSign)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$trafficSign->sign_title}}</td>
                                    <td>{{$trafficSign->category->category_name}}</td>
                                    <td>{{$trafficSign->sign_no}}</td>
                                    {{-- <td>{{$trafficSign->sign_description}}</td> --}}
                                    {{-- <td>{{$trafficSign->sign_application}}</td> --}}
                                    {{-- <td>{{$trafficSign->sign_location}}</td> --}}
                                    <td><img src="{{ asset($trafficSign->image) }}" width="80" alt=""></td>

                                    <td class="btn-group">
                                        <a href="{{ route('traffic_sign.edit',['id'=>$trafficSign->id]) }}" class="btn btn-success">Edit</a>
                                        <a href="{{ route('traffic_sign.delete',['id'=>$trafficSign->id]) }}" class="btn btn-danger">Delete</a>
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
         $(document).ready( function () {
    $('#myTable').DataTable();
} );
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
