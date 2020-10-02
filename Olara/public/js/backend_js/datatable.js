$(document).ready(function() {
    $('#example').DataTable();
} );


$('#delCat').click(function(){
	alert("test");
	if(confirm('Are you sure you want to delete this category?')){
		return true;
	}
	return false;

});