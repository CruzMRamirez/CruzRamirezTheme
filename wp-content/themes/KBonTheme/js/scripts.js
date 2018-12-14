(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
		$(document).scroll(function () {
			var $nav = $(".fixed-top");
			$nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
		  });

		var modal = document.getElementById("myModal");
		var btn = document.getElementById("menubtn");
		var span = document.getElementById("close");
		
		function show() {
		modal.style.display = "block";
		}
		function hide() {
		modal.style.display = "none";
		}
		
		btn.onclick = function() { show(); }
		span.onclick = function() { hide(); }
		
		window.onclick = function(event) {
			if (event.target == modal) { hide(); }
		}
		
	});
	
})(jQuery, this);
