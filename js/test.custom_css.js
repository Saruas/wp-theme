jQuery(document).ready(function($){

	var updateCSS = function(){
		$("#test_css").val( editor.getSession().getValue() );
	}
	$("#save-custom-css-form").submit( updateCSS );
});

var editor = ace.edit("customCss");
//editor.setTheme('/ace/theme/monokai'); // fick ladda med ett annat bibleotek, inte fullständigt med mappar som vanliga 
editor.getSession().setMode("ace/mode/css");