#/bin/bash
curl --location --request POST 'http://127.0.0.1:8000/foo' \
--header 'Content-Type: application/json' \
--data '{
    "fooValue": 0
}'
