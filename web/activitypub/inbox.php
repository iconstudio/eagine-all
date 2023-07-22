<?php
header('Content-type: application/json');
file_put_contents("./post.dump", json_encode($_POST), FILE_APPEND);
?>
{
  "@context": [
    "https://www.w3.org/ns/activitystreams"
  ],
  "type": "OrderedCollection",
  "id": "https://<?php echo getenv('EAGINE_HOST')?>/activitypub/inbox",
  "totalItems": 0,
  "orderedItems": []
}
