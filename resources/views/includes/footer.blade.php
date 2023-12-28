    </div>
</div>

{{-- bootstrap --}}
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
{{-- jquery --}}
<script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
{{-- sweet alert --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

<script>

$('.hapusPegawai').click(function(){
    var pegId = $(this).attr('data-id');
    var pegNama = $(this).attr('data-nama');

    Swal.fire({
    title: "Hapus data "+pegNama+"",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Hapus"
    }).then((result) => {
        if (result.isConfirmed) {
        window.location = "/deletepegawai/"+pegId+""
        }
    });
});

$('.hapusJabatan').click(function(){
    var jabId = $(this).attr('data-id');
    var jabNama = $(this).attr('data-nama');

    Swal.fire({
    title: "Hapus data "+jabNama+"",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Hapus"
    }).then((result) => {
        if (result.isConfirmed) {
        window.location = "/deletejabatan/"+jabId+""
        }
    });
});

</script>
</html>