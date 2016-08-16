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

function sortSortbox(id)
{
    
    var people = jQuery("#"+id);
    peopleli = people.children('.bs-sort-item');

    peopleli.sort(function(a,b){
	var an = a.innerHTML,
	    bn = b.innerHTML;

	if(an > bn) {
	    return 1;
	}
	if(an < bn) {
	    return -1;
	}
	return 0;
    });

    peopleli.detach().appendTo(people);
}
console.log(sortSortbox("test"));
