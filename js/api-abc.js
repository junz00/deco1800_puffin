function getYear(year) {
	if(year) {
		return year.match(/[\d]{4}/); // This is regex (https://en.wikipedia.org/wiki/Regular_expression)
	}
}

function iterateRecords(data) {
	console.log(data);
	$.each(data.result.records, function(recordKey, recordValue) {

        var rImage = recordValue["Primary image"];
        var rCaption = recordValue["Primary image caption"]
		var rTitle = recordValue["Title"];
		var rDate = recordValue["Date"];
        var rLatitude = recordValue["Latitude"];
        var rLongitude = recordValue["Longitude"];

        console.log(rDate, rCaption, rImage);

		if(/*recordTitle && recordDate && recordImage && recordDescription*/ true) {
/*
			$("#records").append(
				$('<section class="record">').append(
					$('<h2>').text(recordTitle),
					$('<h3>').text(recordYear),
					$('<img>').attr("src", recordImage),
					$('<p>').text(recordDescription)
				)
			);
*/
		}
	});
}

$(document).ready(function() {

    var data = {
        resource_id: "d73f2a2a-c271-4edd-ac45-25fd7ad2241f",
        limit: 5,
        q: "flood"
    };

    $.ajax({
        url: "https://data.gov.au/data/api/3/action/datastore_search",
        data: data,
        dataType: 'jsonp',
        cache: true,
        success: function(data) {
            iterateRecords(data);
        }
    });
});