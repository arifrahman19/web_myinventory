<?php
use yii\helpers\Url;

?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" data-background-color="purple">
                <h4 class="title">Status Pengiriman</h4>
                <p class="category">Daftar Pesanan Yang Telah Siap Dikirim</p>
            </div>
            <div class="card-content table-responsive">
                <table class="table">
                    <thead class="text-primary">
                        <th>No</th>
                        <th>Name barang</th>
                        <th>Jumlah Barang </th>
                        <th>Lokasi</th>
                        <th>Keterangan</th>
                        <th>Status Pengiriman</th>
                    </thead>
                    <tbody>
                     <?php $n=0; foreach ($tempviewkirim as $item): $n++;?>
                        <tr>
                            <td><?= $n ?></td>
                            <td><?= $item['nama_barang']; ?></td>
                            <td><?= $item['quantity']; ?></td>
                            <td><?= $item['lokasi']; ?></td>
                            <td><?php if($item['stok']==1){
                                echo ("Tersedia");
                            }elseif($item['stok']==2){
                               echo ("Belum Tersedia");
                            }elseif($item['stok']==0){
                                echo ("Belum dilakukan pengecekan");
                            } ?> </td>
                            <td><?php if($item['status_kirim']==1){
                                echo ("<button class='btn btn-primary'>Dikirim</button>");
                            }elseif($item['status_kirim']==0){
                               echo ("<button onclick='belumDikirim(".$item['id_order'].")' class='btn btn-danger' id='btnBelumkirim".$item['id_order']."' >Belum Dikirim</button>");
                            } ?></td>

                        </tr>
                    </tbody>
                    <?php endforeach; ?>
                </table>

            </div>
        </div>
    </div>
</div>

<script>

    function belumDikirim(id){
            $.ajax({
            url: '<?= Url::to(['pengiriman/ubah']) ?>',
            data: 'status_kirim=1&id='+id,
            type: 'POST',
            success: function(result){
                $('#btnBelumkirim'+id).html('Dikirim').addClass('btn-primary').removeClass('btn-danger');
                console.log(result);
            },
            error: function(error){
                console.log(error);
            }
        });
    }

</script>