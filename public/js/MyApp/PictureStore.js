Ext.ns('MyApp');

MyApp.PictureStore = Ext.extend(Ext.data.JsonStore, {
	root : 'images',
	fields : ['name', 'url'],
	autoLoad : true,
	
	initComponent : function() {
		MyApp.PictureStore.superclass.initComponent.call(this);
	}
});