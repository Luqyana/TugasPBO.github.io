<html>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div class="modal small fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                 <h3 id="myModalLabel">Delete Confirmation</h3>

            </div>
            <div class="modal-body">
                <p class="error-text"><i class="fa fa-warning modal-icon"></i>Are you sure you want to delete the cover?
                    <br>This cannot be undone.</p>
            </div>
            <div class="modal-footer">
               <button class="btn btn-default"data-dismiss="modal" aria-hidden="true">Cancel</button> <a href="#" class="btn btn-danger"  id="modalDelete" >Delete</a>

            </div>
        </div>
    </div>
</div>

<table>
    <thead>
        <th>Cover Name</th>
        <th>Sum Insured</th>
        <th>Info</th>
        <th style="width: 3.5em;"></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>name 1</td>
            <td>insured 1</td>
            <td>info 1</td>
            <td> <a href="cover-type.php?id=1"><i class="fa fa-pencil"></i></a>
 <a href="#myModal" class="trash" data-id="1" role="button" data-toggle="modal"><i class="fa fa-trash-o">x</i></a>

            </td>
        </tr>
        <td>name 2</td>
        <td>insured 2</td>
        <td>info 2</td>
        <td> <a href="cover-type.php?id=2"><i class="fa fa-pencil"></i></a>
 <a href="#myModal" class="trash" data-id="2" role="button" data-toggle="modal"><i class="fa fa-trash-o">x</i></a>

        </td>
        </tr>
        <td>name 3</td>
        <td>insured 3</td>
        <td>info 3</td>
        <td> <a href="cover-type.php?id=3"><i class="fa fa-pencil"></i></a>
 <a href="#myModal" class="trash" data-id="3" role="button" data-toggle="modal"><i class="fa fa-trash-o">x</i></a>

        </td>
        </tr>
    </tbody>
</table>
<script>
$('.trash').click(function(){
    var id=$(this).data('id');
    $('#modalDelete').attr('href','delete-cover.php?id='+id);
})
</script>
</html>