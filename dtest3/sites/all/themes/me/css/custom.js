jQuery(function($) {

    /*==========================================
    GENERAL CUSTOM SCRIPTS
    =====================================================*/

	

    // LINKS SCROLLING FUNCTION 

	

	
    // PRETTYPHOTO FUNCTION 

	$("a.preview").prettyPhoto({
		social_tools: false
	});

	//ISOTOPE FUNCTION - FILTER PORTFOLIO FUNCTION
	$(window).load(function(){
		$portfolio = $('.portfolio-items');
		$portfolio.isotope({
			itemSelector : 'li',
			layoutMode : 'fitRows'
		});
		$portfolio_selectors = $('.portfolio-filter >li>a');
		$portfolio_selectors.on('click', function(){
			$portfolio_selectors.removeClass('active');
			$(this).addClass('active');
			var selector = $(this).attr('data-filter');
			$portfolio.isotope({ filter: selector });
			return false;
		});
	});

   

    /*==========================================
    WRITE  YOUR  SCRIPTS BELOW
    =====================================================*/

});