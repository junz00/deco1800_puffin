/* ABC Local Online Photo Stories 2009 - 2014
 * DATABASE ACCESS API
 * 
 * The code below has been adapted from examples supplied by DECO1800.
 * Specifically, this code is sourced from the example from the Week 5
 * workshop. It has been modified to retrieve records from a different API,
 * with customisable search queries and filtering options.
 * 
 * API query results are displayed in HTML <div> elements with class
 * "gallery-images" and attributes: query, limit.
 * 
 *    For example: <div class="gallery-images" query="sandbag" limit="5">
 * 
 * We call updateGalleries() to iterate through all the ".gallery-images"
 * elements and update them with results described by the attributes.
 * 
 * Images are displayed in random order to make the website more intersting.
 * In the case that gallery space is limited, this opens up the possibility of
 * showing a different image each time a page is loaded.
 * 
 * An event handler for clicking on an element within ".db-queries li" was
 * set up to allow updates to the galleries.
 */

/* The following code is an implentation of the Fisher-Yates shuffle and was taken from:
 *
 * W3 Schools. (n.d.). How to Randomize (shuffle) a JavaScript Array. W3 Schools.
 * https://www.w3docs.com/snippets/javascript/how-to-randomize-shuffle-a-javascript-array.html
 */
function shuffleArray(array) {
    let i = array.length;
    /* There remain elements to shuffle */
    while (0 !== i) {
        // Pick a remaining element
        let randId = Math.floor(Math.random() * i);
        i -= 1;
        // Swap it with the current element.
        let tmp = array[i];
        array[i] = array[randId];
        array[randId] = tmp;
    }
    return array;
}

/* Extracts the year from a given date string */
function getYear(year) {
	if(year) {
		let regexresult = year.match(/[\d]{4}/); // This is regex (https://en.wikipedia.org/wiki/Regular_expression)
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
        let r = {};

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

        let match = r.title.toLowerCase().match(secondaryQuery) ||
                    r.caption.toLowerCase().match(secondaryQuery) ||
                    r.keywords.toLowerCase().match(secondaryQuery);

		if(match && r.image && r.title && r.caption && r.date) {
            results.push(r);
		}
	});

    /* Randomise order of results */
    shuffleArray(results);

    let n = 0;
    if (isNaN(limit) || limit == 0) {
        n = results.length;
    } else {
        n = limit < results.length ? limit : results.length;
    }
    for (let i = 0; i < n; i++) {
        let r = results[i];
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

    console.log("Displayed", n, "results of", results.length, "with secondary search query:", secondaryQuery);
}

/* Query the ABC Images API for flood images and populate the target element with results.
 * 
 * target:          HTML <div> element with class "gallery-images" and attributes: query, limit.
 *                  For example: <div class="gallery-images" query="sandbag" limit="5">
 * secondaryQuery:  Another search term used to further narrow down the results.
 * limit:           Maximum number of results displayed. Setting this to zero will show everything.
 */
function apiQueryABC(target, secondaryQuery, limit) {
    let data = {
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

/* Updates "gallery-images" elements to display images corresponding to its attributes */
function updateGalleries() {
    $(".gallery-images").each(function() {
        apiQueryABC($(this), $(this).attr("query"), parseInt($(this).attr("limit")));
    })
}

$(document).ready(function() {
    /* Show deafult gallery */
    updateGalleries();

    /* Event handler when changing galleries. */
    $(".db-queries li").click(function() {
        $(".db-queries li").removeClass("selected");
        $(this).addClass("selected");
        $(".gallery-images")
                .attr("query", $(this).attr("query"))
                .attr("limit", $(this).attr("limit"));
        updateGalleries();
    });
});
