@extends('admin.master')
@section('title')
    Edit Rules Break
@endsection
@section('body')
    <div class="page-wrapper py-5">
        <div class="page-content">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card card-body border-0 shadow">
                        <div class="card-header">
                            <h2 class="text-center">Edit Rules Break From</h2>
                        </div>
                        <form action="{{route('rulesBreak.update',['id' => $rulesBreak->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="my-3">
                                <label for="" class="form-label">Offense</label>
                                <input type="text" name="offense" value="{{ $rulesBreak->offense }}" required class="form-control">
                            </div>
                            <div class="my-3">
                                <label for="" class="form-label">Punishment</label>
                                <textarea name="punishment" required class="form-control" rows="6">{{ $rulesBreak->punishment }}</textarea>
                            </div>
                            <div class="my-3">
                                <button type="submit" class="btn btn-success">Update Rules Break</button>
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





