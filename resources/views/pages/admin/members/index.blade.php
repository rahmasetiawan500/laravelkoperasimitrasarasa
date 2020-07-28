@extends('layouts.admin')
@section('title', 'Registration')

@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Registration</h1>
    </div>
    <a href="{{ route('member.create') }}">tambah</a>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" widht="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th scope="col">Id</th>
                        <th scope="col">Nama Lengkap</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($members as $member)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{ $member->id }}</td>
                            <td>{{ $member->nama }}</td>
                      
                            <td>
                                
                                <a href="#" class="badge badge-primary badge-pill">Detail</a>
                            </td>
                        </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center">
                            Data Kosong
                        </td>
                    </tr>
                    @endforelse
                </tbody>

                </table>
            </div>
        </div>
    </div>

    {{ $members->links() }}
</div>
@endsection