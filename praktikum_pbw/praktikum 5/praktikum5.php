    <?php
            if (isset($_POST['hitung'])) {
                define("PAJAK", 0.10); 

                $daftarHarga = [
                    "Keyboard" => 150000,
                    "Mouse" => 80000,
                    "Monitor" => 1200000,
                    "Headset" => 250000
                ];

                $namaBarang = $_POST['pilih_barang'];
                $hargaSatuan = $daftarHarga[$namaBarang];
                
                $jumlah = $_POST['jumlah'];

                $totalSebelumPajak = $hargaSatuan * $jumlah;
                $pajakNominal = $totalSebelumPajak * PAJAK;
                $totalAkhir = $totalSebelumPajak + $pajakNominal;

                function formatIDR($angka) {
                    return "Rp " . number_format($angka, 0, ',', '.');
                }
                ?>

                <div class="struk">
                    <h3>Perhitungan Total Pembelian (Dengan Array)</h3>
                    <div class="struk-row"><span>Nama Barang:</span> <span><?php echo $namaBarang; ?></span></div>
                    <div class="struk-row"><span>Harga Satuan:</span> <span><?php echo formatIDR($hargaSatuan); ?></span></div>
                    <div class="struk-row"><span>Jumlah Beli:</span> <span><?php echo $jumlah; ?></span></div>
                    <div class="struk-row"><span>Total Harga (Sebelum Pajak):</span> <span><?php echo formatIDR($totalSebelumPajak); ?></span></div>
                    <div class="struk-row"><span>Pajak (10%):</span> <span><?php echo formatIDR($pajakNominal); ?></span></div>
                    <div class="struk-row total-row"><span>Total Bayar:</span> <span><?php echo formatIDR($totalAkhir); ?></span></div>
                </div>
            <?php } ?>