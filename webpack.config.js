module.exports = [{
    entry: './src/js/app.js',
    output: {
        // This is necessary for webpack to compile
        // But we never use style-bundle.js
        filename: 'style-bundle.js',
    },
    module: {
    rules: [
        {
            test: /\.css$/,
            use: ['style-loader', 'css-loader']
        }
    ]
    },
}];