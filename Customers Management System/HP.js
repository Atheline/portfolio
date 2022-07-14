// JavaScript Document
$(document).ready(function() {
		$.ajax({
			url:"ITE.txt",
				success:function(result){
					$("#content").html(result);
				}
	});
	$(document).ready(function(){
  $("#hide").click(function(){
    $("#content").hide();
  });
  $("#show").click(function(){
    $("#content").show();
  });
});
});