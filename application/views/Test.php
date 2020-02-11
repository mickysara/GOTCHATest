<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <h4>Product</h4>
            <div class="row">
            <?php

                $data = $this->db->get('product');
                foreach ($data->result_array() as $row) : ?>
                <div class="col-md-4">
                    <div class="thumbnail">
                        
                        <div class="caption">
                            <h4><?php echo $row['name_pro'];?></h4>
                            <div class="row">
                                <div class="col-md-7">
                                    <h4><?php echo number_format($row['price']);?></h4>
                                </div>
                                <div class="col-md-5">
                                    <input type="number" name="quantity" id="<?php echo $row['id_pro'];?>" value="1" class="quantity form-control">
                                </div>
                            </div>
                            <button class="add_cart btn btn-success btn-block" data-productid="<?php echo $row['id_pro'];?>" data-productname="<?php echo $row['name_pro'];?>" data-productprice="<?php echo $row['price'];?>">Add To Cart</button>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
                 
            </div>
 
        </div>
        <div class="col-md-4">
            <h4>Shopping Cart</h4>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Items</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Total</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="detail_cart">
 
                </tbody>
                 
            </table>
        </div>
    </div>
</div>
</div>