jQuery( function( $ ) {
	// create cash invoice button
	$( '#wpo_wcfacc-box' ).on( 'click', '.wcfacc-send-api', function( e ) {
		e.preventDefault();
		let $form      = $(this).closest('.wcfacc-data-fields');
		let nonce      = $(this).data('nonce');
		let orderID	   = $(this).data('orderid');
		let data       = $form.data();
		let serialized = $form.find(":input:visible:not(:disabled)").serialize();
		// block ui
		$form.block( {
			message: null,
			overlayCSS: {
				background: '#fff',
				opacity: 0.6
			}
		} );
		// request
		$.ajax( {
			url: wcfacc_ajax_object.ajax_url,
			data: {
				action:   'createCashInvoices',
				security: nonce,
				order_id: orderID,
			},
			type: 'POST',
			context: $form,
			success: function( response ) {
				// update document DOM data
				$form.closest('#wpo_wcfacc-box').load( document.URL + ' #wpo_wcfacc-box .postbox-header, #wpo_wcfacc-box .inside', function() {
					let notice_type;
					if( response.success ) {
						notice_type = 'success';
					} else {
						notice_type = 'error';
					}
					
					$(this).find( ".wcfacc-data-fields" ).before( '<div class="notice notice-'+notice_type+' inline" style="margin:0 10px 10px 10px;"><p>'+response.data.message+'</p></div>' );
					// unblock ui
					$form.unblock();
				});
			}
		} );
	} );
} );
