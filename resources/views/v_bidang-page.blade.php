@extends('layout.v_template')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="text-dark p-4">
                <h3>Lembaga</h3>
                <p></p>
            </div>
        </div>
        <div class="col-md-3 garis_vertikal">
            <div class="p-4">
                <div class="input-group">
                    <input type="search" class="form-control rounded" aria-label="Search" aria-describedby="search-addon" />
                    <button type="button" class="btn btn-secondary text-secondary" data-mdb-ripple-init>search</button>
                </div>
                <h4 class="mt-4 text-dark">Recent Posts</h2>
                <p style="font-size: 14px;">
                    <a href="/detailberita" class="text-secondary" >
                        Liputan Acara Akhirussanah SMA MUJAHIDIN Surabaya Tahun Pelajaran 2023-2024
                    </a>
                </p>
                <h4 class="mt-4 text-dark">Recent Comments</h2>
                    <p class="text-secondary" style="font-size: 14px;">
                        No comments to show.
                    </p>
            </div>
        </div>
    </div>
</div>

@endsection