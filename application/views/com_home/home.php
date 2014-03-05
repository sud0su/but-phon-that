<script type="text/javascript">
ddaccordion.init({
	headerclass: "submenuheader", 						
	contentclass: "submenu", 							
	revealtype: "click", 								
	mouseoverdelay: 100, 								
	collapseprev: true, 								
	defaultexpanded: [], 								
	onemustopen: false, 								
	animatedefault: false, 								
	persiststate: true, 								
	toggleclass: ["", ""], 								
 	togglehtml: ["suffix", "<img src='gudang/gambar/plus.gif' class='statusicon'/>", "<img src='gudang/gambar/minus.gif' class='statusicon' />"], 
	animatespeed: "fast", 					
	oninit:function(headers, expandedindices){},
	onopenclose:function(header, index, state, isuseractivated){}
})
</script>

<div id="main_container">

	<div class="header">
		<div class="logo">
			<a href="#"><img src="gudang/gambar/logo.gif" alt="" title=""
				border="0" /> </a>
		</div>
	</div>
	<div class="up_header"></div>
	<div class="main_content">

		<div class="center_content">

			<div class="left_content">

				<div class="sidebarmenu">
					<a class="button_menu ui-icon-min" href="#">Home</a> 
					<a class="button_menu submenuheader ui-icon-plus" href="">Data Master</a>
					<div class="submenu">
						<ul>
							<li><a href="#" id="pro">Provinsi</a></li>
							<li><a href="#" id="kab">Kabupaten</a></li>
							<li><a href="#" id="ins">Instansi</a></li>
							<li><a href="#" id="bid">Bidang</a></li>
						</ul>
					</div>
					<a class="button_menu submenuheader ui-icon-plus" href="">Data
						Kasus</a>
					<div class="submenu">
						<ul>
							<li><a href="#" id="dataPilih">Data Terpilah</a></li>
							<li><a href="#" id="dataAnak">Data Anak</a></li>
							<li><a href="#" id="dataKelembagaan">Data Kelembagaan</a></li>
						</ul>
					</div>

					<a class="button_hijau submenuheader ui-icon-plus" href="">User
						Data</a>
					<div class="submenu">
						<ul>
							<li><a href="">Profile</a></li>
							<li><a href="">Account</a></li>
						</ul>
					</div>
					<a class="button_merah" href="">Log Out</a>

				</div>


				<div class="sidebar_box ui-icon-plus">
					<div class="sidebar_box_content">
						<h4>User help desk</h4>
						<ul>
							<li>Bantuan Pengguna</li>
						</ul>
					</div>
				</div>

				<div class="sidebar_box">
					<div class="sidebar_box_top"></div>
					<div class="sidebar_box_content">
						<h4>Ricent Update</h4>
						<ul>
							<li>Update Data Terakhir.</li>
						</ul>
					</div>
					<div class="sidebar_box_bottom"></div>
				</div>


			</div>

			<div class="right_content">

				<!-- load data -->
				<div id="data">
					<div id="loading"></div>
				</div>
				<!-- end load data -->
				<script src="gudang/app_js/data.js" type="text/javascript"></script>

			</div>
			<!-- end of right content-->
		</div>
		<!--end of center content -->

		<div class="clear"></div>
	</div>
	<!--end of main content-->

	
	<div class="footer">

		<div class="left_footer copy">
			2013-2014 &copy; <a href="#">BPPPA-ACEH</a>
		</div>
		<div class="right_footer">
			<a href="#"><img src="gudang/gambar/indeziner_logo.gif" alt=""
				title="" border="0" /> </a>
		</div>

	</div>
<!-- 	<div class="down_footer"></div> -->
</div>
