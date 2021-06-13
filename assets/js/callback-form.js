$(function() {
    Vue.use(window.vuelidate.default);
    Vue.use(VueMask.VueMaskPlugin);

    const { required, minLength } = window.validators;

    let callbackForm = new Vue({
        el: "#callback-form",
        data: {
            name: '',
            phone: '',
        },
        validations: {
            name: { required },
            phone: { required, minLength: minLength(16) },
        },
        methods: {
            phoneFocus() {
                if (this.phone === '') {
                    this.phone = '+7 ';
                }
                
            },
            submit() {
                this.$v.$touch()
                if (!this.$v.$invalid) {
                    showSuccess()
                    this.$el.dispatchEvent(new CustomEvent('validationSuccess', { bubbles: true}));
                }
            }
        }
    });


    // Add to Inputs "filled" class
    $('.input').each(function() {
        let _this = $(this);

        checkInput(_this);

        $(_this).on('keyup focus focusout', function () {
            checkInput(_this)
        });
    });

    function checkInput(_this) {
        if ($(_this).val() === '') {
            $(_this).removeClass('filled');
        } else {
            $(_this).addClass('filled');
        }
    }
});