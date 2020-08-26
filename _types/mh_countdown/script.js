$(document).ready(function() {

	$('.filetype-mh_countdown .countdown').each(function(){
		new Countdown({
			cont: this,
			countdown: true, // true for classic countdown, false for countup
			date: $(this).data('datetime'),
			outputTranslation: {
				year: $(this).data('tyears'),
				week: $(this).data('tweeks'),
				day: $(this).data('tdays'),
				hour: $(this).data('thours'),
				minute: $(this).data('tminutes'),
				second: $(this).data('tseconds')
			},
			outputFormat: $(this).data('format'),
		}).start();
	});

});