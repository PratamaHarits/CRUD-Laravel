@include('includes.header')

<div class="card">
  @include('includes.name')
  @include('includes.nav')

  <div class="card-body">
    <h5 class="text-center mt-3 mb-3">Data Pegawai</h5>
    @if ($message = Session::get('success'))
      <div class="alert alert-success" role="alert">
        {{$message}}
      </div>
    @endif
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary me-md-2" data-bs-toggle="modal" data-bs-target="#modalAdd">Tambah</button>
    </div>

    <form action="/viewpegawai" method="get">
      <div class="row g-3 align-items-center">
        <div class="col-auto">
          <label for="search" class="col-form-label">Cari Data</label>
        </div>
        <div class="col-auto">
          <input type="search" id="search" name="search" class="form-control">
        </div>
      </div>
    </form>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nip</th>
            <th scope="col">Nama</th>
            <th scope="col">Jabatan</th>
            <th scope="col">Umur</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Foto</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
          @foreach ($data as $index =>$rows)
            <tr>
              <th scope="row">{{ $index + $data->firstItem()}}</th>
              <td>{{ $rows->peg_nip }}</td>
              <td class="text-capitalize">{{ $rows->peg_nama }}</td>
              <td class="text-capitalize">{{ $rows->funcJabatan->jab_nama }}</td>
              <td>{{ $rows->peg_umur }}</td>
              <td class="text-capitalize">{{ $rows->peg_jekel }}</td>
              <td>
                <img src="{{ asset('fotoPegawai/'.$rows->peg_foto) }}" alt="" style="width: 70px; height:70px">
              </td>
              <td>
                  <button class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalUpdate{{ $rows->id }}">Ubah</button>
                  <a href="#" class="btn btn-outline-danger hapusPegawai" data-id="{{ $rows->id }}" data-nama="{{ $rows->peg_nama }}">Hapus</a>
              </td>
            </tr>
          @endforeach
        </tbody>
    </table>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      {{ $data->links('vendor.pagination.bootstrap-4') }}
    </div>
  </div>
</div>

@include('pegawai.modalAdd')
@include('pegawai.modalUpdate')

@include('includes.footer')