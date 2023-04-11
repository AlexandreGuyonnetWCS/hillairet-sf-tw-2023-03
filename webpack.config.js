const Encore = require('@symfony/webpack-encore');

if (!Encore.isRuntimeEnvironmentConfigured()) {
    Encore.configureRuntimeEnvironment(process.env.NODE_ENV || 'dev');
}

Encore

    .setOutputPath('public/build/')

    .setPublicPath('/build')

    .copyFiles({
        from: './assets/images',

        to: 'images/[path][name].[ext]',
    })

    .addEntry('app', './assets/app.js')

    .enableStimulusBridge('./assets/controllers.json')

    .splitEntryChunks()

    .enableSingleRuntimeChunk()

    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
    .enableSourceMaps(!Encore.isProduction())

    .enableVersioning(Encore.isProduction())

    .configureBabelPresetEnv((config) => {
        config.useBuiltIns = 'usage';
        config.corejs = '3.23';
    })

    .enableSassLoader()

    .enablePostCssLoader();

const fullConfig = Encore.getWebpackConfig();
fullConfig.devServer = {
    watchFiles: {
        paths: ['templates/**/*.html.twig'],
    },
};
module.exports = fullConfig;
