function getAverage(cat)
{
    var elements = jQuery('div[data-cat="' + cat + '"]').map(function() {
	return jQuery(this).text();
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
    jQuery('.bs-sort-box').each(function(i, sortBox){
	console.log(sortBox);
	var sortBoxItem = jQuery(sortBox).children('.bs-sort-item');

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

sortSortboxes();
