<?php
include("../Assets/Connection/Connection.php");
session_start();
ob_start();
include('Head.php');


?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star Rating and Comment</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="../Assets/Templates/Main/lib/easing/easing.min.js"></script>
    <script src="../Assets/Templates/Main/lib/waypoints/waypoints.min.js"></script>
    <script src="../Assets/Templates/Main/lib/counterup/counterup.min.js"></script>
    <script src="../Assets/Templates/Main/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="../Assets/Templates/Main/mail/jqBootstrapValidation.min.js"></script>
    <script src="../Assets/Templates/Main/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="../Assets/Templates/Main/js/main.js"></script>
    <style>
        .progress-label-left
        {
            float: left;
            margin-right: 0.5em;
            line-height: 1em;
        }
        .progress-label-right
        {
            float: right;
            margin-left: 0.3em;
            line-height: 1em;
        }
        .star-light
        {
            color:#e9ecef;
        }
        </style>
</head>
<body>
    <div class="modal-dialog" role="document">
    	<div class="modal-content">
	      	<div class="modal-header">
	        	<h5 class="modal-title">Submit Review</h5>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          		<span aria-hidden="true">&times;</span>
	        	</button>
	      	</div>
	      	<div class="modal-body">
	      		<h4 class="text-center mt-2 mb-4">
	        		<i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
	        	</h4>
	        	<div class="form-group">
                    <input type="hidden" name="txt_tid" id="txt_tid" value="<?php echo $_GET["bid"];?>" />
	        	</div>
	        	<div class="form-group">
	        		<textarea name="user_review" id="user_review" class="form-control" placeholder="Type Review Here"></textarea>
	        	</div>
	        	<div class="form-group text-center mt-4">
	        		<button type="button" class="btn btn-primary" id="save_review">Submit</button>
	        	</div>
	      	</div>
    	</div>
  	</div>
</body>
<script>

    $(document).ready(function(){
    
        var rating_data = 0;
    
        $('#add_review').click(function(){
    
            $('#review_modal').modal('show');
    
        });
    
        $(document).on('mouseenter', '.submit_star', function(){
    
            var rating = $(this).data('rating');
    
            reset_background();
    
            for(var count = 1; count <= rating; count++)
            {
    
                $('#submit_star_'+count).addClass('text-warning');
    
            }
    
        });
    
        function reset_background()
        {
            for(var count = 1; count <= 5; count++)
            {
    
                $('#submit_star_'+count).addClass('star-light');
    
                $('#submit_star_'+count).removeClass('text-warning');
    
            }
        }
    
        $(document).on('mouseleave', '.submit_star', function(){
    
            reset_background();
    
            for(var count = 1; count <= rating_data; count++)
            {
    
                $('#submit_star_'+count).removeClass('star-light');
    
                $('#submit_star_'+count).addClass('text-warning');
            }
    
        });
    
        $(document).on('click', '.submit_star', function(){
    
            rating_data = $(this).data('rating');
    
        });
    
        $('#save_review').click(function(){
    
            // var user_name = $('#user_name').val();
    
            var user_review = $('#user_review').val();
            
            var branch_id = $('#txt_tid').val();
    
            if(user_review == '')
            {
                alert("Please Fill Both Field");
                return false;
            }
            else
            {
                $.ajax({
                    url:"../Assets/AjaxPages/AjaxRating.php",
                    method:"POST",
                    data:{rating_data:rating_data, user_review:user_review, branch_id:branch_id},
                    success:function(data)
                    {
                        $('#review_modal').modal('hide');
                        alert(data);
                        window.location="MyBooking.php"
                    }
                })
            }
    
        }); 
    })
        </script>
</html>
<?php
include('Foot.php');
ob_flush();
?>
</html>