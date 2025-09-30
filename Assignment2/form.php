<div class="container">
    <?php
    if($success){
    ?>
    <div class="alert alert-success">
        <p>Your post has been created</p>
    </div>
    <?php
    }
    if (!empty($errors)){
    ?>
    <div class="alert alert-danger">
        <?php htmlspecialchars($error); ?>
    </div>
    <?php
    }
    ?>
<!--    Form Section -->
    <form method="post" class="p-4">
<!--    Size options stored in array  -->
        <div class="mb-4 text-center">
            <label class="form-label">Choose a Size</label>
            <div class="d-flex justify-content-around mt-3">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="size[]" value="small" id="size_sm" required>
                <label class="form-check-label" for="size_sm">Small</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="size[]" value="medium" id="size_md" required>
                <label class="form-check-label" for="size_md">Medium</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="size[]" value="large" id="size_lg" required>
                <label class="form-check-label" for="size_lg">Large</label>
            </div>
            </div>
        </div>

<!--    Pizza type options stored in array -->
        <div class="mb-4 text-center">
            <label class="form-label">Pizza Type</label>
            <div class="d-flex justify-content-around mt-3">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="pizza_type[]" value="cheese" id="type_che">
                <label class="form-check-label" for="type_che">Cheese</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="pizza_type[]" value="pepperoni" id="type_pep">
                <label class="form-check-label" for="type_pep">Pepperoni</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="pizza_type[]" value="hawaiian" id="type_haw">
                <label class="form-check-label" for="type_haw">Hawaiian</label>
            </div>
            </div>
        </div>

        <!--  Extra toppings  -->
        <div class="mb-4 text-center">
            <label class="form-label">Extra Toppings</label>
            <div class="extraToppings">
                <label><input type="checkbox" name="toppings[]" value="Peppers">Peppers</label>
                <label><input type="checkbox" name="toppings[]" value="Tomato">Tomato</label>
                <label><input type="checkbox" name="toppings[]" value="Onions">Onions</label>
                <label><input type="checkbox" name="toppings[]" value="Mushrooms">Mushrooms</label>
                <label> <input type="checkbox" name="toppings[]" value="Olives">Olives</label>
                <label> <input type="checkbox" name="toppings[]" value="Basil">Basil</label>
                <label> <input type="checkbox" name="toppings[]" value="Anchovies">Anchovies</label>
                <label> <input type="checkbox" name="toppings[]" value="Bacon">Bacon</label>
            </div>
        </div>
<!--        Well Done yes or no-->
        <div class="mb-4 text-center">
            <label class="form-label">Well Done?</label>
            <div class="d-flex justify-content-around mt-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="well_done" value="well_done_yes" id="well_done_yes" required>
                    <label class="form-check-label" for="well_done_yes">YES</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="well_done" value="well_done_no" id="well_done_no" required>
                    <label class="form-check-label" for="well_done_no">NO</label>
                </div>
            </div>
        </div>

<!--    Customer information -->
        <div class="row g-3 mb-4">
            <div class="col-md-6">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" id="fname" name="fname" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" id="lname" name="lname" class="form-control" required>
            </div>
        </div>
<!--        Address-->
        <div class="mb-4">
            <label for="address" class="form-label">Address</label>
            <input type="text" id="address" name="address" class="form-control" required placeholder="123 Apple St, Town, Ontario">
        </div>
<!--        Email-->
        <div class="mb-4">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>

<!--          Button -->
        <button type="submit" class="btn btn-success">Submit</button>

    </form>
</div>