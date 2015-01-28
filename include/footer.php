		<?php //if ( $page == "test" OR $page == "home" ) { ?>
			<script src="js/build/production.min.js"></script>

			<script>
				(function() {
					var formWrap = document.getElementById( 'fs-form-wrap' );

					[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
						new SelectFx( el, {
							stickyPlaceholder: false,
							onChange: function(val){
								document.querySelector('span.cs-placeholder').style.backgroundColor = val;
							}
						});
					} );

					new FForm( formWrap, {
						onReview : function() {
							classie.add( document.body, 'overview' ); // for demo purposes only
						}
					} );
				})();
			</script>
		<?php //} ?>	
	</body>
</html>