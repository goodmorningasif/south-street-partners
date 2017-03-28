/**
*
* queryProp
*
* Handles ajax request to DB
*/

var queryProp = function(id) {

	console.log('queryProp running', id);
	var propData = { 'prop': id }
  
  $j.ajax({
  	type: 'POST',
  	url: '../content/themes/ssp/investments_ajax.php',
  	data: propData,
  	dataType: 'json',
  	encode: true
  })
    .done(function(data) {
    	console.log('successfully submitted Property request', data);
    })
    .fail(function(err) {
    	console.log('error with Property submission', err);
    })
}
