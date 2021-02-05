const path = require('path');
const extract = require('mini-css-extract-plugin');

module.exports = {
	entry: ['./src/index.js', './src/style.scss'],
	output: {
		filename: 'main.js',
		path: path.resolve(__dirname, 'dist'),
	},
	module: {
		rules: [
			{
				test: /\.s[ac]ss$/i,
				use: [
					extract.loader,
					{
						loader: 'css-loader',
						options: {
							sourceMap: true,
						}
					},
					{
						loader: 'sass-loader',
						options: {
							sourceMap: true,
						}
					},
				],
			},
		],
	},
	plugins: [
		new extract({
			filename: "[name].css",
			chunkFilename: "[name].css"
		})
	]
};
