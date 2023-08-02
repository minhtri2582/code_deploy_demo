$(document).ready(function() {
	$(document).on('click', '.employer', function(event) {
		$(this).toggleClass('collapse-active')
		$(this).children('.acordion-content').slideToggle()
	})
})
