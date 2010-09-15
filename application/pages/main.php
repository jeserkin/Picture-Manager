<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Testing ExtJS abstraction</title>
		<!-- <meta http-equiv="refresh" content="10" /> -->
		<link rel="stylesheet" type="text/css" href="../extjs/resources/css/ext-all.css" />
		<script type="text/javascript" src="../extjs/adapter/ext/ext-base-debug.js"></script>
		<script type="text/javascript" src="../extjs/ext-all-debug.js"></script>
		<link rel="stylesheet" type="text/css" href="./public/css/chooser.css" />
		<script type="text/javascript" src="./public/js/MyApp/PictureManagerPanel.js"></script>
		<script type="text/javascript" src="./public/js/MyApp/PictureManagerTabPanel.js"></script>
		<script type="text/javascript" src="./public/js/MyApp/PictureStore.js"></script>
		<script type="text/javascript" src="./public/js/MyApp/PictureFormPanel.js"></script>
		<script type="text/javascript" src="./public/js/MyApp/PictureDataView.js"></script>
		<script type="text/javascript" src="./public/js/MyApp/PictureTemplate.js"></script>
		<script type="text/javascript">
			Ext.onReady(function() {
				var preview = new MyApp.PictureTemplate(
					'<tpl for=".">',
						'<div class="thumb-wrap" id="{name}">',
							'<div class="thumb">',
								'<img src="{url}" alt="{name}" width="100px" height="100px" />',
							'</div>',
							'<span>{name}</span>',
							'<div>',
								'<label for="{name}">Удалить</label>',
								'<input type="checkbox" name="{name}" id="{name}" />',
							'</div>',
						'</div>',
					'</tpl>'
				);
				
				var storage = new MyApp.PictureStore({
					url : 'http://oxee/oxeeimagemanager/pictures',
					totalProperty : 'rowsCount',
					root : 'images',
					fields : [{
						name : 'name'
					},{
						name : 'url'
					}],
					idProperty : 'name'
				});
				//storage.load();
				
				var data = new MyApp.PictureDataView({
					store : storage,
					tpl : preview,
					layout : 'fit',
					overClass : 'x-view-over',
					emptyText : 'No images to display',
					itemSelector : 'div.thumb-wrap'
				});
				
				var formPanel = new MyApp.PictureFormPanel({
					id : 'images-view',
					items : data,
					layout : 'fit',
					//autoHeight : true,
					autoScroll : true
				});
			
				var tabs = new MyApp.PictureManagerTabPanel({
					items : [{
						title : 'Управление',
						items : formPanel
					},{
						title : 'Загрузка по URL',
						html : sampleText2
					},{
						title : 'Загрузка с устройства',
						html : sampleText3
					}]
				});
			
				var win = new MyApp.PictureManagerPanel({
					items : [ tabs ]
				});
				win.show();
			});
		</script>
	</head>
	<body>
		
	</body>
</html>