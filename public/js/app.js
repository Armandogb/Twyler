$(document).ready(function(){
	
	setTimeout(function() {
		$('.flash-m').fadeOut("slow");
	}, 2000);

	$(".giant-mouse").on("click",function(){
		$(".quote").toggle("fast",function(){

		});
		
	});

});