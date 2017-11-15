@extends('participant.layout')

@section('content')
    <div class="page-header" style="background-image: url('{{ asset('img/sponsorship/bg_2017_white.png') }}'); background-attachment: fixed;">
        <div class="filter"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card card-register">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <div class="container">
                                    <span>Error </span>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                        <img src="{{ asset('img/fls_logo_white_bot.png') }}" class="img-fluid mx-auto d-block" alt="Future Leader Summit">
                        <h3 class="title">Pendaftaran Rangers 2018</h3>

                        {{Form::open(['route' => 'participants.store', 'files' => true])}}
                        <div class="form-group">
                            {{Form::label('name', 'Nama Kamu', ['class' => 'control-label'])}}
                            {{Form::text('name', '', ['class' => 'form-control'])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('university', 'Universitas', ['class' => 'control-label'])}}
                            {{Form::text('university', '', ['class' => 'form-control'])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('year', 'Angkatan : ', ['class' => 'control-label'])}}
                            <br>
                            {{ Form::selectRange('year', 2014, 2017, ['class' => 'form-control']) }}
                        </div>

                        <div class="form-group">
                            {{Form::label('email', 'Email', ['class' => 'control-label'])}}
                            {{Form::email('email', '', ['class' => 'form-control'])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('primary_division', 'Divisi pilihanmu (prioritas) ', ['class' => 'control-label'])}}
                            <br>
                            {{ Form::select('primary_division', [
                                'Program' => 'Program',
                                'Marketing' => 'Marketing',
                                'Communication' => 'Communication',
                                'LO' => 'LO',
                                'General Affairs' => 'General Affairs',
                                'PID' => 'PID',
                                'Creative' => 'Creative',
                                'IT' => 'IT'
                            ], null, ['placeholder' => 'Choose...'], ['class' => 'form-control']) }}
                        </div>

                        <div class="form-group">
                            {{Form::label('primary_reason', 'Ceritakan alasanmu memilih divisi itu', ['class' => 'control-label'])}}
                            {{Form::textarea('primary_reason', '', ['class' => 'form-control', 'rows' => 2])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('secondary_division', 'Divisi pilihanmu (secondary) ', ['class' => 'control-label'])}}
                            <br>
                            {{ Form::select('secondary_division', [
                                'Program' => 'Program',
                                'Marketing' => 'Marketing',
                                'Communication' => 'Communication',
                                'LO' => 'LO',
                                'General Affairs' => 'General Affairs',
                                'PID' => 'PID',
                                'Creative' => 'Creative',
                                'IT' => 'IT'
                            ], null, ['placeholder' => 'Choose...'], ['class' => 'form-control']) }}
                        </div>

                        <div class="form-group">
                            {{Form::label('secondary_reason', 'Ceritakan alasanmu memilih divisi itu', ['class' => 'control-label'])}}
                            {{Form::textarea('secondary_reason', '', ['class' => 'form-control', 'rows' => 2])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('instagram_link', 'ID Instagram', ['class' => 'control-label'])}}
                            {{Form::text('instagram_link', '', ['class' => 'form-control', 'placeholder' => 'ex: wkwksama'])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('twitter_link', 'Twitter', ['class' => 'control-label'])}}
                            {{Form::text('twitter_link', '', ['class' => 'form-control', 'placeholder' => 'ex: wkwksama'])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('facebook_link', 'Facebook', ['class' => 'control-label'])}}
                            {{Form::text('facebook_link', '', ['class' => 'form-control', 'placeholder' => 'ex: wkwksama'])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('file_cv', 'Upload CV kamu : ', ['class' => 'control-label'])}}
                            <p>* file harus berformat .pdf</p>
                            <p>* maksimal ukuran 1,9 MB</p>
                            {{Form::file('file_cv', '', ['required' => ['required']])}}
                        </div>

                        {{Form::submit('Submit', ['class' => 'btn btn-danger btn-lg btn-round'])}}

                        {{Form::close()}}
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
            max-width: 50%;
        }
    </style>
@endsection
