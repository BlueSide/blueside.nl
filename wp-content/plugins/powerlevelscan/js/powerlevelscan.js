(function($) {

    function getAverage(cat)
    {
	var elements = $('div[data-cat="' + cat + '"]').map(function() {
	    return $(this).text();
	}).get();

	var sum = 0;
	for (var i = 0; i < elements.length; i++)
	{
	    sum += parseInt(elements[i], 10);
	}

	return Math.floor(sum / elements.length);
    }

    function sortSortboxes()
    {    
	$('.bs-sort-box').each(function(i, sortBox){
	    
	    var sortBoxItem = $(sortBox).children('.bs-sort-item');

	    sortBoxItem.sort(function(a,b){
		var an = a.innerHTML,
		    bn = b.innerHTML;

		if(an > bn) return 1;
		if(an < bn) return -1;
		return 0;
	    });

	    sortBoxItem.detach().appendTo(sortBox);
	});
    }

    function colorProgressBars()
    {
	$('.uk-progress').each(function(){
	    var item = $(this).find('.uk-progress-bar');
	    var value = parseInt($(item).html(), 10);
	    
	    var hue = Math.ceil((value / 100) * 80);
	    var saturation = 100;
	    var lightness = 50;//value;

	    $(item).css('background-image',
			'linear-gradient(to bottom, '+
			'hsl('+hue+','+saturation+'%,'+lightness+'%),'+ 
			'hsl('+hue+','+saturation+'%,'+(lightness-10)+'%))'
		       );
	});
    }

    sortSortboxes();
    colorProgressBars();
    
})( jQuery );
