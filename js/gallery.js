/* ABC Local Online Photo Stories 2009 - 2014
 * DATABASE ACCESS API
 * 
 * The code below has been adapted from examples supplied by DECO1800.
 * Specifically, this code is sourced from the example from the Week 5 workshop.
 * 
 * It has been modified to retrieve records from a different API, with
 * customisable search queries and filtering options. Furthermore, the code
 * will automatically make subsequent requests if more results are needed.
 */

function prevPage(){
    location.href="intro.php";
}

function nextPage(){
    location.href="article1_p1.php";
}

function getYear(year) {
	if(year) {
		var regexresult = year.match(/[\d]{4}/); // This is regex (https://en.wikipedia.org/wiki/Regular_expression)
        if (regexresult.length == 1) {
            return parseInt(regexresult[0]);
        } else {
            return null;
        }
	}
}

/* Goes through current page of data and displays images and information to page
 * Results are filtered through a secondary query */
function iterateRecords(data, secondaryQuery) {
	console.log("Query result:", data.result.total, data);
    $("#gallery-images").empty();

	$.each(data.result.records, function(recordKey, recordValue) {

        var rImage = recordValue["Primary image"];
        var rCaption = recordValue["Primary image caption"]
		var rTitle = recordValue["Title"];
		var rDate = recordValue["Date"];
        var rYear = getYear(rDate);
        var rState = recordValue["State"];
        var rPlace = recordValue["Place"];
        var rKeywords = recordValue["Keywords"];
        var rLatitude = recordValue["Latitude"];
        var rLongitude = recordValue["Longitude"];

        var match = rCaption.match(secondaryQuery) || rTitle.match(secondaryQuery) || rKeywords.match(secondaryQuery);

		if(rImage && rCaption && rDate && match) {
            console.log(rDate, rYear, rCaption, rImage);
            $("#gallery-images").append(
				$('<section class="record">').append(
                    $('<img>').attr("src", rImage),
                    $('<figcaption class="hidden">').append(
                        $('<h2>').text(rTitle),
                        $('<p>').text(rDate),
                        $('<p>').text(rCaption)
                    )
				)
			);
		}
	});
}

function apiQueryABC(primaryQuery, secondaryQuery, limit) {
    var data = {
        resource_id: "d73f2a2a-c271-4edd-ac45-25fd7ad2241f",
        limit: limit,
        /* Documentation on how to query CKAN datasets can be found at:
         * https://docs.ckan.org/en/latest/user-guide.html#using-ckan
         * https://docs.ckan.org/en/master/api-tutorial.html */
        q: primaryQuery
    };

    $.ajax({
        url: "https://data.gov.au/data/api/3/action/datastore_search",
        data: data,
        dataType: 'jsonp',
        cache: true,
        success: function(data) {
            iterateRecords(data, secondaryQuery);
        }
    });
}

$(document).ready(function() {
    apiQueryABC("flood", "sandbag", 500);

    $("#db-queries li").click(function() {
        apiQueryABC("flood", $(this).attr("search").toLowerCase(), 500);
    });
});
