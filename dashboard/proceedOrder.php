<div class="modal fade" id="approveOrder" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Approve order?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Approve approve the order.</div>
        <div class="modal-footer">
        <form action="../controllers/approveOrder.php" method="post">
          <?php
            $sql = mysqli_query($dbcon,"SELECT * FROM orders ORDER BY date DESC");
            while($row = mysqli_fetch_array($sql)){
                echo '<input hidden name="customerName" value="'.$row['customerName'].'"/></td>';
                echo '<input hidden name="phone" value="'.$row['phoneNumber'].'"/></td>';
                echo '<input hidden name="address" value="'.$row['address'].'"/></td>';
                echo '<input hidden name="address" value="'.$row['quantity'].'"/></td>';
            }
          ?>
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary" href="">Approve</button>
        </form>
        </div>
      </div>
    </div>
  </div>