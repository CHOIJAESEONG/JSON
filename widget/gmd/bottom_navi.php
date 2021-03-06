<?php
	@include_once("../../include/header.php");
	
?>

    <div class="container-fluid contents_container" style="position:relative;">
      <div class="row">
	    <?php
			include_once("../../include/sideMenu.php");
		?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="padding-top:15px;text-align:center;height:980px;">
		
			<div class="row placeholders" >
				<h1 class="page-header" style="margin:15px;text-align:left;">Bottom Navigation</h1>
				<ul style="text-align:left;font-size:18px;">
					<li style="margin:15px 0;padding-right:15px;">페이지 하단에 위치하는 3개~5개 아이템을 갖는 도구 위젯</li>					
					<li style="margin:15px 0;padding-right:15px;">일반적으로 Bottom Navi는 모바일에서 사용되며 PC에서는 Side Navigation이 사용된다.</li>
					<li style="margin:15px 0;padding-right:15px;">Bottom Navigation 규칙
						<ul style="text-align:left;font-size:18px;">
							<li style="padding-right:15px;">3개~5개의 아이템에서 사용할것, 스크롤은 권장하지 않음</li>
							<li style="padding-right:15px;">활성화된 아이템을 제외하고는 무채색을 권장</li>
						</ul>
					</li>
				</ul>
			</div>
			
			<div class="row placeholders" style="padding:0px;">
				<iframe src="<?=IFRPATH?>gmd/bottom_navi.php?is_ifr=1" style="border:none;width:100%;max-width:980px;height:300px;"></iframe>		
				<div class="try_btn_wrapper" style="">
					<button type="button" class="btn btn-success" ><a href="<?=IFRPATH?>gmd/bottom_navi.php" target="_blank" style="color:white;">Demo</a></button>
				</div>
			</div>
			
			
			
			
			
        </div>
		
		<!--Pagination-->
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2" style="padding:0px;height:80px;">
			<div class="page_prev_w" style="position:absolute;bottom:0px;left:0px;width:50%;height:80px;background:#23527c;">
				<a href="<?=WIGPATH?>gmd/motion.php" class="page_prev" id="btn_prev" aria-label="이전페이지">
					<span class="svg_prev">
						<svg xmlns="#" viewBox="0 0 24 24">
							<path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path>
							
						</svg>
					</span>	
					<span class="page_text">
						모션
					</span>	
			   </a>
			</div>
			<div class="page_next_w" style="position:absolute;bottom:0px;right:0px;width:50%;height:80px;background:#4CAF50;text-align:right;">
				<a class="page_next" href="<?=WIGPATH?>gmd/bottom_sheets.php" id="btn_next" aria-label="다음페이지">
					<span class="svg_next">
						<svg xmlns="#" viewBox="0 0 24 24">
							<path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
						</svg>
					</span>
					<span class="page_text" style="right:100px;">
						Bottom Sheets
					</span>	
			   </a>
			</div>
		</div>
      </div>
    </div>

<?php
		@include_once("../../include/footer.php");
	?>
</body>
</html>