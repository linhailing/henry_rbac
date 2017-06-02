<?php

namespace backend\assets;

use yii\web\AssetBundle;
use backend\helpers\UrlHelper;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    // public $css = [
    //     'css/site.css',
    // ];
    // public $js = [
    // ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

	public function registerAssetFiles( $view){
		$v = defined("RELEASE_VERSION") ? RELEASE_VERSION : '20170602';
		$this->css = [
			UrlHelper::buildUrl('vendor/global/plugins/font-awesome/css/font-awesome.min.css', ['v'=>$v]),
			UrlHelper::buildUrl("vendor/global/plugins/simple-line-icons/simple-line-icons.min.css", ['v'=>$v]),
			UrlHelper::buildUrl("vendor/global/plugins/bootstrap/css/bootstrap.min.css", ['v'=>$v]),
			UrlHelper::buildUrl("vendor/global/plugins/uniform/css/uniform.default.css", ['v'=>$v]),
			UrlHelper::buildUrl("vendor/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css", ['v'=>$v]),
			// END GLOBAL MANDATORY STYLES
			// BEGIN PAGE LEVEL PLUGIN STYLES
			// UrlHelper::buildUrl("vendor/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css", ['v'=>$v]),
			// UrlHelper::buildUrl("vendor/global/plugins/fullcalendar/fullcalendar.min.css", ['v'=>$v]),
			// UrlHelper::buildUrl("vendor/global/plugins/jqvmap/jqvmap/jqvmap.css", ['v'=>$v]),
			// END PAGE LEVEL PLUGIN STYLES
			// BEGIN PAGE STYLES
			UrlHelper::buildUrl("vendor/admin/pages/css/tasks.css", ['v'=>$v]),
			// END PAGE STYLES
			// BEGIN THEME STYLES
			UrlHelper::buildUrl("vendor/global/css/components.css", ['v'=>$v]),
			UrlHelper::buildUrl("vendor/global/css/plugins.css", ['v'=>$v]),
			UrlHelper::buildUrl("vendor/admin/layout/css/layout.css", ['v'=>$v]),
			UrlHelper::buildUrl("vendor/admin/layout/css/themes/darkblue.css", ['v'=>$v]),
			UrlHelper::buildUrl("vendor/admin/layout/css/custom.css", ['v'=>$v]),
		];
		$this->js = [
			UrlHelper::buildUrl("vendor/global/plugins/jquery.min.js", ['v'=>$v]),
			UrlHelper::buildUrl("vendor/global/plugins/jquery-migrate.min.js", ['v'=>$v]),
			// IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
			UrlHelper::buildUrl("vendor/global/plugins/jquery-ui/jquery-ui.min.js", ['v'=>$v]),
			UrlHelper::buildUrl("vendor/global/plugins/bootstrap/js/bootstrap.min.js", ['v'=>$v]),
			UrlHelper::buildUrl("vendor/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js", ['v'=>$v]),
			UrlHelper::buildUrl("vendor/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js", ['v'=>$v]),
			UrlHelper::buildUrl("vendor/global/plugins/jquery.blockui.min.js", ['v'=>$v]),
			UrlHelper::buildUrl("vendor/global/plugins/jquery.cokie.min.js", ['v'=>$v]),
			UrlHelper::buildUrl("vendor/global/plugins/uniform/jquery.uniform.min.js", ['v'=>$v]),
			UrlHelper::buildUrl("vendor/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js", ['v'=>$v]),
			// END CORE PLUGINS -->
			// BEGIN PAGE LEVEL PLUGINS -->
			// UrlHelper::buildUrl("vendor/global/plugins/jqvmap/jqvmap/jquery.vmap.js", ['v'=>$v]),
			// UrlHelper::buildUrl("vendor/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js", ['v'=>$v]),
			// UrlHelper::buildUrl("vendor/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js", ['v'=>$v]),
			// UrlHelper::buildUrl("vendor/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js", ['v'=>$v]),
			// UrlHelper::buildUrl("vendor/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js", ['v'=>$v]),
			// UrlHelper::buildUrl("vendor/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js", ['v'=>$v]),
			// UrlHelper::buildUrl("vendor/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js", ['v'=>$v]),
			// UrlHelper::buildUrl("vendor/global/plugins/flot/jquery.flot.min.js", ['v'=>$v]),
			// UrlHelper::buildUrl("vendor/global/plugins/flot/jquery.flot.resize.min.js", ['v'=>$v]),
			// UrlHelper::buildUrl("vendor/global/plugins/flot/jquery.flot.categories.min.js", ['v'=>$v]),
			// UrlHelper::buildUrl("vendor/global/plugins/jquery.pulsate.min.js", ['v'=>$v]),
			// UrlHelper::buildUrl("vendor/global/plugins/bootstrap-daterangepicker/moment.min.js", ['v'=>$v]),
			// UrlHelper::buildUrl("vendor/global/plugins/bootstrap-daterangepicker/daterangepicker.js", ['v'=>$v]),
			// // IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
			// UrlHelper::buildUrl("vendor/global/plugins/fullcalendar/fullcalendar.min.js", ['v'=>$v]),
			// UrlHelper::buildUrl("vendor/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js", ['v'=>$v]),
			// UrlHelper::buildUrl("vendor/global/plugins/jquery.sparkline.min.js", ['v'=>$v]),
			// END PAGE LEVEL PLUGINS -->
			// BEGIN PAGE LEVEL SCRIPTS -->
			UrlHelper::buildUrl("vendor/global/scripts/metronic.js", ['v'=>$v]),
			UrlHelper::buildUrl("vendor/admin/layout/scripts/layout.js", ['v'=>$v]),
			UrlHelper::buildUrl("vendor/admin/layout/scripts/quick-sidebar.js", ['v'=>$v]),
			UrlHelper::buildUrl("vendor/admin/layout/scripts/demo.js", ['v'=>$v]),
			UrlHelper::buildUrl("vendor/admin/pages/scripts/index.js", ['v'=>$v]),
			UrlHelper::buildUrl("vendor/admin/pages/scripts/tasks.js", ['v'=>$v]),
		];
		return parent::registerAssetFiles($view);
	} 
}