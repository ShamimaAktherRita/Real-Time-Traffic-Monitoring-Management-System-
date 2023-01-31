<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="{{'/'}}admin/assets/css/style.css">
    <link rel="stylesheet" href="{{'/'}}admin/assets/css/bootstrap.min.css">
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">--}}
</head>
<body>
<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
                <div class="card rounded-3 text-black">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="card-body p-md-5 mx-md-4">

                                <div class="text-center">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                                         style="width: 185px;" alt="logo">
{{--                                    <h4 class="mt-1 mb-5 pb-1">We are The Lotus Team</h4>--}}
                                </div>

                                <form method="post" action="{{ route('trafficLogin') }}">
                                    @csrf

                                    <div class="form-outline mb-4">
                                        <input name="email" type="email" id="form2Example11" class="form-control"
                                               placeholder="Email" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" id="form2Example22" class="form-control" placeholder="Password" name="password" />
                                    </div>

                                    <div class="text-center pt-1 mb-5 pb-1">
                                        <button class="btn btn-primary w-100 btn-block fa-lg gradient-custom-2 mb-3" type="submit">Log
                                            in</button>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-center pb-4">
                                        <p class="mb-0 me-2">Don't Have An Account?</p>
                                        <a href="{{route('traffic.register')}}" class="btn btn-outline-danger">Create New</a>
                                    </div>

                                </form>

                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                            <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                <h4 class="mb-4 text-center">Real Time Traffic Management <br> & <br> Monitoring System</h4>
                                <p class="small mb-0 text-center">
                                    Real time traffic monitoring and management model to solve the problem of traffic congestion in our country.
                                    The proposed model uses many advanced technologies to collect and analyze real-time traffic data.
                                    The proposed system can help reduce traffic jams and waiting times at traffic lights and achieve traffic fluency.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>--}}
</body>
</html>
