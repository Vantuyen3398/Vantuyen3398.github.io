<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add product</h3>
              <?php  
                if (isset($_POST['name']) ) {
                    echo "<p>$alert</p>";
                }
              ?>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="admin.php?action=add_product" method="post" name="register" onsubmit="return validateForm()" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Product Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Product Name" name="name">
                </div>
                <div class="form-group">
                  <label>Category</label>
                    <select class="form-control" name="category_name">
                    <?php  
                      if($cate){
                        foreach ($cate as $key => $item) {
                    ?>
                        <option value="<?php echo $key + 1?>"><?php echo $item[0]?></option>
                    <?php
                        }
                      }
                    ?>
                    </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Price</label>
                  <input type="text" class="form-control" id="exampleInputPrice1" placeholder="Price" name="price">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Image</label>
                  <input type="file" id="exampleInputFile" name="image">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="add_product">ADD PRODUCT</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>