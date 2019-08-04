<?php
if ( ! defined( 'WPINC' ) ) {
    die;
}
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="wrap">
    <div id="cbxaccountingloading" style="display:none"></div>
    <h2><?php esc_html_e( 'CBX Accounting: View Expense/Income', 'cbxwpsimpleaccounting' ); ?></h2>




    <div id="poststuff">
        <div id="post-body" class="metabox-holder columns-2">
            <!-- main content -->
            <div id="post-body-content">
                <div id="cbxaccounting_addexpinc" class="meta-box-sortables ui-sortable">
                    <div class="postbox">

                        <h3><span><?php esc_html_e( 'Not Found!', 'cbxwpsimpleaccounting' ); ?></span>
                        </h3>

                        <div class="inside">
                            <div id="cbxwpsimpleaccounting">
                                <div class="alert alert-warning" role="alert">
                                    <?php esc_html_e( 'Sorry, the log was not found', 'cbxwpsimpleaccounting' ); ?>
                                </div>
                            </div>
                        </div>
                        <!-- .inside -->
                    </div>
                    <!-- .postbox -->
                </div>
                <!-- .meta-box-sortables .ui-sortable -->
            </div>
            <!-- post-body-content -->
            <?php
            include( 'sidebar.php' );

            ?>
        </div>
        <div class="clear"></div>
    </div>
</div>