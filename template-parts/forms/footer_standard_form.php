<?php get_template_part('template-parts/forms/reCaptchaValidation'); ?>


<form class="footer_form" id="ContactForm" action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">
	<input type=hidden name="oid" value="00D4P000000igAs">
	<!-- <input type="hidden" name="retURL" value="/thank-you/"> -->


	<div class="">
		<fieldset class="sunshine_home_footer_form">
			<input id="dtqxyurf" class="standard_page_footer_form_fn" placeholder="First Name" maxlength="50" name="dtqxyurf" size="20" type="text">
			<input id="shbousja" class="standard_page_footer_form_ln" placeholder="Last Name" maxlength="50" name="shbousja" size="20" type="text">
			<input id="mgkbysfp" class="standard_page_footer_form_em" placeholder="Email" maxlength="80" name="mgkbysfp" size="20" type="text">
			<input id="hwzqcmxh" class="standard_page_footer_form_ph" placeholder="Phone" maxlength="40" name="hwzqcmxh" size="20" type="tel">

			<input type="hidden" id="lead_source" name="lead_source" value="<?= get_field('site_name', 'option') ?>">
			<input type="hidden" id="00N4P000009WDIn" name="00N4P000009WDIn" value="Web">
			<input type="hidden" id="00N4P000009WDIu" maxlength="255" name="00N4P000009WDIu" value="SS Website">
			<input type="hidden" id="00N4P000009WDGc" name="00N4P000009WDGc" value="SS Contact Form 3">

			<!-- <div class="g-recaptcha" data-sitekey="6LdIKsQZAAAAAAuzI_j8PaADmNKDbAQR3oCw7wDF" data-callback="recaptcha_callback"></div>
			<br /> -->
			<div id="footer_home_name_email_phone_submit_btn_container">
				<input id="footer_home_name_email_phone_submit_btn " class="sunshine_form_submit_btn abovefoldformsubmission footer_home_name_email_phone footerContactForm submit_button" value="SUBMIT" type="submit" name="submitBtn">
			</div>

		</fieldset>
	</div>
</form>