<script type="text/javascript">
ddaccordion.init({
	headerclass: "submenuheader", 						//Shared CSS class name of headers group
	contentclass: "submenu", 							//Shared CSS class name of contents group
	revealtype: "click", 								//Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
	mouseoverdelay: 100, 								//if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, 								//Collapse previous content (so only one open at any time)? true/false 
	defaultexpanded: [], 								//index of content(s) open by default [index1, index2, etc] [] denotes no content
	onemustopen: false, 								//Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, 								//Should contents open by default be animated into view?
	persiststate: true, 								//persist state of opened contents within browser session?
	toggleclass: ["", ""], 								//Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
 	togglehtml: ["suffix", "<img src='gudang/gambar/plus.gif' class='statusicon'/>", "<img src='gudang/gambar/minus.gif' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "fast", 								//speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(headers, expandedindices){ 			//custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
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
					<a class="button_menu ui-icon-min" href="">Home</a> 
					<a class="button_menu submenuheader ui-icon-plus" href="">Data Master</a>
					<div class="submenu">
						<ul>
							<li><a href="#" id="pro">Provinsi</a></li>
							<li><a href="#" id="kab">Kabupaten</a></li>
							<li><a href="#" id="ins">Instansi</a></li>
							<li><a href="#" id="bid">Bidang</a></li>
							<li><a href="#" id="jns">Jenis Data</a></li>
							<li><a href="#" id="kas">Jenis Kasus</a></li>
						</ul>
					</div>
					<a class="button_menu submenuheader ui-icon-plus" href="">Data
						Kasus</a>
					<div class="submenu">
						<ul>
							<li><a href="#">Kasus a</a></li>
							<li><a href="#">Kasus b</a></li>
							<li><a href="#">Kasus c</a></li>
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
	<div class="down_footer"></div>
</div>
