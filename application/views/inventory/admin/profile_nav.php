<?php
$user = $this->inventory->getRows("email = '{$_SESSION['email']}'", 'accounts')[0];
?>
<div class="dashboard-content p-2 d-flex align-items-center justify-content-end gap-2" style="background: rgb(6,82,75); background: linear-gradient(90deg, rgba(6,82,75,1) 0%, rgba(32,224,96,1) 100%);">
    <img id="profile" alt="Profile" src="<?= !empty($user['profile']) ? base_url($user['profile']) : base_url('inventory-php/assets/img/default_avatar.png')  ?>" class="rounded-circle" style=" height: 50px; width: 50px; cursor: pointer; object-fit: cover;" />
    <input type="file" accept="image/*" class="d-none" id="chooseFile">
    <h3 class="text-white fw-bold mt-1">Welcome <?= $user['firstname'] ?>!</h3>

    <div class="btn-group">
        <button type="button" class="btn btn-sm dropdown-toggle text-white fs-2" data-bs-toggle="dropdown" aria-expanded="false">

        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= site_url('admin/profile') ?>">Profile</a></li>

            <li>
                <hr class="dropdown-divider">
            </li>
            <li>
                <?php require_once __DIR__ . '/logout_confirmation.php'; ?>
                <a class="dropdown-item" href="#" onclick="logoutConfirmation()">
                    Logout
                </a>
            </li>
        </ul>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#profile, #profile2').on('click', function() {
            Swal.fire({
                title: "Change profile",
                text: "Do you want to Update your profile?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, Continue"
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#chooseFile').click();
                }
            });

        })

        $('#chooseFile').on('change', function() {
            let reader = new FileReader();
            reader.onload = function(e) {
                $('#profile').attr('src', e.target.result);

                let formData = new FormData();
                formData.append('profileImage', $('#chooseFile')[0].files[0]);

                $.ajax({
                    url: "<?= site_url('admin/update_profile') ?>",
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        Swal.fire(
                            'Success!',
                            'Profile updated successfully',
                            'success'
                        )
                    },
                    error: function(error) {
                        Swal.fire(
                            'Error!',
                            'Failed to update profile',
                            'success'
                        )
                    }
                });
            }
            reader.readAsDataURL($('#chooseFile').prop('files')[0]);


        })
    })
</script>