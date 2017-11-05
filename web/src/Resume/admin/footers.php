
		</div>
		<?php
			require_once("dbclose.php");
		?>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/tinymce/tinymce.min.js"></script>
		<script type="text/javascript">
		
		$(document).ready(function(){
			
			tinymce.init({
				selector: '#myInfo'
			});
			
			$('#employmentEditModal').on('show.bs.modal', function (event) {
				var button = $(event.relatedTarget);
				var modal = $(this);
				modal.find('.modal-title').text('Edit details of ' + button.parents('tr').find('.company').text());
				modal.find('input#empid').val(button.attr('empid'));
				modal.find('input#emp-from').val(button.parents('tr').find('.from').text());
				modal.find('input#emp-to').val(button.parents('tr').find('.to').text());
				modal.find('input#emp-designation').val(button.parents('tr').find('.designation').text());
				modal.find('textarea#emp-description').text(button.parents('tr').find('.description').text());
			});
			

		
		</script>
	</body>
</html>