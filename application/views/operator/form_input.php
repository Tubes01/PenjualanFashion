                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                         Tambah Data Operator
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('operator/post'); ?>
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama" placeholder="nama lengkap" required>
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="username" required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control"  name="password" placeholder="password" required>
                                </div>
                             <div class="form-group">
                        <label>Status AKun</label>
                        <div class="center">
                             <select name="satuan" class="form-control" required>
                                <option value="">-PILIH-</option>
                                <option value="superadmin">Super Administrator</option>
                                <option value="admin">Administrator</option>
                                <option value="kasir">Kasir</option>
                             </select>
                        </div>
                    </div>
                                <tr>
                                <button type="submit" name="submit" class="btn btn-success btn-sm">Simpan</button> | 
                                <?php echo anchor('operator','Kembali',array('class'=>'btn btn-primary btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->