<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Testing ExtJS abstraction</title>
		<!-- <meta http-equiv="refresh" content="10" /> -->
		<link rel="stylesheet" type="text/css" href="../extjs/resources/css/ext-all.css" />
		<script type="text/javascript" src="../extjs/adapter/ext/ext-base-debug.js"></script>
		<script type="text/javascript" src="../extjs/ext-all-debug.js"></script>
		<script type="text/javascript" src="../extjs/examples/ux/fileuploadfield/FileUploadField.js"></script>
		
		<link rel="stylesheet" type="text/css" href="./public/css/chooser.css" />
		<link rel="stylesheet" type="text/css" href="./public/css/uploadStyle.css" />
		
		<script type="text/javascript" src="./public/js/MyApp/PictureManagerClasses.js"></script>
		
		<!-- <script type="text/javascript" src="./public/js/MyApp/PictureManagerPanel.js"></script>
		<script type="text/javascript" src="./public/js/MyApp/PictureManagerTabPanel.js"></script>
		<script type="text/javascript" src="./public/js/MyApp/PictureStore.js"></script>
		<script type="text/javascript" src="./public/js/MyApp/PictureFormPanel.js"></script>
		<script type="text/javascript" src="./public/js/MyApp/PictureDataView.js"></script>
		<script type="text/javascript" src="./public/js/MyApp/PictureTemplate.js"></script> -->
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
								'<label for="{name}" style="margin-right: 15px;">Удалить</label>',
								'<input type="checkbox" name="{name}" id="{name}" style="margin: 3px 0 0 3px;" />',
							'</div>',
							'<div>',
								'<label for="{name}" style="margin-right: 2px;">В листинге</label>',
								'<input type="checkbox" name="{name}" id="{name}" style="margin: 3px 0 0 3px;" />',
							'</div>',
							'<div>',
								'<label for="{name}" style="margin-right: 15px;">Главная</label>',
								'<input type="radio" name="delete_or_not" id="{name}" style="margin: 3px 0 0 3px;" value="{id}" />',
							'</div>',
						'</div>',
					'</tpl>'
				);
				
				var storage = new MyApp.PictureStore({
					url : 'http://oxee/oxeeimagemanager/pictures',
					totalProperty : 'rowsCount',
					root : 'images',
					fields : [{
						name : 'id'
					},{
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
					/* layout : 'fit', */
					//overClass : 'x-view-over',
					emptyText : 'Изображений не найдено',
					itemSelector : 'div.thumb'
				});
				
				var formPanel = new MyApp.PictureFormPanel({// Add Url To Form
					id : 'images-view',
					items : data,
					border : false,
					buttons : [{
						text : 'Сохранить'
					},{
						text : 'Сбросить'
					}],
					//autoHeight : true,
					//autoScroll : true
				});
				
				var formPanelUploadFromLink = new MyApp.PictureFormPanel({// Add Url To Form
					id : 'image-upload-from-url',
					labelWidth : 190,
					items : [{
						xtype : 'textfield',
						width : 300,
						fieldLabel : 'URL для загрузки изображения',
						name : 'uploadFromUrl',
						emptyText : 'Какой-нибудь текст для пояснения'
					}],
					border : false,
					buttons : [{
						text : 'Загрузить'
					},{
						text : 'Сбросить'
					}],
					//autoScroll : true
				});
				
				var formPanelUploadFromDevice = new MyApp.PictureFormPanel({// Add Url To Form
					id : 'image-upload-from-device',
					labelWidth : 190,
					items : [{
						xtype : 'fileuploadfield',
						width : 300,
						fieldLabel : 'Укажите путь к изображению',
						name : 'uploadFromDevice',
						buttonText : '',
						buttonCfg : {
							iconCls : 'upload-icon'
						},
						emptyText : 'Какой-нибудь текст для пояснения'
					}],
					border : false,
					buttons : [{
						text : 'Загрузить'
					},{
						text : 'Сбросить'
					}],
					//autoScroll : true
				});
			
				var tabs = new MyApp.PictureManagerTabPanel({
					items : [{
						title : 'Управление',
						items : formPanel,
						autoScroll : true
					},{
						title : 'Загрузка по URL',
						items : formPanelUploadFromLink
					},{
						title : 'Загрузка с устройства',
						items : formPanelUploadFromDevice
					}]
				});
			
				var win = new MyApp.PictureManagerPanel({
					items : [ tabs ],
					//autoScroll : true
				});
				win.show();
			});
		</script>
	</head>
	<body>
		
	</body>
</html>