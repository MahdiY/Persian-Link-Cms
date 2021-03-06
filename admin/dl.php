<?php
/*
 * Persian Link CMS
 * Powered By www.PersianLinkCMS.ir
 * Author : Mohammad Majidi & Mahdi Yousefi (MahdiY.ir)
 * Version 3.0
 * copyright 2011 - 2018
*/

session_start();
include( '../vendor/autoload.php' );

if( is_admin() ) {
    $file = tr_num( 'PersianCmsLink-backup-' . pdate( "Y-m-d", time() ) . '.sql' );
    header( "Content-Type: application/octet-stream" );
    header( "Content-disposition: attachment; filename=$file" );
    backup_tables();
}
