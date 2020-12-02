<?php
require('./includes/heder.php');
require('./includes/navbar.php');


$get_book = 'SELECT * FROM books';

$reslt = mysqli_query($conn, $get_book);
?>


<div class="container pt-5">
    <input class='form-control' type="search" placeholder='Search Book...'>

    

<div class="row">
    
        <?php
            while($row = mysqli_fetch_assoc($reslt)){         
        ?>
                <div class="col-sm-2 my-3">
                <div class='card' style="min-height: 380px">
                    <img class='card-img-top' style="max-height: 200px" src="https://cdn.cp.adobe.io/content/2/rendition/283104a5-039b-40e3-bdaa-f7b1d28d5cc8/artwork/edc5bfda-4444-4807-875d-b73825d353ff/version/0/format/jpg/dimension/width/size/300" alt="">
                    <div class= 'card-body'>
                        <h6 class='card-title'><?= $row['name']?></h6>
                        <p class="text-small" style="font-size: 12px">By Rizan Mohomed</p>
                        <p class="text-small" style="font-size: 11px">Sarasavi publisher</p>
                    </div>
                </div>
                </div>
        <?php
         }
         ?>
        
</div>


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

