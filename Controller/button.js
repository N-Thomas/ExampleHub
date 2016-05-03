$(function(){
	
    $(".increment").click(function(){
    	
        var count = parseInt($("~ .count", this).text());
        if($(this).hasClass("up")) {
        	if(!flag){
            var count = count + 1;
            flag = true;
        	}
                console.log(count);
            $("~ .count", this).text(count);
        } else {
        	if(!flag){
            var count = count - 1;
            flag = true;
        	}
            $("~ .count", this).text(count);
        }
    
        $(this).parent().addClass("bump");

        setTimeout(function(){
            $(this).parent().removeClass("bump");
        }, 400);
    });
	
});