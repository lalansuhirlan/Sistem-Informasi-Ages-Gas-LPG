
                                        <div class="modal fade" id="modal-edit<?php echo $row['id_pangkalan']?>">
                                            <div class="modal-dialog modal-lg">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h4 class="modal-title">Edit Pangkalan</h4>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                <!-- form start -->
                                                <form action="edit.php" method="post">
                                                    <div class="card-body">
                                                      
                                                      <div class="form-group">
                                                        <label for="exampleInputPassword1">ID Pangkalan</label>
                                                        <input type="hidden" name="id_pangkalan" value="<?php echo $row ['id_pangkalan']?>" required>
                                                        <input type="text" class="form-control" name="id_pangkalan" 
                                                          placeholder="Masukan Nama" value="<?php echo $row['id_pangkalan']?>">
                                                      </div>
                                                       
                                                      <div class="form-group">
                                                        <label for="exampleInputPassword1">Nama Pangkalan</label>
                                                        <input type="text" class="form-control" name="nama_pangkalan" 
                                                          placeholder="Masukan Nama Pangkalan" value="<?php echo $row['nama_pangkalan']?>" required>
                                                      </div>
 
                                                      <div class="form-group">
                                                        <label for="exampleInputPassword1">Nama Pemilik</label>
                                                        <input type="text" class="form-control" name="nama_pemilik" 
                                                          placeholder="Masukan Nama pemilik" value="<?php echo $row['nama_pemilik']?>" required>
                                                      </div>

                                                      <div class="form-group">
                                                        <label for="exampleInputPassword1">NO KTP</label>
                                                        <input type="text" class="form-control" name="no_ktp" 
                                                          placeholder="Masukan Nomor KTP" value="<?php echo $row['no_ktp']?>" required>
                                                      </div>
                                                      
                                                      <div class="form-group">
                                                        <label >Alokasi</label>
                                                        <select name="level" class="form-control" required>
                                                        <option value="<?php echo $row['alokasi']?>" >-Pilih Jumlah Alokasi-</option>
                                                        
                                                                <option value="">560</option>
                                                                <option value="">1120</option>
                                                                <option value="">1680</option>
                                                                <option value="">2240</option>
                                                        
                                                        </select>

                                                        <div class="form-group">
                                                        <label >Tipe Pembayaran</label>
                                                        <select name="tipe_pembayaran" class="form-control" required>
                                                        <option value="" disabled>-Pilih Tipe Pembayaran-</option>
                                                        
                                                                <option value="cash">Cash</option>
                                                                <option value="cashless">Cashless</option>  
                                                        
                                                        </select>
                                                      
                                                        <div class="form-group">
                                                        <label for="exampleInputPassword1">Kecamatan</label>
                                                        <input type="text" class="form-control" name="kecamatan" 
                                                          placeholder="Masukan Kecamatan" value="<?php echo $row['kecamatan']?>" required>
                                                      </div>

                                                      <div class="form-group">
                                                        <label >Status</label>
                                                        <select name="level" class="form-control" required>
                                                        <option value="<?php echo $row['status']?>" >-Pilih Status Pangkalan-</option>
                                                        
                                                                <option value="">Akti</option>
                                                                <option value="">Tidak Aktif</option>  
                                                        
                                                        </select>
                                                      
 
                                                    </div>
                                                    <!-- /.card-body -->

                                                    <div class="card-footer">
                                                      <button type="submit" class="btn btn-primary">Submit</button>
                                                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                  </form>
                                                </div>
                                                <!-- /.card -->

                                                </div>
                                              
                                              </div>
                                              <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                          </div>
                                          <!-- /.modal -->

                                          <div class="modal fade" id="modal-delete<?php echo $row['id_pangkalan']?>">
                                            <div class="modal-dialog modal-lg">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h4 class="modal-title">Edit Pangkalan</h4>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                <!-- form start -->
                                                <form action="edit.php" method="post">
                                                    <div class="card-body">
                                                      
                                                      <div class="form-group">
                                                        <label for="exampleInputPassword1">ID Pangkalan</label>
                                                        <input type="hidden" name="id_pangkalan" value="<?php echo $row ['id_pangkalan']?>" required>
                                                        <input type="text" class="form-control" name="id_pangkalan" 
                                                          placeholder="Masukan Nama" value="<?php echo $row['id_pangkalan']?>">
                                                      </div>
                                                       
                                                      <div class="form-group">
                                                        <label for="exampleInputPassword1">Nama Pangkalan</label>
                                                        <input type="text" class="form-control" name="nama_pangkalan" 
                                                          placeholder="Masukan Nama Pangkalan" value="<?php echo $row['nama_pangkalan']?>" required>
                                                      </div>
 
                                                      <div class="form-group">
                                                        <label for="exampleInputPassword1">Nama Pemilik</label>
                                                        <input type="text" class="form-control" name="nama_pemilik" 
                                                          placeholder="Masukan Nama pemilik" value="<?php echo $row['nama_pemilik']?>" required>
                                                      </div>

                                                      <div class="form-group">
                                                        <label for="exampleInputPassword1">NO KTP</label>
                                                        <input type="text" class="form-control" name="no_ktp" 
                                                          placeholder="Masukan Nomor KTP" value="<?php echo $row['no_ktp']?>" required>
                                                      </div>
                                                      
                                                      <div class="form-group">
                                                        <label >Alokasi</label>
                                                        <select name="level" class="form-control" required>
                                                        <option value="<?php echo $row['alokasi']?>" >-Pilih Jumlah Alokasi-</option>
                                                        
                                                                <option value="">560</option>
                                                                <option value="">1120</option>
                                                                <option value="">1680</option>
                                                                <option value="">2240</option>
                                                        
                                                        </select>

                                                        <div class="form-group">
                                                        <label >Tipe Pembayaran</label>
                                                        <select name="tipe_pembayaran" class="form-control" required>
                                                        <option value="" disabled>-Pilih Tipe Pembayaran-</option>
                                                        
                                                                <option value="">Cash</option>
                                                                <option value="">Cashless</option>  
                                                        
                                                        </select>
                                                      
                                                        <div class="form-group">
                                                        <label for="exampleInputPassword1">Kecamatan</label>
                                                        <input type="text" class="form-control" name="kecamatan" 
                                                          placeholder="Masukan Kecamatan" value="<?php echo $row['kecamatan']?>" required>
                                                      </div>

                                                      <div class="form-group">
                                                        <label >Status</label>
                                                        <select name="level" class="form-control" required>
                                                        <option value="<?php echo $row['status']?>" >-Pilih Status Pangkalan-</option>
                                                        
                                                                <option value="">Akti</option>
                                                                <option value="">Tidak Aktif</option>  
                                                        
                                                        </select>
                                                      
 
                                                    </div>
                                                    <!-- /.card-body -->

                                                    <div class="card-footer">
                                                      <button type="submit" class="btn btn-primary">Submit</button>
                                                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                  </form>
                                                </div>
                                                <!-- /.card -->

                                                </div>
                                              
                                              </div>
                                              <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                          </div>
                                            
                                         