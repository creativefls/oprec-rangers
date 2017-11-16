@extends('participant.layout')

@section('content')
    <div class="page-header" style="background-image: url('{{ asset('img/sponsorship/bg_2017_white.png') }}');">
        <div class="filter"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 ml-auto mr-auto">
                        <div class="card card-register">
                            <h3 class="title">Thankyou</h3>
                            <img src="{{ asset('img/fls_logo_white_bot.png') }}" class="img-fluid mx-auto d-block" alt="Future Leader Summit">
                            <div class="forgot">
                                <a href="#" class="btn btn-link btn-danger">Keep in Touch</a>
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
					<h6>&copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by wkwkFLS</h6>
				</div>
            </div>
    </div>
@endsection

@section('css')
    <style media="screen">
        .card-register {
            max-width: 100% !important;
            margin: 50px 0 !important;
            background-color: #203e5f;;
        }
        .page-header {
            max-height: none !important;
        }
        label {
            font-size: 11pt;
        }
        .form-group p {
            font-size: 9pt;
        }
        .btn-danger {
            background-color: #ffcc03;
            border-color: #ffcc03;
            color: #203e5f;
        }
        .btn-danger:hover {
            background-color: #ff9900;
            border-color: #ff9900;
            color: #203e5f;
        }
        .btn.btn-link,
        .card-register .title {
            color: #fff;
        }
        .img-fluid {
            max-width: 70%;
        }
    </style>
@endsection
