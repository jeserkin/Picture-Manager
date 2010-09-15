Ext.ns('MyApp');

MyApp.PictureManagerPanel = Ext.extend(Ext.Window, {
	title : 'Мэнэджер изображений продуктов',
	width : 750,
	height : 350,
	x : 30,
	y : 30,
	closable : true,
	//plain : true,
	layout : 'border',
	initComponent : function() {
		MyApp.PictureManagerPanel.superclass.initComponent.call(this);
	}
});