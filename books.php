<?php
require('./includes/heder.php');
require('./includes/navbar.php');


$get_book = 'SELECT * FROM books';

$reslt = mysqli_query($conn, $get_book);
?>


<div class="container pt-5">
    <input class='form-control' type="search" placeholder='Search Book...'>

    <div class='text-right'>
        <hr />
        <a class='btn btn-sm btn-success' href="#"><i class='fa fa-plus'>Add New Book</i></a>
        <hr />
    </div>

<div>
    <table class='table table-bordered table-striped mt-5'>
        <thead>
            <tr>
                <th>Availabilty</th>
                <th>Name</th>
                <th>Author</th>
                <th>Genre</th>
                <th>Language</th>
            </tr>
        </thead>

        <tbody>
        <?php
            while($row = mysqli_fetch_assoc($reslt)){

           
        ?>
            <tr>

                <td></td>
                <td><?=$row['name']?></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        <?php
         }
         ?>
        </tbody>
    </table>




    <div class='ml-auto d-flex justify-content-end'>
        <ul class='pagination'>
            <li class='page-item'>
                <a class='page-link' href="#"><i class='fa fa-chevron-left'></i></a>
            </li>

            <li class='page-item'>
                <a class='page-link' href="#">1</a>
            </li>

            <li class='page-item'>
                <a class='page-link' href="#">2</a>
            </li>

            <li class='page-item'>
                <a class='page-link' href="#">3</a>
            </li>

            <li class='page-item'>
                <a class=page-link href="#"><i class='fa fa-chevron-right'></i></a>
            </li>
        </ul>
    </div>
</div>


</div>

