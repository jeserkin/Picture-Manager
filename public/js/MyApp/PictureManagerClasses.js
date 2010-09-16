Ext.ns('MyApp');

MyApp.PictureManagerPanel = Ext.extend(Ext.Window, {
	title : 'Мэнэджер изображений продуктов',
	width : 750,
	height : 350,
	x : 30, // (optional)
	y : 30, // (optional)
	closable : true,
	layout : 'border',
	//autoScroll : true,
	initComponent : function() {
		MyApp.PictureManagerPanel.superclass.initComponent.call(this);
	}
});

MyApp.PictureManagerTabPanel = Ext.extend(Ext.TabPanel, {
	region : 'center',
	padding : 5,
	activeTab : 0,
	initComponent : function() {
		MyApp.PictureManagerTabPanel.superclass.initComponent.call(this);
	}
});

MyApp.PictureFormPanel = Ext.extend(Ext.form.FormPanel, {
	initComponent : function() {
		MyApp.PictureFormPanel.superclass.initComponent.call(this);
	}
});

MyApp.PictureDataView = Ext.extend(Ext.DataView, {
	singleSelect : true,
	initComponent : function() {
		MyApp.PictureDataView.superclass.initComponent.call(this);
	}
});

MyApp.PictureStore = Ext.extend(Ext.data.JsonStore, {
	autoLoad : true,
	initComponent : function() {
		MyApp.PictureStore.superclass.initComponent.call(this);
	}
});

MyApp.PictureTemplate = Ext.extend(Ext.XTemplate, {
	compiled : true,
	initComponent : function() {
		MyApp.PictureTemplate.superclass.initComponent.call(this);
	}
});