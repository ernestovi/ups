$( document ).ready(function() {
	
	document.getElementById("menuSlide").style.display = "none";
	
	//Open menu
	$("#iconMenu").click(function(){
				
		if( screen.width < 1024 ){
			
			document.getElementById("menuSlide").style.display = "inline-block";
			document.getElementById("pageContent").style.display = "none";

		}
		
		else if( screen.width >= 1280 ){
			
			document.getElementById("menuSlide").style.display = "inline-block";
			
			document.getElementById("iconMenu").style.display = "none";
			
			document.getElementById("logo").style.marginLeft = "290px";
			document.getElementById("logo").style.marginRight = "330px";
			
			document.getElementById("textLogo").style.marginLeft = "150px";
			document.getElementById("textLogo").style.marginRight = "210px";
			
			document.getElementById("iconUser").style.marginLeft = "0px";
			
			var lineHeader3 = document.getElementById("lineHeader3");
			lineHeader3.getElementsByTagName('a')[0].style.marginLeft = "720px";

			document.getElementById("lineHeader4").style.marginLeft = "1050px";
			
			document.getElementById("popularCourse").style.marginLeft = "200px";
			
			var popularCourseTitle = document.getElementById("popularCourse");
			popularCourseTitle.getElementsByClassName("title")[0].style.width = "900px";


		}
		
		else if( (screen.width < 1280) && (screen.width >= 1024) ){
			
			document.getElementById("menuSlide").style.display = "inline-block";
			
			document.getElementById("iconMenu").style.display = "none";
			
			document.getElementById("logo").style.marginLeft = "245px";
			document.getElementById("logo").style.marginRight = "255px";

			document.getElementById("textLogo").style.marginLeft = "120px";
			document.getElementById("textLogo").style.marginRight = "120px";
			
			document.getElementById("iconUser").style.marginLeft = "0px";
			
			var lineHeader3 = document.getElementById("lineHeader3");
			lineHeader3.getElementsByTagName('a')[0].style.marginLeft = "600px";

			document.getElementById("lineHeader4").style.marginLeft = "900px";
			
			document.getElementById("popularCourse").style.marginLeft = "280px";
			
			var popularCourseTitle = document.getElementById("popularCourse");
			popularCourseTitle.getElementsByClassName("title")[0].style.width = "700px";


		}
		
	

	});
	
	$("#closeMenu").click(function(){
		
		if( screen.width < 1024 ){
			
			document.getElementById("menuSlide").style.display = "none";
			document.getElementById("pageContent").style.display = "inline";

		}
		
		else if( screen.width >= 1280 ){
			
			document.getElementById("menuSlide").style.display = "none";
			document.getElementById("iconMenu").style.display = "inline-block";
			
			/* Reset changed CSS values */
			
			document.getElementById("logo").style.marginLeft = null;
			document.getElementById("logo").style.marginRight = null;
			
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
		
		else if( (screen.width < 1280) && (screen.width >= 1024) ){
			
			document.getElementById("menuSlide").style.display = "none";
			document.getElementById("iconMenu").style.display = "inline-block";
			
			/* Reset changed CSS values */
			
			document.getElementById("logo").style.marginLeft = null;
			document.getElementById("logo").style.marginRight = null;

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