<?php 
if ($validation = session()->getFlashdata('validation')) {
    echo '<div class="alert alert-danger">';
    foreach ($validation->getErrors() as $error) {
        echo '<p>' . esc($error) . '</p>';
    }
    echo '</div>';
}
?>