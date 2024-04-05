<div class="modal fade" tabindex="-1" id="add-product-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
      <div class="container-fluid">
        <div class="card w-50 mx-auto mt-3 border border-0">
            <div class="card-title">
                <h1 class="text-info fw-bold text-center">Add Product</h1>
            </div>

            <div class="card-body mt-3">
                <form action="../actions/add-item.php" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Product Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="price" class="form-label">Price</label>
                                <div class="input-group">
                                    <div class="input-group-text bg-light">$</div>
                                    <input type="number" name="price" id="price" class="form-control">
                                </div>
                            </div>
                            <div class="col">
                                <lable for="quantity" class="form-label">Quantity</lable>
                                <input type="number" name="quantity" id="quantity" class="form-control">
                            </div>
                        </div>
                    </div>
                    <input type="submit" name="btn_add" value="Add" class="form-control btn btn-info w-100">

            </div>
</div>
          </div>
    </div>
  </div>
</div>