{ia_add_media files='css:_IA_URL_modules/qaptcha/templates/front/css/QapTcha.jquery, js:_IA_URL_modules/qaptcha/js/jquery/jquery-ui, js:_IA_URL_modules/qaptcha/js/jquery/jquery.ui.touch, js:_IA_URL_modules/qaptcha/js/jquery/QapTcha.jquery'}

<div class="QapTcha"></div>

{ia_add_js}
$(document).ready(function()
{
	$('.QapTcha').QapTcha({
		disabledSubmit: false,
		autoRevert: true,
		autoSubmit:false
	});
});
{/ia_add_js}