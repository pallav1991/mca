
<p>
<h1> Sidebar List Controller </h1>
</p>

<div class="row">

    <div class="col-md-3">
                  
        <div class="list-group">
                    
            <a class="list-group-item" href="?page=sidebar">
                <i class="fa fa-plus"></i> New List Entry
            </a>

        <?php
                    
        $q="Select * from sidebar ORDER BY title ASC";

        $r=mysqli_query($dbc, $q);
        while($list=mysqli_fetch_assoc($r)){
                            
            $blurb=substr(strip_tags($list['body']),0,120);
                            
            ?>
                    
        <div id="list_<?php echo $list['id']; ?>" class="list-group-item  <?php  selected($list['id'], $opened['ID'], ' active'); ?>" >
            <h4 class="list-group-item-heading"><?php echo $list['title'];?> 

                <span class="pull-right">
                    
                    <a href="#" id="del_<?php echo $list['id']; ?>" class="btn btn-danger btn-delete-list"><i class="fa fa-trash-o"></i></a>
                    <a href="index.php?page=sidebar&id=<?php echo $list['id']; ?>" class="btn btn-default"><i class="fa fa-chevron-right"></i></a> 

                </span>

            </h4>
            <p class="list-group-item-text"><?php echo $blurb;?></p>
        </div>
                    
                <?php }?>
        </div>
    </div>

    <div class="col-md-9">
        <?php if(isset($message)){ echo $message;} ?>
                   
        <form action="index.php?page=sidebar&id=<?php echo $opened['ID']; ?>" method="post" role="form">
            <div class="form-group">
            <label for="title">List Title</label>
            <input type="text" name="title" class="form-control" value="<?php echo $opened['title']; ?>" id="title" placeholder="List Title">
            </div>

            <div class="form-group">
                <label for="master">Master title</label>
                <!--<input type="text" name="master" class="form-control" value="<?php // echo $opened['master']; ?>" id="master" placeholder="List Master"> -->
                <select name="master" class="form-control" id="master">

                    <option></option>
                    <?php 
                    $dbc=mysqli_connect("localhost","pallav","root","mca") or die("Error:.." .mysqli_connect_error);

                    $sql = "SELECT * FROM sidebar ORDER BY id ASC";
                    $items = mysqli_query($dbc,$sql);
                    while ($obj = mysqli_fetch_array($items)) {?>
                        <option <?php if($opened['master']==$obj['title']) {echo 'selected';}  ?> value=<?php echo "'".$obj['title']."'" ?>><?php echo $obj['title']; ?></option>
                    <?php 
                    }
                    mysqli_free_result($items);
                    ?>

                </select>
            
            </div>


            <div class="form-group">
            <label for="body">List Body</label>
            <textarea name="body" class="form-control editor" id="body"  rows="8" placeholder="List Body">
                <?php echo $opened['body']; ?>
            </textarea>
            </div>

            <button type="submit" class="btn btn-default">Save</button>
            <input type="hidden" name="submitted" value="1"/>
            <?php if(isset($opened['id'])){ ?>
            <input type="hidden" name="id" value="<?php echo $opened['id']; ?>"/>
            <?php } ?>
        </form>

    </div>

</div>

