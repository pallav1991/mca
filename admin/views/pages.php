
<h1>Page Manager</h1>
            
<div class="row">

    <div class="col-md-3">
                  
        <div class="list-group">
                    
            <a class="list-group-item" href="?page=pages">
                <i class="fa fa-plus"></i> New Page
            </a>

        <?php
                    
        $q="Select * from posts Where type=1 ORDER BY title ASC";

        $r=mysqli_query($dbc, $q);
        while($list=mysqli_fetch_assoc($r)){
                            
            $blurb=substr(strip_tags($list['body']),0,120);
                            
            ?>
                    
        <div id="page_<?php echo $list['ID']; ?>" class="list-group-item  <?php  selected($list['ID'], $opened['ID'], ' active'); ?>" >
            <h4 class="list-group-item-heading"><?php echo $list['title'];?> 

                <span class="pull-right">
                    
                    <a href="#" id="del_<?php echo $list['ID']; ?>" class="btn btn-danger btn-delete"><i class="fa fa-trash-o"></i></a>
                    <a href="index.php?page=pages&id=<?php echo $list['ID']; ?>" class="btn btn-default"><i class="fa fa-chevron-right"></i></a> 

                </span>

            </h4>
            <p class="list-group-item-text"><?php echo $blurb;?></p>
        </div>
                    
                <?php }?>
        </div>
    </div>

    <div class="col-md-9">
        <?php if(isset($message)){ echo $message;} ?>
                   
        <form action="index.php?page=pages&id=<?php echo $opened['ID']; ?>" method="post" role="form">
            <div class="form-group">
            <label for="title">Page Title</label>
            <input type="text" name="title" class="form-control" value="<?php echo $opened['title']; ?>" id="title" placeholder="Page Title">
            </div>

            <div class="form-group">
            <label for="user">Page User</label>
            <select name="user" class="form-control" id="user">

                <option value="0">No User</option>

                <?php
                          
                $q="Select id from users ORDER BY first ASC";

                $r=mysqli_query($dbc, $q);
                            
                while($user_list=mysqli_fetch_assoc($r)){
                            
                    $user_data=data_user($dbc,$user_list['id']);
                                
                ?>

                            <option value="<?php  echo $user_data['id'];  ?>" 
                            <?php 
                                      
                            if(isset($_GET['id'])){
                            //  if($user_data['id'] == $opened['user']){ echo 'selected';}
                                selected($user_data['id'], $opened['user'], 'selected');
                            }else{
                                //if($user_data['id'] == $user['id']){ echo 'selected';}
                                selected($user_data['id'], $user['id'], 'selected');
                            }
                                       
                                                                               
                            ?>><?php  echo $user_data['fullname'];  ?></option>


                <?php } ?>

            </select>
            </div>

            <div class="form-group">
            <label for="slug">Page Slug</label>
            <input type="text" name="slug" class="form-control" value="<?php echo $opened['slug']; ?>" id="slug" placeholder="Page label">
            </div>

            <div class="form-group">
            <label for="label">Page Label</label>
            <input type="text" name="label" class="form-control" value="<?php echo $opened['label']; ?>" id="label" placeholder="Page label">
            </div>

            <div class="form-group">
            <label for="header">Page Header</label>
            <input type="text" name="header" value="<?php echo $opened['header']; ?>" class="form-control" id="header" placeholder="Page Header">
            </div>

            <div class="form-group">
            <label for="body">Page Body</label>
            <textarea name="body" class="form-control editor" id="body"  rows="8" placeholder="Page Body">
                <?php echo $opened['body']; ?>
            </textarea>
            </div>

            <button type="submit" class="btn btn-default">Save</button>
            <input type="hidden" name="submitted" value="1"/>
            <?php if(isset($opened['id'])){ ?>
            <input type="hidden" name="id" value="<?php echo $opened['ID']; ?>"/>
            <?php } ?>
        </form>

    </div>

</div>

