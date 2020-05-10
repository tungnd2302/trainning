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
              <!-- <li class="breadcrumb-item"><a href="#">Trang chủ</a></li> -->
              <li class="breadcrumb-item active">Danh sách</li>
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
      					<span>Danh sách sản phẩm</span>
      					<a href="?controller=products&action=create">
      						<span class="fa fa-plus-circle"></span>
      					</a>
      				</div>
      				<div class="card-body">
      					<table class="table table-bordered">
      						<thead>
      							<tr>
      								<th>#</th>
      								<th>Tên sản phẩm</th>
      								<th>Giá bán</th>
      								<th>Trạng thái</th>
      								<th width="10%">Thao tác</th>
      							</tr>
      						</thead>
      						<tbody>
      							<?php foreach ($products as $product): ?>
      								<tr>
      									<td><?php echo $product['id'] ?></td>
      									<td><?php echo $product['name'] ?></td>
      									<td><?php echo $product['price'] ?></td>
      									<td><?php echo $product['status'] ?></td>
      									<td>
      										<a href="" class="btn btn-sm btn-danger">
      											<span class="fa fa-eye"></span>
      										</a>
      										<a href="" class="btn btn-sm btn-info">
      											<span class="fa fa-trash"></span>
      										</a>
      										<a href="" class="btn btn-sm btn-primary">
      											<span class="fa fa-pencil-alt"></span>
      										</a>

      									</td>
      								</tr>
      							<?php endforeach ?>
      							
      						</tbody>
      					</table>
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