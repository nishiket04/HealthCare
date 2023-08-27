
<?php
include('src/php/detail.php');
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - A Pen by Alexander Holman</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css'>

</head>
<body>
<!-- partial:index.partial.html -->
<ul class="nav nav-tabs">
       
        <li><a data-toggle="tab" href="#billing">Billing</a></li>
    </ul>
    
        <div id="billing" class="tab-pane fade">
            <div class="container">
                <div style="height:40px"></div>
                <div class="row clearfix">
                    <div class="col-md-12 column">
                        <table class="table table-bordered table-hover" id="tab_logic">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        #
                                    </th>
                                    <th class="text-center">
                                        Appointment Status
                                    </th>
                                    <th class="text-center">
                                        Treatment done
                                    </th>
                                    <th class="text-center">
                                        Payment
                                    </th>
                                    <th class="text-center">
                                        Doctor
                                    </th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr id='addr0'>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        <input type="text" name='treatment0' placeholder='' class="form-control" />
                                    </td>
                                    <td>
                                        <input type="text" name='payment0' placeholder='' class="form-control" />
                                    </td>
                                    <td>
                                        <input type="text" name='doc0' placeholder='' class="form-control" />
                                    </td>
                                    <td>
                                        <input type="text" name='note0' placeholder='' class="form-control" />
                                    </td>
                                </tr>
                                <tr id='addr1'></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <a id="add_row" class="btn btn-default pull-left">Add Row</a><a id='delete_row' class="pull-right btn btn-default">Delete Row</a>
            </div>
        </div>
    </div>
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js'></script><script  src="./src/js/script1.js"></script>

</body>
</html>
