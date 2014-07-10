	var previous= "#about";
	function change(a)
	{

		var next1=a;
		var rand=Math.floor((Math.random() * 4) + 1);;
		
		switch(rand)
		{
			case 1:hide(next1);break;
			case 2:slide(next1);break;
			case 3:fade(next1);break;
			case 4:right(next1);break;
		}
		function hide (next1) {
   				 $(previous).hide(500,function(){
   				 	$(next1).show(500);
   				   	 });
   				 previous=next1;
  				}

  	function slide(next1) {
  		$(previous).slideUp(500,function(){
   				 	$(next1).slideDown(500);
   				   	 });
  		previous=next1;
  	}			

  	function fade(next1) {

  		$(previous).fadeOut(500,function(){
   				 	$(next1).fadeIn(500);
   				   	 });
  		previous=next1;
  	}

  	function right(next1){
			 $(previous).animate({ width: 'hide' },500,function(){
   				 	$(next1).animate({ width: 'show' },500); 
   					});
			}
			previous=next1;
  		}

          var current="test";
function showHide(x) {
    
    var ele = document.getElementById(current);
    ele.style.display = "none";
    ele = document.getElementById(x);
    if(ele.style.display == "block") {
            ele.style.display = "none";
      }
      else {
        ele.style.display = "block";
    }
    current=x;

    }

    function showPic(sUrl)
   {
     var x,y;
     x = event.clientX;
     y = event.clientY;
     
     document.getElementById("Layer1").innerHTML = "<img height=450 width=1035 src=\"" + sUrl + "\">";
     document.getElementById("Layer1").style.display = "block";
    }
