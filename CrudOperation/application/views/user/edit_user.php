<?php $this->load->view('includes/header'); ?>

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Update User</h5>
                <form method="post" action="<?= base_url() ?>user/edit" enctype='Multipart/form-Data'>
                    <input name="id" value="<?=$user->id?>" />
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" placeholder="Username" value="<?=$user->username?>" class="form-control" id="username">

                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" value="<?=$user->email?>" placeholder="Email" aria-describedby="emailHelp">

                    </div>
                    <div class="mb-3">
                        <label for="mobile" class="form-label">Mobile</label>
                        <input type="text" maxlength="10" class="form-control" value="<?=$user->mobile?>" name="mobile" placeholder="Mobile" id="mobile">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="address" placeholder="Address" value="<?=$user->address?>" class="form-control" id="address">
                    </div>
                    <div class="mb-3">
                        <label for="file" class="form-label">img</label>
                        <input type="file" name="file" id="file" value="<?=$user->file?>" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
                <?php
                if ($this->session->flashdata('success')) { ?>
                    <div class="alert alert-success" role="alert">
                        Successfully Updated
                    </div>
                <?php }
                ?>
                 <?php
                if ($this->session->flashdata('error')) { ?>
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