$( document ).ready(function() {
	
	document.getElementById("menuSlide").style.display = "none";
	
	//Open menu
	$("#iconMenu").click(function(){
		
		if( screen.width =< 800 ){
			
			document.getElementById("menuSlide").style.display = "inline-block";
			document.getElementById("pageContent").style.display = "none";

		}
		
		else if( screen.width >= 1280 ){
			
			document.getElementById("menuSlide").style.display = "inline-block";
			document.getElementById("pageContent").style.display = "none";

		}

	});
	
	$("#closeMenu").click(function(){
		
		if( screen.width < 800 ){
			
			document.getElementById("menuSlide").style.display = "none";
			document.getElementById("pageContent").style.display = "inline";

		}
	});

});