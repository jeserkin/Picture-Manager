Ext.ns('MyApp');

MyApp.PictureDataView = Ext.extend(Ext.DataView, {
	singleSelect : true,
	autoHeight : true,
	overClass : 'x-view-over',
	emptyText : 'No images to display',
	itemSelector : 'div.thumb-wrap',
	
	initComponent : function() {
		MyApp.PictureDataView.superclass.initComponent.call(this);
	}
});