                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                         Data Kategori Barang
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 <?php echo anchor('kategori/post','Tambah Data',array('class'=>'btn btn-primary btn-sm')) ?>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                          <center><tr>
                                                <th>No.</th>
                                                <th>Nama Kategori</th>
                                                <th><center>Aksi</center></th>
                                            </tr></center>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach ($record->result() as $r) { ?>
                                            <tr class="gradeU">
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $r->nama_kategori ?></td>
                                                <td class="right" align="right">
                                                    <?php echo anchor('kategori/edit/'.$r->kategori_id,'Edit',array('class'=>'btn btn-warning btn-sm')); ?>  
                                                    <?php echo anchor('kategori/delete/'.$r->kategori_id,'Delete',array('class'=>'btn btn-danger btn-sm')); ; ?>
                                                </td>
                                            </tr>
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
