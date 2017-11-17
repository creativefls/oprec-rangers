@extends('admin.layout')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="content">
                    <div class="row">
                        {{-- <div class="col-xs-3 text-right">
                            <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i></btn>
                        </div> --}}
                        <div class="col-xs-12">
                            {{ $participant->primary_division }}
                            <br />
                            <span class="text-success"><small>divisi (utama)</small></span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            {{ $participant->secondary_division }}
                            <br />
                            <span class="text-warning"><small>pilihan divisi (secondary)</small></span>
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
                        <li>
                            <div class="row">
                                <div class="col-xs-12">
                                    <h5><small>Dari Universitas:</small><br />{{ $participant->university }}</h5>
                                </div>
                                <div class="col-md-6">
                                    <h5><small>Angkatan Tahun:</small><br />{{ $participant->year }}</h5>
                                </div>
                                <div class="col-xs-12">
                                    <h5><small>Email</small><br />{{ $participant->email }}</h5>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-xs-12">
                                    <span class="text-success">
                                        <small>Alasan memilih divisi yang utama <strong>({{ $participant->primary_division }})</strong></small>
                                    </span>
                                    <h5>
                                        {{ $participant->primary_reason }}
                                    </h5>
                                </div>
                                <div class="col-xs-12">
                                    <span class="text-warning">
                                        <small>Alasan memilih divisi yang kedua <strong>({{ $participant->secondary_division }})</strong></small>
                                    </span>
                                    <h5>
                                        {{ $participant->secondary_reason }}
                                    </h5>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-xs-12">
                                    <h5><i class="ti-instagram"></i> <small>Instagram</small><br />{{ $participant->instagram_link }}</h5>
                                </div>
                                <div class="col-xs-12">
                                    <h5><i class="ti-twitter"></i> <small>Twitter</small><br />{{ $participant->twitter_link }}</h5>
                                </div>
                                <div class="col-xs-12">
                                    <h5><i class="ti-facebook"></i> <small>Facebook</small><br />{{ $participant->facebook_link }}</h5>
                                </div>
                            </div>
                        </li>
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
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <style media="screen">
        small {
            font-size: 10pt;
        }
    </style>
@endsection
