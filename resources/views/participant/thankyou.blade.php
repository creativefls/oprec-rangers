@extends('participant.layout')

@section('content')
    <div class="page-header" style="background-image: url('{{ asset('paper-kit-2/img/login-image.jpg') }}');">
        <div class="filter"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 ml-auto mr-auto">
                        <div class="card card-register">
                            <h3 class="title">Thankyou</h3>
                            <div class="forgot">
                                <a href="#" class="btn btn-link btn-danger">Future Leader Summit</a>
                                <div class="social-line text-center">
                                    <a href="https://instagram.com/flsummit" class="btn btn-neutral btn-google btn-just-icon">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                    <a href="https://facebook.com/FutureLeaderSummit" class="btn btn-neutral btn-facebook btn-just-icon">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                    <a href="https://twitter.com/flsummit" class="btn btn-neutral btn-twitter btn-just-icon">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="footer register-footer text-center">
					<h6>&copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by Creative FLS</h6>
				</div>
            </div>
    </div>
@endsection
