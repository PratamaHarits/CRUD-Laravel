@include('includes.header')

<div class="modal fade" id="modalAdd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Tabah Data Jabatan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/insertpegawai" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row mb-3">
            <label for="inNip" class="col-sm-3 col-form-label">Nip</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" id="inNip" name="peg_nip" required>
            </div>
          </div>
          <div class="row mb-3">
            <label for="inNama" class="col-sm-3 col-form-label">Nama</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="inNama" name="peg_nama" required>
            </div>
          </div>
          <div class="row mb-3">
            <label for="inJabatan" class="col-sm-3 col-form-label">Jabatan</label>
            <div class="col-sm-9">
              <select class="form-select" id="inJabatan" name="id_jab">
                  <option selected>Pilih Jabatan</option>
                  @foreach ($dataJabatan as $jabatan)
                  <option value="{{ $jabatan->id }}" class="text-capitalize">{{ $jabatan->jab_nama }}</option>
                  @endforeach
                </select>
            </div>
          </div>
          <div class="row mb-3">
            <label for="inUmur" class="col-sm-3 col-form-label">Umur</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" id="inUmur" name="peg_umur" required>
            </div>
          </div>
          <div class="row mb-3">
            <label for="inJekel" class="col-sm-3 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-9">
              <select class="form-select" id="inJekel" name="peg_jekel">
                  <option selected>Pilih Jenis Kelamin</option>
                  <option value="laki-laki">Laki-laki</option>
                  <option value="perempuan">Perempuan</option>
                </select>
            </div>
          </div>
          <div class="row mb-3">
            <label for="inFoto" class="col-sm-3 col-form-label">Foto</label>
            <div class="col-sm-9">
              <input type="file" class="form-control" id="inFoto" name="peg_foto">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label"></label>
            <div class="col-sm-9">
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-outline-primary">Save</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
                    
@include('includes.footer')