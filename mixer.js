/**
 * Mix up content. Enqueue this script.
 */
(function($) {
	window.mixer = {
		prepare: function(id) {
			$(id).css('visibility', 'hidden');
		},
		scramble: function(id) {
			var $zone = $(id),
				count = $zone.attr('class').match(/\mixer-group-(\d+)\b/)[1],
				$items = $zone.find('.mixer-item'),
				$selected = $('<div>'),
				$item, i;

			for(i = 0; i < count; i++) {
				$item = $($items.splice(parseInt(Math.random() * $items.length), 1));
				$item.removeClass('mixer-item-hidden')
				$selected.append($item);
			}

			$zone.html($selected.html());
			$zone.css('visibility', '');
		}
	}
})(jQuery);

