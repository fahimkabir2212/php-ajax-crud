<?php
    if(isset($_SESSION['message'])) :
?>

    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <strong>Message: </strong> <?= $_SESSION['message']; ?>
        <button type="button" class="btn btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

<?php 
    unset($_SESSION['message']);
    endif;
?>