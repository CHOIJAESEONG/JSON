<?php
	@include_once("../../include/header.php");
	
?>

    <div class="container-fluid contents_container" style="position:relative;">
      <div class="row">
	    <?php
			include_once("../../include/sideMenu.php");
		?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="padding-top:15px;text-align:center;">
			<div class="row placeholders" style="padding:0px;">
				<h1 class="page-header" style="margin:15px;text-align:left;">Icons</h1>
				<ul style="text-align:left;font-size:18px;">
					<li style="margin:15px 0;padding-right:15px;">기본적으로 Framework7은 내부적으로 사용하는 아이콘 세트를 포함하고 있습니다 (예 : Back and Bars icons).</li>
					<li style="margin:15px 0;padding-right:15px;">물론 앱에서 콘텐츠를 나타내는 데 훨씬 더 많은 아이콘이 필요할 수 있습니다. 이 경우 Framework7의 iOS 테마와 함께 사용되는 Framework7 Icons 글꼴이 설계되어 있습니다. 기본적으로 Framework7 패키지에는 포함되어 있지 않으며 최신 버전의 글꼴은 Framework7 Icons 저장소에서 다운로드 할 수 있습니다.</li>
				</ul>
				<iframe src="<?=IFRPATH?>frm7/icons.php?is_ifr=1" style="border:none;width:100%;max-width:980px;height:500px;"></iframe>		
				<div class="try_btn_wrapper" style="">
					<button type="button" class="btn btn-success" ><a href="<?=IFRPATH?>frm7/icons.php" target="_blank" style="color:white;">Demo</a></button>
				</div>
			</div>
        </div>
		
		<!--Pagination-->
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2" style="padding:0px;height:80px;">
			<div class="page_prev_w" style="position:absolute;bottom:0px;left:0px;width:50%;height:80px;background:#fff;">
				<a href="<?=WIGPATH?>frm7/notification.php" class="page_prev" id="btn_prev" aria-label="이전페이지">
					<span class="svg_prev" style="color:#007aff">
						<svg xmlns="#" viewBox="0 0 24 24">
							<path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path>
							
						</svg>
					</span>	
					<span class="page_text" style="color:#007aff;">
						Notification
					</span>	
			   </a>
			</div>
			<div class="page_next_w" style="position:absolute;bottom:0px;right:0px;width:50%;height:80px;background:#fff;text-align:right;">
				<a class="page_next" href="/f_school" id="btn_next" aria-label="다음페이지">
					<span class="svg_next" style="color:#007aff">
						<svg xmlns="#" viewBox="0 0 24 24">
							<path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
						</svg>
					</span>
					<span class="page_text" style="right:100px;color:#007aff;">
						Home
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