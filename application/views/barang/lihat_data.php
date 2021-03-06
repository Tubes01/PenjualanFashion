                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                           Data Barang
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 <?php echo anchor('barang/post','Tambah Data',array('class'=>'btn btn-primary btn-sm')) ?>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <center><thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Barang</th>
                                                <th>Kategori</th>
                                                <th>Harga</th>
                                                <th>Stok</th>
                                                <th><center>Aksi</center></th>

                                            </tr>
                                        </thead></center>
                                        <tbody>
                                        <?php $no=1; foreach ($record->result() as $r) { ?>
                                            <center><tr class="gradeU">
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $r->nama_barang ?></td>
                                                <td><?php echo $r->nama_kategori ?></td>
                                                <td>Rp. <?php echo number_format($r->harga,2) ?></td>
                                                <td><?php echo $r->stok ?></td>
                                                <td class="center" align="right">
                                                 <?php echo anchor('barang/edit/'.$r->barang_id,'Edit',array('class'=>'btn btn-warning btn-sm')); ?>
                                                    <?php echo anchor('barang/delete/'.$r->barang_id,'Delete',array('class'=>'btn btn-danger btn-sm')); ?></a>
                                                </td>
                                            </tr></center>
                                        <?php $no++; } ?>
                                        </tbody>
                                    </table>
                                </div>  
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->


