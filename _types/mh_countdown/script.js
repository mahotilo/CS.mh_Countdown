$(document).ready(function() {

	$('.filetype-mh_countdown .countdown').each(function(){
		new Countdown({
			cont: this,
			countdown: $(this).data('countdown'), // true for classic countdown, false for countup
			date: $(this).data('datetime'),
			outputTranslation: {
				year: $(this).data('tyears'),
				week: $(this).data('tweeks'),
				day: $(this).data('tdays'),
				hour: $(this).data('thours'),
				minute: $(this).data('tminutes'),
				second: $(this).data('tseconds')
			},
			endCallback: function() {
			// hide finished countdown
				if ( isadmin ) {
					this.cont.parentElement.classList.add("stopped");
				} else {
					this.cont.parentElement.style.display = 'none';
				};
			},
			outputFormat: $(this).data('format'),
		}).start();

		// hide unstarted countup
		if ( ($(this).data('countdown') != "1") && (Date.parse($(this).data('datetime')) > Date.now()) ) {
			if ( isadmin ) {
				$(this).parent().addClass("stopped");
			} else {
				$(this).parent().toggle();
			};
		}
	});

});