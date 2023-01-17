$(window).scroll(function()
{
	if ($(this).scrollTop()>50) 
	{
		$(".bg-light").addClass("red")
	}
	else
	{
		$(".bg-light").removeClass("red")
	}
})