<div class="hr hr-18 dotted hr-double"></div>
<div class="row">

    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->

        <table id="grid-table"></table>

        <div id="grid-pager"></div>

        <script type="text/javascript">
            var $path_base = "/";//this will be used in gritter alerts containing images
        </script>

        <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->

</div>
</div>

<script src="conf/conf.js"></script>

<script type="text/javascript">
    $.getScript('conf/conf.js');

    var req = $.ajax({
        url: EASICRMDB_OPERATIONS,
        data: {
            method: GET_ONGOING_OPPORTUN,
            firstname : localStorage.getItem("firstName"),
            lastname : localStorage.getItem("lastName") 
        }
    });

    var mesAffaireEnCoursGrid = new Array();

    req.done(function(res) {
        res = $.parseJSON(res);
        var projet = "";
        if (res != null) {
            for(var i=0; i < res.length; i++){
                if(res[i]['XProjet'] == null){
                    projet = "Néant";
                } else {
                    projet = res[i]['XProjet'];
                }

                mesAffaireEnCoursGrid[i] = {
                    code:res[i]['XCode'], 
                    societe:res[i]['XIddelas'], 
                    contact:res[i]['XIdConta'], 
                    intitule:res[i]['XLibell'], 
                    progiciel:res[i]['XProgici'], 
                    projet:projet, 
                    totalHT:Math.abs(res[i]['XTotalHT']).toFixed(2), 
                    CARestant:Math.abs(res[i]['XCAresta']).toFixed(2), 
                    ResteAFacturer:Math.abs(res[i]['XRestefa']).toFixed(2), 
                    RestantDuTTC:Math.abs(res[i]['XRestant']).toFixed(2), 
                    chargeDaffaire:res[i]['XChargda'], 
                    devise:res[i]['XDevise'], 
                    CARealise:Math.abs(res[i]['XCARalis']).toFixed(2), 
                    CAfactu:Math.abs(res[i]['XCAfactu']).toFixed(2), 
                    PCA:Math.abs(res[i]['XPCA']).toFixed(2), 
                    FAE:Math.abs(res[i]['XFAE']).toFixed(2), 
                    AAE:Math.abs(res[i]['XAAE']).toFixed(2), 
                    resteAFacturer:Math.abs(res[i]['XRestefa']).toFixed(2), 
                    creePar:res[i]['XCrpar'], 
                    creeLe:res[i]['XCrle_Converted'], 
                    modifiePar:res[i]['XModifip'], 
                    modifieLe:res[i]['XModifil_Converted']
                };
            }

        }

        jQuery(function($) {
            var grid_selector = "#grid-table";
            var pager_selector = "#grid-pager";

            jQuery(grid_selector).jqGrid({

                data: mesAffaireEnCoursGrid,
                datatype: "local",
                height: 250,
                colNames:['Code','Société','Contact', 'Intitulé', 'Progiciel', 'Projet', 'Total HT', 'CA Restant', 'Reste à <br /> facturer', 'Restant  <br />dû TTC', 'Chargé <br />d\'affaire', 'Devise', 'CA Réalisé HT', 'CA facturé', 'PCA', 'FAE', 'AAE', 'Reste à <br />facturer HT', 'Créé par', 'Créé le', 'Modifié par', 'Modifié le'],
                colModel:[
                    {name:'code',index:'code', width:70, editable: true, hidden: true},
                    {name:'societe',index:'societe',width:90, editable:true},
                    {name:'contact',index:'contact', width:100, editable: true},
                    {name:'intitule',index:'intitule', width:90, editable: true},
                    {name:'progiciel',index:'progiciel', width:90, editable: true},
                    {name:'projet',index:'projet', width:90, editable: true},
                    {name:'totalHT',index:'totalHT', width:100, sorttype:"int",editable: true},
                    {name:'CARestant',index:'CARestant', width:100, sorttype:"int",editable: true},
                    {name:'ResteAFacturer',index:'ResteAFacturer', sorttype:"int",width:90, editable: true},
                    {name:'RestantDuTTC',index:'RestantDuTTC', sorttype:"int",width:90, editable: true},
                    {name:'chargeDaffaire',index:'chargeDaffaire', sorttype:"int",width:90, editable: true, hidden: true, viewable: true,editrules:{edithidden:true}},
                    {name:'devise',index:'devise', sorttype:"int",width:90, editable: true, hidden: true, viewable: true,editrules:{edithidden:true}},
                    {name:'CARealise',index:'CARealise', sorttype:"int",width:90, editable: true, hidden: true, viewable: true,editrules:{edithidden:true}},
                    {name:'CAfactu',index:'CAfactu', sorttype:"int",width:90, editable: true, hidden: true, viewable: true,editrules:{edithidden:true}},
                    {name:'PCA',index:'PCA', sorttype:"int",width:90, editable: true, hidden: true, viewable: true,editrules:{edithidden:true}},
                    {name:'FAE',index:'FAE', sorttype:"int",width:90, editable: true, hidden: true, viewable: true,editrules:{edithidden:true}},
                    {name:'AAE',index:'AAE', sorttype:"int",width:90, editable: true, hidden: true, viewable: true,editrules:{edithidden:true}},
                    {name:'resteAFacturer',index:'resteAFacturer', sorttype:"int",width:90, editable: true, hidden: true, viewable: true,editrules:{edithidden:true}},
                    {name:'creePar',index:'creePar', sorttype:"int",width:90, editable: true, hidden: true, viewable: true,editrules:{edithidden:true}},
                    {name:'creeLe',index:'creeLe', sorttype:"int",width:90, editable: true, hidden: true, viewable: true,editrules:{edithidden:true}},
                    {name:'modifiePar',index:'modifiePar', sorttype:"int",width:90, editable: true, hidden: true, viewable: true,editrules:{edithidden:true}},
                    {name:'modifieLe',index:'modifieLe', sorttype:"int",width:90, editable: true, hidden: true, viewable: true,editrules:{edithidden:true}}
                ], 

                viewrecords : true,
                rowNum:10,
                rowList:[10,20,30],
                pager : pager_selector,
                altRows: true,
                multiselect: true,
                multiboxonly: true,

                loadComplete : function() {
                    var table = this;
                    setTimeout(function(){
                        styleCheckbox(table);

                        updateActionIcons(table);
                        updatePagerIcons(table);
                        enableTooltips(table);
                    }, 0);
                },

                onCellSelect: function (rowid, iCol, cellcontent) {
                    if(iCol == 2){
                        $('#affaireModal').modal('show');
                        $(".modal-dialog").css("width", "1000px");
                        console.log('Selected ' + rowid + ' and column ' + iCol);
                    }
                },
                caption: "Mes affaires en cours",
                autowidth: true

            });

            //switch element when editing inline
            function aceSwitch( cellvalue, options, cell ) {
                setTimeout(function(){
                    $(cell) .find('input[type=checkbox]')
                    .wrap('<label class="inline" />')
                    .addClass('ace ace-switch ace-switch-5')
                    .after('<span class="lbl"></span>');
                }, 0);
            }

            //navButtons
            jQuery(grid_selector).jqGrid('navGrid',pager_selector,
                                         { 	//navbar options
                                             edit: false,
                                             editicon : 'icon-pencil blue',
                                             add: false,
                                             addicon : 'icon-plus-sign purple',
                                             del: false,
                                             delicon : 'icon-trash red',
                                             search: true,
                                             searchicon : 'icon-search orange',
                                             refresh: false,
                                             refreshicon : 'icon-refresh green',
                                             view: true,
                                             viewicon : 'icon-zoom-in grey',
                                         },
                                         {
                                             //edit record form
                                             //closeAfterEdit: true,
                                             recreateForm: true,
                                             beforeShowForm : function(e) {
                                                 var form = $(e[0]);
                                                 form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
                                                 style_edit_form(form);
                                             }
                                         },
                                         {
                                             //new record form
                                             closeAfterAdd: true,
                                             recreateForm: true,
                                             viewPagerButtons: false,
                                             beforeShowForm : function(e) {
                                                 var form = $(e[0]);
                                                 form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
                                                 style_edit_form(form);
                                             }
                                         },
                                         {
                                             //delete record form
                                             recreateForm: true,
                                             beforeShowForm : function(e) {
                                                 var form = $(e[0]);
                                                 if(form.data('styled')) return false;

                                                 form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
                                                 style_delete_form(form);

                                                 form.data('styled', true);
                                             },
                                             onClick : function(e) {
                                                 alert(1);
                                             }
                                         },
                                         {
                                             //search form
                                             recreateForm: true,
                                             afterShowSearch: function(e){
                                                 var form = $(e[0]);
                                                 form.closest('.ui-jqdialog').find('.ui-jqdialog-title').wrap('<div class="widget-header" />')
                                                 style_search_form(form);
                                             },
                                             afterRedraw: function(){
                                                 style_search_filters($(this));
                                             }
                                             ,
                                             multipleSearch: true,
                                             /**
                    multipleGroup:true,
                    showQuery: true
                    */
                },
                                         {
                                             //view record form
                                             recreateForm: true,
                                             beforeShowForm: function(e){
                                                 var form = $(e[0]);
                                                 form.closest('.ui-jqdialog').find('.ui-jqdialog-title').wrap('<div class="widget-header" />')
                                             }
                                         }
                                        )



            function style_edit_form(form) {
                //enable datepicker on "sdate" field and switches for "stock" field
                form.find('input[name=sdate]').datepicker({format:'yyyy-mm-dd' , autoclose:true})
                .end().find('input[name=stock]')
                .addClass('ace ace-switch ace-switch-5').wrap('<label class="inline" />').after('<span class="lbl"></span>');

                //update buttons classes
                var buttons = form.next().find('.EditButton .fm-button');
                buttons.addClass('btn btn-sm').find('[class*="-icon"]').remove();//ui-icon, s-icon
                buttons.eq(0).addClass('btn-primary').prepend('<i class="icon-ok"></i>');
                buttons.eq(1).prepend('<i class="icon-remove"></i>')

                buttons = form.next().find('.navButton a');
                buttons.find('.ui-icon').remove();
                buttons.eq(0).append('<i class="icon-chevron-left"></i>');
                buttons.eq(1).append('<i class="icon-chevron-right"></i>');		
            }

            function style_delete_form(form) {
                var buttons = form.next().find('.EditButton .fm-button');
                buttons.addClass('btn btn-sm').find('[class*="-icon"]').remove();//ui-icon, s-icon
                buttons.eq(0).addClass('btn-danger').prepend('<i class="icon-trash"></i>');
                buttons.eq(1).prepend('<i class="icon-remove"></i>')
            }

            function style_search_filters(form) {
                form.find('.delete-rule').val('X');
                form.find('.add-rule').addClass('btn btn-xs btn-primary');
                form.find('.add-group').addClass('btn btn-xs btn-success');
                form.find('.delete-group').addClass('btn btn-xs btn-danger');
            }
            function style_search_form(form) {
                var dialog = form.closest('.ui-jqdialog');
                var buttons = dialog.find('.EditTable')
                buttons.find('.EditButton a[id*="_reset"]').addClass('btn btn-sm btn-info').find('.ui-icon').attr('class', 'icon-retweet');
                buttons.find('.EditButton a[id*="_query"]').addClass('btn btn-sm btn-inverse').find('.ui-icon').attr('class', 'icon-comment-alt');
                buttons.find('.EditButton a[id*="_search"]').addClass('btn btn-sm btn-purple').find('.ui-icon').attr('class', 'icon-search');
            }

            function beforeDeleteCallback(e) {
                var form = $(e[0]);
                if(form.data('styled')) return false;

                form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
                style_delete_form(form);

                form.data('styled', true);
            }

            function beforeEditCallback(e) {
                var form = $(e[0]);
                form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
                style_edit_form(form);
            }



            //it causes some flicker when reloading or navigating grid
            //it may be possible to have some custom formatter to do this as the grid is being created to prevent this
            //or go back to default browser checkbox styles for the grid
            function styleCheckbox(table) {
                /**
                $(table).find('input:checkbox').addClass('ace')
                .wrap('<label />')
                .after('<span class="lbl align-top" />')


                $('.ui-jqgrid-labels th[id*="_cb"]:first-child')
                .find('input.cbox[type=checkbox]').addClass('ace')
                .wrap('<label />').after('<span class="lbl align-top" />');
            */
            }


            //unlike navButtons icons, action icons in rows seem to be hard-coded
            //you can change them like this in here if you want
            function updateActionIcons(table) {
                /**
                var replacement = 
                {
                    'ui-icon-pencil' : 'icon-pencil blue',
                    'ui-icon-trash' : 'icon-trash red',
                    'ui-icon-disk' : 'icon-ok green',
                    'ui-icon-cancel' : 'icon-remove red'
                };
                $(table).find('.ui-pg-div span.ui-icon').each(function(){
                    var icon = $(this);
                    var $class = $.trim(icon.attr('class').replace('ui-icon', ''));
                    if($class in replacement) icon.attr('class', 'ui-icon '+replacement[$class]);
                })
                */
            }

            //replace icons with FontAwesome icons like above
            function updatePagerIcons(table) {
                var replacement = 
                    {
                        'ui-icon-seek-first' : 'icon-double-angle-left bigger-140',
                        'ui-icon-seek-prev' : 'icon-angle-left bigger-140',
                        'ui-icon-seek-next' : 'icon-angle-right bigger-140',
                        'ui-icon-seek-end' : 'icon-double-angle-right bigger-140'
                    };
                $('.ui-pg-table:not(.navtable) > tbody > tr > .ui-pg-button > .ui-icon').each(function(){
                    var icon = $(this);
                    var $class = $.trim(icon.attr('class').replace('ui-icon', ''));

                    if($class in replacement) icon.attr('class', 'ui-icon '+replacement[$class]);
                })
            }

            function enableTooltips(table) {
                $('.navtable .ui-pg-button').tooltip({container:'body'});
                $(table).find('.ui-pg-div').tooltip({container:'body'});
            }

            //var selr = jQuery(grid_selector).jqGrid('getGridParam','selrow');


        });
    });



</script>