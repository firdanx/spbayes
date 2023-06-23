<section id="kontak" class="call-to-action-area section-gap " style="background-image: -webkit-linear-gradient(0deg, #ffffff 0%, #ffffff 100%) !important; padding:60px 120px;" >
    <h3>Riwayat Diagnosa</h3>
    <h4>Riwayat  (<strong><?php echo $this->session->userdata('nama')?></strong>)</h4>
    <table class='table table-bordered'> 
        <thead>
            <tr>
                <th style="background: #67CDFF; color: white; padding: 5px">Nama Gejala</th>
                <th style="background: #67CDFF; color: white; padding: 5px">Tanggal</th>
            </tr>
        </thead>
        <tbody>
            <?php $no; foreach($listHistory as $list):?>
                <tr>
                    <td style="padding: 5px;"><?php echo $list['nama_gejala'] ?></td>
                    <td style="padding: 5px;"><?php echo $list['created_at'] ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
<hr>
    <table class='table table-bordered'>
        <thead>
            <tr>
                <th style="background: #67CDFF; color: white; padding: 5px;">Hasil Diagnosa</th>
                <th style="background: #67CDFF; color: white; padding: 5px;">Nama kerusakan</th>
                <th style="background: #67CDFF; color: white; padding: 5px;">Nilai</th>
                <th style="background: #67CDFF; color: white; padding: 5px;">Keterangan</th>
                <th style="background: #67CDFF; color: white; padding: 5px;">Waktu</th>
            </tr>
        </thead>
        <tbody>
            <?php $no; foreach($listHasil as $list):?>
                <tr>
                    <td style="padding: 5px;"><?php echo $list['kode'] ?></td>
                    <td style="padding: 5px;"><?php echo $list['nama'] ?></td>
                    <td style="padding: 5px;"><?php echo $list['kepercayaan'] ?></td>
                    <td style="padding: 5px;"><?php echo $list['keterangan'] ?></td>
                    <td style="padding: 5px;"><?php echo $list['created_at'] ?></td>
                </tr>
            <?php endforeach ?>

        </tbody>
    </table>
</section>