@extends('layout/aplikasi')

@@section('konten')
    <div class="w-50.center.border.rounded.px-3.py-3 mx-auto">
        <h1>Login</h1>
        <form action="/siswa/login" method="POST">
            @csrf
            <div class="mb-3">
                <label
            </div>
        </form>
    </div>
@endsection