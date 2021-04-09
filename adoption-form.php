<?php  require_once "templates/header.php"?>
<div class="container-sm adoption-form-container">
    <div class="row align-items-center">
        <div class="col-lg-4"></div>

        <div class="col-lg-4">
            <form id="adoption-form">
                <div class="mb-3">
                    <label for="name">Name</label>
                    <input type="text" class=" form-control" id="name" name="name" placeholder="First Name">
                </div>
                <div class="mb-3">
                    <label for="lastname">Last Name</label>
                    <input type="text" class=" form-control" id="lastname" name="lastname" placeholder="Last Name">
                </div>
                <div class="mb-3">
                    <label for="address">Address</label>
                    <input type="text" class=" form-control" id="address" name="address" placeholder="Address">
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" class=" form-control" id="email" name="email" placeholder="E-mail address">
                </div>
                <div class="mb-3">
                    <label for="phone">Phone Number</label>
                    <input type="email" class=" form-control" id="phone" name="phone" placeholder="Phone Number">
                </div>

                <button type="submit" class="btn" id="send-btn">Send</button>
            </form>
        </div>

        <div class="col-lg-4"></div>
    </div>
</div>
<?php  require_once "templates/footer.php"?>