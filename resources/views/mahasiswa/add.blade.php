@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Tambah Data Orang</h3>
    <form action="{{ url('/mahasiswa') }}" method="post">
        @csrf
        <table>
            <tr>
                <td>NIK</td>
                <td><input type="text" name="mhsw_nim" class="form-control"></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td><input type="text" name="mhsw_nama" class="form-control"></td>
            </tr>
            <tr>
                <td>JENIS KELAMIN</td>
                <td>
                    <select name="mhsw_jurusan" class="form-control">
                        <option value="">-- Jenis Kelamin --</option>
                        <option value="LAKI LAKI">LAKI LAKI</option>
                        <option value="PEREMPUAN">PEREMPUAN</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td><input type="text" name="mhsw_alamat" class="form-control"></td>
            </tr>
            <tr>
                <td><input type="submit" value="SIMPAN" class="btn btn-primary"></td>
            </tr>
        </table>
    </form>
</div>
@endsection