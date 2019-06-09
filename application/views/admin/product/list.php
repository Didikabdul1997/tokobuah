<!DOCTYPE html>
<html lang="en">

<head>

  <?php
    $this->load->view('admin/_partials/head');
  ?>

</head>

<body id="page-top">

  <?php
    $this->load->view('admin/_partials/navbar');
  ?>

  <div id="wrapper">

    <!-- Sidebar -->
    <?php
      $this->load->view('admin/_partials/sidebar');
    ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <?php
            $this->load->view('admin/_partials/breadcrumb');
        ?>

        <!-- DataTables -->
        <div class="card mb-3">
          <div class="card-header">
            <a href="<?php echo site_url('admin/products/add') ?>">
                <i class="fas fa-plus"></i> Add New
            </a>
          <div class="card-body">

            <div class="table-responsive">
              <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Photo</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $product): ?>
                    <tr>
                        <td width="150">
                            <?php echo $product->name ?>
                        </td>
                        <td>
                            <?php echo $product->price ?>
                        </td>
                        <td>
                            <img src="<?php echo base_url('upload/product/'.$product->image) ?>" width="64" />
                        </td>
                        <td class="small">
                            <?php echo substr($product->description, 0, 120) ?>...
                        </td>
                        <td width="250">
                            <a href="<?php echo site_url('admin/products/edit/'.$product->product_id) ?>" class="btn btn-small">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <a onclick="deleteConfirm('<?php echo site_url('admin/products/delete/'.$product->product_id) ?>')" href="#!" class="btn btn-small text-tanger">
                                <i class="fas fa-trash"> Hapus</i>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <?php
        $this->load->view('admin/_partials/footer');
      ?>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <?php
    $this->load->view('admin/_partials/scrolltop');
  ?>

  <!-- Logout Modal-->
  <?php
    $this->load->view('admin/_partials/modal.php');
  ?>

  //Js 
  <?php
    $this->load->view('admin/_partials/js');
  ?>

</body>

</html>
