@extends('layouts.dashboard.app')
@section('content')
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
    <div class="main-content">
      <section class="section">
      <!-- MAIN OF CENTER CONTENT -->
      <div class="row">
        <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">Data Pendaftar</h5>
          <table class="table table-borderless">

            <tr>
            <td>NISN</td>
            <td>:</td>
            <td>{{$data->upload_nisn}}</td>
            <td><img src="{{ asset('storage/' . $data->upload_nisn) }}" width="200"></td>
            </tr>
            <tr>
            <td>SKL (Surat Keterengan Lulus)</td>
            <td>:</td>
            <td>{{$data->upload_skl}}</td>
            <td><img src="{{ asset('storage/' . $data->upload_skl) }}" width="200"></td>
            </tr>
            <tr>
            <td>Akta</td>
            <td>:</td>
            <td>{{$data->upload_akta}}</td>
            <td><img src="{{ asset('storage/' . $data->upload_akta) }}" width="200"></td>
            </tr>
            <tr>
            <td>KK</td>
            <td>:</td>
            <td>{{$data->upload_kk}}</td>
            <td><img src="{{ asset('storage/' . $data->upload_kk) }}" width=" 200"></td>
            </tr>

            <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td>{{$data->nama_siswa}}</td>
            </tr>
            <tr>
            <td>NIK</td>
            <td>:</td>
            <td>{{$data->nik ?? '-'}}</td>
            </tr>
            <tr>
            <td>Gelombang</td>
            <td>:</td>
            <td>{{$data->gelombang}}</td>
            </tr>
            <tr>
            <td>Asal Sekolah</td>
            <td>:</td>
            <td>{{$data->asal_sekolah}}</td>
            </tr>
            <td>Nilai Rapor Rata-rata</td>
            <td>:</td>
            <td>{{$data->nilai_rapor}}</td>
            </tr>
            <tr>
            <td>Agama</td>
            <td>:</td>
            <td>{{$data->agama}}</td>
            </tr>
            <tr>
            <td>Tempat Tanggal Lahir</td>
            <td>:</td>
            <td>{{$data->tempat_lahir}}, {{$data->tanggal_lahir}}</td>
            </tr>
            <tr>
            <td>Jalur</td>
            <td>:</td>
            <td>{{$data->jurusan}}</td>
            </tr>
            <tr>
            <td>Hobi & Cita Cita</td>
            <td>:</td>
            <td>{{$data->hobi ?? '-'}} , {{$data->cita ?? '-'}}</td>
            </tr>
          </table>
          </div>
        </div>
        </div>

      </div>
      <!-- END OF CENTER CONTENT -->


      </section>

      <section class="section">
      <!-- MAIN OF CENTER CONTENT -->
      <div class="row">
        <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">Data Orang Tua</h5>
          <table class="table table-borderless">
            <tr>
            <td>Nama Ayah</td>
            <td>:</td>
            <td>{{$data->nama_ayah ?? '-'}}</td>
            </tr>
            <tr>
            <td>Status Ayah</td>
            <td>:</td>
            <td>{{$data->status_ayah ?? '-'}}</td>
            </tr>
            <tr>
            <td>Nama Ibu</td>
            <td>:</td>
            <td>{{$data->nama_ibu ?? '-'}}</td>
            </tr>
            <tr>
            <td>Status Ibu</td>
            <td>:</td>
            <td>{{$data->status_ibu ?? '-'}}</td>
            </tr>

          </table>
          </div>
        </div>
        </div>

      </div>
      <!-- END OF CENTER CONTENT -->


      </section>

      <section class="section">
      <!-- MAIN OF CENTER CONTENT -->
      <div class="row">
        <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">Data Kontak</h5>
          <table class="table table-borderless">
            <tr>
            <td>HP Ayah</td>
            <td>:</td>
            <td>{{$data->hp_ayah ?? '-'}}</td>
            </tr>
            <tr>
            <td>HP Ibu</td>
            <td>:</td>
            <td>{{$data->hp_ibu ?? '-'}}</td>
            </tr>
            <tr>
            <td>HP Siswa</td>
            <td>:</td>
            <td>{{$data->hp_siswa ?? '-'}}</td>
            </tr>
            <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>{{$data->alamat ?? '-'}}</td>
            </tr>
            <tr>
            <td>Zona</td>
            <td>:</td>
            <td>{{ $data->zona ?? '_' }}</td>
            </tr>

          </table>
          </div>
        </div>
        </div>

      </div>
      <!-- END OF CENTER CONTENT -->


      </section>
    </div>
    </div>
  </div>
@endsection