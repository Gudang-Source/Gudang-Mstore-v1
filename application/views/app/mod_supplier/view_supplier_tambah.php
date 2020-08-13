<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Tambahkan Data</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('app/tambah_supplier',$attributes); 
          echo "<div class='col-md-6'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value=''>
                    <tr><th width='150px' scope='row'>Nama Supplier</th>    <td><input type='text' class='form-control' name='a' required></td></tr>
                    <tr><th scope='row'>Kontak Person</th>    <td><input type='text' class='form-control' name='b'></td></tr>
                    <tr><th scope='row'>Alamat 1</th>    <td><input type='text' class='form-control' name='c'></td></tr>
                    <tr><th scope='row'>Alamat 2</th>    <td><input type='text' class='form-control' name='d'></td></tr>
                    <tr><th scope='row'>Negara</th>    <td><select class='form-control' name='g' id='country' required>
                                                            <option value=''>- Pilih -</option>";
                                                            foreach ($negara as $rows) {
                                                              if ($row['country_id']==$rows['country_id']){
                                                                echo "<option value='$rows[country_id]' selected>$rows[name]</option>";
                                                              }else{
                                                                echo "<option value='$rows[country_id]'>$rows[name]</option>";
                                                              }
                                                            }
                                                        echo "</select></td></tr>
                    <tr><th scope='row'>Propinsi</th>     <td><select class='form-control' name='f' id='state' required>
                                                                <option value=''>- Pilih -</option>
                                                              </select></td></tr>
                    <tr><th scope='row'>Kota</th>         <td><select class='form-control' name='e' id='city' required>
                                                                <option value=''>- Pilih -</option>
                                                              </select></td></tr>
                  </tbody>
                  </table>
                </div>

                <div class='col-md-6'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <tr><th width='150px' scope='row'>Telepon</th>    <td><input type='number' class='form-control' name='h'></td></tr>
                    <tr><th scope='row'>Hp</th>    <td><input type='number' class='form-control' name='i'></td></tr>
                    <tr><th scope='row'>Email</th>    <td><input type='email' class='form-control' name='j'></td></tr>
                    <tr><th scope='row'>Website</th>    <td><input type='url' class='form-control' name='k'></td></tr>
                    <tr><th scope='row'>Kode Pos</th>    <td><input type='number' class='form-control' name='l'></td></tr>
                    <tr><th scope='row'>Fax</th>    <td><input type='number' class='form-control' name='m'></td></tr>
                    <tr><th scope='row'>Chat</th>    <td><input type='text' class='form-control' name='n'></td></tr>
                    <tr><th scope='row'>Keterangan</th>    <td><textarea class='form-control' name='o'></textarea></td></tr>
                  </tbody>
                  </table>
                </div>

              </div>
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Tambahkan</button>
                    <a href='index.php'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></form>";
