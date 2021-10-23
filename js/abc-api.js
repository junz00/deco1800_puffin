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
    secondaryQuery = secondaryQuery.toLowerCase();

    target.empty();
    results = [];

    /* Extract results into JSON data and do secondary query matching */
	$.each(data.result.records, function(recordKey, recordValue) {
        var r = {};

        r.image = recordValue["Primary image"];
        r.caption = recordValue["Primary image caption"]
		r.title = recordValue["Title"];
		r.date = recordValue["Date"];
        r.year = getYear(r.date);
        r.state = recordValue["State"];
        r.place = recordValue["Place"];
        r.keywords = recordValue["Keywords"];
        r.latitude = recordValue["Latitude"];
        r.longitude = recordValue["Longitude"];

        var match = r.caption.toLowerCase().match(secondaryQuery) ||
                    r.title.toLowerCase().match(secondaryQuery) ||
                    r.keywords.toLowerCase().match(secondaryQuery);

		if(r.image && r.caption && r.date && match) {
            results.push(r);

		}
	});

    // TODO Query order randomisation

    n = limit;
    if (limit == 0) {
        n = results.length;
    }
    for (let i = 0; i < n; i++) {
        var r = results[i];
        target.append(
            $('<section class="record">').append(
                $('<img>').attr("src", r.image),
                $('<figcaption class="hidden">').append(
                    $('<h3>').text(r.title),
                    $('<p>').text(r.date),
                    $('<p>').text(r.caption)
                )
            )
        );
    }
}

/* Query the ABC Images API for flood images and populate the target element with results.
 * 
 * target:          HTML <div> element with class "gallery-images" and attributes: query, n.
 *                  Example: <div class="gallery-images" query="sandbag" n="5">
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

function updateGalleries() {
    $(".gallery-images").each(function() {
        apiQueryABC($(this), $(this).attr("query"), parseInt($(this).attr("n")));
    })
}

$(document).ready(function() {
    updateGalleries();

    $("#db-queries li").click(function() {
        $(".gallery-images").attr("query", $(this).attr("query"), 500);
        updateGalleries();
    });
});
