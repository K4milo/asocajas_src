<?php


function my_acf_upload_prefilter( $errors, $file, $field ) {
    
    // only allow admin
    if( !current_user_can('manage_options') ) {
        
        // this returns value to the wp uploader UI
        // if you remove the ! you can see the returned values
        $errors[] = 'test prefilter';
        $errors[] = print_r($_FILES,true);
        $errors[] = $_FILES['async-upload']['name'] ;
        
    }
    //this filter changes directory just for item being uploaded
    add_filter('upload_dir', 'my_upload_directory');
    
    // return
    return $errors;
    
}
add_filter('acf/upload_prefilter/name=archivo_recurso', 'my_acf_upload_prefilter');

function my_upload_directory( $param ){
    $mydir = '/protected-files';

    $param['path'] = $param['basedir'] . $mydir;
    $param['url'] = $param['baseurl'] . $mydir;

	// if you need a different location you can try one of these values
/*	
    error_log("path={$param['path']}");  
    error_log("url={$param['url']}");
    error_log("subdir={$param['subdir']}");
    error_log("basedir={$param['basedir']}");
    error_log("baseurl={$param['baseurl']}");
    error_log("error={$param['error']}"); 
*/

    return $param;
}