<footer class="footerWidget">
				<div class="main">
					<div class="sc_columns_4 sc_columns_indent widget_area">
						<aside class="sc_columns_item widgetWrap widget_socials">
							<h5 class=" title">Follow us</h5>
							<div class="widget_inner">
								<div class="logo_descr">Connect to our social media channels and dive deep into the magic of the wine making process.</div>
								<ul class="social_style_images">
									<li><a class="social_icons" href="https://www.facebook.com/baiaswine" target="_blank"><img src="images/facebook.png" alt=""/></a></li>
									<!-- <li><a class="social_icons" href="https://www.behance.net/themerex" target="_blank"><img src="images/behance.png" alt=""/></a></li> -->
									<li><a class="social_icons" href="https://twitter.com/BaiasWine" target="_blank"><img src="images/twitter.png" alt=""/></a></li>
									<li><a class="social_icons" href="https://www.instagram.com/baias_wine/" target="_blank"><img src="images/instagram-icon.jpg" alt=""/></a></li>
								</ul>
								<div class="copy_descr">© Baia'sWine 2021. All Rights Reserved.</div>
							</div>
						</aside>
						<aside class="sc_columns_item widgetWrap widget_socials">
							<h5 class=" title">ADDRESS</h5>
							<div class="widget_inner">
								<div class="logo_descr">Baia’s Wine 1000, Meore Obcha, Bagdati, Georgia</div>
							</div>
						</aside>
						<div id="Map" style="width:50%;height:250px;"></div>

					</div>
				</div>
			</footer>
		</div>
	</div>
	<div class="buttonScrollUp upToScroll icon-up-open-micro"></div>
	<div id="user-popUp" class="user-popUp mfp-with-anim mfp-hide">
		<div class="sc_tabs sc_tabs sc_tabs_style_1 sc_tabs_effects">
			<ul class="sc_tabs_titles">
				<li><a href="#loginForm" class="loginFormTab">Log In</a></li>
				<li><a href="#registerForm" class="registerFormTab">Create an Account</a></li>
			</ul>
			<div class="sc_tabs_array">
				<div id="loginForm" class="formItems loginFormBody sc_columns_2">
					<form  method="post" name="login_form" class="formValid">
						<div class="sc_columns_item">
							<input type="hidden" name="redirect_to" value=""/>
							<ul class="formList">
								<li class="formLogin">
									<input type="text" id="login" name="log" value="" placeholder="Email">
								</li>
								<li class="formPass">
									<input type="password" id="password" name="pwd" value="" placeholder="Password">
								</li>
								<li class="remember">
									<a href="" class="forgotPwd">Forgot password?</a>
									<input type="checkbox" value="forever" id="rememberme" name="rememberme">
									<label for="rememberme">Remember me</label>
								</li>
								<li class="formButton"><a href="#" class="sc_button sc_button_skin_global sc_button_style_bg sc_button_size_medium">Login</a></li>
							</ul>
						</div>
						<div class="sc_columns_item">
							<ul class="formList">
								<li>You can login using your social profile</li>
								<li class="loginSoc">
									<a href="#" class="iconLogin fb icon-facebook"></a>
									<a href="#" class="iconLogin tw icon-twitter"></a>
									<a href="#" class="iconLogin gg icon-gplus"></a>
								</li>
								<li><a href="#">Problem with login?</a></li>
							</ul>
						</div>
						<div class="sc_result result sc_infobox sc_infobox_closeable"></div>
					</form>
				</div>
				<div id="registerForm" class="formItems registerFormBody sc_columns_2">
					<form name="register_form" method="post" class="formValid">
						<input type="hidden" name="redirect_to" value=""/>
						<div class="sc_columns_item">
							<ul class="formList">
								<li class="formUser">
									<input type="text" id="registration_username" name="registration_username" value="" placeholder="User name (login)">
								</li>
								<li class="formLogin">
									<input type="text" id="registration_email" name="registration_email" value="" placeholder="E-mail">
								</li>
								<li class="i-agree">
									<input type="checkbox" value="forever" id="i-agree" name="i-agree">
									<label for="i-agree">I agree with</label> <a href="#">Terms & Conditionst</a>
								</li>
								<li class="formButton"><a href="" class="sc_button sc_button_skin_dark sc_button_style_bg sc_button_size_medium">Sing UP</a></li>
							</ul>
						</div>
						<div class="sc_columns_item">
							<ul class="formList">
								<li class="formPass">
									<input type="password" id="registration_pwd" name="registration_pwd" value="" placeholder="Password">
								</li>
								<li class="formPass">
									<input type="password" id="registration_pwd2" name="registration_pwd2" value="" placeholder="Confirm Password">
								</li>
							</ul>
						</div>
						<div class="sc_result result sc_infobox sc_infobox_closeable"></div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script type='text/javascript' src='js/vendor/jQuery/jquery.js'></script>
	<script type='text/javascript' src='js/vendor/jQuery/jquery-migrate.js'></script>
	<script type='text/javascript' src='js/vendor/revslider/themepunch.tools.min.js'></script>
	<script type='text/javascript' src='js/vendor/revslider/themepunch.revolution.min.js'></script>
	<script type='text/javascript' src='js/vendor/revslider/sliders.js'></script>
	<script type='text/javascript' src='js/vendor/jQuery/core.min.js'></script>
	<script type='text/javascript' src='js/vendor/jQuery/widget.min.js'></script>
	<script type='text/javascript' src='js/vendor/jQuery/tabs.min.js'></script>
	<script type='text/javascript' src='js/vendor/magnific/magnific-popup.min.js'></script>
	<script type='text/javascript' src='js/vendor/superfish.js'></script>
	<script type='text/javascript' src='js/custom/utils.js'></script>
	<script type='text/javascript' src='js/custom/front.js'></script>
	<script type='text/javascript' src='js/custom/shortcodes_init.js'></script>
	<script type='text/javascript' src='js/vendor/jQuery/effect.min.js'></script>
	<script type='text/javascript' src='js/vendor/jQuery/effect-slide.js'></script>
	<script type='text/javascript' src='js/vendor/isotope.min.js'></script>
	<script type='text/javascript' src='js/vendor/parallax.js'></script>
	<script>
// Initialize and add the map
function initMap() {
  // The location of Tbilisi 41.71168174457733, 44.824088164708066
  const Obcha = { lat: 41.9539781, lng: 43.3003899 };
  // The map, centered at Tbilisi
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 13,
    center: Obcha,
  });
  // The marker, positioned at Tbilisi
  const marker = new google.maps.Marker({
    position: Obcha,
    map: map,
  });
}



$(document).ready(function () {
  $('.owl-next').css('left', $('.owl-stage-outer').width())
  $(window).resize(function(){
    $('.owl-next').css('left', $('.owl-stage-outer').width())

  });
});
	</script>
 <script
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3oSDEMKsJraY-0I83D3pEHNsey3AF3do&callback=initMap&libraries=&v=weekly"
  defer
></script>