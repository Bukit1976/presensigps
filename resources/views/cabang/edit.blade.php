<form action="/cabang/update" method="POST" id="frmCabangEdit">
    @csrf
    <div class="row mt-2">
        <div class="col-12">
            <div class="input-icon mb-3">
                <span class="input-icon-addon">
                    <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-barcode" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M4 7v-1a2 2 0 0 1 2 -2h2"></path>
                        <path d="M4 17v1a2 2 0 0 0 2 2h2"></path>
                        <path d="M16 4h2a2 2 0 0 1 2 2v1"></path>
                        <path d="M16 20h2a2 2 0 0 0 2 -2v-1"></path>
                        <path d="M5 11h1v2h-1z"></path>
                        <path d="M10 11l0 2"></path>
                        <path d="M14 11h1v2h-1z"></path>
                        <path d="M19 11l0 2"></path>
                    </svg>
                </span>
                <input type="text" value="{{ $cabang->kode_cabang }}" id="kode_cabang" readonly class="form-control"
                    name="kode_cabang" placeholder="Kode Cabang">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="input-icon mb-3">
                <span class="input-icon-addon">
                    <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-skyscraper"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M3 21l18 0"></path>
                        <path d="M5 21v-14l8 -4v18"></path>
                        <path d="M19 21v-10l-6 -4"></path>
                        <path d="M9 9l0 .01"></path>
                        <path d="M9 12l0 .01"></path>
                        <path d="M9 15l0 .01"></path>
                        <path d="M9 18l0 .01"></path>
                    </svg>
                </span>
                <input type="text" id="nama_cabang" value="{{ $cabang->nama_cabang }}" class="form-control"
                    name="nama_cabang" placeholder="Nama Cabang">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="input-icon mb-3">
                <span class="input-icon-addon">
                    <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-search"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M11 18l-2 -1l-6 3v-13l6 -3l6 3l6 -3v8"></path>
                        <path d="M9 4v13"></path>
                        <path d="M15 7v5"></path>
                        <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                        <path d="M20.2 20.2l1.8 1.8"></path>
                    </svg>
                </span>
                <input type="text" id="lokasi_cabang" value="{{ $cabang->lokasi_cabang }}" class="form-control"
                    name="lokasi_cabang" placeholder="Lokasi Cabang">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="input-icon mb-3">
                <span class="input-icon-addon">
                    <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-current-location"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                        <path d="M12 12m-8 0a8 8 0 1 0 16 0a8 8 0 1 0 -16 0"></path>
                        <path d="M12 2l0 2"></path>
                        <path d="M12 20l0 2"></path>
                        <path d="M20 12l2 0"></path>
                        <path d="M2 12l2 0"></path>
                    </svg>
                </span>
                <input type="text" id="radius_cabang" value="{{ $cabang->radius_cabang }}" class="form-control"
                    name="radius_cabang" placeholder="Radius">
            </div>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-12">
            <div class="form-group">
                <button class="btn btn-primary w-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                        <path d="M16 5l3 3"></path>
                    </svg>
                    Update
                </button>
            </div>
        </div>
    </div>
</form>
<script>
    $(function() {
        $("#frmCabangEdit").submit(function() {
            var kode_cabang = $("#frmCabangEdit").find("#kode_cabang").val();
            var nama_cabang = $("#frmCabangEdit").find("#nama_cabang").val();
            var lokasi_cabang = $("#frmCabangEdit").find("#lokasi_cabang").val();
            var radius_cabang = $("#frmCabangEdit").find("#radius_cabang").val();


            if (kode_cabang == "") {
                Swal.fire({
                    title: 'Warning!',
                    text: 'Kode Cabang Tidak Boleh Kosong',
                    icon: 'warning',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    $("#kode_cabang").focus();
                });
                return false;
            } else if (nama_cabang == "") {
                Swal.fire({
                    title: 'Warning!',
                    text: 'Nama cabang Tidak Boleh Kosong',
                    icon: 'warning',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    $("#nama_cabang").focus();
                });
                return false;
            } else if (lokasi_cabang == "") {
                Swal.fire({
                    title: 'Warning!',
                    text: 'Lokasi Cabang Tidak Boleh Kosong',
                    icon: 'warning',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    $("#lokasi_cabang").focus();
                });
                return false;
            } else if (radius_cabang == "") {
                Swal.fire({
                    title: 'Warning!',
                    text: 'Radius Tidak Boleh Kosong',
                    icon: 'warning',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    $("#radius_cabang").focus();
                });
                return false;

            }

        });
    });
</script>
