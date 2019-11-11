				</body>
				<script src="js/jquery-ui.min.js"></script>
				<script src="js/hammer.min.js"></script>
				<script src="js/responsiveCarousel.js"></script>
				<script>
				
				/* Okay, everything is loaded. Let's go! (on dom ready) */
				$(function () {
				    /* a generic product carousel - something that might appear in the body of a e-commerce site. */
				    $('#textslider')
				        .responsiveCarousel({
				            unitWidth:          'compute',
				            target:             '#textslider .slider-target',
				            unitElement:        '#textslider .slider-target > li',
				            mask:               '#textslider .slider-mask',
				            arrowLeft:          '#textslider .arrow-left',
				            arrowRight:         '#textslider .arrow-right',
				            dragEvents:         Modernizr.touch,
				            responsiveUnitSize:function () {
				                return 1;
				            },
				            step:-1,
				            onShift:function (i) {
				                var $current = $('#selector li a[rel=frame_' + i + ']');
				                $('#selector li a').removeClass('current');
				                $current.addClass('current');
				            }
				        });
				
				    /* this next part toggles the "auto slide show" option. */
				    $('#toggle-slide-show').on('click', function (ev) {
				        ev.preventDefault();
				        $('#textslider').responsiveCarousel('toggleSlideShow');
				    });
				
				    /* this lets us jump to a slide */
				    $('#selector a').on('click', function (ev) {
				        ev.preventDefault();
				        var i = /\d/.exec($(this).attr('rel'));
				        $('#textslider').responsiveCarousel('goToSlide', i);
				    });
				
				});
				$(window).on('load',function(){
				    $('.examples').responsiveCarousel('redraw');
				});
				</script>
			<!---//End-client-testmonials---->
			</div>
		</div>
<div class="footer">
			<div class="wrap">
				<div class="footer-grid footer-grid1">
					<h4><a href="#"><img src="" alt="" /></a></h4>
					<p></p>
				</div>
				<div class="footer-grid footer-grid2">
					<h4>Contact</h4>
					<p>If you encounter a problem, feel free to contact us or post on our Discord server. The "Our Team" page under community will provide you with a means of contact.</p>
					<ul>
						
					</ul>
				</div>
				<div class="footer-grid footer-grid3">
				</div>
				<div class="footer-grid footer-grid4">
					<h4>Have ideas ?</h4>
					<p>Do not hesitate to share your suggestions on the Discord server, your help will further the development of Herofus.</p>
				</div>
				<div class="clear"> </div>
			</div>
		</div>
		<!---End-footer--->

		<!---strat-copy-right---->
		<div class="copy-right">
			<div class="wrap">
				<div class="copy-right-left">
									<small><b>Dofus®</b> and <b>Ankama®</b> are trademarks or registered trademarks of <b>Ankama Game</b> in France and / or other countries.<br />
						These terms and all related materials, logos and copyrights are related pictures <b>© Ankama Game</b>. This site is not associated in any way or is not approved by <b>Ankama Game®</b>.</small>
				</br><center><a>Programmed by Scruff</a></center>				

				</div>
				<div class="copy-right-right">
					<ul>
					</ul>
				</div>

				<div class="clear"> </div>
			</div>
			</div>
		</div>
		<!---End-copy-right---->
		<!---End-wrap---->
	</body>
</html>