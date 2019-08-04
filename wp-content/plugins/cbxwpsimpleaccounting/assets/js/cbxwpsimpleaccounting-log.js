jQuery(document).ready(function($) {


	$(".cbxlogdaterange").flatpickr({
		disableMobile: true,
		dateFormat: 'Y-m-d'
	});

    $("#cbxlogexpinc_type").on('change', function() {

        var optionValue = parseInt($(this).val());
        if (optionValue == 0)
            $('#cbxlogexpinc_category').val(0).prop('disabled', true);
        else if (optionValue == 1) {
            $('#cbxlogexpinc_category').prop('disabled', false);
            $('#cbxlogexpinc_category').find('option[data-type="1"]').removeClass('cbxlogexpinccathidden').prop('disabled', false);
            $('#cbxlogexpinc_category').find('option[data-type="2"]').addClass('cbxlogexpinccathidden').prop('disabled', true);

        }
        else if (optionValue == 2) {
            $('#cbxlogexpinc_category').prop('disabled', false);
            $('#cbxlogexpinc_category').find('option[data-type="2"]').removeClass('cbxlogexpinccathidden').prop('disabled', false);
            $('#cbxlogexpinc_category').find('option[data-type="1"]').addClass('cbxlogexpinccathidden').prop('disabled', true);
        }

    });

    //delete a log
    $(".cbxdelexpinc").on('click', function(e) {
        e.preventDefault();

        if (!confirm(cbxwpsimpleaccountinglog.permission)) {
            return false;
        }

        var $this = $(this);
        var $id = $this.attr('id');
        var $busy   = parseInt($this.data('busy'));

        //ajax call for deleting expinc

        if($busy == 0){
            $this.data('busy', 1);
            $('#cbxaccountinglogloading').show();

            var data = {
                'action': 'delete_expinc_log',
                'id': $id,
                'security': cbxwpsimpleaccountinglog.nonce
            };

            $.ajax({
                type: 'post',
                dataType: 'json',
                url: ajaxurl,
                data: data,
                success: function(response) {
                    if (!response.error) {

                        $this.closest("tr").remove();
                        $('#cbxwpsimpleaccountinglog_notice').show();
                        $('#cbxwpsimpleaccountinglog_notice').html('<p>'+response.msg+'</p>');
                    }
                    else {

                        $this.data('busy', 0);

                        $('#cbxwpsimpleaccountinglog_notice').hide();
                        $('#cbxwpsimpleaccountinglog_notice').html('<p>'+response.msg+'</p>');
                    }
                }

            });//end ajax calling for category
        }


    });
    //end delete log



});