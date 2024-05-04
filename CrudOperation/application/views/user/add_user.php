<?php $this->load->view('includes/header'); ?>

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <?php // echo form_open_multipart('user/add');?>
                <h5 class="card-title text-center">Add User</h5>
                <!DOCTYPE html>
                <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>File Upload Form</title>
                    </head>
                    <body>
                        <h2>File Upload Form</h2>
                        <form action='file_data' method="post" enctype='Multipart/form-Data'>
                            <label for="username">Username:</label>
                            <input type="text" name="username" id="username" required><br><br>

                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" required><br><br>

                            <label for="mobile">Mobile:</label>
                            <input type="text" name="mobile" id="mobile" required><br><br>

                            <label for="address">Address:</label>
                            <textarea name="address" id="address" required></textarea><br><br>

                            <label for="file">Choose File:</label>
                            <input type="file" name="file" id="file" required><br><br>

                            <input type="submit" value="Submit">
                        </form>
                    </body>
                </html>
                <?php if ($this->session->flashdata('success')) { ?>
                    <div class="alert alert-success" role="alert">
                        Successfully Added
                    </div>
                <?php }
                ?>
                <?php if ($this->session->flashdata('error')) { ?>
                    <div class="alert alert-danger" role="alert">
                        Failed!
                    </div>
                <?php }
                ?>

            </div>
        </div>
    </div>
</div>
<?php $this->load->view('includes/footer'); ?>