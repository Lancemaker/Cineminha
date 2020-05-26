(function($) {
	$form = {
		initialize: function() {
			this.onFormSubmit();
		},
		onFormSubmit: function() {
			var self = this;

			$( '#formAddProducts' ).submit( function( e ) {
				e.preventDefault();

				var values = self._getProductValues();

				$( '#formAddProducts input[name="Products"]' ).val( values );

				this.submit();
			});
		},
		_getProductValues: function() {
			var 
				quantity_inputs = $( 'input[name="Quantity"]' ),
				values = [];

			quantity_inputs.each( function( _, input ) {
				var input_value = $( input );
				var 
					current_quantity = input_value.val(),
					current_name = $.trim( input_value.closest( 'tr' ).find( '.product-name' ).text() ),
					current_description = $.trim( input_value.closest( 'tr' ).find( '.product-description' ).text() ),
					current_price = $.trim( input_value.closest( 'tr' ).find( '.product-price' ).text() );

				if( current_quantity ) {
					values.push(
						{
							'name' : current_name,
							'description' : current_description,
							'quantity' : current_quantity,
							'price' : current_price
						}
					);
				}
			});

			return JSON.stringify( values );
		}
	};

	$( document ).ready( function() {
		$form.initialize();
	});
})(jQuery);
