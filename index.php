

<?php 
session_start();
echo $_SESSION['firstname'];
echo '<h1> sumit</h1>';

if(!isset($_SESSION['firstname'])){ //if login in session is not set
    // header("Location: http://www.example.com/login.php");
    header("Location: http://localhost/Bootstraps/login.php");
}
?>
 

<?php require "include/header.php"; ?>

			<div class ="container mt-3">
				<div class="row">
					<div class="col-md-3 mt-3 d-flex align-items-stretch">			
						<div class="card card-product card-plain">
							<div class ="card-image">
								<a href ="" class="text-dark text-decoration-none">
									<img src = "https://stroyka.html.themeforest.scompiler.ru/themes/default-ltr/images/products/product-2.jpg" class="img-responsive" width="100%" type="image/svg+xml img-fluid" alt="">
							
								<div class= "card-body">
									<div class = "card-description">
										<h5 class = "card-title">Undefined Tool IRadix</h5>
										<p class = "card-description">DPS3000SY 2700 Watts (inside a)</p>
									</div>
									<div class="price">
										<s>2,1019</s>
										<span class="text-danger">2,900 $</span>
									</div>
									<div type="button" class="btn btn-warning btn-round btn-fill">Add to cart
									</div>
								</div>
							</a>
						</div>

					</div>
				</div>

				<div class="col-md-3 mt-3 d-flex align-items-stretch">			
					<div class="card">
						<div>
							<a href ="">
								<img src = "https://stroyka.html.themeforest.scompiler.ru/themes/default-ltr/images/products/product-3.jpg"class="img-responsive" width="100%" alt="">
							</a>
							<div class= "card-body">
								<div>
									<h5 class = "card-title">Drill Screw driver</h5>
									<p>With Few Classes</p>
								</div>
								<div>
									<s>3,520</s>
									<span class="text-danger">2,900 $</span>
								</div>
								<div type="button" class="btn btn-warning">Add to cart
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-3 mt-3 d-flex align-items-stretch">			
					<div class="card card-product card-plain">
						<div class ="card-image">
							<a href ="">
								<img src = "https://stroyka.html.themeforest.scompiler.ru/themes/default-ltr/images/products/product-1.jpg" type="image/svg+xml" class="img-responsive" width="100%" alt="">
							</a>
							<div class= "card-body">
								<div class = "card-description">
									<h5 class = "card-title">Electic Planner Brandix</h5>
									<p class = "card-description">KL3700 300 Watts</p>
								</div>
								<div class="price">
									<s>3,520</s>
									<span class="text-danger">2,900 $</span>
								</div>
								<div type="button" class="btn btn-warning btn-round btn-fill">Add to cart
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-3 mt-3 d-flex align-items-stretch">			
					<div class="card card-product card-plain">
						<div class ="card-image">
							<a href ="">
								<img src = "https://stroyka.html.themeforest.scompiler.ru/themes/default-ltr/images/products/product-4.jpg" type="image/svg+xml" class="img-responsive" width="100%" alt="">
							</a>
							<div class= "card-body">
								<div class = "card-description">
									<h5 class = "card-title">Drill Series Brandix</h5>
									<p class = "card-description">KSR4590PQS 1500 Watts</p>
								</div>
								<div class="price">
									<s>3,520</s>
									<span class="text-danger">2,900 $</span>
								</div>
								<div type="button" class="btn btn-warning btn-round btn-fill">Add to cart
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-3 mt-3 d-flex align-items-stretch">			
					<div class="card card-product card-plain">
						<div class ="card-image">
							<a href ="">
								<img src = "https://stroyka.html.themeforest.scompiler.ru/themes/default-ltr/images/products/product-5.jpg" type="image/svg+xml" class="img-responsive" width="100%" alt="">
							</a>
							<div class= "card-body">
								<div class = "card-description">
									<h5 class = "card-title">Brandix Router Power Tool</h5>
									<p class = "card-description">2017ERXPK</p>
								</div>
								<div class="price">
									<s>3,520</s>
									<span class="text-danger">2,900 $</span>
								</div>
								<div type="button" class="btn btn-warning btn-round btn-fill">Add to cart
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-3 mt-3 d-flex align-items-stretch">			
					<div class="card card-product card-plain">
						<div class ="card-image">
							<a href ="">
								<img src = "https://stroyka.html.themeforest.scompiler.ru/themes/default-ltr/images/products/product-6.jpg" type="image/svg+xml" class="img-responsive" width="100%" alt="">
							</a>
							<div class= "card-body">
								<div class = "card-description">
									<h5 class = "card-title">Brandix Drilling Machine</h5>
									<p class = "card-description">DM2019KW4 4kW</p>
								</div>
								<div class="price">
									<s>3,520</s>
									<span class="text-danger">2,900 $</span>
								</div>
								<div type="button" class="btn btn-warning btn-round btn-fill">Add to cart
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-3 mt-3 d-flex align-items-stretch">			
					<div class="card card-product card-plain">
						<div class ="card-image">
							<a href ="">
								<img src = "https://stroyka.html.themeforest.scompiler.ru/themes/default-ltr/images/products/product-7.jpg" type="image/svg+xml" class="img-responsive" width="100%" alt="">
							</a>
							<div class= "card-body">
								<div class = "card-description">
									<h5 class = "card-title">Brandix Pliers</h5>
									<p class = "card-description">This is limited</p>
								</div>
								<div class="price">
									<s>30</s>
									<span class="text-danger">24 $</span>
								</div>
								<div type="button" class="btn btn-warning btn-round btn-fill">Add to cart
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-3 mt-3 d-flex align-items-stretch">			
					<div class="card card-product card-plain">
						<div class ="card-image">
							<a href ="">
								<img src = "https://stroyka.html.themeforest.scompiler.ru/themes/default-ltr/images/products/product-8.jpg" type="image/svg+xml" class="img-responsive" width="100%" alt="">
							</a>
							<div class= "card-body">
								<div class = "card-description">
									<h5 class = "card-title">Water Hose 40cm</h5>
									<p class = "card-description">This is limited</p>
								</div>
								<div class="price">
									<s>30</s>
									<span class="text-danger">20 $</span>
								</div>
								<div type="button" class="btn btn-warning btn-round btn-fill">Add to cart
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-3 mt-3 d-flex align-items-stretch">			
					<div class="card card-product card-plain">
						<div class ="card-image">
							<a href ="">
								<img src = "https://stroyka.html.themeforest.scompiler.ru/themes/default-ltr/images/products/product-9.jpg" type="image/svg+xml" class="img-responsive" width="100%" alt="">
							</a>
							<div class= "card-body">
								<div class = "card-description">
									<h5 class = "card-title">Spanner Wrench</h5>
									<p class = "card-description">no description</p>
								</div>
								<div class="price">
									<s>30</s>
									<span class="text-danger">19 $</span>
								</div>
								<div type="button" class="btn btn-warning btn-round btn-fill">Add to cart
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-3 mt-3 d-flex align-items-stretch">			
					<div class="card card-product card-plain">
						<div class ="card-image">
							<a href ="">
								<img src = "https://stroyka.html.themeforest.scompiler.ru/themes/default-ltr/images/products/product-10.jpg" type="image/svg+xml" class="img-responsive" width="100%" alt="">
							</a>
							<div class= "card-body">
								<div class = "card-description">
									<h5 class = "card-title">Water Tap</h5>
									<p class = "card-description">no description</p>
								</div>
								<div class="price">
									<s>30</s>
									<span class="text-danger">15 $</span>
								</div>
								<div type="button" class="btn btn-warning btn-round btn-fill">Add to cart
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-3 mt-3 d-flex align-items-stretch">			
					<div class="card card-product card-plain">
						<div class ="card-image">
							<a href ="">
								<img src = "https://stroyka.html.themeforest.scompiler.ru/themes/default-ltr/images/products/product-11.jpg" type="image/svg+xml" class="img-responsive" width="100%" alt="">
							</a>
							<div class= "card-body">
								<div class = "card-description">
									<h5 class = "card-title">Hand Tool Kit</h5>
									<p class = "card-description">This is limited</p>
								</div>
								<div class="price">
									<s>230</s>
									<span class="text-danger">144 $</span>
								</div>
								<div type="button" class="btn btn-warning btn-round btn-fill">Add to cart
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-3 mt-3 d-flex align-items-stretch">			
					<div class="card card-product card-plain">
						<div class ="card-image">
							<a href ="">
								<img src = "https://stroyka.html.themeforest.scompiler.ru/themes/default-ltr/images/products/product-12.jpg" type="image/svg+xml" class="img-responsive" width="100%" alt="">
							</a>
							<div class= "card-body">
								<div class = "card-description">
									<h5 class = "card-title">Ash's Chainsaw 3.5kW</h5>
									<p class = "card-description">This is limited</p>
								</div>
								<div class="price">
									<s>930</s>
									<span class="text-danger">666.99 $</span>
								</div>
								<div type="button" class="btn btn-warning btn-round btn-fill">Add to cart
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-3 mt-3 d-flex align-items-stretch">			
					<div class="card card-product card-plain">
						<div class ="card-image">
							<a href ="">
								<img src = "https://stroyka.html.themeforest.scompiler.ru/themes/default-ltr/images/products/product-13.jpg" type="image/svg+xml" class="img-responsive" width="100%" alt="">
							</a>
							<div class= "card-body">
								<div class = "card-description">
									<h5 class = "card-title">Brandix Angle Grinder</h5>
									<p class = "card-description">KZX3890PQW</p>
								</div>
								<div class="price">
									<s>30</s>
									<span class="text-danger">19 $</span>
								</div>
								<div type="button" class="btn btn-warning btn-round btn-fill">Add to cart
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-3 mt-3 d-flex align-items-stretch">			
					<div class="card card-product card-plain">
						<div class ="card-image">
							<a href ="">
								<img src = "https://stroyka.html.themeforest.scompiler.ru/themes/default-ltr/images/products/product-14.jpg" type="image/svg+xml" class="img-responsive" width="100%" alt="">
							</a>
							<div class= "card-body">
								<div class = "card-description">
									<h5 class = "card-title">Brandix Air Compressor</h5>
									<p class = "card-description">DELTAKX500</p>
								</div>
								<div class="price">
									<s>30</s>
									<span class="text-danger">15 $</span>
								</div>
								<div type="button" class="btn btn-warning btn-round btn-fill">Add to cart
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-3 mt-3 d-flex align-items-stretch">			
					<div class="card card-product card-plain">
						<div class ="card-image">
							<a href ="">
								<img src = "https://stroyka.html.themeforest.scompiler.ru/themes/default-ltr/images/products/product-15.jpg" type="image/svg+xml" class="img-responsive" width="100%" alt="">
							</a>
							<div class= "card-body">
								<div class = "card-description">
									<h5 class = "card-title">Brandix Electric Jigsaw</h5>
									<p class = "card-description">JIG7000BQ</p>
								</div>
								<div class="price">
									<s>330</s>
									<span class="text-danger">244 $</span>
								</div>
								<div type="button" class="btn btn-warning btn-round btn-fill">Add to cart
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-3 mt-3 d-flex align-items-stretch">			
					<div class="card card-product card-plain">
						<div class ="card-image">
							<a href ="">
								<img src = "https://stroyka.html.themeforest.scompiler.ru/themes/default-ltr/images/products/product-12.jpg" type="image/svg+xml" class="img-responsive" width="100%" alt="">
							</a>
							<div class= "card-body">
								<div class = "card-description">
									<h5 class = "card-title">Ash's Chainsaw 3.5kW</h5>
									<p class = "card-description">This is limited</p>
								</div>
								<div class="price">
									<s>930</s>
									<span class="text-danger">666.99 $</span>
								</div>
								<div type="button" class="btn btn-warning btn-round btn-fill">Add to cart
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		

		<div class ="container mt-5">
			<div class="row justify-content-between">
				<div class="col-auto">
					<h3>Featured products
					</h3>
				</div>
					
				<div class="col-auto">
					<ul class="list-inline">
						<li class="list-inline-item">
							<button type="button">All</button>
						</li>
						<li class="list-inline-item">
							<button type="button">Power Tools</button>
						</li >
						<li class="list-inline-item">
							<button type="button">Hand Tools</button>
						</li>
						<li class="list-inline-item">
							<button type="button">Plumbing</button>
						</li>
					</ul>
				</div>	
			</div>

			<div>
				<div class="row">
					<div class="col-md-3 d-flex align-items-stretch">			
						<div class="card card-product card-plain">
							<div class ="card-image">
								<a href ="" class="text-dark text-decoration-none">
									<img src = "https://stroyka.html.themeforest.scompiler.ru/themes/default-ltr/images/products/product-2.jpg" type="image/svg+xml" class="img-responsive" width="100%" alt="">
							
									<div class= "card-body">
										<div class = "card-description">
											<h5 class = "card-title">Green Velvet</h5>
											<p class = "card-description">whole section is link</p>
										</div>
										<div class="price">
											<s>3,520</s>
											<span class="text-danger">2,900 $</span>
										</div>
										<div type="button" class="btn btn-warning btn-round btn-fill">Add to cartiger
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>

					<div class="col-md-3 d-flex align-items-stretch">			
						<div class="card card-product card-plain">
							<div class ="card-image">
								<a href ="" class="text-dark text-decoration-none">
									<img src = "https://stroyka.html.themeforest.scompiler.ru/themes/default-ltr/images/products/product-2.jpg" type="image/svg+xml" class="img-responsive" width="100%" alt="">
							
									<div class= "card-body">
										<div class = "card-description">
											<h5 class = "card-title">Green Velvet</h5>
											<p class = "card-description">whole section is link</p>
										</div>
										<div class="price">
											<s>3,520</s>
											<span class="text-danger">2,900 $</span>
										</div>
										<div type="button" class="btn btn-warning btn-round btn-fill">Add to cartiger
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>

					<div class="col-md-3 d-flex align-items-stretch">			
						<div class="card card-product card-plain">
							<div class ="card-image">
								<a href ="" class="text-dark text-decoration-none">
									<img src = "https://stroyka.html.themeforest.scompiler.ru/themes/default-ltr/images/products/product-2.jpg" type="image/svg+xml" class="img-responsive" width="100%" alt="">
							
									<div class= "card-body">
										<div class = "card-description">
											<h5 class = "card-title">Green Velvet</h5>
											<p class = "card-description">whole section is link</p>
										</div>
										<div class="price">
											<s>3,520</s>
											<span class="text-danger">2,900 $</span>
										</div>
										<div type="button" class="btn btn-warning btn-round btn-fill">Add to cartiger
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>

					<div class="col-md-3 d-flex align-items-stretch">			
						<div class="card card-product card-plain">
							<div class ="card-image">
								<a href ="" class="text-dark text-decoration-none">
									<img src = "https://stroyka.html.themeforest.scompiler.ru/themes/default-ltr/images/products/product-2.jpg" type="image/svg+xml" class="img-responsive" width="100%" alt="">
							
									<div class= "card-body">
										<div class = "card-description">
											<h5 class = "card-title">Green Velvet</h5>
											<p class = "card-description">whole section is link</p>
										</div>
										<div class="price">
											<s>3,520</s>
											<span class="text-danger">2,900 $</span>
										</div>
										<div type="button" class="btn btn-warning btn-round btn-fill">Add to cartiger
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>

<?php require "include/footer.php";?>				
