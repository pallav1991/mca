<h1>Navigation</h1>
<div class="row">
    <div class="col-md-3">
        <ul id="sort-nav" class="list-group">

            <?php
                    
                $q="Select * from navigation ORDER BY position ASC";

                $r=mysqli_query($dbc, $q);
                while($list=mysqli_fetch_assoc($r)){ ?>

            <li id="list_<?php echo $list['id']; ?>" class="list-group-item">
            
                <a id="label_<?php echo $list['id']; ?>"  data-toggle="collapse" data-target="#form_<?php echo $list['id']; ?>">
            
                <?php echo $list['label']; ?> <i class="fa fa-chevron-down"></i>
                </a>
                <div id="form_<?php echo $list['id']; ?>" class="collapse">

                    <form class="form-horizontal nav-form" action="index.php?page=navigation&id=<?php echo $list['id']; ?>" method="post" role="form">

                        <div class="form-group">
                            <label class="col-sm-2 control-label"  for="id">ID:</label>
                            <div class="col-sm-10">
                                <input type="text" name="id" class="form-control input-sm" value="<?php echo $list['id']; ?>" id="id" placeholder="id_name" autocomplete="off">
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="col-sm-2 control-label"   for="label">Label:</label>
                             <div class="col-sm-10">
                                <input type="text" name="label" class="form-control input-sm" value="<?php echo $list['label']; ?>" id="label" placeholder="Label" autocomplete="off">
                             </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="url">Url</label>
                            <div class="col-sm-10">
                                <input type="text" name="url" class="form-control input-sm" value="<?php echo $list['url']; ?>" id="url" placeholder="Url" autocomplete="off">
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="status">Status</label>
                            <div class="col-sm-10">
                                <input type="text" name="status" class="form-control input-sm" value="<?php echo $list['status']; ?>" id="status" placeholder="Status" autocomplete="off">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-default">Save</button>
                        <input type="hidden" name="submitted" value="1"/>

                        <input type="hidden" name="openedid" value="<?php echo $list['id']; ?>"/>
                    </form>

                </div>

            </li>
            
             <?php } ?>
        </ul>
    </div>

    <div class="col-md-9">
        <?php if(isset($message)){ echo $message;} ?>
                  
       

      </div>

</div>

