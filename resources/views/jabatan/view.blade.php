@include('includes.header')

<div class="card">
  @include('includes.name')
  @include('includes.nav')

  <div class="card-body">
    <h5 class="text-center mt-3 mb-3">Data Jabatan</h5>
    @if ($message = Session::get('success'))
      <div class="alert alert-primary" role="alert">
        {{$message}}
      </div>
    @endif
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary me-md-2" data-bs-toggle="modal" data-bs-target="#modalAdd">Tambah</button>
    </div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Kode Jabatan</th>
            <th scope="col">Nama Jabatan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
          @foreach ($data as $index =>$rows)
            <tr>
              <th scope="row">{{ $index + $data->firstItem()}}</th>
              <td class="text-capitalize">{{ $rows->jab_kode }}</td>
              <td class="text-capitalize">{{ $rows->jab_nama }}</td>
              <td>
                  <button class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalUpdate{{ $rows->id }}">Ubah</button>
                  <a href="#" class="btn btn-outline-danger hapusJabatan" data-id="{{ $rows->id }}" data-nama="{{ $rows->peg_nama }}">Hapus</a>
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

@include('jabatan.modalAdd')
@include('jabatan.modalUpdate')

@include('includes.footer')