var data = {
    resource_id: 'd73f2a2a-c271-4edd-ac45-25fd7ad2241f',
    limit: 1,
    q: 'http://www.abc.net.au/reslib/201405/r1280295_17329764.jpg'
};

$.ajax({
    url: 'https://data.gov.au/data/api/3/action/datastore_search',
    data: data,
    dataType: 'jsonp',
    success: function(data) {
        console.log(data)
    }
});