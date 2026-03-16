<?php
    if($user_id){
        $module = isset($_GET['module']) ? $_GET['module'] : false;
        $action = isset($_GET['action']) ? $_GET['action'] : false;
        $mode = isset($_GET['mode']) ? $_GET['mode'] : false;
    } else {
        header("location: ".BASE_URL."index.php?page=login");
    }
?>
    <!-- <?php
        if($level == "superadmin"){
    ?> -->
    <nav class="stroke">
    <center>
        <ul>
		<li><a <?php if($module == "kategori"){ echo "class= 'active'"; } ?> href="<?php echo
                 BASE_URL."index.php?page=my_profile&module=kategori&action=list"; ?>">Category</a></li>
		<li><a <?php if($module == "barang"){ echo "class= 'active'"; } ?> href="<?php echo
                 BASE_URL."index.php?page=my_profile&module=barang&action=list"; ?>">Product</a></li>
		<li><a <?php if($module == "kota"){ echo "class= 'active'"; } ?> href="<?php echo
                 BASE_URL."index.php?page=my_profile&module=kota&action=list"; ?>">City</a></li>
		<li><a <?php if($module == "user"){ echo "class= 'active'"; } ?> href="<?php echo
                 BASE_URL."index.php?page=my_profile&module=user&action=list"; ?>">User</a></li>
		<li><a <?php if($module == "banner"){ echo "class= 'active'"; } ?> href="<?php echo
                 BASE_URL."index.php?page=my_profile&module=banner&action=list"; ?>">Banner</a></li>
		<li><a <?php if($module == "pesanan"){ echo "class= 'active'"; } ?> href="<?php echo
                 BASE_URL."index.php?page=my_profile&module=pesanan&action=list"; ?>">Order</a></li>
		<span class="line"></span>
        </ul>
    </nav>
        </header>
<!-- <?php
    }
?> -->
    </div>
        </center>
        <center>
    <div id="content-profile">
        <?php 
        $file = "module/$module/$action.php";
        if(file_exists($file)){
            include_once($file);
        }else{
            echo"<h3> No data found yet</h3>";
        }
        ?>
    </div>
    </center>
</div>