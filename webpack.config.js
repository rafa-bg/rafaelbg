const path = require("path");
var configuracion = require('./gulp/configuracion');

module.exports = {
	entry: {
		scripts: configuracion.themeLocation + "js/scripts.js",
		vendor: configuracion.themeLocation + "js/vendor.js"
	},
	output: {
		path: path.resolve(__dirname, configuracion.themeLocation),
		filename: "[name].js",
	},

	module: {
		rules: [
			{
				test: /\.js$/,
				exclude: /(node_modules|bower_components)/,
				use: {
					loader: 'babel-loader',
					options: {
						presets: ['@babel/preset-env']
					}
				}
			}
		]
	}
}