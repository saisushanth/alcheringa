$(window).load(function() {
    //$("#background2").addClass('middle');
	//$("#background1").addClass('outer');
	$("#background3").removeClass('inner');
	//sleep(5000);
	$(".loader").fadeOut("10000");
	$("#mask").fadeIn("10000");
	
	
})

function sleep(milliseconds) {
  var start = new Date().getTime();
  for (var i = 0; i < 1e7; i++) {
    if ((new Date().getTime() - start) > milliseconds){
      break;
    }
  }
}

$(document).ready(function() {
            $("#mask").hide();
			$("#background3").addClass('inner');

			window.location.href = "#item7";
		

			$('a.panel').click(function () {

				$('a.panel').removeClass('selected');
				$(this).addClass('selected');
				
				current = $(this);
				
				$('#wrapper').scrollTo($(this).attr('href'), 800);		
				
				return false;
			});

			$(window).resize(function () {
				resizePanel();
			});
			
			$("#landing_button").mouseenter(function() {
                $("#flicker")[0].play();
            });
		});

		function resizePanel() {

			width = $(window).width();
			height = $(window).height();

			mask_width = width * $('.item').length;
				
			$('#debug').html(width  + ' ' + height + ' ' + mask_width);
				
			$('#wrapper, .item').css({width: width, height: height});
			$('#mask').css({width: mask_width, height: height});
			$('#wrapper').scrollTo($('a.selected').attr('href'), 0);
				
		}
		
		function pop(div) {
			document.getElementById(div).style.display = 'block';
		}
		function hide(div) {
			document.getElementById(div).style.display = 'none';
		}
		//To detect escape button
		document.onkeydown = function(evt) {
			evt = evt || window.event;
			if (evt.keyCode == 30) {
				if(document.getElementById('popDiv1').style.display == 'block')
					hide('popDiv1');
				else if(document.getElementById('popDiv2').style.display == 'block')
					hide('popDiv2');
				else if(document.getElementById('popDiv3').style.display == 'block')
					hide('popDiv3');
				else if(document.getElementById('popDiv4').style.display == 'block')
					hide('popDiv4');
					
				else if(document.getElementById('popdiv1').style.display == 'block')
					hide('popdiv1');
				else if(document.getElementById('popdiv2').style.display == 'block')
					hide('popdiv2');
				else if(document.getElementById('popdiv3').style.display == 'block')
					hide('popdiv3');
				else if(document.getElementById('popdiv4').style.display == 'block')
					hide('popdiv4');
				else if(document.getElementById('popdiv5').style.display == 'block')
					hide('popdiv5');
				else if(document.getElementById('popdiv6').style.display == 'block')
					hide('popdiv6');
				else if(document.getElementById('popdiv7').style.display == 'block')
					hide('popdiv7');
				else if(document.getElementById('popdiv8').style.display == 'block')
					hide('popdiv8');
				else if(document.getElementById('popdiv9').style.display == 'block')
					hide('popdiv9');
				else if(document.getElementById('popdiv9').style.display == 'block')
					hide('popdiv10');

			}
		};
		
			function reset(){
		$('#panel2').slideUp('slow');
		$('#panel3').slideUp('slow');
		$('#panel4').slideUp('slow');
		$('#panel5').slideUp('slow');
		$('#panel6').slideUp('slow');
		$('#panel7').slideUp('slow');
		$('#panel1').slideUp('slow');
		hide('popDiv1');
		hide('popDiv2');
		hide('popDiv3');
		hide('popDiv4');
		hide('popdiv1');
		hide('popdiv2');
		hide('popdiv3');
		hide('popdiv4');
		hide('popdiv5');
		hide('popdiv6');
		hide('popdiv7');
		hide('popdiv8');
		hide('popdiv9');

	}


		
		var hasBeenClicked = false;

	function panelwork1(){
	

		$('#panel2').slideUp('fast');
		$('#panel3').slideUp('fast');
		$('#panel4').slideUp('fast');
		$('#panel5').slideUp('fast');
		$('#panel6').slideUp('fast');
		$('#panel7').slideUp('fast');
		$('#panel1').slideToggle('fast');
		var hasBeenClicked = true;

			
	}

	function panelwork2(){
	

		$('#panel1').slideUp('fast');
		$('#panel3').slideUp('fast');
		$('#panel4').slideUp('fast');
		$('#panel5').slideUp('fast');
		$('#panel6').slideUp('fast');
		$('#panel7').slideUp('fast');
		$('#panel2').slideToggle('fast');
			
	}

	function panelwork4(){
	

		$('#panel2').slideUp('fast');
		$('#panel3').slideUp('fast');
		$('#panel1').slideUp('fast');
		$('#panel5').slideUp('fast');
		$('#panel6').slideUp('fast');
		$('#panel7').slideUp('fast');
		$('#panel4').slideToggle('fast');
			
	}

	function panelwork5(){
	

		$('#panel2').slideUp('fast');
		$('#panel3').slideUp('fast');
		$('#panel4').slideUp('fast');
		$('#panel1').slideUp('fast');
		$('#panel6').slideUp('fast');
		$('#panel7').slideUp('fast');
		$('#panel5').slideToggle('fast');
			
	}

	function panelwork6(){
	

		$('#panel2').slideUp('fast');
		$('#panel3').slideUp('fast');
		$('#panel4').slideUp('fast');
		$('#panel5').slideUp('fast');
		$('#panel1').slideUp('fast');
		$('#panel7').slideUp('fast');
		$('#panel6').slideToggle('fast');
			
	}

	function panelwork3(){
	

		$('#panel2').slideUp('fast');
		$('#panel7').slideUp('fast');
		$('#panel4').slideUp('fast');
		$('#panel5').slideUp('fast');
		$('#panel6').slideUp('fast');
		$('#panel1').slideUp('fast');
		$('#panel3').slideToggle('fast');
			
	}
	var currentdisplay="#maincontentmusic";
		function disp(a){
						  $(document).ready(function() {
     							$(currentdisplay).fadeOut(200,function(){    
    								$(a).fadeIn(200,function(){
    	    								});
    								currentdisplay=a;
  										});
									});
								};   

		var currenttab="#abtraga";
		function displ(b){
						  $(document).ready(function() {
     							$(currenttab).fadeOut(200,function(){    
    								$(b).fadeIn(200,function(){
    										});
    								currenttab=b;
  										});
									});   
				};
				var currenttabb="#abtvoa";
		function displl(c){
					  $(document).ready(function() {
     							$(currenttabb).fadeOut(200,function(){    
    								$(c).fadeIn(200,function(){
    										});
    								currenttabb=c;
  										});
									});   
				};
				var currenttabbb="#abtrhapsody";
		function displll(d){
					  $(document).ready(function() {
     							$(currenttabbb).fadeOut(200,function(){    
    								$(d).fadeIn(200,function(){
    										});
    								currenttabbb=d;
  										});
									});   
				};
				var cdis="#maincontentclass";
		function c(a){
						  $(document).ready(function() {
     							$(cdis).fadeOut(200,function(){    
    								$(a).fadeIn(200,function(){
    	    								});
    								cdis=a;
  										});
									});
								};   

		var curr="#abtrocko";
		function cl(b){
						  $(document).ready(function() {
     							$(curr).fadeOut(200,function(){    
    								$(b).fadeIn(200,function(){
    										});
    								curr=b;
  										});
									});   
				};
				var cur="#abtmnm";
		function cla(c){
					  $(document).ready(function() {
     							$(cur).fadeOut(200,function(){    
    								$(c).fadeIn(200,function(){
    										});
    								cur=c;
  										});
									});   
				};
				var cuta="#abthotcot";
		function clas(d){
					  $(document).ready(function() {
     							$(cuta).fadeOut(200,function(){    
    								$(d).fadeIn(200,function(){
    										});
    								cuta=d;
  										});
									});   
				};
				var ct="#abtcrossfade";
		function kfc(e){
					  $(document).ready(function() {
     							$(ct).fadeOut(200,function(){    
    								$(e).fadeIn(200,function(){
    										});
    								ct=e;
  										});
									});   
				};
				var cut="#abtroadies";
		function cs(e){
					  $(document).ready(function() {
     							$(cut).fadeOut(200,function(){    
    								$(e).fadeIn(200,function(){
    										});
    								cut=e;
  										});
									});   
				};

				var cy="#maincontentdance";
		function da(a){
						  $(document).ready(function() {
     							$(cy).fadeOut(200,function(){    
    								$(a).fadeIn(200,function(){
    	    								});
    								cy=a;
  										});
									});
								};   

		var cb="#abtelectric";
		function d(b){
						  $(document).ready(function() {
     							$(cb).fadeOut(200,function(){    
    								$(b).fadeIn(200,function(){
    										});
    								cb=b;
  										});
									});   
				};
					var cuy="#abtstepup";
		function dan(c){
					  $(document).ready(function() {
     							$(cuy).fadeOut(200,function(){    
    								$(c).fadeIn(200,function(){
    										});
    								cuy=c;
  										});
									});   
				};
				var cu="#abtjagger";
		function danc(d){
					  $(document).ready(function() {
     							$(cu).fadeOut(200,function(){    
    								$(d).fadeIn(200,function(){
    										});
    								cu=d;
  										});
									});   
				};
				var ctu="#abtnavras";
		function dc(e){
					  $(document).ready(function() {
     							$(ctu).fadeOut(200,function(){    
    								$(e).fadeIn(200,function(){
    										});
    								ctu=e;
  										});
									});   
				};
				var cut="#abtroadies";
		function cs(e){
					  $(document).ready(function() {
     							$(cut).fadeOut(200,function(){    
    								$(e).fadeIn(200,function(){
    										});
    								cut=e;
  										});
									});   
				};
						var ce="#maincontentperforming";
		function p(a){
						  $(document).ready(function() {
     							$(ce).fadeOut(200,function(){    
    								$(a).fadeIn(200,function(){
    	    								});
    								ce=a;
  										});
									});
								};   

		var citr="#abttheatrix";
		function pe(b){
						  $(document).ready(function() {
     							$(citr).fadeOut(200,function(){    
    								$(b).fadeIn(200,function(){
    										});
    								citr=b;
  										});
									});   
				};
					var cq="#abthb";
		function per(c){
					  $(document).ready(function() {
     							$(cq).fadeOut(200,function(){    
    								$(c).fadeIn(200,function(){
    										});
    								cq=c;
  										});
									});   
				};
				var cw="#abtwss";
		function perf(d){
					  $(document).ready(function() {
     							$(cw).fadeOut(200,function(){    
    								$(d).fadeIn(200,function(){
    										});
    								cw=d;
  										});
									});   
				};
				var ci="#abteee";
		function perfo(e){
					  $(document).ready(function() {
     							$(ci).fadeOut(200,function(){    
    								$(e).fadeIn(200,function(){
    										});
    								ci=e;
  										});
									});   
				};
				var cz="#maincontentsports";
		function s(a){
						  $(document).ready(function() {
     							$(cz).fadeOut(200,function(){    
    								$(a).fadeIn(200,function(){
    	    								});
    								cz=a;
  										});
									});
								};   

		var cx="#abtarm";
		function sp(b){
						  $(document).ready(function() {
     							$(cx).fadeOut(200,function(){    
    								$(b).fadeIn(200,function(){
    										});
    								cx=b;
  										});
									});   
				};
					var cc="#abt5on5";
		function spo(c){
					  $(document).ready(function() {
     							$(cc).fadeOut(200,function(){    
    								$(c).fadeIn(200,function(){
    										});
    								cc=c;
  										});
									});   
				};
				var cv="#maincontentdigital";
		function dig(a){
						  $(document).ready(function() {
     							$(cv).fadeOut(200,function(){    
    								$(a).fadeIn(200,function(){
    	    								});
    								cv=a;
  										});
									});
								};   

		var cn="#abtcustom";
		function di(b){
						  $(document).ready(function() {
     							$(cn).fadeOut(200,function(){    
    								$(b).fadeIn(200,function(){
    										});
    								cn=b;
  										});
									});   
				};
					var cm="#abtminimize";
		function digi(c){
					  $(document).ready(function() {
     							$(cm).fadeOut(200,function(){    
    								$(c).fadeIn(200,function(){
    										});
    								cm=c;
  										});
									});   
				};
				var cbk="#abtad-dict";
		function dic(d){
					  $(document).ready(function() {
     							$(cbk).fadeOut(200,function(){    
    								$(d).fadeIn(200,function(){
    										});
    								cbk=d;
  										});
									});   
				};
				var ca="#abtcut";
		function dix(e){
					  $(document).ready(function() {
     							$(ca).fadeOut(200,function(){    
    								$(e).fadeIn(200,function(){
    										});
    								ca=e;
  										});
									});   
				};
				var cd="#abtsnapthrillz";
		function dib(e){
					  $(document).ready(function() {
     							$(cd).fadeOut(200,function(){    
    								$(e).fadeIn(200,function(){
    										});
    								cd=e;
  										});
									});   
				};
				
		var cab="#maincontentfine";
		function f(a){
						  $(document).ready(function() {
     							$(cab).fadeOut(200,function(){    
    								$(a).fadeIn(200,function(){
    	    								});
    								cab=a;
  										});
									});
								};   

		var can="#abtbp";
		function fi(b){
						  $(document).ready(function() {
     							$(can).fadeOut(200,function(){    
    								$(b).fadeIn(200,function(){
    										});
    								can=b;
  										});
									});   
				};
					var cam="#abtitt";
		function fin(c){
					  $(document).ready(function() {
     							$(cam).fadeOut(200,function(){    
    								$(c).fadeIn(200,function(){
    										});
    								cam=c;
  										});
									});   
				};
				var cbi="#abtsog";
		function fine(d){
					  $(document).ready(function() {
     							$(cbi).fadeOut(200,function(){    
    								$(d).fadeIn(200,function(){
    										});
    								cbi=d;
  										});
									});   
				};
				var car="#abtcc";
		function finea(e){
					  $(document).ready(function() {
     							$(car).fadeOut(200,function(){    
    								$(e).fadeIn(200,function(){
    										});
    								car=e;
  										});
									});   
				};
				var crab="#maincontentalfaaz";
		function a(a){
						  $(document).ready(function() {
     							$(crab).fadeOut(200,function(){    
    								$(a).fadeIn(200,function(){
    	    								});
    								crab=a;
  										});
									});
								};   

		var cane="#abtjam";
		function al(b){
						  $(document).ready(function() {
     							$(cane).fadeOut(200,function(){    
    								$(b).fadeIn(200,function(){
    										});
    								cane=b;
  										});
									});   
				};
					var came="#abtzephyr";
		function alf(c){
					  $(document).ready(function() {
     							$(came).fadeOut(200,function(){    
    								$(c).fadeIn(200,function(){
    										});
    								came=c;
  										});
									});   
				};
				var cabi="#abtmuse";
		function alfa(d){
					  $(document).ready(function() {
     							$(cabi).fadeOut(200,function(){    
    								$(d).fadeIn(200,function(){
    										});
    								cabi=d;
  										});
									});   
				};
				var care="#abtwtgw";
		function alfaa(e){
					  $(document).ready(function() {
     							$(care).fadeOut(200,function(){    
    								$(e).fadeIn(200,function(){
    										});
    								care=e;
  										});
									});   
				};
				var currentdispla="#maincontentquiz";
		function q(a){
						  $(document).ready(function() {
     							$(currentdispla).fadeOut(200,function(){    
    								$(a).fadeIn(200,function(){
    	    								});
    								currentdispla=a;
  										});
									});
								};   

		var currettab="#abtgen";
		function qu(b){
						  $(document).ready(function() {
     							$(currettab).fadeOut(200,function(){    
    								$(b).fadeIn(200,function(){
    										});
    								currettab=b;
  										});
									});   
				};
				var currnttabb="#abtbuss";
		function qui(c){
					  $(document).ready(function() {
     							$(currnttabb).fadeOut(200,function(){    
    								$(c).fadeIn(200,function(){
    										});
    								currnttabb=c;
  										});
									});   
				};
				var curenttabbb="#abtflames";
		function quiz(d){
					  $(document).ready(function() {
     							$(curenttabbb).fadeOut(200,function(){    
    								$(d).fadeIn(200,function(){
    										});
    								curenttabbb=d;
  										});
									});   
				};
					var crenttabbb="#abtindia";
		function quizz(d){
					  $(document).ready(function() {
     							$(crenttabbb).fadeOut(200,function(){    
    								$(d).fadeIn(200,function(){
    										});
    								crenttabbb=d;
  										});
									});   
				};