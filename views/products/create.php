<?php
	require_once('views/layouts/header.php');
?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Sản phẩm</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="?controller=products&action=list">Sản phẩm</a></li>
              <li class="breadcrumb-item active">Tạo mới</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      	<div class="row">
      		<div class="col-md-12">
      			<div class="card">
      				<div class="card-header bg-primary">
      					<span>Tạo mới</span>
      				</div>
      				<div class="card-body">
      					<form action="">
                    <div class="form-group">
                        <label for="name">Tên mặt hàng</label>
                        <input type="text" class="form-control">
                    </div>    
                    <div class="form-group">
                        <label for="name">Giá tiền</label>
                        <input type="text" class="form-control">
                    </div> 
                    <div class="form-group">
                        <label for="name">Trạng thái</label>
                        <input type="text" class="form-control">
                    </div> 
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                    </div>
                </form>
      				</div>
      			</div>
      		</div>
      	</div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<?php
	require_once('views/layouts/footer.php');
?>