var desc = $('.desc').text("Nội dung mới");
var content = $('.content').html();
// cách lấy value của input , select , textarea
var product_name = $('#input_name').val();

$('#btn-save').on('click',function()
{
	var product_name = $('#input_name').val();
	$('form').submit();
});


// Tìm hiểu jquery validate

$('form').validate ({
	rules:{
		product_name:{
		required: true,
		minlength:3,
		email:true
		},
	},
	messages:{
	product_name:
	{
		required: 'Vui lòng nhập tên sản phẩm',
		minlength:'Nhập ít nhất 3 ký tự',
		email:'Vui lòng nhập đúng định dạng email'
	}
	}
});

$('a').on('click',function(event)
{
	// Hàm đè sự kiện mặc định của thẻ a
	
});


$('.open_sidebar').on('click',function(event)
{
	event.stopPropagation();
	if($('.sidebar').hasClass('un_active'))
	{
		$('.sidebar').removeClass('un_active');
		$('.content').removeClass('active_content');
	}else
	{
		$('.sidebar').addClass('un_active');
		$('.content').addClass('active_content');
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

$(document).ready(function()
{
	$(window).resize(function()
	{
		var width_device = $(window).width();
		if(width_device >= 992)
		{
		 	$('.content').removeClass('active_content');
		 	$('.sidebar').removeClass('un_active');
		}
	});
});