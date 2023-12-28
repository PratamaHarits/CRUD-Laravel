@include('includes.header')

@foreach ($data as $rows)
  <div class="modal fade" id="modalUpdate{{ $rows->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-warning">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Ubah Data Jurusan</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/updatejabatan/{{ $rows->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
              <label for="inKode" class="col-sm-4 col-form-label">Kode Jabatan</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="inKode" name="jab_kode" value="{{ $rows->jab_kode }}" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inNama" class="col-sm-4 col-form-label">Nama Jabatan</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="inNama" name="jab_nama" value="{{ $rows->jab_nama }}" required>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-4 col-form-label"></label>
              <div class="col-sm-8">
                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-outline-warning">Submit</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endforeach
                        
@include('includes.footer')