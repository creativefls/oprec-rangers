@extends('admin.layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-plain">
                <div class="header">
                    <h4 class="title">Tabel Pendaftar Oprec</h4>
                    <p class="category">Future Leader Summit</p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-hover">
                        <thead>
                            <th>ID</th>
                            <th>Nama</th>
                        	<th>Univ</th>
                        	<th>Divisi (utama)</th>
                            <th>Divisi (cadangan)</th>
                            <th>Email</th>
                        	<th>CV</th>
                            <th> - </th>
                        </thead>
                        <tbody>
                            @foreach ($participants as $participant)
                                <tr>
                                    <td>{{ $participant->id }}</td>
                                    <td>{{ $participant->name }}</td>
                                    <td>{{ $participant->university }}</td>
                                    <td>{{ $participant->primary_division }}</td>
                                    <td>{{ $participant->secondary_division }}</td>
                                    <td>{{ $participant->email }}</td>
                                    <td>
                                        <a href="{{ $participant->cv_file }}" target="_blank" class="btn btn-success">Lihat CV</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('participants.show', $participant->id) }}" class="btn btn-info">Selengkapnya</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
