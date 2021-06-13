$(function() {
    Vue.use(window.vuelidate.default);
    Vue.use(VueMask.VueMaskPlugin);

    const { required, minLength } = window.validators;

    let feedbackForm = new Vue({
        el: "#feedback",
        data: {
            name: '',
            phone: '',
            message: '',
        },
        validations: {
            name: { required },
            phone: { required, minLength: minLength(16) },
            message: { required },
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

    let callbackForm = new Vue({
        el: "#catalog-form",
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
                    showSuccessCall()
                    this.$el.dispatchEvent(new CustomEvent('validationSuccess', { bubbles: true}));
                }
            }
        }
    });


    let orderForm = new Vue({
        el: "#order-form",
        data: {
            name: '',
            phone: '',
            address: '',
        },
        validations: {
            name: { required },
            phone: { required, minLength: minLength(16) },
            address: { required },
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

    function showSuccess() {

        $.fancybox.close();
        $.fancybox.open({
            src: '#feedback-success'
        });

    }

    function showSuccessCall() {

        $.fancybox.close();
        $.fancybox.open({
            src: '#feedback-success-partner'
        });

    }

});