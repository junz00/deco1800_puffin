$(document).ready(function() {

    var data = {
        resource_id: "d73f2a2a-c271-4edd-ac45-25fd7ad2241f",
        limit: 5,
        q: "flood"
    };

    console.log(data);

    $.ajax({
        url: "https://data.gov.au/data/api/3/action/datastore_search",
        data: data,
        dataType: 'jsonp',
        success: function(data) {
            console.log(data)
        }
    });
});