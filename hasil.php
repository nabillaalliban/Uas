<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>uas nabilla</title>
</head>

<body>
    <center>
        <div class="container"></div>
        <div class="row"></div>
        <div class="col"></div>
        <br>
        <br>


        <div class="card border-success mb-3" style="max-width: 18rem;" align="center">
            <div class="card-header bg-transparent border-success" align="center">
                <h5><b>Nabilla Wardani</b></h5>
            </div>
            <div class="card-body text-success">

                <?php
                class guru
                {
                    private $no;
                    private $nama;
                    private $unit;
                    private $tanggal_gaji;
                    private $jabatan;
                    private $lama_kerja;
                    private $status_kerja;
                    private $bpjs;
                    private $pinjaman;
                    private $tabungan;
                    private $potongan_lainnya;
                    private $gaji_pokok;
                    private $tunjangan_lama_kerja;
                    private $total_gaji;
                    private $total_potongan;
                    private $gaji_bersih;

                    public function __construct($data)
                    {
                        $this->no = $data['no'];
                        $this->nama = $data['nama'];
                        $this->unit = $data['unit'];
                        $this->tanggal_gaji = $data['tanggal_gaji'];
                        $this->jabatan = $data['jabatan'];
                        $this->lama_kerja = $data['lama_kerja'];
                        $this->status_kerja = $data['status_kerja'];
                        $this->bpjs = $data['bpjs'];
                        $this->pinjaman = $data['pinjaman'];
                        $this->tabungan = $data['tabungan'];
                        $this->potongan_lainnya = $data['potongan_lainnya'];
                    }

                    private function GajiPokok()
                    {
                        return $this->jabatan == "Guru" ? 5000000 : 4000000;
                    }

                    private function TunjanganLamaKerja()
                    {
                        return $this->lama_kerja * 200000;
                    }

                    private function TotalPotongan()
                    {
                        return $this->bpjs + $this->pinjaman + $this->tabungan + $this->potongan_lainnya;
                    }

                    public function Gaji()
                    {
                        $this->gaji_pokok = $this->GajiPokok();
                        $this->tunjangan_lama_kerja = $this->TunjanganLamaKerja();
                        $this->total_gaji = $this->gaji_pokok + $this->tunjangan_lama_kerja;
                        $this->total_potongan = $this->TotalPotongan();
                        $this->gaji_bersih = $this->total_gaji - $this->total_potongan;
                    }

                    public function SlipGaji()
                    {
                        echo "<div style='padding: 20px; border: 1px solid black;'>";
                        echo "<h2>Slip Gaji Karyawan</h2>";
                        echo "No: {$this->no}<br>";
                        echo "Nama: {$this->nama}<br>";
                        echo "Unit Pendidikan: {$this->unit}<br>";
                        echo "Tanggal Gaji: {$this->tanggal_gaji}<br>";
                        echo "Jabatan: {$this->jabatan}<br>";
                        echo "Lama Kerja: {$this->lama_kerja} tahun<br>";
                        echo "Status Kerja: {$this->status_kerja}<br>";
                        echo "<h4>Rincian Gaji</h4>";
                        echo "Gaji Pokok: Rp" . number_format($this->gaji_pokok, 0,) . "<br>";
                        echo "Tunjangan Lama Kerja: Rp" . number_format($this->tunjangan_lama_kerja, 0,) . "<br>";
                        echo "Total Gaji: Rp" . number_format($this->total_gaji, 0,) . "<br>";
                        echo "<h4>Potongan</h4>";
                        echo "BPJS: Rp" . number_format($this->bpjs, 0,) . "<br>";
                        echo "Pinjaman: Rp" . number_format($this->pinjaman, 0,) . "<br>";
                        echo "Tabungan: Rp" . number_format($this->tabungan, 0,) . "<br>";
                        echo "Potongan Lainnya: Rp" . number_format($this->potongan_lainnya, 0,) . "<br>";
                        echo "Total Potongan: Rp" . number_format($this->total_potongan, 0,) . "<br>";
                        echo "<h4>Gaji Bersih: Rp" . number_format($this->gaji_bersih, 0,) . "</h4>";
                        echo "</div>";
                    }
                }

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Instansiasi objek dengan data dari form
                    $awoo = new guru($_POST);

                    // Hitung gaji
                    $awoo->Gaji();

                    // Tampilkan slip gaji
                    $awoo->SlipGaji();
                }
                ?>

            </div>
        </div>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    </center>
</body>

</html>