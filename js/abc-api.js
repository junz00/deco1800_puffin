/* ABC Local Online Photo Stories 2009 - 2014
 * DATABASE ACCESS API
 * 
 * The code below has been adapted from examples supplied by DECO1800.
 * Specifically, this code is sourced from the example from the Week 5 workshop.
 * 
 * It has been modified to retrieve records from a different API, with
 * customisable search queries and filtering options.
 */

/* Extracts the year from a given date string */
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

/* Iterates through AJAX query results and displays them in 'target'.
 * This should only be called upon the function below being successful */
function showRecords(target, data, secondaryQuery, limit) {
    console.log("showRecords(): Secondary query and result limit:", secondaryQuery, limit);
    target.empty();

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

        // TODO Case-insensitive matching
        var match = rCaption.match(secondaryQuery) || rTitle.match(secondaryQuery) || rKeywords.match(secondaryQuery);

		if(rImage && rCaption && rDate && match) {
            console.log(rDate, rYear, rCaption, rImage);
            target.append(
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

    // TODO Query order randomisation
}

/* Query the ABC Images API for flood images and populate the target element with results.
 * 
 * target:          HTML <div> element with class "gallery-images",  and attributes: query, n.
 *                  Example: <div id="gallery-images" query="sandbag" n="5">
 * secondaryQuery:  Another search term used to further narrow down the results.
 * limit:           Maximum number of results displayed. Setting this to zero will show everything.
 */
function apiQueryABC(target, secondaryQuery, limit) {
    var data = {
        resource_id: "d73f2a2a-c271-4edd-ac45-25fd7ad2241f",
        q: "flood",
        limit: 500 /* There are fewer than 500 flood images */
        /* Documentation on how to query CKAN datasets can be found at:
         * https://docs.ckan.org/en/latest/user-guide.html#using-ckan
         * https://docs.ckan.org/en/master/api-tutorial.html */
    };

    $.ajax({
        url: "https://data.gov.au/data/api/3/action/datastore_search",
        data: data,
        dataType: 'jsonp',
        cache: true,
        success: function(data) {
            showRecords(target, data, secondaryQuery, limit);
        }
    });
}

function updateGallery() {
    $(".gallery-images").each(function() {
        console.log(this);
        apiQueryABC($(this), $(this).attr("query"), parseInt($(this).attr("n")));
    })
}

$(document).ready(function() {
    updateGallery();

    $("#db-queries li").click(function() {
        $(".gallery-images").attr("query", $(this).attr("query"), 500);
        updateGallery();
    });
});
