// JavaScript Document
function update() {
	var name = $('input#name').val();
	$.post('proffquery.php', {name: name}, function(data){
			$('div#name-data').text(data);
		});
};