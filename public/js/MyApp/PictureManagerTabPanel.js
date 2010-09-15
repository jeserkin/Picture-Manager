Ext.ns('MyApp');

var sampleText1 = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae felis vel turpis dapibus feugiat. Nam et libero vitae nisi fringilla malesuada quis eu velit. Nam non massa sit amet orci porta vulputate sed ac nisi. Sed quis leo eu odio pharetra bibendum. Morbi faucibus dapibus metus, vel facilisis urna pellentesque sit amet. Nulla eleifend gravida leo eget tempor. In a condimentum enim. Suspendisse lorem odio, iaculis non adipiscing et, eleifend ac felis. Integer gravida massa vitae felis luctus id congue felis dictum. In hac habitasse platea dictumst. Fusce sed ante sed purus varius cursus. Donec scelerisque gravida pellentesque. Quisque malesuada mollis libero vel blandit. Praesent velit mauris, bibendum a faucibus sed, eleifend vitae turpis. Etiam pellentesque, dui sit amet volutpat facilisis, sem mi scelerisque nisi, a eleifend libero nulla at leo. Pellentesque interdum, neque id vulputate laoreet, ipsum erat consequat tortor, et ultricies nunc mauris a tortor. Curabitur sed tortor ante. Integer varius sem sit amet ante suscipit sollicitudin. Morbi dictum ante in massa congue adipiscing. Quisque sed ante mi.';

var sampleText2 = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae felis vel turpis dapibus feugiat. Nam et libero vitae nisi fringilla malesuada quis eu velit. Nam non massa sit amet orci porta vulputate sed ac nisi. Sed quis leo eu odio pharetra bibendum. Morbi faucibus dapibus metus, vel facilisis urna pellentesque sit amet. Nulla eleifend gravida leo eget tempor.';

var sampleText3 = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae felis vel turpis dapibus feugiat. Nam et libero vitae nisi fringilla malesuada quis eu velit. Nam non massa sit amet orci porta vulputate sed ac nisi. Sed quis leo eu odio pharetra bibendum. Morbi faucibus dapibus metus, vel facilisis urna pellentesque sit amet. Nulla eleifend gravida leo eget tempor. In a condimentum enim. Suspendisse lorem odio, iaculis non adipiscing et, eleifend ac felis. Integer gravida massa vitae felis luctus id congue felis dictum. In hac habitasse platea dictumst. Fusce sed ante sed purus varius cursus. Donec scelerisque gravida pellentesque. Quisque malesuada mollis libero vel blandit. Praesent velit mauris, bibendum a faucibus sed, eleifend vitae turpis. Etiam pellentesque, dui sit amet volutpat facilisis, sem mi scelerisque nisi, a eleifend libero nulla at leo.';

MyApp.PictureManagerTabPanel = Ext.extend(Ext.TabPanel, {
	region : 'center',
	//margins : '3 3 3 3',
	padding : 5,
	activeTab : 0,
	initComponent : function() {
		MyApp.PictureManagerTabPanel.superclass.initComponent.call(this);
	}
});