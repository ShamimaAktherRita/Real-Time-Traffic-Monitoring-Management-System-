@extends('trafficDashboard.master')
@section('title')
    Add Case
@endsection
@section('body')
    <div class="page-wrapper ">
        <div class="page-content">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card card-body border-0 shadow">
                        <div class="card-header">
                            <h2 class="text-center">Add Case From</h2>
                        </div>
                        <form action="{{ route('traffic-case.create') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="traffic_id" value="{{ Session::get('traffic_id') }}">
                            <div class="my-3">
                                <label for="" class="form-label"> Name of the offender</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="dob" class="form-label">Date Of Birth</label>
                                <input type="text" name="date_of_birth" placeholder="Date Of Birth" class="form-control datepicker picker__input picker__input--active" readonly="" id="P2060269199" aria-haspopup="true" aria-readonly="false" aria-owns="P2060269199_root">
                            </div>
                            <div class="my-3">
                                <label for="" class="form-label">NID</label>
                                <input type="number" name="nid" class="form-control">
                            </div>
                            <div class="my-3">
                                <label for="" class="form-label">Vehicle Type</label>
                                <input type="text" name="vehicle_type" class="form-control">
                            </div>
                            <div class="my-3">
                                <label for="" class="form-label">Vehicle Number</label>
                                <input type="text" name="vehicle_number" class="form-control">
                            </div>
                            <div class="mb-3" data-select2-id="21">
                                <label class="form-label">Offense Category</label>
                                
                                    <select id="a" class="form-select" name="offense" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                        <option  value="" >Select Offense Category</option>
                                        @foreach ($rules as $rule)
                                        <option  value="{{ $rule->punishment }}">{{ $rule->offense }}</option>
                                        @endforeach
                                    </select>
                            </div>
                            
                            <div id="punishment_div" class="my-3" style="display: none">
                                <label for="" class="form-label ">Punishment</label>
                                <input type="text" id="punishment" readonly name="punishment"class="form-control">
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Date</label>
                                <input type="text" name="date" class="form-control datepicker picker__input picker__input--active" placeholder="select date" readonly="" id="P2060269199" aria-haspopup="true" aria-readonly="false" aria-owns="P2060269199_root">
                            </div>
                            <div class="my-3">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('script')
    <script>
        $("select").change(function(){
            $("#punishment_div").fadeIn();
           let val =  $('#a option:selected').val();
           $("#punishment").val(val)
           
            
        });
    </script>
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





