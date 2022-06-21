@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="container">
                        <tr>
                        <td><h4>Tata Cara Pengisian Form </h4></td>
                        </tr>
                        <tr>
                        <td>
                        <p> 1. Mahasiswa Wajib mengunduh berkas yang akan digunakan selama Kp</p>
                         <p> 2. Masa pendaftaran kp sesuai dengan semesternya .</p>
                         </td>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection