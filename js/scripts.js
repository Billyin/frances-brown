/* JavaScript Document */

(function ($) {
	
	$(document).ready(function() {
		
		 var $window = $(window),
		      flexslider;
		 
		  // tiny helper function to add breakpoints
		  function getGridSize() {
		    return (window.innerWidth < 600) ? 2 :
		           (window.innerWidth < 900) ? 2 : 3;
		  }
		 
		  $(function() {
		    SyntaxHighlighter.all();
		  });
		
		$('.flexslider').flexslider({
		    animation: "slide",
			controlNav: false,
		    animationLoop: false,
		    itemWidth: 180,
		    itemMargin: 0,
		    minItems: getGridSize(),
		    maxItems: getGridSize()
		});	
		
		$window.resize(function() {
		    var gridSize = getGridSize();
		 
		    flexslider.vars.minItems = gridSize;
		    flexslider.vars.maxItems = gridSize;
		  });
			
	});//Document.ready end
	
})(jQuery);




