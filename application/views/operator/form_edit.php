                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                        Edit Data User
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('operator/edit'); ?>
                                <input type="hidden" value="<?php echo $record['operator_id']?>" name="id">
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama" value="<?php echo $record['nama_lengkap']?>">
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username" value="<?php echo $record['username']?>">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control"  name="password" placeholder="password">
                                </div>
                             <!--- MODAL EDIT STATUS -->
                                <div class="form-group">
                                    <label class="center" >Status</label>
                                        <div class="center">
                                            <select name="status" class="form-control" required>
                                <option value="">---PILIH---</option>
                                <?php if($status=='superadmin'):?>
                                    <option value="superadmin" selected>Super Administrator</option>
                                    <option value="admin">Administrator</option>
                                    <option value="kasir">kasir</option>
                                <?php elseif($status=='admin'):?>
                                    <option value="superadmin">Super Administrator</option>
                                    <option value="admin" selected>Administrator</option>
                                    <option value="kasir">Botol</option>
                                <?php elseif($status=='kasir'):?>
                                    <option value="superadmin">Super Administrator</option>
                                    <option value="admin">Administrator</option>
                                    <option value="kasir" selected>Kasir</option>
                                <?php endif;?>
                             </select>
                        </div>
                    </div>
                            <!--- END MODAL EDIT STATUS -->


                                <button type="submit" name="submit" class="btn btn-success btn-sm">Update</button> | 
                                <?php echo anchor('operator','Kembali',array('class'=>'btn btn-primary btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->



