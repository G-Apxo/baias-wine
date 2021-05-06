<?php include 'include/head.php';?>
<body>
   <div class="wrap fullWidth menuStyle1 menuSmartScrollShow blogStyleExcerpt bodyStyleFullWide menuStyleFixed visibleMenuDisplay logoImageStyle sliderShow">
   <div id="wrapBox" class="wrapBox">
   <?php include 'include/navigation.php';?>
   <div class="wrapContent">
				<div class="wrapWide">
					<div class=" content">
						<article class="postContent">
							<div class="sc_section header_contact sc_align_center custom_nomar_B">
								<h4 class="sc_title sc_title_center custom_title_7">CONTACT</h4>
							</div>
						<div class="sc_content mainWrap">
								<div class="sc_section sc_align_center sc_columns_2_3">
									<div class="sc_columns sc_columns_3 sc_columns_indent">
										<div class="sc_columns_item  sc_columns_item_coun_1">
											<h5 class="sc_title sc_title_left custom_mar_9">Contact Info</h5>
											<div class="sc_contact_info">
												<div class="sc_contact_info_wrap">
													<div class="sc_contact_info_item sc_contact_address_1">
														<h5 class="sc_contact_info_lable">Adress:</h5><b>Baia’s Wine 1000, Meore Obcha, Bagdati, Georgia</b>
													</div>
													<div class="sc_contact_info_item sc_contact_phone_1">
														<h5 class="sc_contact_info_lable">Phone:</h5><b>+995 599 682 822</b>
													</div>
													<div class="sc_contact_info_item sc_contact_email ">
														<h5 class="sc_contact_info_lable">Email:<h5><b  style="color:#898989;">baiaswine@gmail.com</b>
													</div>
												</div>
											</div>
										</div>
										<div class="sc_columns_item sc_columns_item_coun_2 colspan_2">
											<h5 class="sc_title sc_title_left custom_mar_9">Leave a message</h5>
											<div class="sc_form" data-formtype="contact">
												<form method="post" action="include/sendmail.php">
													<div class="sc_columns_3 sc_columns_indent">
														<div class="sc_columns_item sc_form_username">
															<label class="required" for="sc_form_contact_username">Name</label>
															<input id="sc_form_contact_username" type="text" name="username">
														</div>
														<div class="sc_columns_item sc_form_email">
															<label class="required" for="sc_form_contact_email">E-mail</label>
															<input id="sc_form_contact_email" type="email" name="email">
														</div>
														<div class="sc_columns_item sc_form_subj">
															<label for="sc_form_contact_subj">Subject</label>
															<input id="sc_form_contact_subj" type="text" name="subject">
														</div>
													</div>
													<div class="sc_form_message">
														<label class="required" for="sc_form_contact_message">Your Message</label>
														<textarea id="sc_form_contact_message" class="textAreaSize" name="message" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 84px;"></textarea>
													</div>
													<div class="sc_form_button">
														<button  class="sc_button  sc_button_skin_dark sc_button_style_bg sc_button_size_medium inited" type="sumit">Send Message</button>
													</div>
													<div class="sc_result sc_infobox sc_infobox_closeable inited"></div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</article>
					</div>
				</div>
			</div>
   <?php include 'include/footer.php';?>
</body>
</html>