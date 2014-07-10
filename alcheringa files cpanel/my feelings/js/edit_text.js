$('#user_input').keyup(function(){
	var user_input= $('#user_input').val();
	$('#user_text').html(user_input);
})
$('#increase_size').click(function(){
	var temp= parseInt($('#user_text').css('font-size'));
	temp++;
	$('#user_text').css('font-size', temp+'px');
	
})
$('#decrease_size').click(function(){
	var temp= parseInt($('#user_text').css('font-size'));
	temp--;
	$('#user_text').css('font-size', temp+'px');
	
})

  
    $('#submit').click(function(){
			 html2canvas($('#main_image'), {
					onrendered: function(canvas) {
					  $('#final_image').append(canvas);
					  $('#wrapper').hide();
					  $('#final').show();
					  var dataURL = canvas.toDataURL();
						$.ajax({
							  type: "POST",
							  url: "script.php",
							  data: { 
								 imgBase64: dataURL
							  },
							  success: function(data){								$('#post_option').attr('value', data);
$('#accept').attr('value', 'POST TO FACEBOOK');
$('#accept').removeAttr('disabled');
							  }
							}).done(function(o) {
							  console.log('saved'); 
							  // If you want the file to be visible in the browser 
							  // - please modify the callback in javascript. All you
							  // need is to return the url to the file, you just saved 
							  // and than put the image in your browser.
							})			
					}
				  });
  });
  