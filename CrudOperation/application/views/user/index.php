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
                                <!--<td><a href="<?= $item->index2 ?>"</a><?= $item->username ?></td>-->
                                <!--<td><a href="<?= $item->username ?>"><?= $item->username ?></a></td>-->
                                <td><a onclick="showProfile(<?php echo $item->id; ?>)" data-bs-toggle="modal" data-bs-target="#staticBackdrop1"  style="text-decoration: none;"><?= $item->username ?></a></td>
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


                <!-- Modal 1 for a Update on Edit Button-->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lr">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Update Profile</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body "   >
                                <form method="post" action="<?= base_url() ?>user/edit" enctype='Multipart/form-Data' >
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
                                    <div class="mb-3" >
                                        <label for="file" class="form-label">Current File</label><br>
                                        <img id="file1img" src=" " width="50" >
                                        <!--<p name="file1" value="" id="file1" ><?//= $item->file ?></p>-->
                                    </div>
                                    <div class="mb-3">
                                        <label for="file" class="form-label">File</label>
                                        <input type="file" name="file" id="file" value="" class="form-control">

<!--<p name="file1" value="" id="file1" ><?//= $item->file ?></p>-->

                                    </div>


                                    <button  type="submit" class="btn btn-primary">Update</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </form>
                            </div>
                            <!--                            <div class="modal-footer">
                                                            
                                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
                                                        </div>-->
                        </div>
                    </div>
                </div>


                <!--                 Button trigger modal 
                                <button type="button" class="btn btn-primary" id="staticBackdrop" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    Launch static backdrop modal
                                </button>-->

                <!-- Modal 2 for showing Data on click Username -->
                <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lr ">
                        <div class="modal-content">
                            <div class="modal-header">
                                <!--<h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>-->
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h5 class="card-title text-center">User List</h5>
                                <table class="table table-striped table-dark">
                                    <tbody>
                                        <tr>
                                            <th>ID</th>
                                            <td id="id1"></td>
                                        </tr>
                                        <tr>
                                            <th>Username</th>
                                            <td id="username1"></td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td id="email1"></td>
                                        </tr>
                                        <tr>
                                            <th>Mobile</th>
                                            <td id="mobile1"></td>
                                        </tr>
                                        <tr>
                                            <th>Address</th>
                                            <td id="address1"></td>
                                        </tr>
                                        <tr>
                                            <th>Files</th>
                                            <td>
                                                <a id="file2" href="" target="_blank">
                                                    <img id="file2img" src="" width="100">
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Understood</button>
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
            //            url: "user/edit_form/" + id,

            //            data: "message=" + commentdata,
            type: 'GET',
            //console.log(user);
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

                var imageName = user.user.file;
                var imageUrl = '<?= base_url() . 'upload/' ?>' + imageName;

                // Set the href attribute of the <a> tag with the constructed image URL
                $('#file1').attr('href', imageUrl);

                // Update the src attribute of the <img> tag to display the image
                $('#file1img').attr('src', imageUrl);

                //                $('#file1').value(user.user.file);

                //                $('#file').val(user.file);
                // Populate other fields as needed
                $('#staticBackdrop').modal('show');
            },
            error: function (e) {
                alert('Error: ' + e);
            }
        });


    }

    function showProfile(id) {

        $.ajax({
            url: "profile/" + id,
            //            url: "<?= base_url('user/edit') ?>" + <?= $item->id ?>,
            //            url: <?= base_url('user/edit_form/') ?> + id ,
            //            url: "user/edit_form/" + id,
            //            data: "message=" + commentdata,
            type: 'GET',
            //console.log(user);
            success: function (response) {

                let obj = jQuery.parseJSON(response);
                console.log(obj);
                //                alert(resp);
                var user = JSON.parse(response);
                //                console.log(user);
                $('#id1').text(user.user.id);
                $('#username1').text(user.user.username);
                $('#email1').text(user.user.email);
                $('#mobile1').text(user.user.mobile);
                $('#address1').text(user.user.address);
//                $('#file2').text(user.user.file);

                var imageName = user.user.file;
                var imageUrl = '<?= base_url() . 'upload/' ?>' + imageName;

                // Set the href attribute of the <a> tag with the constructed image URL
                $('#file2').attr('href', imageUrl);

                // Update the src attribute of the <img> tag to display the image
                $('#file2img').attr('src', imageUrl);

                $('#staticBackdrop1').modal('show');
            },
            error: function (e) {
                alert('Error: ' + e);
            }
        });



    }

</script>

<!--
    <style>
    .modal-body {
        max-height: 400px; /* Adjust as needed */
        overflow-y: auto; /* Enable vertical scrolling if content exceeds the height */
    }

    .modal-content {
        border-radius: 10px;
    }

    .modal-header {
        background-color: #f0f0f0; /* Light gray background for header */
        border-bottom: none; /* No border at the bottom of header */
    }

    .modal-footer {
        background-color: #f0f0f0; /* Light gray background for footer */
        border-top: none; /* No border at the top of footer */
    }

    .modal-title {
        color: #333; /* Dark color for title */
    }

    .modal-body p {
        margin-bottom: 10px; /* Add spacing between paragraphs */
    }

    .modal-body a {
        display: inline-block; /* Make the link display as a block element */
        margin-top: 10px; /* Add spacing above the link */
    }

    .modal-body img {
        border-radius: 5px; /* Rounded corners for images */
        margin-top: 10px; /* Add spacing above the image */
    }
</style>-->




<?php $this->load->view('includes/footer'); ?>