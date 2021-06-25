@extends('layouts.backend.main')
@section('content')
<div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Daftar Kategori</h3>
                            <p class="text-subtitle text-muted">For user to check they list</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Daftar Kategori</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                <div class="card">
                                
                                <div class="card-content">
                                    
                                    <!-- table hover -->
                                    <div class="table-responsive">
                                        <table class="table table-hover mb-0">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nama Kategori</th>
                                                    <th>Deskripsi</th>
                                                    <th>Update</th>
                                                    <th>Aksi</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($kategori as $brt)
                                                <tr>
                                                    <td class="text-bold-500">{{$loop->iteration}}</td>
                                                    <td>{{$brt->nama_kategori}}</td>
                                                    <td class="text-bold-500">{{$brt->deskripsi}}</td>
                                                    <td class="text-bold-500">{{$brt->updated_at}}</td>
                                                    <td>
                                                        <!-- <span class="badge bg-success">Active</span> -->
                                                        <a href="{{route('admin.kategori.detail',['id'=>$brt->id])}}" class="btn btn-sm btn-info"><div class="bi icon dripicons-view-list"></div></a></td>
                                                       <td> <a href="{{route('admin.kategori.formUbah',['id'=>$brt->id])}}" class="btn btn-sm btn-warning"><div class="bi icon dripicons-pencil"></div></a></td>
                                                       <td> <a href="{{route('admin.kategori.hapus',['id'=>$brt->id])}}" class=" btn btn-sm btn-danger" data-toggle="tooltip"><div class="bi icon dripicons-trash"></div></a>
                            
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                </section>
            </div>
            
@endsection
