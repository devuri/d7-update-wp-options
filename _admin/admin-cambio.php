<?php

 if ( isset( $_POST['submit'] ) ){// if submit is sett

   //remember to check NOUNCE

   // EURO
   $euro_sell = wpo_get_input_numberonly('EURSELL');
   $euro_buy = wpo_get_input_numberonly('EURBUY');

   //CAD
   $cad_sell = wpo_get_input_numberonly('CADSELL');
   $cad_buy = wpo_get_input_numberonly('CADBUY');

   // GPB
   $gbp_sell = wpo_get_input_numberonly('GBPSELL');
   $gbp_buy = wpo_get_input_numberonly('GBPBUY');

   // USD
   $usd_sell = wpo_get_input_numberonly('USDSELL');
   $usd_buy = wpo_get_input_numberonly('USDBUY');

// ok sparky update them all :)
    update_option( 'euro_sell', $euro_sell );
      update_option( 'euro_buy', $euro_buy );

         update_option( 'cad_sell', $cad_sell );
            update_option( 'cad_buy', $cad_buy );

               update_option( 'gbp_sell', $gbp_sell );
                  update_option( 'gbp_buy', $gbp_buy );

                     update_option( 'usd_sell', $usd_sell );
                        update_option( 'usd_buy', $usd_buy );


	// user feedback
	echo '<div id="message" class="updated settings-error notice is-dismissible" ><p>Cambio Rates Have Been <strong>Successfully Updated</strong> </p></div>';


}//end  if submit is sett
 //------------  THE FORM   ------------
			echo '<div id="frmwrap" >';
			echo '<form action="" method="POST"	enctype="multipart/form-data">'; ?><h1> Cambio Rates  </h1>

<?php echo'<p class="description">  '. get_bloginfo( "name" ).' Cambio Rates Settings </p>'; ?>

      <div class="table-1">
      <table class="wp-list-table widefat fixed striped posts">
      <thead>
      <tr>
      <th align="left">Currency</th>
      <th align="left">Sell ($)</th>
      <th align="left">Buy ($)</th>
      </tr>
      </thead>
      <tbody>
      <tr>
      <td><strong>EURO</strong></td>
      <td>Sell: <?php wpo_input("EURSELL", "euro_sell") ?></td>
      <td>Buy: <?php wpo_input("EURBUY", "euro_buy") ?></td>
      </tr>
      <tr>
      <td><strong>CAD: Canadian Dollars</strong></td>
      <td>Sell: <?php wpo_input("CADSELL", "cad_sell") ?></td>
      <td>Buy: <?php wpo_input("CADBUY", "cad_buy") ?></td>
      </tr>
      <tr>
      <td><b>GBP: Pound Sterling (Uk)</b></td>
      <td>Sell: <?php wpo_input( "GBPSELL", "gbp_sell") ?></td>
      <td>Buy: <?php wpo_input("GBPBUY", "gbp_buy") ?></td>
      </tr>
      <tr>
      <td><strong>USD: U.S. Dollars</strong></td>
      <td>Sell: <?php wpo_input("USDSELL", "usd_sell") ?></td>
      <td>Buy: <?php wpo_input("USDBUY", "usd_buy") ?></td>
      </tr>
      </tbody>
      </table>
      </div><?php

			// NONCE
			wp_nonce_field( 'wppqst_action', 'wppqst_nonce', 'ref-from' , 'the_admin');


			//SUBMIT
			echo get_submit_button('Update Cambio Rates');
			echo '</form></div>';
