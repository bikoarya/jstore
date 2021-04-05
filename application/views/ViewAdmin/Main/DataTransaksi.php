    <?php foreach ($query as $row => $value) : ?>
        <tr>
            <?php $status = $this->model->get_where('t_pesanan', ['id_transaksi' => $value['id_transaksi']])->row_array(); ?>
            <td><?= ($row + 1); ?></td>
            <td><?= $value['nama'] ?></td>
            <td><?= $value['telp'] ?></td>
            <td><?= $value['alamat'] ?></td>
            <td><?= $value['nama_barang'] ?></td>
            <td><?= $value['qty'] ?></td>
            <td style="white-space: nowrap;"><?= date('d M Y', strtotime($value['tanggal'])) ?></td>
            <?php if ($status != null) { ?>
                <td><label class="badge" style="background-color: #09ba5d; color: white">Confirm</label></td>
            <?php } else { ?>
                <td><label class="badge badge-danger">Pending</label></td>
            <?php } ?>
            <td style="white-space: nowrap;"><a href="https://api.whatsapp.com/send?phone= <?= $value['telp'] ?> &text=Hai,%20 <?= $value['nama'] ?>.%20Kamu%20ingin%20membeli%20produk%20 <?= $value['nama_barang'] ?> %20?%20Silahkan%20konfirmasi%20untuk%20melanjutkan%20pembayaran.%20Terimakasih%20:D" class="sendWA" data-id_transaksi=<?= $value['id_transaksi'] ?> target="_blank"><i class="mdi mdi-send" style="font-size: 18px" data-placement="bottom" title="Kirim Pesan"></i></a>
                <a href="javascript:void(0);" class="text-danger ml-3 hapusTransaksi" data-id_transaksi=<?= $value['id_transaksi'] ?>><i class="fas fa-trash-alt text-danger" style="font-size: 18px" data-placement="bottom" title="Hapus"></i></a>
            </td>
        <?php endforeach; ?>
        </tr>