
<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading" style=" padding-bottom: 20px;">
                              <b>Grade Master</b>
                              <a href="index.php?p=grade"><button type="button" class="btn btn-round btn-info" style="float: right;">Add New</button></a>
                          </header>
                          <table class="table table-striped table-advance table-hover">
                              <thead>
                              <tr>
                                  <th>#</th>
                                  <th>Grade Name</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                                  <?php
                                  include './dao.php';
                                  $d=new dao();
                                  $i=0;
                                  $qu=$d->select("grade_master", "active_flag=0");
                                  while($fet=  mysql_fetch_array($qu)){
                                  ?>
                              <tr>
                                  <td><?php echo ++$i; ?></td>
                                  <td><?php echo $fet['grade_name']; ?></td>
                                  <td>
                                      <a href="delete_control.php?grade=<?php echo $fet['grade_id']; ?>"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                                  </td>
                              </tr>
                                  <?php } ?>
                              </tbody>
                          </table>
                          
                      </section>
                      <br>
                          
                  </div>
              </div>
              