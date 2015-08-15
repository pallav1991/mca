
<h1>Settings</h1>
            
<div class="row">

    <div class="col-md-12">
        <?php if(isset($message)){ echo $message;} ?>
                  
        <?php
                    
        $q="Select * from settings ORDER BY id ASC";

        $r=mysqli_query($dbc, $q);
        while($opened=mysqli_fetch_assoc($r)){?>


            <form class="form-inline" action="index.php?page=settings&id=<?php echo $opened['id']; ?>" method="post" role="form">
                <div class="form-group">
                <label class="sr-only" for="id">ID:</label>
                <input type="text" name="id" class="form-control" value="<?php echo $opened['id']; ?>" id="id" placeholder="id_name" autocomplete="off">
                </div>

                 <div class="form-group">
                <label  class="sr-only" for="label">Label:</label>
                <input type="text" name="label" class="form-control" value="<?php echo $opened['label']; ?>" id="label" placeholder="Label" autocomplete="off">
                </div>

                <div class="form-group">
                <label class="sr-only" for="value">Value</label>
                <input type="text" name="value" class="form-control" value="<?php echo $opened['value']; ?>" id="value" placeholder="Value" autocomplete="off">
                </div>

                <button type="submit" class="btn btn-default">Save</button>
                <input type="hidden" name="submitted" value="1"/>

                <input type="hidden" name="openedid" value="<?php echo $opened['id']; ?>"/>
            </form>
                    
        
        <?php }?>

      </div>

</div>

