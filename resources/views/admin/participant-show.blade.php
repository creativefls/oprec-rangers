@extends('admin.layout')

@section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="content">
                    <div class="row">
                        <div class="col-xs-3 text-right">
                            {{-- <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i></btn> --}}
                        </div>
                        <div class="col-xs-6">
                            {{ $participant->primary_division }}
                            <br />
                            <span class="text-success"><small>divisi (utama)</small></span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header text-center">
                    <h4 class="title">{{ $participant->name }}</h4>
                </div>
                <div class="content">
                    <ul class="list-unstyled team-members">
                        <div class="">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h5>{{ $participant->university }}<br /><small>PIC</small></h5>
                                </div>
                                <div class="col-md-4">
                                    <h5>{{ $participant->year }}<br /><small>No Telpon</small></h5>
                                </div>
                                <div class="col-xs-12">
                                    <h5>{{ $participant->secondary_division }}<br /><small>Email</small></h5>
                                </div>
                                <div class="col-xs-12">
                                    <h5>{{ $participant->email }}<br /><small>Email</small></h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-md-offset-1">
                                    <h5>{{ $participant->instagram_link }}<br /><small>PIC</small></h5>
                                </div>
                                <div class="col-xs-12 col-md-offset-1">
                                    <h5>{{ $participant->twitter_link }}<br /><small>PIC</small></h5>
                                </div>
                                <div class="col-xs-12 col-md-offset-1">
                                    <h5>{{ $participant->facebook_link }}<br /><small>PIC</small></h5>
                                </div>
                            </div>
                        </div>
                        <li>
                            <div class="row">
                                <div class="col-xs-12">
                                    Portfolio:
                                    <br />
                                    <p>{{ $participant->portfolio_link }}</p>
                                </div>
                                <div class="col-xs-12">
                                    CV:
                                    <br />
                                    <p>
                                        <a href="{{ $participant->cv_file }}" target="_blank" class="btn btn-success">Lihat CV</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-xs-12">
                                    Explanation:
                                    <br />
                                    <p>{{ $participant->explanation }}</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
@endsection
