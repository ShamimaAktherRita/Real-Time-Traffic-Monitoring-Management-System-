
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
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Offense</th>
                                    <th scope="col">Punishment</th>                                    
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($rulesBreaks as $rulesBreak)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$rulesBreak->offense}}</td>
                                    <td>{{$rulesBreak->punishment}}</td>
                                    <td class="btn-group">
                                        <a href="{{ route('rulesBreak.edit',['id'=>$rulesBreak->id]) }}" class="btn btn-success">Edit</a>
                                        <a href="{{ route('rulesBreak.delete',['id'=>$rulesBreak->id]) }}" class="btn btn-danger">Delete</a>
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
