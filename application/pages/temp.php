<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Testing ExtJS abstraction from ExtJS doc</title>
		<!-- <meta http-equiv="refresh" content="10" /> -->
		<link rel="stylesheet" type="text/css" href="../extjs/resources/css/ext-all.css" />
		<script type="text/javascript" src="../extjs/adapter/ext/ext-base-debug.js"></script>
		<script type="text/javascript" src="../extjs/ext-all-debug.js"></script>
		<script type="text/javascript">
			Ext.onReady(function() {
				var store = new Ext.data.JsonStore({
					url : 'http://oxee/oxeeimagemanager/pictures_temp/',
					root : 'images',
					fields : [
						'name', 'url'
					]
				});
				store.load();
				
				var tpl = new Ext.XTemplate(
					'<tpl for=".">',
					'<div class="thumb-wrap" id="{name}">',
					'<div class="thumb"><img src="{url}" title="{name}"></div>',
					'<span class="x-editable">{shortName}</span></div>',
					'</tpl>',
					'<div class="x-clear"></div>'
				);
				
				var panel = new Ext.Panel({
					id :'images-view',
					frame : true,
					width : 535,
					autoHeight : true,
					collapsible : true,
					layout : 'fit',
					title : 'Simple DataView',
					
					items : new Ext.DataView({
						store : store,
						tpl : tpl,
						autoHeight : true,
						multiSelect : true,
						overClass:'x-view-over',
						itemSelector:'div.thumb-wrap',
						emptyText : 'No images to display'
					})
				});
				
				panel.render(document.body);
			});
		</script>
	</head>
	<body>
		
	</body>
</html>