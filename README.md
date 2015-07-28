# Content Mixer WordPress Example

### Why isn't this a plugin?

There isn't a one-size-fits-all solution here, and this repository is intended to be merely an example of the techniques necessary for content mixing. Please remix this code yourself!

## Files

### mixer.js

JavaScript code to drive content mixing, leveraging jQuery.

### functions.php

PHP code implementing content mixing, using WordPress API. Defines a single function, `get_content_mixed_group( $id, $items, $num )`, which defines a content-mixed group and returns its markup. This group is randomized as the page loads by the JavaScript found in `mixer.js`.

* `$id` - The `id` attribute of the rendered element.

* `$items` - The items to mix up.

* `$num` - The number of items to select from `$items`. Default is `0`, which will show all items.

### mixer.css

The one CSS rule required to make this work.

