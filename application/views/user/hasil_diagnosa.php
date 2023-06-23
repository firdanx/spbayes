<section class="call-to-action-area section-gap " style="background-image: -webkit-linear-gradient(0deg, #ffffff 0%, #ffffff 100%) !important; padding:60px 120px;" id="printTable" >
<!-- <div class="content" style="padding:10px 40px;"> -->
    <h2>Hasil Analisis</h2>
    <div class="box box-warning">
        <div class="box-header with-border">
            <h6 class="box-title">Gejala yang dipilih</h6>
        </div><!-- /.box-header -->
            <div class="box-body table-responsive">
                <table id="tbl-list" class="table table-bordered">
                    <tr>
                        <th width="50px" style="background: #67CDFF; color: white">No</th>
                        <th style="background: #67CDFF; color: white">Gejala</th>
                        <th style="background: #67CDFF; color: white">Nilai</th>
                    </tr>
                    <tr>
                        <?php $i = 1; foreach($listGejala->result() as $value){?>
                            <tr>
                                <td width="30px"><?php echo $i++?></td>
                                <td><?php echo $value->kode." - ".$value->nama_gejala?></td>
                                <td><?php echo $value->nilai?></td>
                            </tr>
                        <?php }?>
                    </tr>
                </table>
            </div>
        </div><!--box body-->
    </div><!--box-->
    <div class="box box-warning">
        <div class="box-header with-border">
            <h6 class="box-title">Penyakit</h6>
        </div><!-- /.box-header -->
            <div class="box-body table-responsive">
                <table id="tbl-list" class="table table-bordered">
                    <tr>
                        <th width="50px" style="background: #67CDFF; color: white">No</th>
                        <th style="background: #67CDFF; color: white">Penyakit</th>
                        <th style="background: #67CDFF; color: white">Nilai</th>
                    </tr>
                    <tr>
                        <?php $i = 1; foreach($hasilDiagnosa as $idPenyakit => $nilaiBayes){?>
                            <tr>
                                <td width="30px"><?php echo $i++?></td>
                                <td><?php echo $idPenyakit?></td>
                                <td><?php echo $nilaiBayes?> %</td>
                            </tr>
                        <?php }?>
                    </tr>
                </table>
            </div>
        </div><!--box body-->
        <p class="box-title">Hasil diagnosa menunjukkan dengan gejala diatas didapatkan penyakit : <h6><?=$penyakitAkhir?></h6> </p>
    </div><!--box-->
    
</section>