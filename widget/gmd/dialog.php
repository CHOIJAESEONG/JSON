<?php
	@include_once("../../include/header.php");
	
?>

    <div class="container-fluid contents_container" style="position:relative;">
      <div class="row">
	    <?php
			include_once("../../include/sideMenu.php");
		?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="padding-top:15px;text-align:center;">
		
			<div class="row placeholders" >
				<h1 class="page-header" style="margin:15px;text-align:left;">Dialog</h1>
				<ul style="text-align:left;font-size:18px;">
					<li style="margin:15px 0;padding-right:15px;">정보, 경고, 동의, 확인 등 정보를 사용자에게 표출/요구 할때 사용된다.</li>	
					<li style="margin:15px 0;padding-right:15px;">현재 사용자의 화면 정중앙에 위치하며 Full Width/Height는 권장하지 않는다.</li>	
					<li style="margin:15px 0;padding-right:15px;">팝업, Instant 팝업, Modal 등 단순한 애니메이션을 권장한다.(슬라이드 등의 애니메이션은 권장 X)</li>	
					<li style="margin:15px 0;padding-right:15px;">Dialog 내부에는 스크롤은 권장하지 않는다.</li>
					<li style="margin:15px 0;padding-right:15px;">너무 긴 내용을 표출하지 않는다.</li>
				</ul>
			</div>
			
			<div class="row placeholders" style="padding:0px;">
				<iframe src="<?=IFRPATH?>gmd/dialog.php?is_ifr=1" style="border:none;width:100%;max-width:980px;height:300px;"></iframe>		
				<div class="try_btn_wrapper" style="">
					<button type="button" class="btn btn-success" ><a href="<?=IFRPATH?>gmd/dialog.php" target="_blank" style="color:white;">Demo</a></button>
				</div>
			</div>
			
			
			<div class="row placeholders" style="padding:0px;background:#fff;">
				<img src="<?=IMGPATH?>gmd/material_dialog.png" style="max-width:300px;margin:15px 0px;"/>
				<img src="<?=IMGPATH?>gmd/material_dialog2.png" style="max-width:300px;margin:15px 0px;"/>
			</div>
			
			
			
			
        </div>
		
		
		
		<!--Pagination-->
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2" style="padding:0px;height:80px;">
			<div class="page_prev_w" style="position:absolute;bottom:0px;left:0px;width:50%;height:80px;background:#23527c;">
				<a href="<?=WIGPATH?>gmd/card.php" class="page_prev" id="btn_prev" aria-label="이전페이지">
					<span class="svg_prev">
						<svg xmlns="#" viewBox="0 0 24 24">
							<path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path>
							
						</svg>
					</span>	
					<span class="page_text">
						Cards
					</span>	
			   </a>
			</div>
			<div class="page_next_w" style="position:absolute;bottom:0px;right:0px;width:50%;height:80px;background:#4CAF50;text-align:right;">
				<a class="page_next" href="<?=WIGPATH?>gmd/expanel.php" id="btn_next" aria-label="다음페이지">
					<span class="svg_next">
						<svg xmlns="#" viewBox="0 0 24 24">
							<path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
						</svg>
					</span>
					<span class="page_text" style="right:100px;">
						Expansion Panels
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