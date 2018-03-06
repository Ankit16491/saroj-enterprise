
<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading" style=" padding-bottom: 20px;">
                              <b>Category</b>
                              <a href="index.php?p=category"><button type="button" class="btn btn-round btn-info" style="float: right;">Add New</button></a>
                          </header>
                          <table class="table table-striped table-advance table-hover">
                              <thead>
                              <tr>
                                  <th>#</th>
                                  <th>Category Name</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                                  <?php
                                  include './dao.php';
                                  $d=new dao();
                                  $i=0;
                                  $qu=$d->select("category", "active_flag=0");
                                  while($fet=  mysql_fetch_array($qu)){
                                  ?>
                              <tr>
                                  <td><?php echo ++$i; ?></td>
                                  <td><?php echo $fet['category_name']; ?></td>
                                  <td>
                                      <a href="delete_control.php?category=<?php echo $fet['category_id']; ?>"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                                  </td>
                              </tr>
                                  <?php } ?>
                              </tbody>
                          </table>
                          
                      </section>
                      <br>
                          
                  </div>
              </div>
              