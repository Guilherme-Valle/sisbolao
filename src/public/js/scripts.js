(function($) {

    /**
     * Verificação de igualdade.
     */
    $('[data-equal-to]').on('change', function() {
        var self = $(this),
            target = $($(this).data('equal-to'));

        if(self.val().length && self.val() != target.val()) {
            self.addClass('not-valid');
            if(!self.next('span.error-alert.error-alert-not-equal').length) {
                self.after($('<span/>', {
                    "class": "error-alert small error-alert-not-equal",
                    "text": self.data('equal-to-error-message')
                }));
            }
        } else {
            self.removeClass('not-valid');
            self.next('span.error-alert').remove();
        }
    });

    /**
     * Submissão genérica de formulários.
     */
    $('[data-ajax-submit]').on('submit', function(){
        var form = $(this);
        var alert_modal = {
            wrapper_el: $('.alert-modal'),
            title_el: $('.alert-modal').find('.modal-title'),
            title: '',
            body_el: $('.alert-modal').find('.modal-body')
        };
        $.ajax({
            url: $(this).data('action'),
            type: 'post',
            data: form.serialize(),
            dataType: 'json',
            beforeSend: function() {
                $.blockUI({
                    message: 'Aguarde um instante...',
                    css: {
                        backgroundColor: 'transparent',
                        color: '#fff',
                        border: 'none'
                    }
                });
            },
            success: function(data) {
                console.log(data);
                if('errors' in data) { // existem erros?
                    alert_modal.title = 'Erro';
                    form.find('.not-valid, input, select, textarea').each(function() {
                        $(this).removeClass('not-valid');
                        $(this).next('span').each(function() {
                            $(this).remove();
                        });
                    });
                    $.each(data.errors, function(key, message) {
                        $('#' + key).addClass('not-valid').after($('<span/>', {
                            "class": "error-alert small",
                            "text": "- " + message
                        }));
                    });
                    alert_modal.title_el.html(alert_modal.title);
                    alert_modal.body_el.html(data.message);
                    $.unblockUI({
                        onUnblock: function() {
                            alert_modal.wrapper_el.modal('show');
                        }
                    });
                } else { // sucesso
                    alert_modal.title = 'Aviso';
                    form[0].reset();
                    form.find('.not-valid, input, select, textarea').each(function() {
                        $(this).removeClass('not-valid');
                        $(this).next('span').each(function() {
                            $(this).remove();
                        });
                    });
                    // exibir alerta OU redirecionar
                    if(typeof form.data('ajax-submit-alert') !== 'undefined' && typeof form.data('ajax-submit-redirect') === 'undefined') {
                        alert_modal.title_el.html(alert_modal.title);
                        alert_modal.body_el.html(data.message);
                        $.unblockUI({
                            onUnblock: function() {
                                alert_modal.wrapper_el.modal('show');
                            }
                        });
                    } else if(typeof form.data('ajax-submit-redirect') !== 'undefined') {
                        $.unblockUI({
                            onUnblock: function() {
                                window.location.href = data.redirect_to;
                            }
                        });   
                    }
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                $.unblockUI();
                alert_modal.title_el.text('Erro');
                alert_modal.body_el.html('Falha ao realizar a solicitação.<br/>Por favor, tente novamente mais tarde.');
                $.unblockUI({
                    onUnblock: function() {
                        alert_modal.wrapper_el.modal('show');
                    }
                });
            }
        });
        return false;
    });

})(jQuery.noConflict());

