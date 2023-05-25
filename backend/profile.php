<?php require_once 'header.php';?>

<div class="row">
    <div class="col-lg-2">
        <div class="profile_image">

        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-4">
        <div class="profile_name">
            <div class="card">
                <div class="card-header">
                    <h3>Name</h3>
                </div>
                <div class="card-body">
                    <form action="profile_post.php" method="POST">
                    <input type="text" class="form-control m-b-md" name="profile_name" value="<?=$_SESSION['s_name']?>">
                    <button type="submit" class="btn btn-success" name="name_change_btn">Name Change</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="profile_name">
            <div class="card">
                <div class="card-header">
                    <h3>Email</h3>
                </div>
                <div class="card-body">
                    <form action="profile_post.php" method="POST">
                    <input type="text" class="form-control m-b-md" name="profile_email" value="<?=$_SESSION['s_email']?>">
                    <button type="submit" class="btn btn-success" name="name_change_btn">Name Change</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'footer.php';?>