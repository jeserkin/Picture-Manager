Ext.ns('MyApp');

MyApp.PictureDataView = Ext.extend(Ext.DataView, {
	singleSelect : true,
	//autoHeight : true,
	initComponent : function() {
		MyApp.PictureDataView.superclass.initComponent.call(this);
	}
});