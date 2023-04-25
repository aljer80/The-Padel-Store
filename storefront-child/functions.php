<?php
//renderar texten "Spoken by a true padler" i övre vänstra hörnet av sidan (hänger ihop med plugin:et som renderar padelcitat) 
add_action('storefront_before_content', 'shout_out', 1);
function shout_out() {
    echo "<h2> Spoken by a true padler: </h2>";
}


add_action('storefront_header', 'discount');
function discount() {
    echo '<h5> Ny kund? Använd rabattkoden "nykund" </h5>';
}

remove_action( 'storefront_header', 'storefront_product_search', 40 );


//tar bort Storefront credit-texten
function storefront_credit() {
	remove_action( 'storefront_footer', 'storefront_credit', 20 );
}

//tar bort sökfältet i headern
function remove_header() {
	remove_action( 'storefront_header', '_' );
}
