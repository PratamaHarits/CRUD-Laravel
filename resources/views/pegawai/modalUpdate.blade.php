@include('includes.header')

@foreach ($data as $rows)
  <div class="modal fade" id="modalUpdate{{ $rows->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header bg-warning">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Ubah Data Pegawai</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/updatepegawai/{{ $rows->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
              <label for="inNip" class="col-sm-4 col-form-label">Nip</label>
              <div class="col-sm-8">
                <input type="number" class="form-control" id="inNip" name="peg_nip" value="{{ $rows->peg_nip }}">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inNama" class="col-sm-4 col-form-label">Nama</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="inNama" name="peg_nama" value="{{ $rows->peg_nama }}">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inJabatan" class="col-sm-4 col-form-label">Jabatan</label>
              <div class="col-sm-8">
                <select class="form-select" id="inJabatan" name="id_jab">
                  <option value="{{ $rows->funcJabatan->id }}" selected>{{ $rows->funcJabatan->jab_nama }}</option>
                  @foreach ($dataJabatan as $jabatan)
                  <option value="{{ $jabatan->id }}" class="text-capitalize">{{ $jabatan->jab_nama }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inUmur" class="col-sm-4 col-form-label">Umur</label>
              <div class="col-sm-8">
                <input type="number" class="form-control" id="inUmur" name="peg_umur" value="{{ $rows->peg_umur }}">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inJekel" class="col-sm-4 col-form-label">Jenis Kelamin</label>
              <div class="col-sm-8">
                <select class="form-select" id="inJekel" name="peg_jekel">
                    <option selected>{{ $rows->peg_jekel }}</option>
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                  </select>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inFoto" class="col-sm-4 col-form-label">Foto</label>
              <div class="col-sm-8">
                <img src="{{ asset('fotoPegawai/'.$rows->peg_foto) }}" alt="" style="width: 150px; height:150px">
                <input type="file" class="form-control" id="inFoto" name="peg_foto">
              </div>
            </div>
            <div class="row mt-3">
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