<?php if(isset($opened['id'])) { ?>
	<script>

	    $(document).ready(function () {

	        Dropzone.autoDiscover = false;

	        var myDropzone = new Dropzone("#avatar-dropzone");

	        myDropzone.on("success", function (file) {

	            $("#avatar").load("ajax/avatar.php?id=<?php echo $opened['id']; ?>");

			});

		});

	</script>
<?php } ?>


<h1>Users</h1>
            
<div class="row">

    <div class="col-md-3">
                  
        <div class="list-group">
                    
            <a class="list-group-item" href="?page=users">
                <i class="fa fa-plus"></i> New User
            </a>

        <?php
                    
        $q="Select * from users ORDER BY last ASC";

        $r=mysqli_query($dbc, $q);
        while($list=mysqli_fetch_assoc($r)){
                            
            $list=data_user($dbc,$list['id']);
            //$blurb=substr(strip_tags($list['body']),0,120);
                            
            ?>
                    
        <a class="list-group-item  <?php  selected($list['id'], $opened['id'], ' active'); ?>" href="index.php?page=users&id=<?php echo $list['id']; ?>">
            <h4 class="list-group-item-heading"><?php echo $list['fullname_rev'];?> </h4>
           <!-- <p class="list-group-item-text"><?php // echo $blurb;?></p>-->
        </a>
                    
                <?php }?>
        </div>
    </div>

    <div class="col-md-9">
        <?php if(isset($message)){ echo $message;} ?>
                   
        <form action="index.php?page=users&id=<?php echo $opened['id']; ?>" method="post" role="form">

            <div id="avatar">
				<?php if($opened['avatar'] != ''){ ?>

	
				<div class="avatar-container" style="background-image: url('../uploads/<?php echo $opened['avatar']; ?>')"></div>
		
               <!-- <img src="../uploads/<?php //echo $opened['avatar']; ?>" />-->
	
				<?php } ?>
			</div>

            <div class="form-group">
            <label for="first">First Name</label>
            <input type="text" name="first" class="form-control" value="<?php echo $opened['first']; ?>" id="first" placeholder="First Name" autocomplete="off">
            </div>

             <div class="form-group">
            <label for="last">Last Name</label>
            <input type="text" name="last" class="form-control" value="<?php echo $opened['last']; ?>" id="title" placeholder="Last Name" autocomplete="off">
            </div>

            <div class="form-group">
            <label for="last">Email Address</label>
            <input type="text" name="email" class="form-control" value="<?php echo $opened['email']; ?>" id="email" placeholder="Email Address" autocomplete="off">
            </div>

            <div class="form-group">
            <label for="status">Status</label>
            <select name="status" class="form-control" id="status">

                <option value="1" <?php if(isset($_GET['id'])){ selected('1', $opened['status'], 'selected'); } ?>>Active</option>
                <option value="0" <?php if(isset($_GET['id'])){ selected('0', $opened['status'], 'selected'); } ?>>Inactive</option>


            </select>
            </div>

            <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" value="" id="password" placeholder="Password" autocomplete="off">
            </div>

            <div class="form-group">
            <label for="passwordv">Verify Password</label>
            <input type="password" name="passwordv" class="form-control" value="" id="passwordv" placeholder="Retype Password" autocomplete="off">
            </div>
 

            <button type="submit" class="btn btn-default">Save</button>
            <input type="hidden" name="submitted" value="1"/>
            <?php if(isset($opened['id'])){ ?>
            <input type="hidden" name="id" value="<?php echo $opened['id']; ?>"/>
            <?php } ?>
        </form>

        <?php if(isset($opened['id'])){ ?>
        <form action="uploads.php?id=<?php echo $opened['id']; ?>" class="dropzone" id="avatar-dropzone">
            <input type="file" name="file" />
        </form>
        <?php } ?>

    </div>

</div>

