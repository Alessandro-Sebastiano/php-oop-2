<div class="container-xl pt-3">

    <h2>Products</h2>

    <div class="row justify-content-start align-items-center g-0">

        <div class="card m-4" style="width: 18rem;">
            <img src="<?php echo $cuccia->img ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title d-inline"><?php echo $cuccia->name ?></h5>
                <span><?php echo $cuccia->price . '$' ?></span>
                <span class="d-block my-2"><?php echo 'Tipo: ' . $cuccia->type ?></span>
                <a href="#" class="btn btn-primary">Buy</a>
            </div>
        </div>
        <div class="card m-4" style="width: 18rem;">
            <img src="<?php echo $palla->img ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title d-inline"><?php echo $palla->name ?></h5>
                <span><?php echo $palla->price . '$' ?></span>
                <span class="d-block my-2"><?php echo 'Tipo: ' . $palla->type ?></span>
                <a href="#" class="btn btn-primary">Buy</a>
            </div>
        </div>
        <div class="card m-4" style="width: 18rem;">
            <img src="<?php echo $crocchette->img ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title d-inline"><?php echo $crocchette->name ?></h5>
                <span><?php echo $crocchette->price . '$' ?></span>
                <span class="d-block my-2"><?php echo 'Tipo: ' . $crocchette->type ?></span>
                <a href="#" class="btn btn-primary">Buy</a>
            </div>
        </div>



    </div>


</div>