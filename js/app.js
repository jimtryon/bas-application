Ext.Loader.setConfig({ 
    enabled: true
});
 
Ext.require([
     'Ext.tip.*',
     'Ext.Button'
]);
 
Ext.application({
    name: 'MyToolTip',
 
    launch: function() {
 
        document.getElementById('tooltip3').title = 'This ToolTip was added using Javascript';
 
        Ext.create('Ext.tip.ToolTip', {
            target: 'tooltip4',
            html: 'Simple ToolTip for my button !'
        });
        Ext.create('Ext.tip.ToolTip', {
            title: '<a href="#">My Tooltip example</a>',
            id: 'content-anchor-tip',
            target: 'tooltip5',
            anchor: 'left',
            html: null,
            width: 415,
            autoHide: false,
            closable: true,
            contentEl: 'displayContent', // load content from here
            listeners: {
                'render': function(){
                    this.header.on('click', function(e){
                        e.stopEvent();
                        Ext.getCmp('content-anchor-tip').hide();
                        console.log('Do something activity here ...');
                    });
                }
            }
        });
        Ext.create('Ext.tip.ToolTip', {
            target: 'tooltip6',
            width: 250,
            loader: {
                url: 'ToolTipRequest'
            },
            listeners: {
                'beforeshow': function(myTip){
                    myTip.getLoader().load({
                        params: {
                            'param1': 'ajaxToolTip',
                            'param2': 'as400samplecode'
                        },
                        callback: function(records, operation, success) {
                            //after the request is complete
                               console.log(success);
                           }
                    });
                }
            }
        });
    }
});