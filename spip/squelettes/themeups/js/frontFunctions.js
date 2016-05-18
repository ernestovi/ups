$( document ).ready(function() {
	
	document.getElementById("menuSlide").style.display = "none";
	
	//Open menu
	$("#iconMenu").click(function(){
		
		if( screen.width <= 800 ){
			
			document.getElementById("menuSlide").style.display = "inline-block";
			document.getElementById("pageContent").style.display = "none";

		}
		
		else if( screen.width > 800 ){
			
			document.getElementById("menuSlide").style.display = "inline-block";
			
			document.getElementById("iconMenu").style.display = "none";
			
			document.getElementById("textLogo").style.marginLeft = "200px";
			document.getElementById("textLogo").style.marginRight = "240px";
			
			document.getElementById("iconUser").style.marginLeft = "0px";
			
			var lineHeader3 = document.getElementById("lineHeader3");
			lineHeader3.getElementsByTagName('a')[0].style.marginLeft = "800px";

			document.getElementById("lineHeader4").style.marginLeft = "1130px";
			
			document.getElementById("popularCourse").style.marginLeft = "200px";
			
			var popularCourseTitle = document.getElementById("popularCourse");
			popularCourseTitle.getElementsByClassName("title")[0].style.width = "900px";


		}

	});
	
	$("#closeMenu").click(function(){
		
		if( screen.width <= 800 ){
			
			document.getElementById("menuSlide").style.display = "none";
			document.getElementById("pageContent").style.display = "inline";

		}
		
		else if( screen.width > 800 ){
			
			document.getElementById("menuSlide").style.display = "none";
			document.getElementById("iconMenu").style.display = "inline-block";
			
			/* Reset changed CSS values */
			
			
			document.getElementById("textLogo").style.marginLeft = null;
			document.getElementById("textLogo").style.marginRight = null;
			
			document.getElementById("iconUser").style.marginLeft = null;
			
			var lineHeader3 = document.getElementById("lineHeader3");
			lineHeader3.getElementsByTagName('a')[0].style.marginLeft = null;

			document.getElementById("lineHeader4").style.marginLeft = null;
			
			document.getElementById("popularCourse").style.marginLeft = null;
			
			var popularCourseTitle = document.getElementById("popularCourse");
			popularCourseTitle.getElementsByClassName("title")[0].style.width = null;


		}
	});

});