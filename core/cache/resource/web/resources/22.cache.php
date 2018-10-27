<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 22,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Search result',
    'longtitle' => '',
    'description' => '',
    'alias' => 'search-result',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '',
    'richtext' => 1,
    'template' => 10,
    'menuindex' => 5,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1535137875,
    'editedby' => 0,
    'editedon' => 0,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1535137875,
    'publishedby' => 1,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 1,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'search-result',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    '_content' => '{include \'file:templates/search-result.tpl\'}',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[pdoMenu?
                                &parents=`0`
                                &level=`1`]]' => '<ul class=""><li class="first"><a href="/" >Home</a></li><li><a href="about" >About</a></li><li><a href="houses/" >Houses</a></li><li><a href="blog/" >Blog</a></li><li class="last"><a href="contact" >Contact</a></li></ul>',
    '[[%sisea.no_results? &query=``]]' => 'There were no search results for the search "". Please try using more general terms to get more results.',
    '[[pdoMenu?
                                &parents=`0`
                                &level=`1`
                                &outerClass=`useful-links-nav`]]' => '<ul class="useful-links-nav"><li class="first"><a href="/" >Home</a></li><li><a href="about" >About</a></li><li><a href="houses/" >Houses</a></li><li><a href="blog/" >Blog</a></li><li class="last"><a href="contact" >Contact</a></li></ul>',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
    ),
    'modSnippet' => 
    array (
      'pdoMenu' => 
      array (
        'fields' => 
        array (
          'id' => 8,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'pdoMenu',
          'description' => '',
          'editor_type' => 0,
          'category' => 2,
          'cache_type' => 0,
          'snippet' => '/** @var array $scriptProperties */

// Convert parameters from Wayfinder if exists
if (isset($startId)) {
    $scriptProperties[\'parents\'] = $startId;
}
if (!empty($includeDocs)) {
    $tmp = array_map(\'trim\', explode(\',\', $includeDocs));
    foreach ($tmp as $v) {
        if (!empty($scriptProperties[\'resources\'])) {
            $scriptProperties[\'resources\'] .= \',\' . $v;
        } else {
            $scriptProperties[\'resources\'] = $v;
        }
    }
}
if (!empty($excludeDocs)) {
    $tmp = array_map(\'trim\', explode(\',\', $excludeDocs));
    foreach ($tmp as $v) {
        if (!empty($scriptProperties[\'resources\'])) {
            $scriptProperties[\'resources\'] .= \',-\' . $v;
        } else {
            $scriptProperties[\'resources\'] = \'-\' . $v;
        }
    }
}

if (!empty($previewUnpublished) && $modx->hasPermission(\'view_unpublished\')) {
    $scriptProperties[\'showUnpublished\'] = 1;
}

$scriptProperties[\'depth\'] = empty($level) ? 100 : abs($level) - 1;
if (!empty($contexts)) {
    $scriptProperties[\'context\'] = $contexts;
}
if (empty($scriptProperties[\'context\'])) {
    $scriptProperties[\'context\'] = $modx->resource->context_key;
}

// Save original parents specified by user
$specified_parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));

if ($scriptProperties[\'parents\'] === \'\') {
    $scriptProperties[\'parents\'] = $modx->resource->id;
} elseif ($scriptProperties[\'parents\'] === 0 || $scriptProperties[\'parents\'] === \'0\') {
    if ($scriptProperties[\'depth\'] !== \'\' && $scriptProperties[\'depth\'] !== 100) {
        $contexts = array_map(\'trim\', explode(\',\', $scriptProperties[\'context\']));
        $parents = array();
        if (!empty($scriptProperties[\'showDeleted\'])) {
            $pdoFetch = $modx->getService(\'pdoFetch\');
            foreach ($contexts as $ctx) {
                $parents = array_merge($parents,
                    $pdoFetch->getChildIds(\'modResource\', 0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
            }
        } else {
            foreach ($contexts as $ctx) {
                $parents = array_merge($parents,
                    $modx->getChildIds(0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
            }
        }
        $scriptProperties[\'parents\'] = !empty($parents) ? implode(\',\', $parents) : \'+0\';
        $scriptProperties[\'depth\'] = 0;
    }
    $scriptProperties[\'includeParents\'] = 1;
    $scriptProperties[\'displayStart\'] = 0;
} else {
    $parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));
    $parents_in = $parents_out = array();
    foreach ($parents as $v) {
        if (!is_numeric($v)) {
            continue;
        }
        if ($v[0] == \'-\') {
            $parents_out[] = abs($v);
        } else {
            $parents_in[] = abs($v);
        }
    }

    if (empty($parents_in)) {
        $scriptProperties[\'includeParents\'] = 1;
        $scriptProperties[\'displayStart\'] = 0;
    }
}

if (!empty($displayStart)) {
    $scriptProperties[\'includeParents\'] = 1;
}
if (!empty($ph)) {
    $toPlaceholder = $ph;
}
if (!empty($sortOrder)) {
    $scriptProperties[\'sortdir\'] = $sortOrder;
}
if (!empty($sortBy)) {
    $scriptProperties[\'sortby\'] = $sortBy;
}
if (!empty($permissions)) {
    $scriptProperties[\'checkPermissions\'] = $permissions;
}
if (!empty($cacheResults)) {
    $scriptProperties[\'cache\'] = $cacheResults;
}
if (!empty($ignoreHidden)) {
    $scriptProperties[\'showHidden\'] = $ignoreHidden;
}

$wfTemplates = array(
    \'outerTpl\' => \'tplOuter\',
    \'rowTpl\' => \'tpl\',
    \'parentRowTpl\' => \'tplParentRow\',
    \'parentRowHereTpl\' => \'tplParentRowHere\',
    \'hereTpl\' => \'tplHere\',
    \'innerTpl\' => \'tplInner\',
    \'innerRowTpl\' => \'tplInnerRow\',
    \'innerHereTpl\' => \'tplInnerHere\',
    \'activeParentRowTpl\' => \'tplParentRowActive\',
    \'categoryFoldersTpl\' => \'tplCategoryFolder\',
    \'startItemTpl\' => \'tplStart\',
);
foreach ($wfTemplates as $k => $v) {
    if (isset(${$k})) {
        $scriptProperties[$v] = ${$k};
    }
}
//---

/** @var pdoMenu $pdoMenu */
$fqn = $modx->getOption(\'pdoMenu.class\', null, \'pdotools.pdomenu\', true);
$path = $modx->getOption(\'pdomenu_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
if ($pdoClass = $modx->loadClass($fqn, $path, false, true)) {
    $pdoMenu = new $pdoClass($modx, $scriptProperties);
} else {
    return false;
}
$pdoMenu->pdoTools->addTime(\'pdoTools loaded\');

$cache = !empty($cache) || (!$modx->user->id && !empty($cacheAnonymous));
if (empty($scriptProperties[\'cache_key\'])) {
    $scriptProperties[\'cache_key\'] = \'pdomenu/\' . sha1(serialize($scriptProperties));
}

$output = \'\';
$tree = array();
if ($cache) {
    $tree = $pdoMenu->pdoTools->getCache($scriptProperties);
}
if (empty($tree)) {
    $data = $pdoMenu->pdoTools->run();
    $data = $pdoMenu->pdoTools->buildTree($data, \'id\', \'parent\', $specified_parents);
    $tree = array();
    foreach ($data as $k => $v) {
        if (empty($v[\'id\'])) {
            if (!in_array($k, $specified_parents) && !$pdoMenu->checkResource($k)) {
                continue;
            } else {
                $tree = array_merge($tree, $v[\'children\']);
            }
        } else {
            $tree[$k] = $v;
        }
    }
    if ($cache) {
        $pdoMenu->pdoTools->setCache($tree, $scriptProperties);
    }
}
if (!empty($tree)) {
    $output = $pdoMenu->templateTree($tree);
}

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $output .= \'<pre class="pdoMenuLog">\' . print_r($pdoMenu->pdoTools->getTime(), 1) . \'</pre>\';
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
} else {
    return $output;
}',
          'locked' => false,
          'properties' => 
          array (
            'showLog' => 
            array (
              'name' => 'showLog',
              'desc' => 'pdotools_prop_showLog',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'If true, snippet will add detailed log of query for developers.',
              'area_trans' => '',
            ),
            'fastMode' => 
            array (
              'name' => 'fastMode',
              'desc' => 'pdotools_prop_fastMode',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Fast chunks processing. If true, MODX parser will not be used and unprocessed tags will be cut.',
              'area_trans' => '',
            ),
            'level' => 
            array (
              'name' => 'level',
              'desc' => 'pdotools_prop_level',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Depth (number of levels) to build the menu from. 0 goes through all levels.',
              'area_trans' => '',
            ),
            'parents' => 
            array (
              'name' => 'parents',
              'desc' => 'pdotools_prop_parents',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Comma-delimited list of ids serving as parents. Use "0" to ignore parents when specifying resources to include. Prefix an id of parent with a dash to exclude it and its children from the result.',
              'area_trans' => '',
            ),
            'displayStart' => 
            array (
              'name' => 'displayStart',
              'desc' => 'pdotools_prop_displayStart',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Show the document as referenced by startId in the menu.',
              'area_trans' => '',
            ),
            'resources' => 
            array (
              'name' => 'resources',
              'desc' => 'pdotools_prop_resources',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Comma-delimited list of ids to include in the results. Prefix an id with a dash to exclude the resource from the result.',
              'area_trans' => '',
            ),
            'templates' => 
            array (
              'name' => 'templates',
              'desc' => 'pdotools_prop_templates',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Comma-delimited list of templates to filter the results. Prefix an id of template with a dash to exclude the resource with it from the result.',
              'area_trans' => '',
            ),
            'context' => 
            array (
              'name' => 'context',
              'desc' => 'pdotools_prop_context',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Which Context should be searched in.',
              'area_trans' => '',
            ),
            'cache' => 
            array (
              'name' => 'cache',
              'desc' => 'pdotools_prop_cache',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Caching the results of the snippet.',
              'area_trans' => '',
            ),
            'cacheTime' => 
            array (
              'name' => 'cacheTime',
              'desc' => 'pdotools_prop_cacheTime',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 3600,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Time until the cache expires, in seconds.',
              'area_trans' => '',
            ),
            'cacheAnonymous' => 
            array (
              'name' => 'cacheAnonymous',
              'desc' => 'pdotools_prop_cacheAnonymous',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Enable caching only for unauthorized visitors.',
              'area_trans' => '',
            ),
            'plPrefix' => 
            array (
              'name' => 'plPrefix',
              'desc' => 'pdotools_prop_plPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'wf.',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Prefix for output placeholders, by default is "wf.".',
              'area_trans' => '',
            ),
            'showHidden' => 
            array (
              'name' => 'showHidden',
              'desc' => 'pdotools_prop_showHidden',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'If true, will show Resources regardless if they are hidden from the menus.',
              'area_trans' => '',
            ),
            'showUnpublished' => 
            array (
              'name' => 'showUnpublished',
              'desc' => 'pdotools_prop_showUnpublished',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'If true, will also show Resources regardless if they are unpublished.',
              'area_trans' => '',
            ),
            'showDeleted' => 
            array (
              'name' => 'showDeleted',
              'desc' => 'pdotools_prop_showDeleted',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'If true, will show Resources regardless if they are deleted.',
              'area_trans' => '',
            ),
            'previewUnpublished' => 
            array (
              'name' => 'previewUnpublished',
              'desc' => 'pdotools_prop_previewUnpublished',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Optional. If set to Yes, if you are logged into the mgr and have the view_unpublished permission, it will allow previewing of unpublished resources in your menus in the front-end.',
              'area_trans' => '',
            ),
            'hideSubMenus' => 
            array (
              'name' => 'hideSubMenus',
              'desc' => 'pdotools_prop_hideSubMenus',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'The hideSubMenus parameter will remove all non-active submenus from the script output if set to 1. This parameter only works if multiple levels are being displayed.',
              'area_trans' => '',
            ),
            'useWeblinkUrl' => 
            array (
              'name' => 'useWeblinkUrl',
              'desc' => 'pdotools_prop_useWeblinkUrl',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'If WebLinks are used in the output, script will output the link specified in the WebLink instead of the normal MODX link. To use the standard display of WebLinks (like any other Resource) set this to 0.',
              'area_trans' => '',
            ),
            'sortdir' => 
            array (
              'name' => 'sortdir',
              'desc' => 'pdotools_prop_sortdir',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'ASC',
                  'value' => 'ASC',
                  'name' => 'ASC',
                ),
                1 => 
                array (
                  'text' => 'DESC',
                  'value' => 'DESC',
                  'name' => 'DESC',
                ),
              ),
              'value' => 'ASC',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Order which to sort by: descending or ascending',
              'area_trans' => '',
            ),
            'sortby' => 
            array (
              'name' => 'sortby',
              'desc' => 'pdotools_prop_sortby',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'menuindex',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Any Resource Field (including Template Variables if they have been included) to sort by. Some common fields to sort on are publishedon, menuindex, pagetitle etc., but see the Resources documentation for all fields. Specify fields with the name only, not using the tag syntax. Note that when using fields like template, publishedby and the likes for sorting, it will be sorted on the raw values, so the template or user ID, and NOT their names. You can also sort randomly by specifying RAND().',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'pdotools_prop_limit',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Limits the number of resources returned.  Use "0" for unlimited results.',
              'area_trans' => '',
            ),
            'offset' => 
            array (
              'name' => 'offset',
              'desc' => 'pdotools_prop_offset',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'An offset of resources returned by the criteria to skip.',
              'area_trans' => '',
            ),
            'rowIdPrefix' => 
            array (
              'name' => 'rowIdPrefix',
              'desc' => 'pdotools_prop_rowIdPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'If set, script will replace the id placeholder with a unique id consisting of the specified prefix plus the Resource id.',
              'area_trans' => '',
            ),
            'firstClass' => 
            array (
              'name' => 'firstClass',
              'desc' => 'pdotools_prop_firstClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'first',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'CSS class for the first item at a given menu level.',
              'area_trans' => '',
            ),
            'lastClass' => 
            array (
              'name' => 'lastClass',
              'desc' => 'pdotools_prop_lastClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'last',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'CSS class for the last item at a given menu level.',
              'area_trans' => '',
            ),
            'hereClass' => 
            array (
              'name' => 'hereClass',
              'desc' => 'pdotools_prop_hereClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'active',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'CSS class for the items showing where you are, all the way up the chain.',
              'area_trans' => '',
            ),
            'parentClass' => 
            array (
              'name' => 'parentClass',
              'desc' => 'pdotools_prop_parentClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'CSS class for menu items that are a container and have children.',
              'area_trans' => '',
            ),
            'rowClass' => 
            array (
              'name' => 'rowClass',
              'desc' => 'pdotools_prop_rowClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'CSS class denoting each output row.',
              'area_trans' => '',
            ),
            'outerClass' => 
            array (
              'name' => 'outerClass',
              'desc' => 'pdotools_prop_outerClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'CSS class for the outer template.',
              'area_trans' => '',
            ),
            'innerClass' => 
            array (
              'name' => 'innerClass',
              'desc' => 'pdotools_prop_innerClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'CSS class for the inner template.',
              'area_trans' => '',
            ),
            'levelClass' => 
            array (
              'name' => 'levelClass',
              'desc' => 'pdotools_prop_levelClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'CSS class denoting every output row level. The level number will be added to the specified class (level1, level2, level3 etc. if you specified "level").',
              'area_trans' => '',
            ),
            'selfClass' => 
            array (
              'name' => 'selfClass',
              'desc' => 'pdotools_prop_selfClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'CSS class for the current item.',
              'area_trans' => '',
            ),
            'webLinkClass' => 
            array (
              'name' => 'webLinkClass',
              'desc' => 'pdotools_prop_webLinkClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'CSS class for weblink items.',
              'area_trans' => '',
            ),
            'tplOuter' => 
            array (
              'name' => 'tplOuter',
              'desc' => 'pdotools_prop_tplOuter',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <ul[[+classes]]>[[+wrapper]]</ul>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Name of the chunk containing the template for the outer most container; if not included, a string including "&lt;ul&gt;[[+wrapper]]&lt;/ul&gt;" is assumed.',
              'area_trans' => '',
            ),
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'pdotools_prop_tpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li[[+classes]]><a href="[[+link]]" [[+attributes]]>[[+menutitle]]</a>[[+wrapper]]</li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Name of a chunk serving as a resource template. If not provided, properties are dumped to output for each resource.',
              'area_trans' => '',
            ),
            'tplParentRow' => 
            array (
              'name' => 'tplParentRow',
              'desc' => 'pdotools_prop_tplParentRow',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Name of the chunk containing the template for any Resource that is a container and has children. Remember the [[+wrapper]] placeholder to output the children documents.',
              'area_trans' => '',
            ),
            'tplParentRowHere' => 
            array (
              'name' => 'tplParentRowHere',
              'desc' => 'pdotools_prop_tplParentRowHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource if it is a container and has children. Remember the [[+wf.wrapper]] placeholder to output the children documents.',
              'area_trans' => '',
            ),
            'tplHere' => 
            array (
              'name' => 'tplHere',
              'desc' => 'pdotools_prop_tplHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource if it is a container and has children. Remember the [[+wf.wrapper]] placeholder to output the children documents.',
              'area_trans' => '',
            ),
            'tplInner' => 
            array (
              'name' => 'tplInner',
              'desc' => 'pdotools_prop_tplInner',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Name of the chunk containing the template for each submenu. If no innerTpl is specified the outerTpl is used in its place.',
              'area_trans' => '',
            ),
            'tplInnerRow' => 
            array (
              'name' => 'tplInnerRow',
              'desc' => 'pdotools_prop_tplInnerRow',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource if it is in a subfolder.',
              'area_trans' => '',
            ),
            'tplInnerHere' => 
            array (
              'name' => 'tplInnerHere',
              'desc' => 'pdotools_prop_tplInnerHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource if it is in a subfolder.',
              'area_trans' => '',
            ),
            'tplParentRowActive' => 
            array (
              'name' => 'tplParentRowActive',
              'desc' => 'pdotools_prop_tplParentRowActive',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Name of the chunk containing the template for items that are containers, have children and are currently active in the tree.',
              'area_trans' => '',
            ),
            'tplCategoryFolder' => 
            array (
              'name' => 'tplCategoryFolder',
              'desc' => 'pdotools_prop_tplCategoryFolder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Name of the chunk containing the template for the outer most container; if not included, a string including "&lt;ul&gt;[[+wf.wrapper]]&lt;/ul&gt;" is assumed.',
              'area_trans' => '',
            ),
            'tplStart' => 
            array (
              'name' => 'tplStart',
              'desc' => 'pdotools_prop_tplStart',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <h2[[+classes]]>[[+menutitle]]</h2>[[+wrapper]]',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Name of the chunk containing the template for the start item, if enabled via the &displayStart parameter. Note: the default template shows the start item but does not link it. If you do not need a link, a class can be applied to the default template using the parameter &firstClass=`className`.',
              'area_trans' => '',
            ),
            'checkPermissions' => 
            array (
              'name' => 'checkPermissions',
              'desc' => 'pdotools_prop_checkPermissions',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Comma-separated list of permissions to check when building the menu.',
              'area_trans' => '',
            ),
            'hereId' => 
            array (
              'name' => 'hereId',
              'desc' => 'pdotools_prop_hereId',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Optional. If set, will change the "here" Resource to this ID. Defaults to the currently active Resource.',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'pdotools_prop_where',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'A JSON-style expression of criteria to build any additional where clauses from.',
              'area_trans' => '',
            ),
            'select' => 
            array (
              'name' => 'select',
              'desc' => 'pdotools_prop_select',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Comma-separated list of columns for select from database. You can specify JSON string with array, for example {"modResource":"id,pagetitle,content"}.',
              'area_trans' => '',
            ),
            'scheme' => 
            array (
              'name' => 'scheme',
              'desc' => 'pdotools_prop_scheme',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => '',
                  'text' => 'System default',
                  'name' => 'System default',
                ),
                1 => 
                array (
                  'value' => -1,
                  'text' => '-1 (relative to site_url)',
                  'name' => '-1 (relative to site_url)',
                ),
                2 => 
                array (
                  'value' => 'full',
                  'text' => 'full (absolute, prepended with site_url)',
                  'name' => 'full (absolute, prepended with site_url)',
                ),
                3 => 
                array (
                  'value' => 'abs',
                  'text' => 'abs (absolute, prepended with base_url)',
                  'name' => 'abs (absolute, prepended with base_url)',
                ),
                4 => 
                array (
                  'value' => 'http',
                  'text' => 'http (absolute, forced to http scheme)',
                  'name' => 'http (absolute, forced to http scheme)',
                ),
                5 => 
                array (
                  'value' => 'https',
                  'text' => 'https (absolute, forced to https scheme)',
                  'name' => 'https (absolute, forced to https scheme)',
                ),
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Scheme of generation of links: "uri" for the substitution of document uri (very fast) or a parameter to modX::makeUrl().',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'pdotools_prop_toPlaceholder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'If set, will assign the result to this placeholder instead of outputting it directly.',
              'area_trans' => '',
            ),
            'countChildren' => 
            array (
              'name' => 'countChildren',
              'desc' => 'pdotools_prop_countChildren',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Display the exact number of active descendants of the document in placeholder [[+children]].',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdomenu.php',
          'content' => '/** @var array $scriptProperties */

// Convert parameters from Wayfinder if exists
if (isset($startId)) {
    $scriptProperties[\'parents\'] = $startId;
}
if (!empty($includeDocs)) {
    $tmp = array_map(\'trim\', explode(\',\', $includeDocs));
    foreach ($tmp as $v) {
        if (!empty($scriptProperties[\'resources\'])) {
            $scriptProperties[\'resources\'] .= \',\' . $v;
        } else {
            $scriptProperties[\'resources\'] = $v;
        }
    }
}
if (!empty($excludeDocs)) {
    $tmp = array_map(\'trim\', explode(\',\', $excludeDocs));
    foreach ($tmp as $v) {
        if (!empty($scriptProperties[\'resources\'])) {
            $scriptProperties[\'resources\'] .= \',-\' . $v;
        } else {
            $scriptProperties[\'resources\'] = \'-\' . $v;
        }
    }
}

if (!empty($previewUnpublished) && $modx->hasPermission(\'view_unpublished\')) {
    $scriptProperties[\'showUnpublished\'] = 1;
}

$scriptProperties[\'depth\'] = empty($level) ? 100 : abs($level) - 1;
if (!empty($contexts)) {
    $scriptProperties[\'context\'] = $contexts;
}
if (empty($scriptProperties[\'context\'])) {
    $scriptProperties[\'context\'] = $modx->resource->context_key;
}

// Save original parents specified by user
$specified_parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));

if ($scriptProperties[\'parents\'] === \'\') {
    $scriptProperties[\'parents\'] = $modx->resource->id;
} elseif ($scriptProperties[\'parents\'] === 0 || $scriptProperties[\'parents\'] === \'0\') {
    if ($scriptProperties[\'depth\'] !== \'\' && $scriptProperties[\'depth\'] !== 100) {
        $contexts = array_map(\'trim\', explode(\',\', $scriptProperties[\'context\']));
        $parents = array();
        if (!empty($scriptProperties[\'showDeleted\'])) {
            $pdoFetch = $modx->getService(\'pdoFetch\');
            foreach ($contexts as $ctx) {
                $parents = array_merge($parents,
                    $pdoFetch->getChildIds(\'modResource\', 0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
            }
        } else {
            foreach ($contexts as $ctx) {
                $parents = array_merge($parents,
                    $modx->getChildIds(0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
            }
        }
        $scriptProperties[\'parents\'] = !empty($parents) ? implode(\',\', $parents) : \'+0\';
        $scriptProperties[\'depth\'] = 0;
    }
    $scriptProperties[\'includeParents\'] = 1;
    $scriptProperties[\'displayStart\'] = 0;
} else {
    $parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));
    $parents_in = $parents_out = array();
    foreach ($parents as $v) {
        if (!is_numeric($v)) {
            continue;
        }
        if ($v[0] == \'-\') {
            $parents_out[] = abs($v);
        } else {
            $parents_in[] = abs($v);
        }
    }

    if (empty($parents_in)) {
        $scriptProperties[\'includeParents\'] = 1;
        $scriptProperties[\'displayStart\'] = 0;
    }
}

if (!empty($displayStart)) {
    $scriptProperties[\'includeParents\'] = 1;
}
if (!empty($ph)) {
    $toPlaceholder = $ph;
}
if (!empty($sortOrder)) {
    $scriptProperties[\'sortdir\'] = $sortOrder;
}
if (!empty($sortBy)) {
    $scriptProperties[\'sortby\'] = $sortBy;
}
if (!empty($permissions)) {
    $scriptProperties[\'checkPermissions\'] = $permissions;
}
if (!empty($cacheResults)) {
    $scriptProperties[\'cache\'] = $cacheResults;
}
if (!empty($ignoreHidden)) {
    $scriptProperties[\'showHidden\'] = $ignoreHidden;
}

$wfTemplates = array(
    \'outerTpl\' => \'tplOuter\',
    \'rowTpl\' => \'tpl\',
    \'parentRowTpl\' => \'tplParentRow\',
    \'parentRowHereTpl\' => \'tplParentRowHere\',
    \'hereTpl\' => \'tplHere\',
    \'innerTpl\' => \'tplInner\',
    \'innerRowTpl\' => \'tplInnerRow\',
    \'innerHereTpl\' => \'tplInnerHere\',
    \'activeParentRowTpl\' => \'tplParentRowActive\',
    \'categoryFoldersTpl\' => \'tplCategoryFolder\',
    \'startItemTpl\' => \'tplStart\',
);
foreach ($wfTemplates as $k => $v) {
    if (isset(${$k})) {
        $scriptProperties[$v] = ${$k};
    }
}
//---

/** @var pdoMenu $pdoMenu */
$fqn = $modx->getOption(\'pdoMenu.class\', null, \'pdotools.pdomenu\', true);
$path = $modx->getOption(\'pdomenu_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
if ($pdoClass = $modx->loadClass($fqn, $path, false, true)) {
    $pdoMenu = new $pdoClass($modx, $scriptProperties);
} else {
    return false;
}
$pdoMenu->pdoTools->addTime(\'pdoTools loaded\');

$cache = !empty($cache) || (!$modx->user->id && !empty($cacheAnonymous));
if (empty($scriptProperties[\'cache_key\'])) {
    $scriptProperties[\'cache_key\'] = \'pdomenu/\' . sha1(serialize($scriptProperties));
}

$output = \'\';
$tree = array();
if ($cache) {
    $tree = $pdoMenu->pdoTools->getCache($scriptProperties);
}
if (empty($tree)) {
    $data = $pdoMenu->pdoTools->run();
    $data = $pdoMenu->pdoTools->buildTree($data, \'id\', \'parent\', $specified_parents);
    $tree = array();
    foreach ($data as $k => $v) {
        if (empty($v[\'id\'])) {
            if (!in_array($k, $specified_parents) && !$pdoMenu->checkResource($k)) {
                continue;
            } else {
                $tree = array_merge($tree, $v[\'children\']);
            }
        } else {
            $tree[$k] = $v;
        }
    }
    if ($cache) {
        $pdoMenu->pdoTools->setCache($tree, $scriptProperties);
    }
}
if (!empty($tree)) {
    $output = $pdoMenu->templateTree($tree);
}

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $output .= \'<pre class="pdoMenuLog">\' . print_r($pdoMenu->pdoTools->getTime(), 1) . \'</pre>\';
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
} else {
    return $output;
}',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'SimpleSearchForm' => 
      array (
        'fields' => 
        array (
          'id' => 65,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'SimpleSearchForm',
          'description' => '',
          'editor_type' => 0,
          'category' => 27,
          'cache_type' => 0,
          'snippet' => '/**
 * SimpleSearch
 *
 * Copyright 2010-11 by Shaun McCormick <shaun+sisea@modx.com>
 *
 * This file is part of SimpleSearch, a simple search component for MODx
 * Revolution. It is loosely based off of AjaxSearch for MODx Evolution by
 * coroico/kylej, minus the ajax.
 *
 * SimpleSearch is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * SimpleSearch is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * SimpleSearch; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package simplesearch
 */
/**
 * Show the search form
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @package simplesearch
 */
require_once $modx->getOption(\'sisea.core_path\',null,$modx->getOption(\'core_path\').\'components/simplesearch/\').\'model/simplesearch/simplesearch.class.php\';
$search = new SimpleSearch($modx,$scriptProperties);

/* setup default options */
$scriptProperties = array_merge(array(
  \'tpl\' => \'SearchForm\',
  \'method\' => \'get\',
  \'searchIndex\' => \'search\',
  \'toPlaceholder\' => false,
  \'landing\' => $modx->resource->get(\'id\'),
), $scriptProperties);

if (empty($scriptProperties[\'landing\'])) {
  $scriptProperties[\'landing\'] = $modx->resource->get(\'id\');
}

/* if get value already exists, set it as default */
$searchValue = isset($_REQUEST[$scriptProperties[\'searchIndex\']]) ? $_REQUEST[$scriptProperties[\'searchIndex\']] : \'\';
$searchValues = explode(\' \', $searchValue);
array_map(array($modx, \'sanitizeString\'), $searchValues);
$searchValue = implode(\' \', $searchValues);
$placeholders = array(
    \'method\' => $scriptProperties[\'method\'],
    \'landing\' => $scriptProperties[\'landing\'],
    \'searchValue\' => strip_tags(str_replace(array(\'[\',\']\',\'"\',"\'"),array(\'&#91;\',\'&#93;\',\'&quot;\',\'&apos;\'),$searchValue)),
    \'searchIndex\' => $scriptProperties[\'searchIndex\'],
);

$output = $search->getChunk($scriptProperties[\'tpl\'],$placeholders);
return $search->output($output,$scriptProperties[\'toPlaceholder\']);',
          'locked' => false,
          'properties' => 
          array (
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'sisea.tpl_form_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'SearchForm',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'The chunk that will be used to display the search form.',
              'area_trans' => '',
            ),
            'landing' => 
            array (
              'name' => 'landing',
              'desc' => 'sisea.landing_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'The Resource that the SimpleSearch snippet is called on, that will display the results of the search.',
              'area_trans' => '',
            ),
            'searchIndex' => 
            array (
              'name' => 'searchIndex',
              'desc' => 'sisea.searchindex_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'search',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'The name of the REQUEST parameter that the search will use.',
              'area_trans' => '',
            ),
            'method' => 
            array (
              'name' => 'method',
              'desc' => 'sisea.method_desc',
              'type' => 'combo-boolean',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'sisea.get',
                  'value' => 'get',
                  'name' => 'get',
                ),
                1 => 
                array (
                  'text' => 'sisea.post',
                  'value' => 'post',
                  'name' => 'post',
                ),
              ),
              'value' => 'get',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Whether to send the search over POST or GET.',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'sisea.toplaceholder_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Whether to set the output to directly return, or set to a placeholder with this propertys name.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * SimpleSearch
 *
 * Copyright 2010-11 by Shaun McCormick <shaun+sisea@modx.com>
 *
 * This file is part of SimpleSearch, a simple search component for MODx
 * Revolution. It is loosely based off of AjaxSearch for MODx Evolution by
 * coroico/kylej, minus the ajax.
 *
 * SimpleSearch is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * SimpleSearch is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * SimpleSearch; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package simplesearch
 */
/**
 * Show the search form
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @package simplesearch
 */
require_once $modx->getOption(\'sisea.core_path\',null,$modx->getOption(\'core_path\').\'components/simplesearch/\').\'model/simplesearch/simplesearch.class.php\';
$search = new SimpleSearch($modx,$scriptProperties);

/* setup default options */
$scriptProperties = array_merge(array(
  \'tpl\' => \'SearchForm\',
  \'method\' => \'get\',
  \'searchIndex\' => \'search\',
  \'toPlaceholder\' => false,
  \'landing\' => $modx->resource->get(\'id\'),
), $scriptProperties);

if (empty($scriptProperties[\'landing\'])) {
  $scriptProperties[\'landing\'] = $modx->resource->get(\'id\');
}

/* if get value already exists, set it as default */
$searchValue = isset($_REQUEST[$scriptProperties[\'searchIndex\']]) ? $_REQUEST[$scriptProperties[\'searchIndex\']] : \'\';
$searchValues = explode(\' \', $searchValue);
array_map(array($modx, \'sanitizeString\'), $searchValues);
$searchValue = implode(\' \', $searchValues);
$placeholders = array(
    \'method\' => $scriptProperties[\'method\'],
    \'landing\' => $scriptProperties[\'landing\'],
    \'searchValue\' => strip_tags(str_replace(array(\'[\',\']\',\'"\',"\'"),array(\'&#91;\',\'&#93;\',\'&quot;\',\'&apos;\'),$searchValue)),
    \'searchIndex\' => $scriptProperties[\'searchIndex\'],
);

$output = $search->getChunk($scriptProperties[\'tpl\'],$placeholders);
return $search->output($output,$scriptProperties[\'toPlaceholder\']);',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'SimpleSearch' => 
      array (
        'fields' => 
        array (
          'id' => 64,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'SimpleSearch',
          'description' => '',
          'editor_type' => 0,
          'category' => 27,
          'cache_type' => 0,
          'snippet' => '/**
 * SimpleSearch
 *
 * Copyright 2010-11 by Shaun McCormick <shaun+sisea@modx.com>
 *
 * This file is part of SimpleSearch, a simple search component for MODx
 * Revolution. It is loosely based off of AjaxSearch for MODx Evolution by
 * coroico/kylej, minus the ajax.
 *
 * SimpleSearch is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * SimpleSearch is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * SimpleSearch; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package simplesearch
 */
/**
 * SimpleSearch snippet
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @package simplesearch
 */
require_once $modx->getOption(\'sisea.core_path\',null,$modx->getOption(\'core_path\').\'components/simplesearch/\').\'model/simplesearch/simplesearch.class.php\';
$search = new SimpleSearch($modx,$scriptProperties);

/* find search index and toplaceholder setting */
$searchIndex = $modx->getOption(\'searchIndex\',$scriptProperties,\'search\');
$toPlaceholder = $modx->getOption(\'toPlaceholder\',$scriptProperties,false);
$noResultsTpl = $modx->getOption(\'noResultsTpl\',$scriptProperties,\'SearchNoResults\');

/* get search string */
if (empty($_REQUEST[$searchIndex])) {
    $output = $search->getChunk($noResultsTpl,array(
        \'query\' => \'\',
    ));
    return $search->output($output,$toPlaceholder);
}
$searchString = $search->parseSearchString($_REQUEST[$searchIndex]);
if (!$searchString) {
    $output = $search->getChunk($noResultsTpl,array(
        \'query\' => $searchString,
    ));
    return $search->output($output,$toPlaceholder);
}

/* setup default properties */
$tpl = $modx->getOption(\'tpl\',$scriptProperties,\'SearchResult\');
$containerTpl = $modx->getOption(\'containerTpl\',$scriptProperties,\'SearchResults\');
$showExtract = $modx->getOption(\'showExtract\',$scriptProperties,true);
$extractSource = $modx->getOption(\'extractSource\',$scriptProperties,\'content\');
$extractLength = $modx->getOption(\'extractLength\',$scriptProperties,200);
$extractEllipsis = $modx->getOption(\'extractEllipsis\',$scriptProperties,\'...\');
$highlightResults = $modx->getOption(\'highlightResults\',$scriptProperties,true);
$highlightClass = $modx->getOption(\'highlightClass\',$scriptProperties,\'sisea-highlight\');
$highlightTag = $modx->getOption(\'highlightTag\',$scriptProperties,\'span\');
$perPage = $modx->getOption(\'perPage\',$scriptProperties,10);
$pagingSeparator = $modx->getOption(\'pagingSeparator\',$scriptProperties,\' | \');
$placeholderPrefix = $modx->getOption(\'placeholderPrefix\',$scriptProperties,\'sisea.\');
$includeTVs = $modx->getOption(\'includeTVs\',$scriptProperties,\'\');
$processTVs = $modx->getOption(\'processTVs\',$scriptProperties,\'\');
$tvPrefix = $modx->getOption(\'tvPrefix\',$scriptProperties,\'\');
$offsetIndex = $modx->getOption(\'offsetIndex\',$scriptProperties,\'sisea_offset\');
$idx = isset($_REQUEST[$offsetIndex]) ? intval($_REQUEST[$offsetIndex]) + 1 : 1;
$postHooks = $modx->getOption(\'postHooks\',$scriptProperties,\'\');
$activeFacet = $modx->getOption(\'facet\',$_REQUEST,$modx->getOption(\'activeFacet\',$scriptProperties,\'default\'));
$activeFacet = $modx->sanitizeString($activeFacet);
$facetLimit = $modx->getOption(\'facetLimit\',$scriptProperties,5);
$outputSeparator = $modx->getOption(\'outputSeparator\',$scriptProperties,"\\n");
$addSearchToLink = intval($modx->getOption(\'addSearchToLink\',$scriptProperties,"0"));
$searchInLinkName = $modx->getOption(\'searchInLinkName\',$scriptProperties,"search");

/* get results */
$response = $search->getSearchResults($searchString,$scriptProperties);
$placeholders = array(\'query\' => $searchString);
$resultsTpl = array(\'default\' => array(\'results\' => array(),\'total\' => $response[\'total\']));
if (!empty($response[\'results\'])) {
    /* iterate through search results */
    foreach ($response[\'results\'] as $resourceArray) {
        $resourceArray[\'idx\'] = $idx;
        if (empty($resourceArray[\'link\'])) {
            $ctx = !empty($resourceArray[\'context_key\']) ? $resourceArray[\'context_key\'] : $modx->context->get(\'key\');
            $args = \'\';
            if ($addSearchToLink) {
                $args = array($searchInLinkName => $searchString);
            }
            $resourceArray[\'link\'] = $modx->makeUrl($resourceArray[\'id\'],$ctx,$args);
        }
        if ($showExtract) {
            $extract = $searchString;
            if (array_key_exists($extractSource, $resourceArray)) {
                $text = $resourceArray[$extractSource];
            } else {
                $text = $modx->runSnippet($extractSource, $resourceArray);
            }
            $extract = $search->createExtract($text,$extractLength,$extract,$extractEllipsis);
            /* cleanup extract */
            $extract = strip_tags(preg_replace("#\\<!--(.*?)--\\>#si",\'\',$extract));
            $extract = preg_replace("#\\[\\[(.*?)\\]\\]#si",\'\',$extract);
            $extract = str_replace(array(\'[[\',\']]\'),\'\',$extract);
            $resourceArray[\'extract\'] = !empty($highlightResults) ? $search->addHighlighting($extract,$highlightClass,$highlightTag) : $extract;
        }
        $resultsTpl[\'default\'][\'results\'][] = $search->getChunk($tpl,$resourceArray);
        $idx++;
    }
}

/* load postHooks to get faceted results */
if (!empty($postHooks)) {
    $limit = !empty($facetLimit) ? $facetLimit : $perPage;
    $search->loadHooks(\'post\');
    $search->postHooks->loadMultiple($postHooks,$response[\'results\'],array(
        \'hooks\' => $postHooks,
        \'search\' => $searchString,
        \'offset\' => !empty($_GET[$offsetIndex]) ? intval($_GET[$offsetIndex]) : 0,
        \'limit\' => $limit,
        \'perPage\' => $limit,
    ));
    if (!empty($search->postHooks->facets)) {
        foreach ($search->postHooks->facets as $facetKey => $facetResults) {
            if (empty($resultsTpl[$facetKey])) {
                $resultsTpl[$facetKey] = array();
                $resultsTpl[$facetKey][\'total\'] = $facetResults[\'total\'];
                $resultsTpl[$facetKey][\'results\'] = array();
            } else {
                $resultsTpl[$facetKey][\'total\'] = $resultsTpl[$facetKey][\'total\'] = $facetResults[\'total\'];
            }

            $idx = !empty($resultsTpl[$facetKey]) ? count($resultsTpl[$facetKey][\'results\'])+1 : 1;
            foreach ($facetResults[\'results\'] as $r) {
                $r[\'idx\'] = $idx;
                $fTpl = !empty($scriptProperties[\'tpl\'.$facetKey]) ? $scriptProperties[\'tpl\'.$facetKey] : $tpl;
                $resultsTpl[$facetKey][\'results\'][] = $search->getChunk($fTpl,$r);
                $idx++;
            }
        }
    }
}

/* set faceted results to placeholders for easy result positioning */
$output = array();
foreach ($resultsTpl as $facetKey => $facetResults) {
    $resultSet = implode($outputSeparator,$facetResults[\'results\']);
    $placeholders[$facetKey.\'.results\'] = $resultSet;
    $placeholders[$facetKey.\'.total\'] = !empty($facetResults[\'total\']) ? $facetResults[\'total\'] : 0;
    $placeholders[$facetKey.\'.key\'] = $facetKey;
}
$placeholders[\'results\'] = $placeholders[$activeFacet.\'.results\']; /* set active facet results */
$placeholders[\'total\'] = !empty($resultsTpl[$activeFacet][\'total\']) ? $resultsTpl[$activeFacet][\'total\'] : 0;
$placeholders[\'page\'] = isset($_REQUEST[$offsetIndex]) ? ceil(intval($_REQUEST[$offsetIndex]) / $perPage) + 1 : 1;
$placeholders[\'pageCount\'] = !empty($resultsTpl[$activeFacet][\'total\']) ? ceil($resultsTpl[$activeFacet][\'total\'] / $perPage) : 1;

if (!empty($response[\'results\'])) {
    /* add results found message */
    $placeholders[\'resultInfo\'] = $modx->lexicon(\'sisea.results_found\',array(
        \'count\' => $placeholders[\'total\'],
        \'text\' => !empty($highlightResults) ? $search->addHighlighting($searchString,$highlightClass,$highlightTag) : $searchString,
    ));
    /* if perPage set to >0, add paging */
    if ($perPage > 0) {
        $placeholders[\'paging\'] = $search->getPagination($searchString,$perPage,$pagingSeparator,$placeholders[\'total\']);
    }
}
$placeholders[\'query\'] = $searchString;
$placeholders[\'facet\'] = $activeFacet;

/* output */
$modx->setPlaceholder($placeholderPrefix.\'query\',$searchString);
$modx->setPlaceholder($placeholderPrefix.\'count\',$response[\'total\']);
$modx->setPlaceholders($placeholders,$placeholderPrefix);
if (empty($response[\'results\'])) {
    $output = $search->getChunk($noResultsTpl,array(
        \'query\' => $searchString,
    ));
} else {
    $output = $search->getChunk($containerTpl,$placeholders);
}
return $search->output($output,$toPlaceholder);',
          'locked' => false,
          'properties' => 
          array (
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'sisea.tpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'SearchResult',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'The chunk that will be used to display the contents of each search result.',
              'area_trans' => '',
            ),
            'containerTpl' => 
            array (
              'name' => 'containerTpl',
              'desc' => 'sisea.containertpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'SearchResults',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'The chunk that will be used to wrap all the search results, pagination and message.',
              'area_trans' => '',
            ),
            'useAllWords' => 
            array (
              'name' => 'useAllWords',
              'desc' => 'sisea.useallwords_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'If true, will only find results with all the specified search words.',
              'area_trans' => '',
            ),
            'maxWords' => 
            array (
              'name' => 'maxWords',
              'desc' => 'sisea.maxwords_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 7,
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'The maximum number of words to include in the search. Only applicable if useAllWords is off.',
              'area_trans' => '',
            ),
            'minChars' => 
            array (
              'name' => 'minChars',
              'desc' => 'sisea.minchars_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 3,
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'The minimum number of characters to trigger the search.',
              'area_trans' => '',
            ),
            'searchStyle' => 
            array (
              'name' => 'searchStyle',
              'desc' => 'sisea.searchstyle_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'sisea.partial',
                  'value' => 'partial',
                  'name' => 'Partial',
                ),
                1 => 
                array (
                  'text' => 'sisea.match',
                  'value' => 'match',
                  'name' => 'Match',
                ),
              ),
              'value' => 'partial',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'To search either with a partial LIKE search, or a relevance-based MATCH search.',
              'area_trans' => '',
            ),
            'perPage' => 
            array (
              'name' => 'perPage',
              'desc' => 'sisea.perpage_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 10,
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'The number of search results to show per page.',
              'area_trans' => '',
            ),
            'showExtract' => 
            array (
              'name' => 'showExtract',
              'desc' => 'sisea.showextract_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Whether or not to show an extract of the content of each search result.',
              'area_trans' => '',
            ),
            'extractLength' => 
            array (
              'name' => 'extractLength',
              'desc' => 'sisea.extractlength_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 200,
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'The number of characters for the content extraction of each search result.',
              'area_trans' => '',
            ),
            'extractEllipsis' => 
            array (
              'name' => 'extractEllipsis',
              'desc' => 'sisea.extractellipsis_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '...',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'The string used to wrap extract results with. Defaults to an ellipsis.',
              'area_trans' => '',
            ),
            'includeTVs' => 
            array (
              'name' => 'includeTVs',
              'desc' => 'sisea.includetvs_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Indicates if TemplateVar values should be included in the properties available to each resource template. Defaults to false. Turning this on might make your search slower if you have lots of TVs.',
              'area_trans' => '',
            ),
            'processTVs' => 
            array (
              'name' => 'processTVs',
              'desc' => 'sisea.processtvs_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Indicates if TemplateVar values should be rendered as they would on the resource being summarized. Defaults to false. Note: TVs are processed during indexing for Solr searching, so there is no need to do this here.',
              'area_trans' => '',
            ),
            'highlightResults' => 
            array (
              'name' => 'highlightResults',
              'desc' => 'sisea.highlightresults_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Whether or not to highlight the search term in results.',
              'area_trans' => '',
            ),
            'highlightClass' => 
            array (
              'name' => 'highlightClass',
              'desc' => 'sisea.highlightclass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'sisea-highlight',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'The CSS class name to add to highlighted terms in results.',
              'area_trans' => '',
            ),
            'highlightTag' => 
            array (
              'name' => 'highlightTag',
              'desc' => 'sisea.highlighttag_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'span',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'The html tag to wrap the highlighted term within search results.',
              'area_trans' => '',
            ),
            'pageLimit' => 
            array (
              'name' => 'pageLimit',
              'desc' => 'sisea.pagelimit_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'The maximum number of page links to display when rendering page navigation controls.',
              'area_trans' => '',
            ),
            'pageTpl' => 
            array (
              'name' => 'pageTpl',
              'desc' => 'sisea.pagetpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'PageLink',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'The chunk to use for a pagination link.',
              'area_trans' => '',
            ),
            'pageFirstTpl' => 
            array (
              'name' => 'pageFirstTpl',
              'desc' => 'sisea.pagefirsttpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'The chunk to use for the first page pagination link.',
              'area_trans' => '',
            ),
            'pageLastTpl' => 
            array (
              'name' => 'pageLastTpl',
              'desc' => 'sisea.pagelasttpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'The chunk to use for the last page pagination link.',
              'area_trans' => '',
            ),
            'pagePrevTpl' => 
            array (
              'name' => 'pagePrevTpl',
              'desc' => 'sisea.pageprevtpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'The chunk to use for the previous page pagination link.',
              'area_trans' => '',
            ),
            'pageNextTpl' => 
            array (
              'name' => 'pageNextTpl',
              'desc' => 'sisea.pagenexttpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'The chunk to use for the next page pagination link.',
              'area_trans' => '',
            ),
            'currentPageTpl' => 
            array (
              'name' => 'currentPageTpl',
              'desc' => 'sisea.currentpagetpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'CurrentPageLink',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'The chunk to use for the current pagination link.',
              'area_trans' => '',
            ),
            'pagingSeparator' => 
            array (
              'name' => 'pagingSeparator',
              'desc' => 'sisea.pagingseparator_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => ' | ',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'The separator to use between pagination links.',
              'area_trans' => '',
            ),
            'ids' => 
            array (
              'name' => 'ids',
              'desc' => 'sisea.ids_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'A comma-separated list of IDs to restrict the search to.',
              'area_trans' => '',
            ),
            'idType' => 
            array (
              'name' => 'idType',
              'desc' => 'sisea.idtype_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'sisea.parents',
                  'value' => 'parents',
                  'name' => 'Parents',
                ),
                1 => 
                array (
                  'text' => 'sisea.documents',
                  'value' => 'documents',
                  'name' => 'Documents',
                ),
              ),
              'value' => 'parents',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'The type of restriction for the ids parameter. If parents, will add all the children of the IDs in the ids parameter to the search. If documents, will only use the specified IDs in the search.',
              'area_trans' => '',
            ),
            'exclude' => 
            array (
              'name' => 'exclude',
              'desc' => 'sisea.exclude_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'A comma-separated list of resource IDs to exclude from search eg. "10,15,19". This will exclude the resources with the ID "10","15" or "19".',
              'area_trans' => '',
            ),
            'depth' => 
            array (
              'name' => 'depth',
              'desc' => 'sisea.depth_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 10,
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'If idtype is set to parents, the depth down the Resource tree that will be searched with the specified IDs.',
              'area_trans' => '',
            ),
            'hideMenu' => 
            array (
              'name' => 'hideMenu',
              'desc' => 'sisea.hidemenu_desc',
              'type' => 'textfield',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'sisea.hidemenu_visible',
                  'value' => 0,
                  'name' => 'Visible Only',
                ),
                1 => 
                array (
                  'text' => 'sisea.hidemenu_hidden',
                  'value' => 1,
                  'name' => 'Hidden Only',
                ),
                2 => 
                array (
                  'text' => 'sisea.hidemenu_both',
                  'value' => 2,
                  'name' => 'Show All',
                ),
              ),
              'value' => 2,
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Whether or not to return Resources that have hidemenu on. 0 shows only visible Resources, 1 shows only hidden Resources, 2 shows both.',
              'area_trans' => '',
            ),
            'contexts' => 
            array (
              'name' => 'contexts',
              'desc' => 'sisea.contexts_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'The contexts to search. Defaults to the current context if none are explicitly specified.',
              'area_trans' => '',
            ),
            'searchIndex' => 
            array (
              'name' => 'searchIndex',
              'desc' => 'sisea.searchindex_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'search',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'The name of the REQUEST parameter that the search will use.',
              'area_trans' => '',
            ),
            'offsetIndex' => 
            array (
              'name' => 'offsetIndex',
              'desc' => 'sisea.offsetindex_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'sisea_offset',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'The name of the REQUEST parameter to use for the pagination offset.',
              'area_trans' => '',
            ),
            'placeholderPrefix' => 
            array (
              'name' => 'placeholderPrefix',
              'desc' => 'sisea.placeholderprefix_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'sisea.',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'The prefix for global placeholders set by this snippet.',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'sisea.toplaceholder_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Whether to set the output to directly return, or set to a placeholder with this propertys name.',
              'area_trans' => '',
            ),
            'andTerms' => 
            array (
              'name' => 'andTerms',
              'desc' => 'sisea.andterms_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Whether or not to add a logical AND between words.',
              'area_trans' => '',
            ),
            'matchWildcard' => 
            array (
              'name' => 'matchWildcard',
              'desc' => 'sisea.matchwildcard_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Enable wildcard search. Set to false to do exact searching on a search term.',
              'area_trans' => '',
            ),
            'docFields' => 
            array (
              'name' => 'docFields',
              'desc' => 'sisea.docfields_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'pagetitle,longtitle,alias,description,introtext,content',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'A comma-separated list of specific Resource fields to search.',
              'area_trans' => '',
            ),
            'fieldPotency' => 
            array (
              'name' => 'fieldPotency',
              'desc' => 'sisea.fieldpotency_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Specify weighting of search results. Example: pagetitle:3,alias:10 will give 3 points if result is found in pagetitle, 10 points if result is found in alias.',
              'area_trans' => '',
            ),
            'urlScheme' => 
            array (
              'name' => 'urlScheme',
              'desc' => 'sisea.urlscheme_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'sisea.url_relative',
                  'value' => -1,
                  'name' => 'Relative',
                ),
                1 => 
                array (
                  'text' => 'sisea.url_absolute',
                  'value' => 'abs',
                  'name' => 'Absolute',
                ),
                2 => 
                array (
                  'text' => 'sisea.url_full',
                  'value' => 'full',
                  'name' => 'Full',
                ),
              ),
              'value' => -1,
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'The URL scheme you want: http, https, full, abs, relative, etc. See the $modx->makeUrl() documentation. This is used when the pagination links are generated.',
              'area_trans' => '',
            ),
            'postHooks' => 
            array (
              'name' => 'postHooks',
              'desc' => 'sisea.posthooks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Any hooks to run post-search that can add faceted results to the search result set.',
              'area_trans' => '',
            ),
            'activeFacet' => 
            array (
              'name' => 'activeFacet',
              'desc' => 'sisea.activefacet_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'default',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'The current active facet. Leave this alone unless you want a result to show from a non-standard facet derived through a postHook.',
              'area_trans' => '',
            ),
            'facetLimit' => 
            array (
              'name' => 'facetLimit',
              'desc' => 'sisea.facetlimit_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 5,
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'The number of non-active-facet results to show on the main results page. Defaults to 5.',
              'area_trans' => '',
            ),
            'sortBy' => 
            array (
              'name' => 'sortBy',
              'desc' => 'sisea.sortby_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'A comma-separated list of Resource fields to sort the results by. Leave blank to sort by relevance and score.',
              'area_trans' => '',
            ),
            'sortDir' => 
            array (
              'name' => 'sortDir',
              'desc' => 'sisea.sortdir_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'sisea.ascending',
                  'value' => 'ASC',
                  'name' => 'Ascending',
                ),
                1 => 
                array (
                  'text' => 'sisea.descending',
                  'value' => 'DESC',
                  'name' => 'Descending',
                ),
              ),
              'value' => 'DESC',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'A comma-separated list of directions to sort the results by. Must match the number of items in the sortBy parameter.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * SimpleSearch
 *
 * Copyright 2010-11 by Shaun McCormick <shaun+sisea@modx.com>
 *
 * This file is part of SimpleSearch, a simple search component for MODx
 * Revolution. It is loosely based off of AjaxSearch for MODx Evolution by
 * coroico/kylej, minus the ajax.
 *
 * SimpleSearch is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * SimpleSearch is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * SimpleSearch; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package simplesearch
 */
/**
 * SimpleSearch snippet
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @package simplesearch
 */
require_once $modx->getOption(\'sisea.core_path\',null,$modx->getOption(\'core_path\').\'components/simplesearch/\').\'model/simplesearch/simplesearch.class.php\';
$search = new SimpleSearch($modx,$scriptProperties);

/* find search index and toplaceholder setting */
$searchIndex = $modx->getOption(\'searchIndex\',$scriptProperties,\'search\');
$toPlaceholder = $modx->getOption(\'toPlaceholder\',$scriptProperties,false);
$noResultsTpl = $modx->getOption(\'noResultsTpl\',$scriptProperties,\'SearchNoResults\');

/* get search string */
if (empty($_REQUEST[$searchIndex])) {
    $output = $search->getChunk($noResultsTpl,array(
        \'query\' => \'\',
    ));
    return $search->output($output,$toPlaceholder);
}
$searchString = $search->parseSearchString($_REQUEST[$searchIndex]);
if (!$searchString) {
    $output = $search->getChunk($noResultsTpl,array(
        \'query\' => $searchString,
    ));
    return $search->output($output,$toPlaceholder);
}

/* setup default properties */
$tpl = $modx->getOption(\'tpl\',$scriptProperties,\'SearchResult\');
$containerTpl = $modx->getOption(\'containerTpl\',$scriptProperties,\'SearchResults\');
$showExtract = $modx->getOption(\'showExtract\',$scriptProperties,true);
$extractSource = $modx->getOption(\'extractSource\',$scriptProperties,\'content\');
$extractLength = $modx->getOption(\'extractLength\',$scriptProperties,200);
$extractEllipsis = $modx->getOption(\'extractEllipsis\',$scriptProperties,\'...\');
$highlightResults = $modx->getOption(\'highlightResults\',$scriptProperties,true);
$highlightClass = $modx->getOption(\'highlightClass\',$scriptProperties,\'sisea-highlight\');
$highlightTag = $modx->getOption(\'highlightTag\',$scriptProperties,\'span\');
$perPage = $modx->getOption(\'perPage\',$scriptProperties,10);
$pagingSeparator = $modx->getOption(\'pagingSeparator\',$scriptProperties,\' | \');
$placeholderPrefix = $modx->getOption(\'placeholderPrefix\',$scriptProperties,\'sisea.\');
$includeTVs = $modx->getOption(\'includeTVs\',$scriptProperties,\'\');
$processTVs = $modx->getOption(\'processTVs\',$scriptProperties,\'\');
$tvPrefix = $modx->getOption(\'tvPrefix\',$scriptProperties,\'\');
$offsetIndex = $modx->getOption(\'offsetIndex\',$scriptProperties,\'sisea_offset\');
$idx = isset($_REQUEST[$offsetIndex]) ? intval($_REQUEST[$offsetIndex]) + 1 : 1;
$postHooks = $modx->getOption(\'postHooks\',$scriptProperties,\'\');
$activeFacet = $modx->getOption(\'facet\',$_REQUEST,$modx->getOption(\'activeFacet\',$scriptProperties,\'default\'));
$activeFacet = $modx->sanitizeString($activeFacet);
$facetLimit = $modx->getOption(\'facetLimit\',$scriptProperties,5);
$outputSeparator = $modx->getOption(\'outputSeparator\',$scriptProperties,"\\n");
$addSearchToLink = intval($modx->getOption(\'addSearchToLink\',$scriptProperties,"0"));
$searchInLinkName = $modx->getOption(\'searchInLinkName\',$scriptProperties,"search");

/* get results */
$response = $search->getSearchResults($searchString,$scriptProperties);
$placeholders = array(\'query\' => $searchString);
$resultsTpl = array(\'default\' => array(\'results\' => array(),\'total\' => $response[\'total\']));
if (!empty($response[\'results\'])) {
    /* iterate through search results */
    foreach ($response[\'results\'] as $resourceArray) {
        $resourceArray[\'idx\'] = $idx;
        if (empty($resourceArray[\'link\'])) {
            $ctx = !empty($resourceArray[\'context_key\']) ? $resourceArray[\'context_key\'] : $modx->context->get(\'key\');
            $args = \'\';
            if ($addSearchToLink) {
                $args = array($searchInLinkName => $searchString);
            }
            $resourceArray[\'link\'] = $modx->makeUrl($resourceArray[\'id\'],$ctx,$args);
        }
        if ($showExtract) {
            $extract = $searchString;
            if (array_key_exists($extractSource, $resourceArray)) {
                $text = $resourceArray[$extractSource];
            } else {
                $text = $modx->runSnippet($extractSource, $resourceArray);
            }
            $extract = $search->createExtract($text,$extractLength,$extract,$extractEllipsis);
            /* cleanup extract */
            $extract = strip_tags(preg_replace("#\\<!--(.*?)--\\>#si",\'\',$extract));
            $extract = preg_replace("#\\[\\[(.*?)\\]\\]#si",\'\',$extract);
            $extract = str_replace(array(\'[[\',\']]\'),\'\',$extract);
            $resourceArray[\'extract\'] = !empty($highlightResults) ? $search->addHighlighting($extract,$highlightClass,$highlightTag) : $extract;
        }
        $resultsTpl[\'default\'][\'results\'][] = $search->getChunk($tpl,$resourceArray);
        $idx++;
    }
}

/* load postHooks to get faceted results */
if (!empty($postHooks)) {
    $limit = !empty($facetLimit) ? $facetLimit : $perPage;
    $search->loadHooks(\'post\');
    $search->postHooks->loadMultiple($postHooks,$response[\'results\'],array(
        \'hooks\' => $postHooks,
        \'search\' => $searchString,
        \'offset\' => !empty($_GET[$offsetIndex]) ? intval($_GET[$offsetIndex]) : 0,
        \'limit\' => $limit,
        \'perPage\' => $limit,
    ));
    if (!empty($search->postHooks->facets)) {
        foreach ($search->postHooks->facets as $facetKey => $facetResults) {
            if (empty($resultsTpl[$facetKey])) {
                $resultsTpl[$facetKey] = array();
                $resultsTpl[$facetKey][\'total\'] = $facetResults[\'total\'];
                $resultsTpl[$facetKey][\'results\'] = array();
            } else {
                $resultsTpl[$facetKey][\'total\'] = $resultsTpl[$facetKey][\'total\'] = $facetResults[\'total\'];
            }

            $idx = !empty($resultsTpl[$facetKey]) ? count($resultsTpl[$facetKey][\'results\'])+1 : 1;
            foreach ($facetResults[\'results\'] as $r) {
                $r[\'idx\'] = $idx;
                $fTpl = !empty($scriptProperties[\'tpl\'.$facetKey]) ? $scriptProperties[\'tpl\'.$facetKey] : $tpl;
                $resultsTpl[$facetKey][\'results\'][] = $search->getChunk($fTpl,$r);
                $idx++;
            }
        }
    }
}

/* set faceted results to placeholders for easy result positioning */
$output = array();
foreach ($resultsTpl as $facetKey => $facetResults) {
    $resultSet = implode($outputSeparator,$facetResults[\'results\']);
    $placeholders[$facetKey.\'.results\'] = $resultSet;
    $placeholders[$facetKey.\'.total\'] = !empty($facetResults[\'total\']) ? $facetResults[\'total\'] : 0;
    $placeholders[$facetKey.\'.key\'] = $facetKey;
}
$placeholders[\'results\'] = $placeholders[$activeFacet.\'.results\']; /* set active facet results */
$placeholders[\'total\'] = !empty($resultsTpl[$activeFacet][\'total\']) ? $resultsTpl[$activeFacet][\'total\'] : 0;
$placeholders[\'page\'] = isset($_REQUEST[$offsetIndex]) ? ceil(intval($_REQUEST[$offsetIndex]) / $perPage) + 1 : 1;
$placeholders[\'pageCount\'] = !empty($resultsTpl[$activeFacet][\'total\']) ? ceil($resultsTpl[$activeFacet][\'total\'] / $perPage) : 1;

if (!empty($response[\'results\'])) {
    /* add results found message */
    $placeholders[\'resultInfo\'] = $modx->lexicon(\'sisea.results_found\',array(
        \'count\' => $placeholders[\'total\'],
        \'text\' => !empty($highlightResults) ? $search->addHighlighting($searchString,$highlightClass,$highlightTag) : $searchString,
    ));
    /* if perPage set to >0, add paging */
    if ($perPage > 0) {
        $placeholders[\'paging\'] = $search->getPagination($searchString,$perPage,$pagingSeparator,$placeholders[\'total\']);
    }
}
$placeholders[\'query\'] = $searchString;
$placeholders[\'facet\'] = $activeFacet;

/* output */
$modx->setPlaceholder($placeholderPrefix.\'query\',$searchString);
$modx->setPlaceholder($placeholderPrefix.\'count\',$response[\'total\']);
$modx->setPlaceholders($placeholders,$placeholderPrefix);
if (empty($response[\'results\'])) {
    $output = $search->getChunk($noResultsTpl,array(
        \'query\' => $searchString,
    ));
} else {
    $output = $search->getChunk($containerTpl,$placeholders);
}
return $search->output($output,$toPlaceholder);',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);