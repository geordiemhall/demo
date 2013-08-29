/* Gallery.js
======================================================= */


var Gallery = function(options){
	return new gallery(options)
}

var gallery = function(options){
	this.options = $.extend({}, this.defaults, options)
	this.init()
}

gallery.prototype.defaults = {}

gallery.prototype.init = function(){
	if(this.options.something)
		console.log('Something!')
}

