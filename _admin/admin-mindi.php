<?php

 if ( isset( $_POST['submit'] ) ){// if submit is sett

   //remember to check NOUNCE

   // MAYBERRYPINDEX
   $m_mpi = wpo_get_input('MAYBERRYPINDEX');

   //JSEMARKET
   $jse_mi = wpo_get_input('JSEMARKET');

   // JSESELECT
   $jse_select = wpo_get_input('JSESELECT');

   // JSEALL
   $jse_jamaican = wpo_get_input('JSEALL');

   // JSECROSSLISTED
   $jse_clisted = wpo_get_input('JSECROSSLISTED');


// ok sparky update them all :)
    update_option( 'm_mpi', $m_mpi );

         update_option( 'jse_mi', $jse_mi );

               update_option( 'jse_select', $jse_select );

                     update_option( 'jse_jamaican', $jse_jamaican );

                            update_option( 'jse_clisted', $jse_clisted );

	// user feedback
	echo '<div id="message" class="updated settings-error notice is-dismissible" ><p>Market Indices Have Been <strong>Successfully Updated</strong> </p></div>';


}//end  if submit is sett
 //------------  THE FORM   ------------
			echo '<div id="frmwrap" >';
			echo '<form action="" method="POST"	enctype="multipart/form-data">'; ?><h1> Market Indices  </h1>

<?php echo'<p class="description">  '. get_bloginfo( "name" ).' Market Indices Settings </p>'; ?>

      <div class="table-1">
      <table class="wp-list-table widefat fixed striped posts">
      <thead>
      <tr>
      <th align="left">Mayberry Investments Market Indices</th>
      </tr>
      </thead>
      <tbody>
      <tr>
      <td><strong>Mayberry Performance Index</strong>
        <?php wpo_input("MAYBERRYPINDEX", "m_mpi") ?>
      </td>
      </tr>
      <tr>
      <td><strong>JSE Market Index</strong>
        <?php wpo_input("JSEMARKET", "jse_mi") ?>
      </td>
      </tr>
      <tr>
      <td><b>JSE Select</b>
        <?php wpo_input( "JSESELECT", "jse_select") ?>
      </td>
      </tr>
      <tr>
      <td><strong>JSE All Jamaican</strong>
        <?php wpo_input("JSEALL", "jse_jamaican") ?>
      </td>
      </tr>
      <tr>
      <td><strong>JSE Cross Listed</strong>
        <?php wpo_input("JSECROSSLISTED", "jse_clisted") ?>
      </td>
      </tr>
      </tbody>
      </table>
      </div><?php

			// NONCE
			wp_nonce_field( 'wppqst_action', 'wppqst_nonce', 'ref-from' , 'the_admin');


			//SUBMIT
			echo get_submit_button('Update Market Indices');
			echo '</form></div>';
