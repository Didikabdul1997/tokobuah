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
        
        <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php endif; ?>

        <div class="card mb-3">
          <div class="card-header">
            <a href="<?php echo site_url('admin/products') ?>">
                <i class="fas fa-arrow-left"></i> Back
            </a>
          <div class="card-body">

            <form action="<?php base_url('admin/products/edit') ?>" method="post" enctype="multipart/form-data">
                
                <input type="hidden" name="id" value="<?php echo $product->product_id?>" />

                <div class="form-group">
                    <label for="name">Name*</label>
                    <input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>" type="text"
                    value="<?php echo $product->name; ?>" name="name" placeholder="Product name" />
                    <div class="invalid-feedback">
                        <?php echo form_error('name'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="price">Price*</label>
                    <input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>" type="number"
                    value="<?php echo $product->price; ?>" name="price" min="0" placeholder="Product price" />
                    <div class="invalid-feedback">
                        <?php echo form_error('price'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="photo">Photo</label>
                    <input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
                    type="file" name="image" />
                    <input type="hidden" name="old_image" values="<?php echo $product->image; ?>"/>
                    <div class="invalid-feedback">
                        <?php echo form_error('image'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="description">Description*</label>
                    <textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
                     name="description" placeholder="Product Description..."><?php echo $product->description; ?></textarea>
                    <div class="invalid-feedback">
                        <?php echo form_error('description'); ?>
                    </div>
                </div>

                <input class="btn btn-success" type="submit" name="btn" value="Save"/>
            </form>
          </div>

          <div class="card-footer small text-muted">
            * required fields
          </div>
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
