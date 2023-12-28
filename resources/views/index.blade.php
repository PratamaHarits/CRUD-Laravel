@include('includes.header')

<div class="card">
    @include('includes.name')
    @include('includes.nav')

    <div class="card-body">
        <div class="h3 text-center text-capitalize">halaman home</div>
        <div class="p text-capitalize">selamat datang, {{ Auth::user()->name }}</div>
    </div>
</div>
@include('includes.footer')