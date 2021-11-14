 	
 	
$('.sidebar').addClass('un_active');
// $('.sector').addClass('active_content');

$('.sign-in').click(function()
{	
	
	if($('.sidebar').hasClass('un_active'))
	{	
		$('.sidebar').removeClass('un_active');
		// $('.content').removeClass('active_content');
	}
	else
	{
		$('.sidebar').addClass('un_active');
		// $('.content').addClass('active_content');
	}
});	
$(document).mouseup(function(e)
{
	var container = $(".sidebar");
	if (!container.is(e.target) && container.has(e.target).length === 0)
	{	
		var width_device = $(window).width();
		
		if(width_device < 992)
		{
		container.removeClass('un_active');
		}
	}	
});
// ----------------order---------------
$('#product1').click(function() {
   var k = $('#product1').val()*500;
   $('#total').text("Total: $" + k +".00");
});

$('#product1').keyup((e)=> {
   if(e.keyCode==13) 
      $('#product1').click()
});

// Remove Items From Cart


// Just for testing, show all items
  $('a.btn.continue').click(function(){
    $('li.items').show(400);
  })

  