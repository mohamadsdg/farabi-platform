


////////////////////////////////////////////////////////////////////////////
// ellipsis
function ellipsis(){
	$(".ellipsis").dotdotdot({
		ellipsis	: '... ',
		wrap		: 'word',
		fallbackToLetter: true,
		after		: null,
		watch		: window,	
		height		: null,
		tolerance	: 0,
		callback	: function( isTruncated, orgContent ) {},
		lastCharacter	: {
			remove		: [ ' ', ',', ';', '.', '!', '?' ],
			noEllipsis	: []
		}
	});// ellipsis
}


////////////////////////////////////////////////////////////////////////////////
// NUMBER FORMAT
function number_format(no){
    var num = no.toString().replace(/[^\d]/g,'');
    if(num.length>3)
        num = num.replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
    return num;
}


////////////////////////////////////////////////////////////////////////////
//Cropper Image
function run_cropper(element,x,y){
	$(element+' .cropper_holder img').cropper({
		aspectRatio: x / y,
		autoCropArea: .9,
		viewMode: 1,
		dragMode:'move',
		preview:$(element+' .cropper_preview'),
		toggleDragModeOnDblclick:false,
		crop: function(e) {
			// Output the result data for cropping image.
			var x = e.x;
			var y = e.y;
			var w = e.width;
			var h = e.height;
			$(element+' [data-crop-x]').val(x);
			$(element+' [data-crop-y]').val(y);
			$(element+' [data-crop-w]').val(w);
			$(element+' [data-crop-h]').val(h);
		},
	});
}//func


////////////////////////////////////////////////////////////////////////////
//Preview Image Function
function preview($file,$target){
	//show image befor upload
	$($file).on("change", function(){
		var files = !!this.files ? this.files : [];
		if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
	
		if (/^image/.test( files[0].type)){ // only image file
			var reader = new FileReader(); // instance of the FileReader
			reader.readAsDataURL(files[0]); // read the local file
			reader.onloadend = function(){ // set image data as background of div
				$($target).html("<img src='"+this.result+"'>").show();
			}
		}
	});
}



////////////////////////////////////////////////////////////////////////////
//script loader
var Loader = function () { }
Loader.prototype = {
    require: function (scripts, callback) {
        this.loadCount      = 0;
        this.totalRequired  = scripts.length;
        this.callback       = callback;

        for (var i = 0; i < scripts.length; i++) {
            this.writeScript(scripts[i]);
        }
    },
    loaded: function (evt) {
        this.loadCount++;

        if (this.loadCount == this.totalRequired && typeof this.callback == 'function') this.callback.call();
    },
    writeScript: function (src) {
        var self = this;
        var s = document.createElement('script');
        s.type = "text/javascript";
        s.async = true;
        s.src = src;
        s.addEventListener('load', function (e) { self.loaded(e); }, false);
        var head = document.getElementsByTagName('head')[0];
        head.appendChild(s);
    }
}
