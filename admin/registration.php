<?php
// Include necessary functions and perform any required actions
include "includes/functions.php";
add_admin(); // Assuming this is the function to add an admin

if (isset($_GET['add'])) {
    // Display the form for adding a new admin
?>
    <h2>Add new Admin</h2>
    <form action="admin.php" method="POST">
        <div class="form-group">
            <label for="admin_fname">First name</label>
            <input pattern="[A-Za-z_]{1,15}" type="text" class="form-control" placeholder="First name" name="admin_fname" required>
            <div class="form-text">Please enter the first name in the range of 1-30 characters. Special characters and numbers are not allowed!</div>
        </div>
        <br>
        <div class="form-group">
            <label for="admin_lname">Last name</label>
            <input pattern="[A-Za-z_]{1,15}" type="text" class="form-control" placeholder="Last name" name="admin_lname" required>
            <div class="form-text">Please enter the last name in the range of 1-30 characters. Special characters and numbers are not allowed!</div>
        </div>
        <br>
        <div class="form-group">
            <label for="admin_email">Email address</label>
            <input type="email" class="form-control" id="admin_email" aria-describedby="emailHelp" placeholder="Email address" name="admin_email" required>
            <div class="form-text">Please enter the email in the format: example@gmail.com.</div>
        </div><br>
        <div class="form-group">
            <label for="admin_password">Password</label>
            <input type="password" pattern="^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$" class="form-control" placeholder="Password" name="admin_password" required>
            <div class="form-text">
                <ul>
                    <li>Must be a minimum of 8 characters</li>
                    <li>Must contain at least 1 number</li>
                    <li>Must contain at least one uppercase character</li>
                    <li>Must contain at least one lowercase character</li>
                </ul>
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-outline-primary" value="update" name="add_admin">Submit</button>
        <button type="submit" class="btn btn-outline-danger" value="cancel" name="admin_cancel">Cancel</button>
        <br> <br>
    </form>
<?php
}
?>
