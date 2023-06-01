<?php
include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php');
$dataslide = file_get_contents($datasource . 'product.json');
$product = json_decode($dataslide, "ture");
// d($product);
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once($partials . 'head.php') ?>

<body>

	<!-- Main navbar -->
	<?php include_once($partials . 'mainnav.php') ?>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<?php include_once($partials . 'mainsidebar.php') ?>
		<!-- /main sidebar -->

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<?php include_once($partials . 'product_list_page_header.php') ?>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">
				<?php
				if (array_key_exists('message', $_SESSION) && !empty($_SESSION['message'])) :
				?>
					<div class="alert alert-success"><?= $_SESSION['message'];
														$_SESSION['message'] = ''; ?></div>
				<?php
				endif
				?>


				<!-- Inner container -->
				<div class="d-flex align-items-start flex-column flex-md-row" >

					<!-- Left content -->
					<div class="w-100 overflow-auto order-2 order-md-1">

						<!-- List -->
						<div class="card card-body">
							<div class="text-left header-element-inline">

								<a href="product_list.php" type="button" class="btn bg-teal btn-ladda btn-ladda-progress" data-style="expand-left" data-spinner-size="20">List View</a>
								<a href="grid.php" type="button" class="btn bg-teal btn-ladda btn-ladda-progress" data-style="expand-left" data-spinner-size="20">Grid View</a>

								<div class="header-elements">
									<div class="list-icons">

										<ul class="list-inline list-inline-condensed mt-3 mb-0">
											<li class="list-inline-item" title="Create"><a href="product_create.php" class="btn btn-outline bg-success btn-icon text-success border-success border-2 rounded-round">
													<i class="icon-plus3"></i></a>
											</li>

											<!-- <li class="list-inline-item" title="Edit"><a href="product_edit.php" class="btn btn-outline bg-success btn-icon text-success border-success border-2 rounded-round">
													<i class="icon-pencil7"></i></a>
											</li> -->
											<li class="list-inline-item" title="Delete"><a href="product_edit.php" class="btn btn-outline bg-danger btn-icon text-danger border-danger border-2 rounded-round">
													<i class="icon-bin"></i></a>
											</li>
											<li class="list-inline-item" title="Spreadsheet"><a href="product_Delete.php" class="btn btn-outline bg-info-800 btn-icon text-info-800 border-info-800 border-2 rounded-round">
													<i class="icon-file-spreadsheet"></i></a>
											</li>
											<li class="list-inline-item" title="PDF"><a href="#" class="btn btn-outline bg-indigo-800 btn-icon text-indigo-800 border-indigo-800 border-2 rounded-round">
													<i class="icon-file-pdf"></i></a>
											</li>
											<li class="list-inline-item" title="Print"><a href="#" class="btn btn-outline bg-primary-800 btn-icon text-primary-800 border-purple-800 border-2 rounded-round">
													<i class="icon-printer"></i></a>
											</li>
											<li class="list-inline-item" title="Print"><a href="#" class="list-icons-item btn  btn-outline bg-primary-800 btn-icon text-primary-800 border-purple-800 border-2 rounded-round" data-action="reload">
												</a>
											</li>
										</ul>

										<!-- <a class="list-icons-item" data-action="remove"></a> -->
									</div>
								</div>
							</div>



							<table class="table text-nowrap" id="solid_tab1">
								<thead>

									<tr>
										<th class="col-md-2 text-center">PRODUCT</th>
										<th>BRAND NAME</th>
										<th>SKU</th>
										<th>BRAND</th>
										<th>CATEGORIES</th>
										<th>PRICE</th>
										<th>PRODUCT UNIT</th>
										<th>IN STOCK</th>
										<th>CREATED DATE</th>
										<th class="text-center" style="width: 20px">
											<i class="icon-arrow-down12"></i>
										</th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach ($product as $key => $slide) {
									?>


										<td>
											<div class="d-flex align-items-center">
												<div class="col-md-2 ">
													<a href="<?= $assets . $slide['src'] ?>" data-popup="lightbox">
														<img src="<?= $assets . $slide['src'] ?>" width="160px" alt="">
													</a>
												</div>

											</div>
										</td>
										<td><span class="font-weight-semibold mb-0"><?= $slide['BRAND'] ?></td>
										<td><span class="badge badge-flat border-blue text-primary-800 ml-2"><?= $slide['SKU'] ?></td>
										<td><span class="font-weight-semibold mb-0"><?= $slide['BRAND'] ?></span></td>
										<td><span class="badge badge-flat border-blue text-primary-800 ml-2"><?= $slide['CATEGORIES'] ?></span></td>

										<td>
											<span class="font-weight-bold mb-0 text-success-600"> <?= $slide['PRICE'] ?></span>
										</td>
										<td>
											<h6 class="font-weight-semibold text-center	 mb-0"><?= $slide['PRODUCT_UNIT'] ?></h6>
										</td>
										<td><span class="badge badge-flat border-blue text-primary-800 ml-2"><?= $slide['IN_STOCK'] ?></span></td>
										<td><span class="badge badge-flat border-blue text-primary-800 ml-2"><?= $slide['CREATED_BY'] ?> <br> <?= $slide['CREATED_DATE'] ?></span></td>
										<td class="text-center">

											<div class="list-icons">
												<form action="product_edit.php" method="post">
													<input type="hidden" name="id" value="<?= $slide['id'] ?>">
													<button type="submit" class="list-icons-item"><i class="icon-pencil7"></i></button>
												</form>
												<form action="product_delete.php" method="post">
													<input type="hidden" name="id" value="<?= $slide['id'] ?>">
													<button type="submit" class="list-icons-item"><i class="icon-trash"></i></button>
												</form>

												<div class="dropdown">
													<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-cog6"></i></a>

													<div class="dropdown-menu">
														<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to PDF</a>
														<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to CSV</a>
														<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to DOC</a>
													</div>
												</div>
											</div>

										</td>
										</tr>
									<?php } ?>



									<!-- ........................... -->









								</tbody>
							</table>




						</div>







						<!-- /list -->


						<!-- Pagination -->
						<div class="d-flex justify-content-center pt-3 mb-3">
							<ul class="pagination shadow-1">
								<li class="page-item"><a href="#" class="page-link page-link-white"><i class="icon-arrow-small-right"></i></a></li>
								<li class="page-item "><a href="#" class="page-link page-link-white">1</a></li>
								<li class="page-item active"><a href="#" class="page-link page-link-white">2</a></li>
								<li class="page-item"><a href="#" class="page-link page-link-white">3</a></li>
								<li class="page-item"><a href="#" class="page-link page-link-white">4</a></li>
								<li class="page-item"><a href="#" class="page-link page-link-white">5</a></li>
								<li class="page-item"><a href="#" class="page-link page-link-white"><i class="icon-arrow-small-left"></i></a></li>
							</ul>
						</div>
						<!-- /pagination -->

					</div>
					<!-- /left content -->



				</div>
				<!-- /inner container -->

			</div>
			<!-- /content area -->


			<!-- Footer -->

			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>

</html>