(function($) {
    function sortSortboxes()
    {
	$('.bs-sort-box').each(function(i, sortBox){
	    
	    var sortBoxItems = $(sortBox).find('.bs-sort-item');
	    
	    sortBoxItems.sort(function(a,b){
		var an = parseInt($(a).find('.bs-sort-value').html(), 10),
		    bn = parseInt($(b).find('.bs-sort-value').html(), 10);
		
		if(an > bn) return 1;
		if(an < bn) return -1;
		return 0;
	    });

	    sortBoxItems.detach();
	    
	    $.each(sortBoxItems, function(i, sortBoxItem) {
		$(sortBox).append(sortBoxItem);
	    });
	    
	});
    }

    function colorProgressBars()
    {
	$('.uk-progress').each(function(){
	    var item = $(this).find('.uk-progress-bar');
	    var value = parseInt($(item).html(), 10);
	    
	    var hue = Math.ceil((value / 100) * 80);
	    var saturation = 100;
	    var lightness = 50;

	    $(item).css('background-image',
			'linear-gradient(to bottom, '+
			'hsl('+hue+','+saturation+'%,'+lightness+'%),'+ 
			'hsl('+hue+','+saturation+'%,'+(lightness-15)+'%))'
		       );
	});
    }

    function getAverage(cat)
    {
	var elements = $('[data-cat="' + cat + '"]').map(function() {
	    return $(this).text();
	}).get();

	var sum = 0;
	for (var i = 0; i < elements.length; i++)
	{
	    sum += parseInt(elements[i], 10);
	}

	return Math.floor(sum / elements.length);
    }

    function getCategoryScore()
    {
	return "33";
    }
    
    sortSortboxes();
    colorProgressBars();
    getCategoryScore();
    
})( jQuery )
