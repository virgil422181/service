
//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size
$(function() {
    $('#side-menu').metisMenu();
    $('#userForm').validator({
        delay: 500,
        html: false,
        disable: true,
        custom: {},
        errors: {
          match: 'Campurile nu corespund!',
          minlength: 'Not long enough!',
          required: 'Campul nu poate fi gol!'
        },
        feedback: {
          success: 'glyphicon-ok',
          error: 'glyphicon-remove'
        }
    });

    $(window).bind("load resize", function() {
        topOffset = 50;
        width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse');
            topOffset = 100; // 2-row-menu
        } else {
            $('div.navbar-collapse').removeClass('collapse');
        }

        height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;
        height = height - topOffset;
        if (height < 1) height = 1;
        if (height > topOffset) {
            $("#page-wrapper").css("min-height", (height) + "px");
        }
    });

    var url = window.location;
    var element = $('ul.nav a').filter(function() {
        return this.href == url || url.href.indexOf(this.href) == 0;
    }).addClass('active').parent().parent().addClass('in').parent();
    if (element.is('li')) {
        element.addClass('active');
    }
    $('.dataTables').DataTable({
                'ordering': false,
                'responsive': true,
                'bAutoWidth':false,
                'paging': false,
                'searching': false,
                'language': {
                     processing:   "Proceseaza...",
                     lengthMenu:   "Afiseaza _MENU_ inregistrari pe pagina",
                     zeroRecords:   "Nu am gasit nimic - ne pare rau",
                     info: "Afisate de la _START_ la _END_ din _TOTAL_ inregistrari",
                     infoEmpty: "Afisate de la 0 la 0 din 0 inregistrari",
                     infoFiltered:  "(filtrate dintr-un total de _MAX_ inregistrari)",
                     infoPostFix:   "",
                     loadingRecords: "Incarcare in curs ...",
                     search:       "Cauta:",
                     emptyTable: "Nu am gasit nimic",
                      paginate: {
                         first:   "Prima", 
                         previous:  "Precedenta",
                         next:       "Urmatoarea", 
                         last:      "Ultima"
                     }
                 }

    });
    $('.dataTablesPages').DataTable({
        'ordering': true,
        'responsive': true,
        'bAutoWidth':true,
        'paging': true,
        'searching': true,
        'language': {
            processing:   "Proceseaza...",
            lengthMenu:   "Afiseaza _MENU_ inregistrari pe pagina",
            zeroRecords:   "Nu am gasit nimic - ne pare rau",
            info: "Afisate de la _START_ la _END_ din _TOTAL_ inregistrari",
            infoEmpty: "Afisate de la 0 la 0 din 0 inregistrari",
            infoFiltered:  "(filtrate dintr-un total de _MAX_ inregistrari)",
            infoPostFix:   "",
            loadingRecords: "Incarcare in curs ...",
            search:       "Cauta:",
            emptyTable: "Nu am gasit nimic",
            paginate: {
                first:   "Prima",
                previous:  "Precedenta",
                next:       "Urmatoarea",
                last:      "Ultima"
            }
        }

    });

    $('#ckeditor').ckeditor({language: 'ro'});
    $('#programatorDate').click(function() {
        $('#datepicker').toggle(600);
    });
    $('#datepicker').datepicker({
        inline : true,
        altField : '#hiddenFieldID',
        onSelect : function(){
            $('#tabelProgramari').submit();
        }
    });
    $('#slide-navigation-left').click(function() {
        $('#page-wrapper').css('margin-left',60);
        $('#navigation-sidebar').css('margin-left', -195);
    });
    $('#slide-navigation-right').click(function() {
        $('#page-wrapper').css('margin-left', 250);
        $('#navigation-sidebar').css('margin-left', 0);
    });



});
