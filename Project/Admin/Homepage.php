<?php
include("../Assets/Connection/connection.php");
ob_start();
include('Head.php');
?>
						<h4 class="page-title">Dashboard</h4>
						<div class="row">
							<div class="col-md-3">
								<div class="card card-stats card-warning">
									<div class="card-body ">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<i class="la la-users"></i>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
												<div class="numbers">
													<p class="card-category">Users</p>
													<h4 class="card-title"><?php
                            						$sel = "select count(user_id) as id from tbl_user";
                            						$res = $con->query($sel);
                            						$data = $res->fetch_assoc(); 
                            						echo $data["id"];
                                                        ?></h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-stats card-success">
									<div class="card-body ">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<i class="la la-bar-chart"></i>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
												<div class="numbers">
													<p class="card-category">Branches</p>
													<h4 class="card-title"><?php
                            						$sel = "select count(branch_id) as id from tbl_branch";
                            						$res = $con->query($sel);
                            						$data = $res->fetch_assoc(); 
                            						echo $data["id"];
                                                        ?></h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-stats card-danger">
									<div class="card-body">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<i class="la la-newspaper-o"></i>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
												<div class="numbers">
													<p class="card-category">Packages</p>
													<h4 class="card-title"><?php
                            						$sel = "select count(packagebooking_id) as id from tbl_packagebooking";
                            						$res = $con->query($sel);
                            						$data = $res->fetch_assoc(); 
                            						echo $data["id"];
                                                        ?></h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-stats card-primary">
									<div class="card-body ">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<i class="la la-check-circle"></i>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
												<div class="numbers">
													<p class="card-category">Orders</p>
													<h4 class="card-title"><?php
                            						$sel = "select count(booking_id) as id from tbl_booking";
                            						$res = $con->query($sel);
                            						$data = $res->fetch_assoc(); 
                            						echo $data["id"];
                                                        ?></h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php
						include('Foot.php');
						ob_flush();
						?>
					