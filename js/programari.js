$(function() {
        $( '#motor-auto' ).autocomplete({
            source: toateMotoarele
        });

        $( '#model-auto' ).autocomplete({
            source: toateModelele
        });
        $('#myModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipientDate = button.data('date') // Extract info from data-* attributes
            var recipientOra = button.data('ora') // Extract info from data-* attributes
            var modal = $(this)
            modal.find('.modal-title').text('Programare noua in data: ' + recipientDate + ' | ora: ' + recipientOra)
            modal.find('div#hidden-field').html('<input type="hidden" id="data"  value="'+recipientDate+'">'+
                '<input type="hidden" id="ora"  value="'+recipientOra+'">')
        });

});
