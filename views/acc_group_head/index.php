<main class="app-main">
  <div class="wrapper">
    <div class="page">
      <div class="page-inner">
        <div class="page-section">
          <div class="row mt-3">
            <div class="col-12 col-lg-12 col-xl-12">
              <div class="card card-fluid">
                <div class="col-12 col-lg-12 col-xl-12"><h4 class="card-header mt-2"> Group Heads</h4><a href="#" class="btn btn-success mt-2 mr-2" style="float: right;" data-toggle="modal" data-target="#groupHeadModal">Create New</a></div>
                <div class="card-body">
                  <table class="table datatable table-hover">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Head Title</th>
                        <th scope="col">Head Code</th>
                        <th scope="col">Report Type</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                      $i=0;
                      foreach($data as $head){
                        if ($head['acc_group_head_status'] == 0) {
                          $status = '<span class="badge badge-warning">Inactive</span>';
                          $button = '<a href="#" data-toggle="modal" title="Delete" data-target="#EditgroupHeadModal'.$head['acc_group_head_id'].'"><i class="fa fa-edit text-warning"></i></a>';
                        }elseif ($head['acc_group_head_status'] == 1) {
                          $status = '<span class="badge badge-success">Active</span>';
                          $button = '<a href="#" data-toggle="modal" title="Delete" data-target="#EditgroupHeadModal'.$head['acc_group_head_id'].'"><i class="fa fa-edit text-warning"></i></a>';
                        }else{
                          $status = '<span class="badge badge-danger">Deleted</span>';
                          $button = '<a href="#" data-toggle="modal" title="Delete" data-target="#EditgroupHeadModal'.$head['acc_group_head_id'].'"><i class="fa fa-edit text-warning"></i></a>';
                        }
                    ?>
                      <tr>
                        <th scope="row"><?php echo ++$i; ?></th>
                        <td><?php echo $head['acc_group_head_title']; ?></td>
                        <td><?php echo $head['acc_group_head_code']; ?></td>
                        <td><?php echo $head['acc_report_type_name']; ?></td>
                        <td><?php echo $status; ?></td>
                        <td><?php echo $button; ?></td>
                      </tr>
                      <div class="modal fade" id="EditgroupHeadModal<?php echo $head['acc_group_head_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalScrollableTitle">Edit <?php echo $head['acc_group_head_title']; ?></h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="<?php echo url('acc_group_head/update'); ?>" method="post">
                              <?php $_SESSION['csrf_token']=md5(rand()); ?>
                              <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                              <input type="hidden" name="acc_group_head_id" value="<?php echo $head['acc_group_head_id']; ?>">
                              <div class="modal-body mt-2">
                                <div class="form-group">
                                  <label for="acc_group_head_code">Group Head Code</label>
                                  <input type="text" class="form-control" id="acc_group_head_code" name="acc_group_head_code" value="<?php echo $head['acc_group_head_code']; ?>" required>
                                </div>
                                <div class="form-group">
                                  <label for="acc_group_head_title">Group Head Title</label>
                                  <input type="text" class="form-control" id="acc_group_head_title" name="acc_group_head_title" value="<?php echo $head['acc_group_head_title']; ?>" required>
                                </div>
                                <div class="form-group">
                                  <label for="acc_group_head_report_type">Group Head Report Type</label>
                                  <select class="form-control" id="acc_group_head_report_type" name="acc_group_head_report_type" required>
                                    <option value="<?php echo $head['acc_group_head_report_type']; ?>"> -- <?php echo $head['acc_report_type_name']; ?> --</option>
                                  <?php
                                    foreach ($data2 as $report) {
                                  ?>
                                    <option value="<?php echo $report['acc_report_type_id']; ?>"><?php echo $report['acc_report_type_name']; ?></option>
                                  <?php
                                    }
                                  ?>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="acc_group_head_status">Group Head Status</label>
                                  <select class="form-control" id="acc_group_head_status" name="acc_group_head_status" required>
                                    <option value="<?php echo $head['acc_group_head_status']; ?>"> -- Select --</option>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                    <option value="2">Delete</option>
                                  </select>
                                </div>

                              </div>
                              <div class="modal-footer">
                                <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<!-- Insertion Modal -->
<div class="modal fade" id="groupHeadModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Create New Group Heads</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo url('acc_group_head/save'); ?>" method="post">
        <?php $_SESSION['csrf_token']=md5(rand()); ?>
        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
        <div class="modal-body mt-2">
          <div class="form-group">
            <label for="acc_group_head_code">Group Head Code</label>
            <input type="text" class="form-control" id="acc_group_head_code" name="acc_group_head_code" placeholder="Group Head Code" required>
          </div>
          <div class="form-group">
            <label for="acc_group_head_title">Group Head Title</label>
            <input type="text" class="form-control" id="acc_group_head_title" name="acc_group_head_title" placeholder="Group Head Title" required>
          </div>
          <div class="form-group">
            <label for="acc_group_head_report_type">Group Head Report Type</label>
            <select class="form-control" id="acc_group_head_report_type" name="acc_group_head_report_type" required>
              <option> -- Select --</option>
            <?php
              foreach ($data2 as $report) {
            ?>
              <option value="<?php echo $report['acc_report_type_id']; ?>"><?php echo $report['acc_report_type_name']; ?></option>
            <?php
              }
            ?>
            </select>
          </div>

        </div>
        <div class="modal-footer">
          <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>