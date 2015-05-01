<?php

    $descarga = $_REQUEST['file'];

    $file = filter_var( "$descarga.txt", FILTER_SANITIZE_STRING );

    if ( file_exists( $file ) ) {
        header ( "Content-type: octet/stream" );
        header ( "Content-disposition: attachment; filename=$file;" );
        header ( "Content-Length: ". filesize( $file ) );
        readfile( $file );
    } else {
        echo "<script>
        alert('El archivo no existe');
        </script>";
    }

    exit;



