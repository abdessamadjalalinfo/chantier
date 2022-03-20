$(document).ready(function(){


	//Cacher le menu
	$("#categoryMenu").hide();

	//Au click sur le champ des catégorie dans le menu, on affiche le menu en slideDown
	$("#categoryField").click(function(){
		$("#categoryMenu").slideDown();
	});

	$(".menuItem1").click(function(){
		$(".menuItem1").removeClass("active");
		$(this).addClass("active");
		$(".itemMenu").hide();
		$("#content_"+$(this).attr("id")).show();
		$("#menuColumns2").css("border-left", "1px solid #ccc").show();
		$("#menuCard").css("width", "auto");
	});

	$(".subMenuItem1").click(function(){
		$(".subMenuItem1").removeClass("active");
		$(this).addClass("active");
		$("#categoryField").val($(this).attr("alt").split("$")[1]+$(this).html().replace("&amp;", "&"));
		$("#categoryIdField").val($(this).attr("alt").split("$")[0]);
		$("#bidIdField").val($(this).attr("id").replace("bid",""));
		$("#categoryMenu").slideUp();
		$("#menuColumns2").hide();

	});

});