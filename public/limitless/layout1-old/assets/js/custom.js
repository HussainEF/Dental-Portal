/* ------------------------------------------------------------------------------
 *
 *  # Custom JS code
 *
 *  Place here all your custom js. Make sure it's loaded after app.js
 *
 * ---------------------------------------------------------------------------- */
    // Click on next button
    jQuery(document).on('click', '.form-wizard-next-btn', function() {
        var parentFieldset = jQuery(this).closest('.wizard-fieldset');
        var currentActiveStep = jQuery(this).closest('.form-wizard').find('.form-wizard-steps .active');
        var next = jQuery(this);
        var nextWizardStep = true;

        // Your validation logic here (commented out for simplicity)
        /*
        parentFieldset.find('.wizard-required').each(function() {
            var thisValue = jQuery(this).val();
            if (thisValue == "") {
                jQuery(this).siblings(".wizard-form-error").slideDown();
                nextWizardStep = false;
            } else {
                jQuery(this).siblings(".wizard-form-error").slideUp();
            }
        });
        */

        if (nextWizardStep) {
            parentFieldset.removeClass("show", 400);
            currentActiveStep.removeClass('active').addClass('activated').next().addClass('active', 400);
            parentFieldset.next('.wizard-fieldset').addClass("show", 400);

            updateFormWizardSteps();
        }
    });

    // Click on previous button
    jQuery(document).on('click', '.form-wizard-previous-btn', function() {
        var prev = jQuery(this);
        var currentActiveStep = prev.closest('.form-wizard').find('.form-wizard-steps .active');
        prev.closest('.wizard-fieldset').removeClass("show", 400);
        prev.closest('.wizard-fieldset').prev('.wizard-fieldset').addClass("show", 400);
        currentActiveStep.removeClass('active').prev().removeClass('activated').addClass('active', 400);

        updateFormWizardSteps();
    });

    // Helper function to update form wizard steps
    function updateFormWizardSteps() {
        jQuery(document).find('.wizard-fieldset.show').each(function() {
            var formAtrr = jQuery(this).attr('data-tab-content');
            jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function() {
                if (jQuery(this).attr('data-attr') == formAtrr) {
                    jQuery(this).addClass('active');
                    var innerWidth = jQuery(this).innerWidth();
                    var position = jQuery(this).position();
                    jQuery(document).find('.form-wizard-step-move').css({"left": position.left, "width": innerWidth});
                } else {
                    jQuery(this).removeClass('active');
                }
            });
        });
    }