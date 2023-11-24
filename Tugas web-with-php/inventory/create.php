<!doctype html>
<html lang="en">
<head>
    <?php include('template/header.php') ?>
</head>

<body>
    <?php include('template/navbar.php') ?>

    <main role="main " class="container">
        
        <?php include('template/welcome_message.php') ?>

        <div class="container mt-5">
            <div class="row mb-4">
                <div class="col-12">
                    <h5 class="mb-4">Create Inventory</h5>
                    <form action="controller/inventory.php?action=store" method="POST">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Input product name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Stock</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Input product stock" name="stock">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Expired at</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Input product expired at" name="expired_at">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <?php include('template/footer.php') ?>

    <?php include('template/scripts.php') ?>
</body>

</html>