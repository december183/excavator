<?php
return array(
	//'配置项'=>'配置值'

    //数据库
    'DB_TYPE'=>'mysql',
    'DB_HOST'=>'localhost',
    'DB_NAME'=>'gmsdb',
    'DB_USER'=>'root',
    'DB_PWD'=>'123456',
    'DB_PREFIX'=>'gms_',
    'DB_PORT'=>3306,
    'DB_CHARSET'=>'utf8',

    //页面调试
    'SHOW_PAGE_TRACE'=>true,
    //修改模版文件后缀
    'TMPL_TEMPLATE_SUFFIX'=>'.html',
    //允许模块访问
    'MODULE_ALLOW_LIST'=>array('Home','Admin'),
    //设置默认访问模块
    'DEFAULT_MODULE'=>'Home',

    //设置默认主题
    'DEFAULT_THEME'=>'default',

    //启用路由功能
    'URL_ROUTER_ON'=>true,

    //动态路由设置
    'URL_ROUTE_RULES'=>array(

    ),
    //静态路由配置
    'URL_MAP_RULES'=>array(

    ),
    //URL模式设置
    'URL_MODEL'=>1,

    //SESSION设置
    'SESSION_OPTIONS' => array(
        'use_only_cookies'=>0,
        'use_trans_sid'=>1),

    //CACHE缓存设置
    'DATA_CACHE_TYPE' => 'Memcache',
    'MEMCACHE_HOST' => '127.0.0.1',
    'MEMCACHE_PORT' => '11211',
);