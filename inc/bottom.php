	</div></div>
	<div id="footer"><div class="inner">
		<p>Calls to 08 numbers will cost 7p per minute plus your network operator’s access charge.</p>
		<p>©Titanic the Musical 2018 | A <a href="https://www.swd.uk.com" target="_blank">SWD</a> / <a href="https://www.dekretser.com" target="_blank">HDK</a> site</p>
	</div></div>
</div>
<script>
	$(function() {
		$("#toggle").click(function(){
			$("#nav").addClass("toggled-on");
			return false;
		});
		$("#nav ul li a").click(function(){
			$("#nav").removeClass("toggled-on");
		});
	});
</script>

<?php if($prettyphoto == 'y'){ ?>
<script type="text/javascript" charset="utf-8">
$(document).ready(function(){
	$("ul.cc li a[rel^='prettyPhoto']").prettyPhoto({
		allow_resize: false,
		theme: 'titanic',
		overlay_gallery: false,
		markup: '<div class="pp_pic_holder"> \
					<div class="ppt">&nbsp;</div> \
					<div class="pp_top"> \
					</div> \
					<div class="pp_content_container"> \
						<div class="pp_left"> \
						<div class="pp_right"> \
							<div class="pp_content"> \
								<div class="pp_loaderIcon"></div> \
								<div class="pp_fade"> \
									<a href="#" class="pp_expand" title="Expand the image">Expand</a> \
									<div class="pp_details"> \
										<p class="pp_description"></p> \
										<a class="pp_close" href="#">Close</a> \
									</div> \
									<div class="pp_hoverContainer topright"> \
										<a class="pp_next" href="#">next</a> \
										<a class="pp_previous" href="#">previous</a> \
									</div> \
									<div id="pp_full_res"></div> \
									<div class="pp_details"> \
									</div> \
								</div> \
							</div> \
						</div> \
						</div> \
					</div> \
					<div class="pp_bottom"> \
					</div> \
				</div> \
				<div class="pp_overlay"></div>',
		social_tools: '',

	});
	$("ul.gallery li a[rel^='prettyPhoto']").prettyPhoto({
		theme: 'titanic',
		overlay_gallery: false,
		markup: '<div class="pp_pic_holder"> \
					<div class="ppt">&nbsp;</div> \
					<div class="pp_top"> \
					</div> \
					<div class="pp_content_container"> \
						<div class="pp_left"> \
						<div class="pp_right"> \
							<div class="pp_content"> \
								<div class="pp_loaderIcon"></div> \
								<div class="pp_fade"> \
									<div class="pp_details"> \
										<a class="pp_close" href="#">Close</a> \
									</div> \
									<div class="pp_hoverContainer"> \
										<a class="pp_next" href="#">next</a> \
										<a class="pp_previous" href="#">previous</a> \
									</div> \
									<div id="pp_full_res"></div> \
									<div class="pp_details"> \
										<p class="pp_description"></p> \
									</div> \
								</div> \
							</div> \
						</div> \
						</div> \
					</div> \
					<div class="pp_bottom"> \
					</div> \
				</div> \
				<div class="pp_overlay"></div>',
		social_tools: '',

	});
});
</script>
<?php } ?>
</body>
</html>