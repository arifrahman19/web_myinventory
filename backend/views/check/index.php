<?php
use yii\helpers\Url;

?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" data-background-color="purple">
                <h4 class="title">Daftar List Order</h4>
                <p class="category">Periksa ketersediaan barang terhadap pesanan</p>
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
                     <?php $n=0; foreach ($tempviewcheck as $item): $n++;?>
                        <tr>
                            <td><?= $n ?></td>
                            <td><?= $item['nama_barang']; ?></td>
                            <td><?= $item['quantity']; ?></td>
                            <td><?= $item['lokasi']; ?></td>
                            <td><?php if($item['stok']==1){
                                echo ("<button onclick='tersedia(".$item['id_order'].")' class='btn btn-primary' id='btnAda ".$item['id_order']."'>Ada</button>");
                            }elseif($item['stok']==2){
                               echo ("<button onclick='tidakTersedia(".$item['id_order'].")' class='btn btn-danger' id='btnTidakada ".$item['id_order']."' >Tidak Ada</button>");
                            }elseif($item['stok']==0){
                                echo ("<button onclick='tersedia(".$item['id_order'].")' class='btn btn-primary' id='btnAda ".$item['id_order']."'>Ada</button> 
                                <button onclick='tidakTersedia( ".$item['id_order'].")' class='btn btn-danger' id='btnTidakada ".$item['id_order']."' >Tidak Ada</button>");
                            } ?>
                                 
                            </td>
                        </tr>
                    </tbody>
                    <?php endforeach; ?>
                </table>

            </div>
        </div>
    </div>
</div>

<script>

    function tersedia(id){
            $.ajax({
            url: '<?= Url::to(['check/ubah']) ?>',
            data: 'stok=1&id='+id, 
            type: 'POST',
            success: function(result){
               $('#btnTidakada'+id).css('display','none');
            },
            error: function(error){
                console.log(error);
            }
        });
    }

    function tidakTersedia(id){
            $.ajax({
            url: '<?= Url::to(['check/ubah']) ?>',
            data: 'stok=2&id='+id,
            type: 'POST',
            success: function(result){
                $('#btnAda'+id).css('display','none');
                console.log(result);
            },
            error: function(error){
                console.log(error);
            }
        });
    }

    
    
</script>