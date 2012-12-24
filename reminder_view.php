<?php echo $this->load->view('_header'); ?>
<div id="templatemo_main">        
  <div class="content_box_top"></div>
    <div class="content_box">
						
	<?php echo $reminder; ?>
	<script type="text/javascript">
	$(document).ready(function() {
		$('.calendar .day').click(function() {
			day_num = $(this).find('.day_num').html();
			day_data = prompt('Add more events !', $(this).find('.content').html());
			if (day_data != null) {
				
				$.ajax({
					url: window.location,
					type: 'POST',
					data: {
						day: day_num,
						data: day_data
					},
					success: function(msg) {
						location.reload();
					}						
				});
				
			}
			
		});
		
	});
		
	</script>
	
			<div class="cleaner h10"></div>
            			
        </div> <!-- end of a content box -->
        <div class="content_box_bottom"></div>
        
	</div> <!-- end of main -->
<?php echo $this->load->view('_footer'); ?>
