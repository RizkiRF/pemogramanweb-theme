<?php 
add_action( 'admin_init', 'file_meta_boxes' );

function file_meta_boxes() {

  $my_meta_box = array(
    'id'        => 'file_pw',
    'title'     => 'File Upload',
    'desc'      => '',
    'pages'     => array( 'files' ),
    'context'   => 'normal',
    'priority'  => 'high',
    'fields'    => array(
      array(
        'id'          => 'file',
        'label'       => 'File',
        'desc'        => 'using archive like zip for multiple file/folder',
        'std'         => '',
        'type'        => 'upload',
        'class'       => '',
        'max'		  => 1,
        'choices'     => array()
      )
    )
  );
  
  ot_register_meta_box( $my_meta_box );

}
?>