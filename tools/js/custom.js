$('#add_category').submit(function () {
	category= $('#category').val();
	url =$(this).attr('action');
	$.post(url,{'Name':category},function (fe) {
		alert(fe);
	});
	return false;
});
