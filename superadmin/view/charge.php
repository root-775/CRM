<style>
    th {
        white-space: nowrap;
        padding: 10px;
    }

    td {
        padding-left: 10px;
        padding-right: 10px;
    }
</style>
<?php if (isset($_POST['pin']) && $_POST['pass'] == '1234') { ?>


    <table id="example" class="container mb-5 table-responsive" style="width:100%" border="2">
        <thead class="bg-primary">
            <tr>
                <th>View</th>
                <th>Edit</th>
                <th>Date & Time</th> <!-- 4 -->
                <th>Ticket ID</th>
                <th>Submitted by</th> <!-- 5 -->
                <th>Booking Status</th>
                <th>Reason</th>
                <th>Confirmation No</th>
                <th>Payment Methods</th>
                <th>Card Holder Name</th>

                <th>Card Number</th>
                <th>Month</th>
                <th>Year</th>
                <th>CVV</th>
                <th>Phone No.</th>
                <th>Email-ID</th>
                <th>Street Address</th>
                <th>City</th>
                <th>State</th>
                <th>Zip Code</th>
                <th>Comments</th>
                <th>Itinerary</th><!-- 2 -->
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 0;
            foreach ($this->obj->showallData() as $row) {
                $i++;
                
                $color = 'white';
                switch($row['l_booking_status']){
                    case 'Confirmed':
                        $color = '#008000';
                        break;
                    case 'Pending':
                        $color = '#ffffff';
                        break;
                    case 'Hold':
                        $color = '#ffffff';
                        break;
                    case 'Declined':
                        $color = '#a64dff';
                        break;
                    case 'Refund':
                        $color = '#e60000';
                        break;
                    default:
                        $color = 'white';
                        break;
                }
            ?>
                <tr style="background-color: <?=$color ?>;">
                    <td class="text-center"><a href="index.php?controller=superadmin&function=dataView&id=<?= $row['l_confirmation_no'] ?>" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                    <td><a class="text-center" href="index.php?controller=superadmin&function=dataEdit&id=<?= $row['l_id'] ?>" target="_black"><span class="fa fa-edit"></span></a></td>
                    <td><?= date('d-m-Y h:i:s A', $row['l_add_on']) ?></td>
                    <td><?= $row['l_id'] ?></td>
                    <td><?= $row['l_submitted_by'] ?></td>
                    <td><?= $row['l_booking_status'] ?></td>
                    <td><?= $row['l_reason'] ?></td>
                    <td><?= $row['l_confirmation_no'] ?></td>
                    <td><?= $row['l_p_payment_method'] ?></td>
                    <td><?= $row['l_p_card_holder_name'] ?></td>
                    <td style=" white-space: nowrap;"><?= $row['l_p_card_no'] ?></td>
                    <td><?= $row['l_p_card_mm'] ?></td>
                    <td><?= $row['l_p_card_yy'] ?></td>
                    <td><?= $row['l_p_card_cvv'] ?></td>
                    <td><?= $row['l_p_card_holder_phone_no'] ?></td>
                    <td><?= $row['l_email'] ?></td>
                    <td><?= $row['l_p_street_address'] ?></td>
                    <td><?= $row['l_p_city'] ?></td>
                    <td><?= $row['l_p_state'] ?></td>
                    <td><?= $row['l_p_zip_code'] ?></td>
                    <td>
                        <?php $data = $this->obj->getCommentLast($row['l_confirmation_no']);
                        echo ($data['c_text']);
                        ?>
                    </td>
                    <td><a href="javascript:void(0);" data-href="index.php?controller=superadmin&function=getContent&id=<?= $row['l_confirmation_no'] ?>" class="openPopup btn btn-primary">View Itinerary</a></td>
                </tr>
            <?php
            } ?>
        </tbody>
    </table>


<?php } else { ?>

    <form action="" method="post" class="ml-1">
        <div class="row">
            <div class="col-sm-2">
                <input type="password" name="pass" id="" class="form-control">
            </div>
            <div class="col-sm-2">
                <input type="submit" value="Enter Pin" name="pin" class="btn btn-primary">
            </div>
        </div>

    </form>
<?php } ?>





<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Itinerary</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>





<style>
    th {
        white-space: nowrap;
        padding-right: 10px;
    }
</style>

<script>
    $(document).ready(function() {
        $('#example').DataTable({
            aLengthMenu: [
                [25, 50, 100, 200, -1],
                [25, 50, 100, 200, "All"]
            ]
        });


        $('.openPopup').on('click', function() {
            var dataURL = $(this).attr('data-href');
            $('.modal-body').load(dataURL, function() {
                $('#myModal').modal({
                    show: true
                }, );
            });
        });
    });
</script>