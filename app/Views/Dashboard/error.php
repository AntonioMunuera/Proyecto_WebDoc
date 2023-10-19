<?php 

if (session()->getFlashdata('validation')) {
    echo session()->getFlashdata('validation');
}
 ?>