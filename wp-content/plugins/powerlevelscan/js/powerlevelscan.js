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
console.log(getAverage("performance"));
