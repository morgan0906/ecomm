<script>
$(function(){
	screenHeight = $( document ).height();
	var p = $( "footer" );
	var bottom = p.position().top + p.outerHeight(true);
	if( screenHeight > bottom ){
		var diff = screenHeight - bottom + 20;
		$('footer').css({ 'margin-top' : diff + 'px' });
	}
});
</script>

<footer class="footer bg-main color-white">
	<div class="container padding-top-10 padding-bottom-10 text-center">
		
		<?= strtoupper(COMPANY_NAME); ?> ADMIN PANEL
			
	</div>
</footer>

</body>
</html>