<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggajian Yayasan Assalaam</title>
    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>


    <div class="container mx-auto" style="width: 35rem;">
        <div class="row">
            <div class="col">
                <center><img src="yayasan.PNG" alt="" width="60%"></center><br>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h4 align="center">PENGGAJIHAN <br> GURU/KARYAWAN YAYASAN ASSALAAM</h4><br>
            </div>
        </div>
        <form action="hasil.php" method="POST">
            <div class="row mt-3">
                <div class="col">
                    <div class="card d-block mx-auto" style="width: 28rem; ">
                        <div class="card-header" align="left">
                            Data Penggajihan
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col" align="lef">
                                    <div class="mb-3">
                                        <label for="no" class="form-label">No:</label>
                                        <input type="number" class="form-control" id="no" name="no" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama:</label>
                                        <input type="text" class="form-control" id="nama" name="nama" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="unit" class="form-label">Unit Pendidikan:</label>
                                        <select id="unit" name="unit" class="form-select" required>
                                            <option value="Pilih_unit">Pilih Unit Pendidikan</option>
                                            <option value="TK">TK</option>
                                            <option value="SD">SD</option>
                                            <option value="SMP">SMP</option>
                                            <option value="MTS">MTS</option>
                                            <option value="MA">MA</option>
                                            <option value="SMA">SMA</option>
                                            <option value="SMK">SMK</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="tanggal_gaji" class="form-label">Tanggal Gaji:</label>
                                        <input type="date" class="form-control" id="tanggal_gaji" name="tanggal_gaji" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h4><i>Gaji</i></h4>
                                    <div class="mb-3" align="left">
                                        <label for="jabatan" class="form-label">Jabatan:</label>
                                        <select id="jabatan" name="jabatan" class="form-select" required>
                                            <option value="" disabled selected>Pilih Jabatan</option>
                                            <option value="Kepala Sekolah">Kepala Sekolah</option>
                                            <option value="Wakasek">Wakasek</option>
                                            <option value="Guru">Guru</option>
                                            <option value="OB">Karyawan</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="lama_kerja" class="form-label">Lama Kerja (tahun):</label>
                                        <input type="number" class="form-control" id="lama_kerja" name="lama_kerja" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="status_kerja" class="form-label">Status Kerja:</label>
                                        <select id="status_kerja" name="status_kerja" class="form-select" required>
                                            <option value="pilih_status">Pilih Status Kerja</option>
                                            <option value="Kontrak">Kontrak</option>
                                            <option value="Tetap">Tetap</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <h4>Potongan</h4>
                                    <div class="mb-3">
                                        <label for="bpjs" class="form-label">BPJS:</label>
                                        <input type="number" class="form-control" id="bpjs" name="bpjs" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="pinjaman" class="form-label">Pinjaman:</label>
                                        <input type="number" class="form-control" id="pinjaman" name="pinjaman" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="tabungan" class="form-label">Tabungan:</label>
                                        <input type="number" class="form-control" id="tabungan" name="tabungan" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="potongan_lainnya" class="form-label">Lainnya:</label>
                                        <input type="number" class="form-control" id="lainnya" name="potongan_lainnya" required>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Proses</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>

    <center bgcolour="pink">
        <div class="container"></div>
        <div class="row"></div>
        <div class="col"></div>
        <br>
        <br>


        <figure>
            <blockquote class="blockquote">
                <p>Gunakan Uang Gajianmu Sebaik Mungkin .</p>
            </blockquote>
            <figcaption class="blockquote-footer">
                Jangan <cite title="Source Title">boros...</cite>
            </figcaption>
        </figure>
</center>
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>