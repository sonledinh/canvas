<?php include 'header.php';?>
<main>
	<section class="breadcrumbs">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-12">
					<ul class="list-inline text-uppercase">
						<li class="list-inline-item"><a href="index.php">Trang chủ</a></li>
						<li class="list-inline-item"><a href="javascript:void(0)">checkout</a></li>
					</ul>
				</div>
			</div>
		</div> 
	</section>
	<section class="checkout pb-60">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="code-sale">
						<p>Bạn có mã ưu đãi? <a href="javascript:void(0)" class="clc-sale">Ấn vào đây để nhập mã</a></p>
						<div class="box-code-sale">
							<p>Nếu bạn có mã giảm giá, vui lòng điền vào phía bên dưới.</p>
							<div class="inp-sale">
								<input type="text" placeholder="Mã ưu đãi">
								<button>ÁP DỤNG</button>
							</div>
						</div>
					</div> 
				</div>
				<div class="col-md-7">
					<div class="form-checkput">
						<h3>THÔNG TIN THANH TOÁN</h3>
						<div class="list-form">
							<div class="item">
								<div class="row">
									<div class="col-md-6">
										<label>Tên *</label>
										<input type="text">
									</div>
									<div class="col-md-6">
										<label>Họ *</label>
										<input type="text">
									</div>
								</div>
							</div>
							<div class="item">
								<div class="row">
									<div class="col-md-12">
										<label>Tên công ty (tuỳ chọn)</label>
										<input type="text">
									</div>
								</div>
							</div>
							<div class="item">
								<div class="row">
									<div class="col-md-12">
										<label>Địa chỉ *</label>
										<input type="text">
									</div>
								</div>
							</div>
							<div class="item">
								<div class="row">
									<div class="col-md-6">
										<label>Country / Region *</label>
										<select name="" id="">
											<option value="">Việt Nam</option>
											<option value="">Việt Nam</option>
											<option value="">Việt Nam</option>
											<option value="">Việt Nam</option>
											<option value="">Việt Nam</option>
										</select>
									</div>
									<div class="col-md-6">
										<label>Mã bưu điện (tuỳ chọn)</label>
										<input type="text">
									</div>
								</div>
							</div>
							<div class="item">
								<div class="row">
									<div class="col-md-12">
										<label>Tỉnh / Thành phố *</label>
										<input type="text">
									</div>
								</div>
							</div>
							<div class="item">
								<div class="row">
									<div class="col-md-12">
										<label>Số điện thoại *</label>
										<input type="text">
									</div>
								</div>
							</div>
							<div class="item">
								<div class="row">
									<div class="col-md-12">
										<label>Địa chỉ email *</label>
										<input type="text">
									</div>
								</div>
							</div>
							<div class="item">
								<div class="row">
									<div class="col-md-12">
										<label>Ghi chú đơn hàng (tuỳ chọn)</label>
										<textarea name="" id="" cols="30" rows="10"></textarea>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="box-order">
						<h3>ĐƠN HÀNG CỦA BẠN</h3>
						<div class="head-order">
							<p>SẢN PHẨM</p>
							<p>TẠM TÍNH</p>
						</div>
						<ul>
							<li><span>Bộ 2 Tranh Những Cuốn Sách Và Bình Hoa - VT814  <strong>× 3</strong></span><p>1,500,000₫</p></li>
							<li><span><strong>Tạm tính</strong></span><p>1,500,000₫</p></li>
							<li><span><strong>Tổng</strong></span><p>1,500,000₫</p></li>
						</ul>
						<div class="desc">
							Xin lỗi, có vẻ như không có phương thức thanh toán nào phù hợp với khu vực bang hiện tại của bạn. Vui lòng liên hệ với chúng tôi nếu bạn cần hỗ trợ hoặc muốn sắp xếp phương án thay thế.
						</div>
						<div class="btn-order"><input type="submit" value="đặt hàng"></div>
						<div class="policy">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="">chính sách riêng tư.</a></div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php include 'footer.php';?>  