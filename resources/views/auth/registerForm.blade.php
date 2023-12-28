@include('includes.header')

<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header bg-info">
                <h4 class="text-center text-capitalize fw-bold">form registrasi</h4>
            </div>
            <div class="card-body">
                <form action="/registeruser" method="POST">
                    @csrf
                    <div class="row mb-3">
                      <label for="Name" class="col-sm-3 col-form-label">Name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nama">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="email" class="col-sm-3 col-form-label">Email</label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="password" class="col-sm-3 col-form-label">Password</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                      </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-outline-warning">Submit</button>
                            </div>
                        </div>
                    </div>
                    <a href="/login" class="text-success text-capitalize">halaman login</a>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-3"></div>
</div>

@include('includes.footer')