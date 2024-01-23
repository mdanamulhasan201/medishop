<?php
error_reporting(0);
include "includes/head.php";
?>

<body>
    <?php
    include "includes/header.php"
    ?>


    <?php
    include "includes/sidebar.php";
    ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <?php
        message();
        ?>
        <div class="container">
            <div class="row align-items-start">
                <div class="col">
                    <br>
                    <h2>categorys details</h2>
                    <br>
                </div>
                <div class="col">
                </div>
                <div class="col">
                    <br>
                    <form class="d-flex" method="GET" action="categorys.php">
                        <input class="form-control me-2 col" type="search" name="search_item_name" placeholder="Search for product" aria-label="Search">
                        <button class="btn btn-outline-secondary" type="submit" name="search_item" value="search">Search</button>
                    </form>
                    <br>
                </div>
            </div>
        </div>
        <?php
        edit_ctg($_SESSION['id']);

        if (isset($_GET['edit'])) {
            $_SESSION['id'] = $_GET['edit'];
            $data = get_ctg($_SESSION['id']);

        ?>
            <br>
            <h2>Edit Category Details</h2>
            <form action="categorys.php" method="POST">
                <div class="form-group mb-3">
                    <label>Name</label>
                    <input pattern="[A-Za-z0-9_]{1,25}" id="exampleInputText1" type="text" class="form-control" value="<?php echo $data[0]['name'] ?>" name="name">
                    <div class="form-text">please enter the category name in range(1-25) character/s , special character not allowed !</div>
                </div>
                <br>
                <button type="submit" class="btn btn-outline-primary" value="update" name="update">Submit</button>
                <button type=" submit" class="btn btn-outline-danger" value="cancel" name="cancel">Cancel</button>
                <br> <br>
            </form>
        <?php
        }
        ?>
        <?php
        add_cat();
        if (isset($_GET['add'])) {
        ?>
            <br>
            <h2>Add Category</h2>
            <form action="categorys.php" method="POST">
                <div class=" form-group mb-3">
                    <label>Name</label>
                    <input id="exampleInputText1" type="text" class="form-control" placeholder="name" name="name">
                    <div class="form-text">please enter the name in range(1-25) character/s , special character not allowed !</div>
                </div>
                
                <br>
                <button type="submit" class="btn btn-outline-primary" value="update" name="add_cat">Submit</button>
                <button type=" submit" class="btn btn-outline-danger" value="cancel" name="cancel">Cancel</button>
                <br> <br>
            </form>
        <?php
        }
        ?>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th>
                        <th>
                            <button type="button" class="btn btn-outline-primary"><a style="text-decoration: none; color:black;" href="categorys.php?add=1"> &nbsp;&nbsp;Add&nbsp;&nbsp;</a></button>
                        </th>
                        </th>

                </thead>

                <tbody>
                    <?php
                    $data = all_ctg();
                    delete_ctg();
                    if (isset($_GET['search_item'])) {
                        $query = search_ctg();
                        if (isset($query)) {
                            $data = $query;
                        } else {
                            get_redirect("categorys.php");
                        }
                    } elseif (isset($_GET['id'])) {
                        $data = get_ctg_details();
                    }
                    if (isset($data)) {
                        $num = sizeof($data);
                        for ($i = 0; $i < $num; $i++) {
                    ?>
                            <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo $data[$i]['id'] ?></td>
                                <td><?php echo $data[$i]['name'] ?></td>
                                <td>
                                    <button type="button" class="btn pull-left btn-outline-warning"><a style="text-decoration: none; color:black;" href="categorys.php?edit=<?php echo $data[$i]['id'] ?>">Edit</a></button>
                                </td>
                                <td>
                                    <button type="button" class="btn pull-left btn-outline-danger"><a style="text-decoration: none; color:black;" href="categorys.php?delete=<?php echo $data[$i]['id'] ?>">Delete</a></button>
                                </td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
    </div>
    </div>
    <?php
    include "includes/footer.php"
    ?>
</body>