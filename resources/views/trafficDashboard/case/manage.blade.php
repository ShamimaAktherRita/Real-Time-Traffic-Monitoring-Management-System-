@extends('trafficDashboard.master')
@section('title', 'Manage Traffic Case')
@section('body')
    <div class="page-wrapper ">
        <div class="page-content py-5">
            <div class="container ">
                <div class="card">
                    <div class="card-header">
                        <h2>Manage Traffic Case</h2>
                    </div>
                    <div class="card-body">
                        <table id="case_table" class="table table-bordered tablel-responsive">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Date Of Birth</th>
                                    <th scope="col">NID</th>
                                    <th scope="col">Vehicle Type</th>
                                    <th scope="col">Vehicle Number</th>
                                    <th scope="col">Offense Category</th>
                                    <th scope="col">Punishment</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($trafficCases as $trafficCase)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $trafficCase->name }}</td>
                                        <td>{{ $trafficCase->date_of_birth }}</td>
                                        <td>{{ $trafficCase->nid }}</td>
                                        <td>{{ $trafficCase->vehicle_type }}</td>
                                        <td>{{ $trafficCase->vehicle_number }}</td>
                                        <td>{{ $trafficCase->offense }}</td>
                                        <td>{{ $trafficCase->punishment }}</td>
                                        <td>{{ $trafficCase->date }}</td>
                                        <td class="btn-group">
                                            <a href="{{ route('traffic-case.delete',['id' => $trafficCase->id]) }}"class="btn btn-danger">Delete</a>
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
