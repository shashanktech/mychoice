$(document).ready(function () {
		$('#reg_id_32').click(function () 
	{
        $('#33').slideUp(100);
    });
		$('#reg_id_12').click(function () 
	{
        $('#33').slideDown(100);
    });

	
});

$(document).ready(function () {
$('#reg_id_28').change(function () 
	{
        var abc = $('#reg_id_28').val();
        var xyz = $('#reg_id_26').val();
        if( abc == xyz)
        {
        	alert('Correct');
        }
        else{ alert('Incorrect'); }
    });	
});

$(window).load(function() {
		setTimeout(function(){
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow" , function () {
		});
	},2000);
});			
   