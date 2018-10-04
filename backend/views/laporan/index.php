    <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" data-background-color="purple">
                <h4 class="title">Daftar Laporan Tersedia</h4>
                <p class="category">Barang-barang pesanan tersedia di gudang</p>
            </div>
            <div class="card-content table-responsive">
                <table class="table">
                    <thead class="text-primary">
                        <th>No</th>
                        <th>Name barang</th>
                        <th>Jumlah Barang </th>
                        <th>Lokasi</th>
                        <th>Keterangan</th>
                    </thead>
                    <tbody>
                    <?php $n=0; foreach ($tempviewlaporan as $item): $n++;?>
                        <tr>
                            <td><?= $n ?></td>
                            <td><?= $item['nama_barang']; ?></td>
                            <td><?= $item['quantity']; ?></td>
                            <td><?= $item['lokasi']; ?></td>
                            <td><?= $item['stok'] == 2; ?></td>
                            
                            <td><?php if($item['stok'] == 1){
                                echo "Tersedia";
                            } elseif($item['stok'] == 2){
                                echo "Belum Tersedia";
                            }else{
                                echo "Belum dilakukan pengecekan";
                            } ?></td>
                        </tr>
                    </tbody>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>

