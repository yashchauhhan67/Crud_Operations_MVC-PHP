<?php $this->load->view('includes/header'); ?>



<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">User List</h5>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Address</th>
                            <th>Files</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($users as $item) {
                            ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $item->username ?></td>
                                <td><?= $item->email ?></td>
                                <td><?= $item->mobile ?></td>
                                <td><?= $item->address ?></td>
                                <!--<td><?= $item->file ?></td>-->
                                <td><a href="<?= base_url() . 'upload/' . $item->file; ?>" target="_blank">
                                        <img src="<?= base_url() . 'upload/' . $item->file; ?>" width="100"></a>
                                </td>

                                <td>
                                    <a>
                                        <a    onclick="editProfile(<?php echo $item->id ?>)" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Edit</a>
                                        <a href="<?= base_url() ?>user/delete/<?= $item->id ?>" onclick="return confirm('Are you sure want to delete this user ?')" class="btn btn-sm btn-danger">Delete</a>
                                    </a>
                                </td>


<!--                                <td>
                                    <a href="<?= base_url() ?>user/edit_form/<?= $item->id ?>" class="btn btn-sm btn-primary">Update</a>
                                    <a href="<?= base_url() ?>user/delete/<?= $item->id ?>" onclick="return confirm('Are you sure want to delete this user ?')" class="btn btn-sm btn-danger">Delete</a>
                                </td>-->
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

                <!-- Button trigger modal -->


                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Update Profile</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="<?= base_url() ?>user/edit" enctype='Multipart/form-Data'>
                                    <!--<input name="id" value="<?php echo $item->id ?>" />-->
                                    <div class="mb-3">
                                        <!--<label for="username" class="form-label">Id</label>-->
                                        <input type="hidden" name="id" placeholder="id" value="" class="form-control" id="id">

                                    </div>
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" name="username" placeholder="Username" value="" class="form-control" id="username">

                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email address</label>
                                        <input type="email" class="form-control" name="email" id="email" value="" placeholder="Email" aria-describedby="emailHelp">

                                    </div>
                                    <div class="mb-3">
                                        <label for="mobile" class="form-label">Mobile</label>
                                        <input type="text" maxlength="10" class="form-control" value="" name="mobile" placeholder="Mobile" id="mobile">
                                    </div>
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" name="address" placeholder="Address" value="" class="form-control" id="address">
                                    </div>
                                    <div class="mb-3">
                                        <label for="file" class="form-label">File</label>

                                        <input type="file" name="file" id="file" value="" class="form-control">
                                        <input type="text" name="file1" placeholder="File" value="" class="form-control" id="file1">
                                    </div>

                                    <!--                                    <div class="mb-3">
                                                                            <a href="<?= base_url() . 'upload/' . $item->id; ?>" target="_blank">
                                                                                <img src="<?= base_url() . 'upload/' . $item->id; ?>" width="50">
                                                                            </a>
                                                                        </div>-->

                                    <button  type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
                            </div>
                        </div>
                    </div>
                </div>

                <?php if ($this->session->flashdata('success')) { ?>
                    <div class="alert alert-success" role="alert">
                        Successfully Added
                    </div>
                <?php }
                ?>
                <?php if ($this->session->flashdata('deleted')) { ?>
                    <div class="alert alert-success" role="alert">
                        Successfully Deleted
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

<script>

    function editProfile(id) {

        $.ajax({
            url: "edit_form/" + id,
//            url: "<?= base_url('user/edit') ?>" + <?= $item->id ?>,
//            url: <?= base_url('user/edit_form/') ?> + id ,
//            url: "user/edit_form/" + ,
//            data: "message=" + commentdata,
            type: 'GET',

            success: function (response) {

                let obj = jQuery.parseJSON(response);
                

//                console.log(obj);
//                alert(resp);
                var user = JSON.parse(response);
//                console.log(user);
                $('#id').val(user.user.id);
                $('#username').val(user.user.username);
                $('#email').val(user.user.email);
                $('#mobile').val(user.user.mobile);
                $('#address').val(user.user.address);
                $('#file1').val(user.user.file);
//                $('#file').val(user.file);
                        // Populate other fields as needed
                        $('#staticBackdrop').modal('show');
            },
            error: function (e) {
                alert('Error: ' + e);
            }
        });

    }
</script>
           


<?php $this->load->view('includes/footer'); ?>