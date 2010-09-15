Ext.ns('MyApp');

MyApp.PictureStore = Ext.extend(Ext.data.JsonStore, {
	autoLoad : true,
	initComponent : function() {
		MyApp.PictureStore.superclass.initComponent.call(this);
	}
});