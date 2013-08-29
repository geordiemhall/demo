/* Fetch
================================== */

$(function(){

var url = "https://docs.google.com/document/d/1hvSRANA_8LUSg1ofYh_6ljbjNx7RHlP6bv_nNoXoItk/pub"

var processData = function(data){

	var $data = $(data)
	var contentsIndex = 5
	var $contents = $('<div/>').html($data[contentsIndex])
	var entries = []

	$contents.find('p').each(function(i, p){
		var cleaned = $(p).html().replace(/<span><\/span>/g, '').trim()
		if(cleaned.length)
			entries.push(cleaned)
	})

	renderDiaries(entries)
}

var renderDiaries = function(entries){

	var $callToAction = $('.call-to-action').first().clone()
	var $body = $('body').empty().removeClass('loading')

	$.each(entries, function(i, p){
		var $section = $('<section><div></div></section>')
		var $div = $section.find('div')
		$div.html('<p>'+p+'</p>')
		$div.append($callToAction.clone())
		$section.appendTo($body)
	})

}

$.ajax({
	url: url,
	success: processData
})


})