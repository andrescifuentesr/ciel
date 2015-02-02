		<?php if ( $page == "test" ) { ?>
			<script src="js/build/production-test.min.js"></script>

			<script>
				(function() {
					var formWrap = document.getElementById( 'fs-form-wrap' );

					new FForm( formWrap, {
						onReview : function() {
							classie.add( document.body, 'overview' ); // for demo purposes only
							$( "#form-user-test" ).submit();
						}
					} );
				})();
			</script>
		<?php } elseif ( $page == "home" ) { ?>
			<script src="js/build/production-home.min.js"></script>
		<?php } ?>
	</body>
</html>