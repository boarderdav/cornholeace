
function getProductJS () {


    var settings = {
        "async": true,
        "crossDomain": true,
        "url": "https://api.trycelery.com/v2/products/56ce3a7be4ad561100af4c92",
        "method": "GET",
        "headers": {
            "accept": "application/json",
            "content-type": "application/json",
            "authorization": "6585767a26497d7f1e543fc1edfc7e639232eaf52a44206e7b03ec384abf6ba98f4de0a5e2a5a407895ab910ee0bb4459f78e3f181419287b7f5278112bf4225",
            "cache-control": "no-cache",
            "postman-token": "35b09276-c4a2-7c0a-2aef-2370d93716b9"
        },
        "processData": false,
        "data": "{\n    \"user_id\": \"514a114080feb60200000001\",\n    \"cancel_url\": \"https://www.yourshop.com\",\n    \"return_url\": \"https://www.yourshop.com/confirmation\",\n    \"buyer\": {\n        \"email\": \"first@last.com\",\n        \"first_name\": \"First\",\n        \"last_name\": \"Last\",\n        \"phone\": \"555-555-5555\"\n    },\n    \"shipping_address\": {\n        \"first_name\": \"First\",\n        \"last_name\": \"Last\",\n        \"company\": \"Celery\",\n        \"line1\": \"123 Street\",\n        \"line2\": null,\n        \"city\": \"New York\",\n        \"state\": \"ny\",\n        \"zip\": \"10012\",\n        \"country\": \"us\",\n        \"phone\": \"555-555-5555\"\n    },\n    \"line_items\": [\n        {\n            \"product_id\": \"531e0b012cf9766885f781b7\",\n            \"quantity\": 1\n        }\n    ]\n}"
    }

    $.ajax(settings).done(function (response) {
        console.log(response);
    });

}