<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 20,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'How to get the best deal',
    'longtitle' => '',
    'description' => '',
    'alias' => 'how-to-get-the-best-deal',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 19,
    'isfolder' => 0,
    'introtext' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quia dolore debitis tenetur laborum neque deleniti quis atque autem, qui blanditiis, ad aspernatur? Consequatur nemo, eveniet blanditiis asperiores ex magni sit libero sint fugiat quibusdam ab eius aperiam, iure facilis neque dolore earum architecto tempore et, quae? Omnis ex suscipit debitis, obcaecati delectus est ab voluptate distinctio voluptas. Deserunt saepe sunt ullam, animi sed vel error consectetur incidunt.',
    'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quia dolore debitis tenetur laborum neque deleniti quis atque autem, qui blanditiis, ad aspernatur? Consequatur nemo, eveniet blanditiis asperiores ex magni sit libero sint fugiat quibusdam ab eius aperiam, iure facilis neque dolore earum architecto tempore et, quae? Omnis ex suscipit debitis, obcaecati delectus est ab voluptate distinctio voluptas. Deserunt saepe sunt ullam, animi sed vel error consectetur incidunt. Ipsa facere eveniet natus quos ratione, minus quod cum ex, laboriosam eius impedit cupiditate? Dolore, voluptates reiciendis quis incidunt ducimus cumque placeat, similique nostrum quod enim quidem culpa. Facere veniam cum accusantium cumque, explicabo nesciunt repellat unde, quibusdam adipisci error quasi natus, pariatur perspiciatis odit labore eos incidunt? Quidem doloremque atque nisi ea optio odio aspernatur est eius!</p>
<img alt="" class="mb-50" src="assets/south/img/blog-img/blog3.jpg" />
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia minus in recusandae cumque, laboriosam mollitia inventore nisi autem maiores nostrum ipsa labore beatae amet, dolore ex error fugit sunt aspernatur quidem. Sed laboriosam nihil consectetur facilis aliquid labore necessitatibus nemo dolore? Perspiciatis corrupti consectetur, doloribus aliquid voluptatibus ab atque inventore, est voluptates. Eum veniam hic velit, quia voluptates? Numquam aliquam accusantium hic iste, sequi nisi maiores minus iure eos est unde eum dolore amet suscipit?</p>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus accusamus accusantium nisi quas tempore quod placeat soluta, quam, ex, pariatur doloremque, quasi ut vitae aspernatur quisquam dolores consequatur deleniti sed perferendis consequuntur. Aut quod, dolorum molestiae veritatis molestias, nemo sit, voluptatibus, quaerat cupiditate magni dignissimos minus repellendus labore.</p>
',
    'richtext' => 1,
    'template' => 6,
    'menuindex' => 0,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1535098977,
    'editedby' => 1,
    'editedon' => 1535114887,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1535098920,
    'publishedby' => 1,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'blog/cardiology/how-to-get-the-best-deal',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 0,
    'properties' => NULL,
    'postImage' => 
    array (
      0 => 'postImage',
      1 => 'assets/south/img/blog-img/blog1.jpg',
      2 => 'default',
      3 => NULL,
      4 => 'image',
    ),
    'category' => 
    array (
      0 => 'category',
      1 => '19',
      2 => 'text',
      3 => NULL,
      4 => 'resourcelist',
    ),
    '_content' => '{include \'file:templates/blog-single.tpl\'}
',
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
                                &level=`1`]]' => '<ul class=""><li class="first"><a href="/" >Home</a></li><li><a href="about" >About</a></li><li><a href="houses/" >Houses</a></li><li class="active"><a href="blog/" >Blog</a></li><li class="last"><a href="contact" >Contact</a></li></ul>',
    '[[pdoResources?
                &parents=`15`
                &depth=`0`
                &tpl=`@INLINE <li><a href="[[+uri]]">[[+pagetitle]]</a></li>`]]' => '<li><a href="blog/cardiology/">Cardiology</a></li>
<li><a href="blog/radiology/">Radiology</a></li>',
    '[[pdoResources?
        &parents=`5`
        &depth=`0`
        &limit=`3`
        &includeTVs=`houseImage,housePrice,houseArea,houseAddress,houseGarage,houseBathroom`
        &tvPrefix=``
        &tpl=`@CODE:
        <div class="single-featured-property">
            <!-- Property Thumbnail -->
            <div class="property-thumb">
                <img src="[[+houseImage]]" alt="">

                <div class="list-price">
                    <p>$[[+housePrice]]</p>
                </div>
            </div>
            <!-- Property Content -->
            <div class="property-content">
                <h5><a href="[[+uri]]">[[+pagetitle]]</a></h5>  
                <p class="location"><img src="assets/south/img/icons/location.png" alt="">[[+houseAddress]]</p>
                <p>[[+introtext]]</p>
                <div class="property-meta-data d-flex align-items-end justify-content-between">
                    <div class="new-tag">
                        <img src="assets/south/img/icons/new.png" alt="">
                    </div>
                    <div class="bathroom">
                        <img src="assets/south/img/icons/bathtub.png" alt="">
                        <span>[[+houseBathroom]]</span>
                    </div>
                    <div class="garage">
                        <img src="assets/south/img/icons/garage.png" alt="">
                        <span>[[+houseGarage]]</span>
                    </div>
                    <div class="space">
                        <img src="assets/south/img/icons/space.png" alt="">
                        <span>[[+houseArea]] sq ft</span>
                    </div>
                </div>
            </div>
        </div>
        `]]' => '<div class="single-featured-property">
            <!-- Property Thumbnail -->
            <div class="property-thumb">
                <img src="assets/south/img/bg-img/feature3.jpg" alt="">

                <div class="list-price">
                    <p>$945777</p>
                </div>
            </div>
            <!-- Property Content -->
            <div class="property-content">
                <h5><a href="houses/town-house-with-modern-architecture">Town house2</a></h5>  
                <p class="location"><img src="assets/south/img/icons/location.png" alt="">Upper Road 3411, no.34 CA</p>
                <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>
                <div class="property-meta-data d-flex align-items-end justify-content-between">
                    <div class="new-tag">
                        <img src="assets/south/img/icons/new.png" alt="">
                    </div>
                    <div class="bathroom">
                        <img src="assets/south/img/icons/bathtub.png" alt="">
                        <span>3</span>
                    </div>
                    <div class="garage">
                        <img src="assets/south/img/icons/garage.png" alt="">
                        <span>2</span>
                    </div>
                    <div class="space">
                        <img src="assets/south/img/icons/space.png" alt="">
                        <span>180 sq ft</span>
                    </div>
                </div>
            </div>
        </div>
<div class="single-featured-property">
            <!-- Property Thumbnail -->
            <div class="property-thumb">
                <img src="assets/south/img/bg-img/feature3.jpg" alt="">

                <div class="list-price">
                    <p>$945685 </p>
                </div>
            </div>
            <!-- Property Content -->
            <div class="property-content">
                <h5><a href="houses/town-house4">Town house4</a></h5>  
                <p class="location"><img src="assets/south/img/icons/location.png" alt="">Upper Road 3411, no.34 CA</p>
                <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>
                <div class="property-meta-data d-flex align-items-end justify-content-between">
                    <div class="new-tag">
                        <img src="assets/south/img/icons/new.png" alt="">
                    </div>
                    <div class="bathroom">
                        <img src="assets/south/img/icons/bathtub.png" alt="">
                        <span>3</span>
                    </div>
                    <div class="garage">
                        <img src="assets/south/img/icons/garage.png" alt="">
                        <span>2</span>
                    </div>
                    <div class="space">
                        <img src="assets/south/img/icons/space.png" alt="">
                        <span>180 sq ft</span>
                    </div>
                </div>
            </div>
        </div>
<div class="single-featured-property">
            <!-- Property Thumbnail -->
            <div class="property-thumb">
                <img src="assets/south/img/bg-img/feature3.jpg" alt="">

                <div class="list-price">
                    <p>$945457</p>
                </div>
            </div>
            <!-- Property Content -->
            <div class="property-content">
                <h5><a href="houses/town-house5">Town house5</a></h5>  
                <p class="location"><img src="assets/south/img/icons/location.png" alt="">Upper Road 3411, no.34 CA</p>
                <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>
                <div class="property-meta-data d-flex align-items-end justify-content-between">
                    <div class="new-tag">
                        <img src="assets/south/img/icons/new.png" alt="">
                    </div>
                    <div class="bathroom">
                        <img src="assets/south/img/icons/bathtub.png" alt="">
                        <span>3</span>
                    </div>
                    <div class="garage">
                        <img src="assets/south/img/icons/garage.png" alt="">
                        <span>2</span>
                    </div>
                    <div class="space">
                        <img src="assets/south/img/icons/space.png" alt="">
                        <span>800 sq ft</span>
                    </div>
                </div>
            </div>
        </div>',
    '[[pdoMenu?
                                &parents=`0`
                                &level=`1`
                                &outerClass=`useful-links-nav`]]' => '<ul class="useful-links-nav"><li class="first"><a href="/" >Home</a></li><li><a href="about" >About</a></li><li><a href="houses/" >Houses</a></li><li class="active"><a href="blog/" >Blog</a></li><li class="last"><a href="contact" >Contact</a></li></ul>',
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
      'TicketComments' => 
      array (
        'fields' => 
        array (
          'id' => 51,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'TicketComments',
          'description' => '',
          'editor_type' => 0,
          'category' => 23,
          'cache_type' => 0,
          'snippet' => '/** @var array $scriptProperties */
if (empty($thread)) {
    $scriptProperties[\'thread\'] = $modx->getOption(\'thread\', $scriptProperties, \'resource-\' . $modx->resource->id,
        true);
}
$scriptProperties[\'resource\'] = $modx->resource->get(\'id\');
$scriptProperties[\'snippetPrepareComment\'] = $modx->getOption(\'tickets.snippet_prepare_comment\');
$scriptProperties[\'commentEditTime\'] = $modx->getOption(\'tickets.comment_edit_time\', null, 180);

$depth = $modx->getOption(\'depth\', $scriptProperties, 0);
$tplComments = $modx->getOption(\'tplComments\', $scriptProperties, \'tpl.Tickets.comment.wrapper\');
$tplCommentForm = $modx->getOption(\'tplCommentForm\', $scriptProperties, \'tpl.Tickets.comment.form\');
$tplCommentFormGuest = $modx->getOption(\'tplCommentFormGuest\', $scriptProperties, \'tpl.Tickets.comment.form.guest\');
$tplCommentAuth = $modx->getOption(\'tplCommentAuth\', $scriptProperties, \'tpl.Tickets.comment.one.auth\');
$tplCommentGuest = $modx->getOption(\'tplCommentGuest\', $scriptProperties, \'tpl.Tickets.comment.one.guest\');
$tplLoginToComment = $modx->getOption(\'tplLoginToComment\', $scriptProperties, \'tpl.Tickets.comment.login\');
$outputSeparator = $modx->getOption(\'outputSeparator\', $scriptProperties, "\\n");

/** @var Tickets $Tickets */
$Tickets = $modx->getService(\'tickets\', \'Tickets\', $modx->getOption(\'tickets.core_path\', null,
        $modx->getOption(\'core_path\') . \'components/tickets/\') . \'model/tickets/\', $scriptProperties);
$Tickets->initialize($modx->context->key, $scriptProperties);

/** @var pdoFetch $pdoFetch */
$pdoFetch = $modx->getService(\'pdoFetch\');
$pdoFetch->setConfig($scriptProperties);
$pdoFetch->addTime(\'pdoTools loaded\');

// Prepare Ticket Thread
/** @var TicketThread $thread */
if (!$thread = $modx->getObject(\'TicketThread\', array(\'name\' => $scriptProperties[\'thread\']))) {
    $thread = $modx->newObject(\'TicketThread\');
    $thread->fromArray(array(
        \'name\' => $scriptProperties[\'thread\'],
        \'resource\' => $modx->resource->get(\'id\'),
        \'createdby\' => $modx->user->id,
        \'createdon\' => date(\'Y-m-d H:i:s\'),
        \'subscribers\' => array($modx->resource->get(\'createdby\')),
    ));
} elseif ($thread->get(\'deleted\')) {
    return $modx->lexicon(\'ticket_thread_err_deleted\');
}
// Prepare session for guests
if (!empty($allowGuest) && !isset($_SESSION[\'TicketComments\'])) {
    $_SESSION[\'TicketComments\'] = array(\'name\' => \'\', \'email\' => \'\', \'ids\' => array());
}

// Migrate authors to subscription system
if (!is_array($thread->get(\'subscribers\'))) {
    $thread->set(\'subscribers\', array($modx->resource->get(\'createdby\')));
}
$thread->set(\'resource\', $modx->resource->get(\'id\'));
$thread->set(\'properties\', $scriptProperties);
$thread->save();

$ratings = array();
/** @var Ticket $ticket */
if ($ticket = $thread->getOne(\'Ticket\')) {
    /** @var TicketsSection $section */
    if ($section = $ticket->getOne(\'Section\')) {
        $ratings = $section->getProperties(\'ratings\');
    }
}

// Prepare query to db
$class = \'TicketComment\';
$where = array();
if (empty($showUnpublished)) {
    $where[\'published\'] = 1;
}

// Joining tables
$innerJoin = array(
    \'Thread\' => array(
        \'class\' => \'TicketThread\',
        \'on\' => \'`Thread`.`id` = `TicketComment`.`thread` AND `Thread`.`name` = "\' . $thread->get(\'name\') . \'"\',
    ),
);
$leftJoin = array(
    \'User\' => array(\'class\' => \'modUser\', \'on\' => \'`User`.`id` = `TicketComment`.`createdby`\'),
    \'Profile\' => array(\'class\' => \'modUserProfile\', \'on\' => \'`Profile`.`internalKey` = `TicketComment`.`createdby`\'),
);
if ($Tickets->authenticated) {
    $leftJoin[\'Vote\'] = array(
        \'class\' => \'TicketVote\',
        \'on\' => \'`Vote`.`id` = `TicketComment`.`id` AND `Vote`.`class` = "TicketComment" AND `Vote`.`createdby` = \' . $modx->user->id,
    );
    $leftJoin[\'Star\'] = array(
        \'class\' => \'TicketStar\',
        \'on\' => \'`Star`.`id` = `TicketComment`.`id` AND `Star`.`class` = "TicketComment" AND `Star`.`createdby` = \' . $modx->user->id,
    );
}
// Fields to select
$select = array(
    \'TicketComment\' => $modx->getSelectColumns(\'TicketComment\', \'TicketComment\', \'\', array(\'raw\'), true) .
        \', `parent` as `new_parent`\',
    \'Thread\' => \'`Thread`.`resource`\',
    \'User\' => \'`User`.`username`\',
    \'Profile\' => $modx->getSelectColumns(\'modUserProfile\', \'Profile\', \'\', array(\'id\', \'email\'),
            true) . \',`Profile`.`email` as `user_email`\',
);
if ($Tickets->authenticated) {
    $select[\'Vote\'] = \'`Vote`.`value` as `vote`\';
    $select[\'Star\'] = \'COUNT(`Star`.`id`) as `star`\';
}

// Add custom parameters
foreach (array(\'where\', \'select\', \'leftJoin\', \'innerJoin\') as $v) {
    if (!empty($scriptProperties[$v])) {
        $tmp = $scriptProperties[$v];
        if (!is_array($tmp)) {
            $tmp = json_decode($tmp, true);
        }
        if (is_array($tmp)) {
            $$v = array_merge($$v, $tmp);
        }
    }
    unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

$default = array(
    \'class\' => $class,
    \'where\' => json_encode($where),
    \'innerJoin\' => json_encode($innerJoin),
    \'leftJoin\' => json_encode($leftJoin),
    \'select\' => json_encode($select),
    \'sortby\' => $class . \'.id\',
    \'sortdir\' => \'ASC\',
    \'groupby\' => $class . \'.id\',
    \'limit\' => 0,
    \'fastMode\' => true,
    \'return\' => \'data\',
    \'nestedChunkPrefix\' => \'tickets_\',
);

// Merge all properties and run!
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);
$pdoFetch->addTime(\'Query parameters prepared.\');
$rows = $pdoFetch->run();

// Processing rows
$output = $commentsThread = null;
if (!empty($rows) && is_array($rows)) {
    $tmp = array();
    $i = 1;
    foreach ($rows as $row) {
        $row[\'ratings\'] = $ratings;
        $row[\'idx\'] = $i++;
        $tmp[$row[\'id\']] = $row;
    }
    $rows = $thread->buildTree($tmp, $depth);
    unset($tmp, $i);

    if (!empty($formBefore)) {
        $rows = array_reverse($rows);
    }

    $tpl = !$thread->get(\'closed\') && ($Tickets->authenticated || !empty($allowGuest))
        ? $tplCommentAuth
        : $tplCommentGuest;
    foreach ($rows as $row) {
        $output[] = $Tickets->templateNode($row, $tpl);
    }

    $pdoFetch->addTime(\'Returning processed chunks\');
    $output = implode($outputSeparator, $output);
}

$commentsThread = $pdoFetch->getChunk($tplComments, array(
    \'total\' => $modx->getPlaceholder($pdoFetch->config[\'totalVar\']),
    \'comments\' => $output,
    \'subscribed\' => $thread->isSubscribed(),
));

$pls = array(\'thread\' => $scriptProperties[\'thread\']);
if (!$Tickets->authenticated && empty($allowGuest)) {
    $form = $pdoFetch->getChunk($tplLoginToComment);
} elseif (!$Tickets->authenticated) {
    $pls[\'name\'] = $_SESSION[\'TicketComments\'][\'name\'];
    $pls[\'email\'] = $_SESSION[\'TicketComments\'][\'email\'];
    if (!empty($enableCaptcha)) {
        $tmp = $Tickets->getCaptcha();
        $pls[\'captcha\'] = $modx->lexicon(\'ticket_comment_captcha\', $tmp);
    }
    $form = $pdoFetch->getChunk($tplCommentFormGuest, $pls);
} else {
    $form = $pdoFetch->getChunk($tplCommentForm, $pls);
}

$commentForm = $thread->get(\'closed\')
    ? $modx->lexicon(\'ticket_thread_err_closed\')
    : $form;
$output = !empty($formBefore)
    ? $commentForm . $commentsThread
    : $commentsThread . $commentForm;

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $output .= \'<pre class="CommentsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

$modx->regClientStartupScript(\'<script type="text/javascript">TicketsConfig.formBefore = \' . (int)!empty($formBefore) . \';TicketsConfig.thread_depth = \' . (int)$depth . \';</script>\',
    true);

// Return output
if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
} else {
    return $output;
}',
          'locked' => false,
          'properties' => 
          array (
            'thread' => 
            array (
              'name' => 'thread',
              'desc' => 'tickets_prop_thread',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'tickets:properties',
              'area' => '',
              'desc_trans' => 'Name of comments thread. By default, "resource-[[*id]]".',
              'area_trans' => '',
            ),
            'fastMode' => 
            array (
              'name' => 'fastMode',
              'desc' => 'tickets_prop_fastMode',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'tickets:properties',
              'area' => '',
              'desc_trans' => 'If enabled, then in chunk will be only received values ​​from the database. All raw tags of MODX, such as filters, snippets calls will be cut.',
              'area_trans' => '',
            ),
            'gravatarIcon' => 
            array (
              'name' => 'gravatarIcon',
              'desc' => 'tickets_prop_gravatarIcon',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'mm',
              'lexicon' => 'tickets:properties',
              'area' => '',
              'desc_trans' => 'The default Gravatar icon to load if none is found for a user.',
              'area_trans' => '',
            ),
            'gravatarSize' => 
            array (
              'name' => 'gravatarSize',
              'desc' => 'tickets_prop_gravatarSize',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '24',
              'lexicon' => 'tickets:properties',
              'area' => '',
              'desc_trans' => 'The size, in pixels, of the Gravatar.',
              'area_trans' => '',
            ),
            'gravatarUrl' => 
            array (
              'name' => 'gravatarUrl',
              'desc' => 'tickets_prop_gravatarUrl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'https://www.gravatar.com/avatar/',
              'lexicon' => 'tickets:properties',
              'area' => '',
              'desc_trans' => 'The URL of Gravatar',
              'area_trans' => '',
            ),
            'tplCommentForm' => 
            array (
              'name' => 'tplCommentForm',
              'desc' => 'tickets_prop_tplCommentForm',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tpl.Tickets.comment.form',
              'lexicon' => 'tickets:properties',
              'area' => '',
              'desc_trans' => 'The add comment form. Can either be a chunk name or value. If set to a value, will override the chunk.',
              'area_trans' => '',
            ),
            'tplCommentFormGuest' => 
            array (
              'name' => 'tplCommentFormGuest',
              'desc' => 'tickets_prop_tplCommentFormGuest',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tpl.Tickets.comment.form.guest',
              'lexicon' => 'tickets:properties',
              'area' => '',
              'desc_trans' => 'tickets_prop_tplCommentFormGuest',
              'area_trans' => '',
            ),
            'tplCommentAuth' => 
            array (
              'name' => 'tplCommentAuth',
              'desc' => 'tickets_prop_tplCommentAuth',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tpl.Tickets.comment.one.auth',
              'lexicon' => 'tickets:properties',
              'area' => '',
              'desc_trans' => 'Chunk for displaying comment for authorized user.',
              'area_trans' => '',
            ),
            'tplCommentGuest' => 
            array (
              'name' => 'tplCommentGuest',
              'desc' => 'tickets_prop_tplCommentGuest',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tpl.Tickets.comment.one.guest',
              'lexicon' => 'tickets:properties',
              'area' => '',
              'desc_trans' => 'Chunk for displaying comment for guests.',
              'area_trans' => '',
            ),
            'tplCommentDeleted' => 
            array (
              'name' => 'tplCommentDeleted',
              'desc' => 'tickets_prop_tplCommentDeleted',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tpl.Tickets.comment.one.deleted',
              'lexicon' => 'tickets:properties',
              'area' => '',
              'desc_trans' => 'Chunk for displaying deleted comment.',
              'area_trans' => '',
            ),
            'tplComments' => 
            array (
              'name' => 'tplComments',
              'desc' => 'tickets_prop_tplComments',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tpl.Tickets.comment.wrapper',
              'lexicon' => 'tickets:properties',
              'area' => '',
              'desc_trans' => 'Chunk for the outer wrapper for comments.',
              'area_trans' => '',
            ),
            'tplLoginToComment' => 
            array (
              'name' => 'tplLoginToComment',
              'desc' => 'tickets_prop_tplLoginToComment',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tpl.Tickets.comment.login',
              'lexicon' => 'tickets:properties',
              'area' => '',
              'desc_trans' => 'Chunk  for guests with requirement of authorization.',
              'area_trans' => '',
            ),
            'tplCommentEmailOwner' => 
            array (
              'name' => 'tplCommentEmailOwner',
              'desc' => 'tickets_prop_tplCommentEmailOwner',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tpl.Tickets.comment.email.owner',
              'lexicon' => 'tickets:properties',
              'area' => '',
              'desc_trans' => 'Chunk for notification of new comments of ticket owner.',
              'area_trans' => '',
            ),
            'tplCommentEmailReply' => 
            array (
              'name' => 'tplCommentEmailReply',
              'desc' => 'tickets_prop_tplCommentEmailReply',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tpl.Tickets.comment.email.reply',
              'lexicon' => 'tickets:properties',
              'area' => '',
              'desc_trans' => 'Chunk for notification of user who replied to a comment.',
              'area_trans' => '',
            ),
            'tplCommentEmailSubscription' => 
            array (
              'name' => 'tplCommentEmailSubscription',
              'desc' => 'tickets_prop_tplCommentEmailSubscription',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tpl.Tickets.comment.email.subscription',
              'lexicon' => 'tickets:properties',
              'area' => '',
              'desc_trans' => 'Chunk for notification of a subscriber about new comment.',
              'area_trans' => '',
            ),
            'tplCommentEmailBcc' => 
            array (
              'name' => 'tplCommentEmailBcc',
              'desc' => 'tickets_prop_tplCommentEmailBcc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tpl.Tickets.comment.email.bcc',
              'lexicon' => 'tickets:properties',
              'area' => '',
              'desc_trans' => 'Chunk for bcc notification about new ticket.',
              'area_trans' => '',
            ),
            'tplCommentEmailUnpublished' => 
            array (
              'name' => 'tplCommentEmailUnpublished',
              'desc' => 'tickets_prop_tplCommentEmailUnpublished',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tpl.Tickets.comment.email.unpublished',
              'lexicon' => 'tickets:properties',
              'area' => '',
              'desc_trans' => 'Chunk for notification about unpublished new comment.',
              'area_trans' => '',
            ),
            'autoPublish' => 
            array (
              'name' => 'autoPublish',
              'desc' => 'tickets_prop_autoPublish',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'tickets:properties',
              'area' => '',
              'desc_trans' => 'If true, all comments of authenticated users in thread will be published without moderation.',
              'area_trans' => '',
            ),
            'autoPublishGuest' => 
            array (
              'name' => 'autoPublishGuest',
              'desc' => 'tickets_prop_autoPublishGuest',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'tickets:properties',
              'area' => '',
              'desc_trans' => 'If true, all comments of anonymous users in thread will be published without moderation.',
              'area_trans' => '',
            ),
            'formBefore' => 
            array (
              'name' => 'formBefore',
              'desc' => 'tickets_prop_formBefore',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'tickets:properties',
              'area' => '',
              'desc_trans' => 'If true, commenting form will be placed before comments.',
              'area_trans' => '',
            ),
            'depth' => 
            array (
              'name' => 'depth',
              'desc' => 'tickets_prop_commentsDepth',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'tickets:properties',
              'area' => '',
              'desc_trans' => 'Integer value indicating maximum depth of comments thread.',
              'area_trans' => '',
            ),
            'allowGuest' => 
            array (
              'name' => 'allowGuest',
              'desc' => 'tickets_prop_allowGuest',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'tickets:properties',
              'area' => '',
              'desc_trans' => 'Enable commenting for unauthorized users?',
              'area_trans' => '',
            ),
            'allowGuestEdit' => 
            array (
              'name' => 'allowGuestEdit',
              'desc' => 'tickets_prop_allowGuestEdit',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'tickets:properties',
              'area' => '',
              'desc_trans' => 'Allow unauthorized users to edit their comments?',
              'area_trans' => '',
            ),
            'allowGuestEmails' => 
            array (
              'name' => 'allowGuestEmails',
              'desc' => 'tickets_prop_allowGuestEmails',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'tickets:properties',
              'area' => '',
              'desc_trans' => 'Send to the guests email notifications about the replies?',
              'area_trans' => '',
            ),
            'enableCaptcha' => 
            array (
              'name' => 'enableCaptcha',
              'desc' => 'tickets_prop_enableCaptcha',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'tickets:properties',
              'area' => '',
              'desc_trans' => 'Enable protection against spam for unauthorized users?',
              'area_trans' => '',
            ),
            'minCaptcha' => 
            array (
              'name' => 'minCaptcha',
              'desc' => 'tickets_prop_minCaptcha',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 1,
              'lexicon' => 'tickets:properties',
              'area' => '',
              'desc_trans' => 'The minimum number for generate spam-protecting code.',
              'area_trans' => '',
            ),
            'maxCaptcha' => 
            array (
              'name' => 'maxCaptcha',
              'desc' => 'tickets_prop_maxCaptcha',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 10,
              'lexicon' => 'tickets:properties',
              'area' => '',
              'desc_trans' => 'The maximum number for generate spam-protecting code.',
              'area_trans' => '',
            ),
            'requiredFields' => 
            array (
              'name' => 'requiredFields',
              'desc' => 'tickets_prop_requiredFields',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'name,email',
              'lexicon' => 'tickets:properties',
              'area' => '',
              'desc_trans' => 'The required fields, which the user must fill in to send the form.',
              'area_trans' => '',
            ),
            'threadUrl' => 
            array (
              'name' => 'threadUrl',
              'desc' => 'tickets_prop_threadUrl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'tickets:properties',
              'area' => '',
              'desc_trans' => 'Absolute url to go to a comment from manager. Used when commenting not a resources.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/tickets/elements/snippets/snippet.comments.php',
          'content' => '/** @var array $scriptProperties */
if (empty($thread)) {
    $scriptProperties[\'thread\'] = $modx->getOption(\'thread\', $scriptProperties, \'resource-\' . $modx->resource->id,
        true);
}
$scriptProperties[\'resource\'] = $modx->resource->get(\'id\');
$scriptProperties[\'snippetPrepareComment\'] = $modx->getOption(\'tickets.snippet_prepare_comment\');
$scriptProperties[\'commentEditTime\'] = $modx->getOption(\'tickets.comment_edit_time\', null, 180);

$depth = $modx->getOption(\'depth\', $scriptProperties, 0);
$tplComments = $modx->getOption(\'tplComments\', $scriptProperties, \'tpl.Tickets.comment.wrapper\');
$tplCommentForm = $modx->getOption(\'tplCommentForm\', $scriptProperties, \'tpl.Tickets.comment.form\');
$tplCommentFormGuest = $modx->getOption(\'tplCommentFormGuest\', $scriptProperties, \'tpl.Tickets.comment.form.guest\');
$tplCommentAuth = $modx->getOption(\'tplCommentAuth\', $scriptProperties, \'tpl.Tickets.comment.one.auth\');
$tplCommentGuest = $modx->getOption(\'tplCommentGuest\', $scriptProperties, \'tpl.Tickets.comment.one.guest\');
$tplLoginToComment = $modx->getOption(\'tplLoginToComment\', $scriptProperties, \'tpl.Tickets.comment.login\');
$outputSeparator = $modx->getOption(\'outputSeparator\', $scriptProperties, "\\n");

/** @var Tickets $Tickets */
$Tickets = $modx->getService(\'tickets\', \'Tickets\', $modx->getOption(\'tickets.core_path\', null,
        $modx->getOption(\'core_path\') . \'components/tickets/\') . \'model/tickets/\', $scriptProperties);
$Tickets->initialize($modx->context->key, $scriptProperties);

/** @var pdoFetch $pdoFetch */
$pdoFetch = $modx->getService(\'pdoFetch\');
$pdoFetch->setConfig($scriptProperties);
$pdoFetch->addTime(\'pdoTools loaded\');

// Prepare Ticket Thread
/** @var TicketThread $thread */
if (!$thread = $modx->getObject(\'TicketThread\', array(\'name\' => $scriptProperties[\'thread\']))) {
    $thread = $modx->newObject(\'TicketThread\');
    $thread->fromArray(array(
        \'name\' => $scriptProperties[\'thread\'],
        \'resource\' => $modx->resource->get(\'id\'),
        \'createdby\' => $modx->user->id,
        \'createdon\' => date(\'Y-m-d H:i:s\'),
        \'subscribers\' => array($modx->resource->get(\'createdby\')),
    ));
} elseif ($thread->get(\'deleted\')) {
    return $modx->lexicon(\'ticket_thread_err_deleted\');
}
// Prepare session for guests
if (!empty($allowGuest) && !isset($_SESSION[\'TicketComments\'])) {
    $_SESSION[\'TicketComments\'] = array(\'name\' => \'\', \'email\' => \'\', \'ids\' => array());
}

// Migrate authors to subscription system
if (!is_array($thread->get(\'subscribers\'))) {
    $thread->set(\'subscribers\', array($modx->resource->get(\'createdby\')));
}
$thread->set(\'resource\', $modx->resource->get(\'id\'));
$thread->set(\'properties\', $scriptProperties);
$thread->save();

$ratings = array();
/** @var Ticket $ticket */
if ($ticket = $thread->getOne(\'Ticket\')) {
    /** @var TicketsSection $section */
    if ($section = $ticket->getOne(\'Section\')) {
        $ratings = $section->getProperties(\'ratings\');
    }
}

// Prepare query to db
$class = \'TicketComment\';
$where = array();
if (empty($showUnpublished)) {
    $where[\'published\'] = 1;
}

// Joining tables
$innerJoin = array(
    \'Thread\' => array(
        \'class\' => \'TicketThread\',
        \'on\' => \'`Thread`.`id` = `TicketComment`.`thread` AND `Thread`.`name` = "\' . $thread->get(\'name\') . \'"\',
    ),
);
$leftJoin = array(
    \'User\' => array(\'class\' => \'modUser\', \'on\' => \'`User`.`id` = `TicketComment`.`createdby`\'),
    \'Profile\' => array(\'class\' => \'modUserProfile\', \'on\' => \'`Profile`.`internalKey` = `TicketComment`.`createdby`\'),
);
if ($Tickets->authenticated) {
    $leftJoin[\'Vote\'] = array(
        \'class\' => \'TicketVote\',
        \'on\' => \'`Vote`.`id` = `TicketComment`.`id` AND `Vote`.`class` = "TicketComment" AND `Vote`.`createdby` = \' . $modx->user->id,
    );
    $leftJoin[\'Star\'] = array(
        \'class\' => \'TicketStar\',
        \'on\' => \'`Star`.`id` = `TicketComment`.`id` AND `Star`.`class` = "TicketComment" AND `Star`.`createdby` = \' . $modx->user->id,
    );
}
// Fields to select
$select = array(
    \'TicketComment\' => $modx->getSelectColumns(\'TicketComment\', \'TicketComment\', \'\', array(\'raw\'), true) .
        \', `parent` as `new_parent`\',
    \'Thread\' => \'`Thread`.`resource`\',
    \'User\' => \'`User`.`username`\',
    \'Profile\' => $modx->getSelectColumns(\'modUserProfile\', \'Profile\', \'\', array(\'id\', \'email\'),
            true) . \',`Profile`.`email` as `user_email`\',
);
if ($Tickets->authenticated) {
    $select[\'Vote\'] = \'`Vote`.`value` as `vote`\';
    $select[\'Star\'] = \'COUNT(`Star`.`id`) as `star`\';
}

// Add custom parameters
foreach (array(\'where\', \'select\', \'leftJoin\', \'innerJoin\') as $v) {
    if (!empty($scriptProperties[$v])) {
        $tmp = $scriptProperties[$v];
        if (!is_array($tmp)) {
            $tmp = json_decode($tmp, true);
        }
        if (is_array($tmp)) {
            $$v = array_merge($$v, $tmp);
        }
    }
    unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

$default = array(
    \'class\' => $class,
    \'where\' => json_encode($where),
    \'innerJoin\' => json_encode($innerJoin),
    \'leftJoin\' => json_encode($leftJoin),
    \'select\' => json_encode($select),
    \'sortby\' => $class . \'.id\',
    \'sortdir\' => \'ASC\',
    \'groupby\' => $class . \'.id\',
    \'limit\' => 0,
    \'fastMode\' => true,
    \'return\' => \'data\',
    \'nestedChunkPrefix\' => \'tickets_\',
);

// Merge all properties and run!
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);
$pdoFetch->addTime(\'Query parameters prepared.\');
$rows = $pdoFetch->run();

// Processing rows
$output = $commentsThread = null;
if (!empty($rows) && is_array($rows)) {
    $tmp = array();
    $i = 1;
    foreach ($rows as $row) {
        $row[\'ratings\'] = $ratings;
        $row[\'idx\'] = $i++;
        $tmp[$row[\'id\']] = $row;
    }
    $rows = $thread->buildTree($tmp, $depth);
    unset($tmp, $i);

    if (!empty($formBefore)) {
        $rows = array_reverse($rows);
    }

    $tpl = !$thread->get(\'closed\') && ($Tickets->authenticated || !empty($allowGuest))
        ? $tplCommentAuth
        : $tplCommentGuest;
    foreach ($rows as $row) {
        $output[] = $Tickets->templateNode($row, $tpl);
    }

    $pdoFetch->addTime(\'Returning processed chunks\');
    $output = implode($outputSeparator, $output);
}

$commentsThread = $pdoFetch->getChunk($tplComments, array(
    \'total\' => $modx->getPlaceholder($pdoFetch->config[\'totalVar\']),
    \'comments\' => $output,
    \'subscribed\' => $thread->isSubscribed(),
));

$pls = array(\'thread\' => $scriptProperties[\'thread\']);
if (!$Tickets->authenticated && empty($allowGuest)) {
    $form = $pdoFetch->getChunk($tplLoginToComment);
} elseif (!$Tickets->authenticated) {
    $pls[\'name\'] = $_SESSION[\'TicketComments\'][\'name\'];
    $pls[\'email\'] = $_SESSION[\'TicketComments\'][\'email\'];
    if (!empty($enableCaptcha)) {
        $tmp = $Tickets->getCaptcha();
        $pls[\'captcha\'] = $modx->lexicon(\'ticket_comment_captcha\', $tmp);
    }
    $form = $pdoFetch->getChunk($tplCommentFormGuest, $pls);
} else {
    $form = $pdoFetch->getChunk($tplCommentForm, $pls);
}

$commentForm = $thread->get(\'closed\')
    ? $modx->lexicon(\'ticket_thread_err_closed\')
    : $form;
$output = !empty($formBefore)
    ? $commentForm . $commentsThread
    : $commentsThread . $commentForm;

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $output .= \'<pre class="CommentsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

$modx->regClientStartupScript(\'<script type="text/javascript">TicketsConfig.formBefore = \' . (int)!empty($formBefore) . \';TicketsConfig.thread_depth = \' . (int)$depth . \';</script>\',
    true);

// Return output
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
      'pdoResources' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'pdoResources',
          'description' => '',
          'editor_type' => 0,
          'category' => 2,
          'cache_type' => 0,
          'snippet' => '/** @var array $scriptProperties */
if (isset($parents) && $parents === \'\') {
    $scriptProperties[\'parents\'] = $modx->resource->id;
}
if (!empty($returnIds)) {
    $scriptProperties[\'return\'] = \'ids\';
}

// Adding extra parameters into special place so we can put them in a results
/** @var modSnippet $snippet */
$additionalPlaceholders = $properties = array();
if (isset($this) && $this instanceof modSnippet) {
    $properties = $this->get(\'properties\');
}
elseif ($snippet = $modx->getObject(\'modSnippet\', array(\'name\' => \'pdoResources\'))) {
    $properties = $snippet->get(\'properties\');
}
if (!empty($properties)) {
    foreach ($scriptProperties as $k => $v) {
        if (!isset($properties[$k])) {
            $additionalPlaceholders[$k] = $v;
        }
    }
}
$scriptProperties[\'additionalPlaceholders\'] = $additionalPlaceholders;

/** @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
$path = $modx->getOption(\'pdofetch_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
if ($pdoClass = $modx->loadClass($fqn, $path, false, true)) {
    $pdoFetch = new $pdoClass($modx, $scriptProperties);
} else {
    return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');
$output = $pdoFetch->run();

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $log .= \'<pre class="pdoResourcesLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

// Return output
if (!empty($returnIds)) {
    $modx->setPlaceholder(\'pdoResources.log\', $log);
    if (!empty($toPlaceholder)) {
        $modx->setPlaceholder($toPlaceholder, $output);
    } else {
        return $output;
    }
} elseif (!empty($toSeparatePlaceholders)) {
    $output[\'log\'] = $log;
    $modx->setPlaceholders($output, $toSeparatePlaceholders);
} else {
    $output .= $log;

    if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
        $output = $pdoFetch->getChunk($tplWrapper, array_merge($additionalPlaceholders, array(\'output\' => $output)),
            $pdoFetch->config[\'fastMode\']);
    }

    if (!empty($toPlaceholder)) {
        $modx->setPlaceholder($toPlaceholder, $output);
    } else {
        return $output;
    }
}',
          'locked' => false,
          'properties' => 
          array (
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'pdotools_prop_tpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Name of a chunk serving as a resource template. If not provided, properties are dumped to output for each resource.',
              'area_trans' => '',
            ),
            'returnIds' => 
            array (
              'name' => 'returnIds',
              'desc' => 'pdotools_prop_returnIds',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'If true, snippet will return comma separated list of ids instead of results.',
              'area_trans' => '',
            ),
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
            'sortby' => 
            array (
              'name' => 'sortby',
              'desc' => 'pdotools_prop_sortby',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'publishedon',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Any Resource Field (including Template Variables if they have been included) to sort by. Some common fields to sort on are publishedon, menuindex, pagetitle etc., but see the Resources documentation for all fields. Specify fields with the name only, not using the tag syntax. Note that when using fields like template, publishedby and the likes for sorting, it will be sorted on the raw values, so the template or user ID, and NOT their names. You can also sort randomly by specifying RAND().',
              'area_trans' => '',
            ),
            'sortbyTV' => 
            array (
              'name' => 'sortbyTV',
              'desc' => 'pdotools_prop_sortbyTV',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Sort by the TV. If it is not specified in &includeTVs, it will be included automatically.',
              'area_trans' => '',
            ),
            'sortbyTVType' => 
            array (
              'name' => 'sortbyTVType',
              'desc' => 'pdotools_prop_sortbyTVType',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Sort by TV. The options are: string, integer, decimal, and datetime. If empty, then the TV will be sorted depending on its type: text, number or date.',
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
              'value' => 'DESC',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Order which to sort by: descending or ascending',
              'area_trans' => '',
            ),
            'sortdirTV' => 
            array (
              'name' => 'sortdirTV',
              'desc' => 'pdotools_prop_sortdirTV',
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
              'desc_trans' => 'Sort direction of TV: descending or ascending. If not specified, it will be equal to the parameter &sortdir.',
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
              'value' => 10,
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
            'depth' => 
            array (
              'name' => 'depth',
              'desc' => 'pdotools_prop_depth',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 10,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Integer value indicating depth to search for resources from each parent. First level of resources below parent has a depth of 1.',
              'area_trans' => '',
            ),
            'outputSeparator' => 
            array (
              'name' => 'outputSeparator',
              'desc' => 'pdotools_prop_outputSeparator',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '
',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'An optional string to separate each tpl instance.',
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
            'includeContent' => 
            array (
              'name' => 'includeContent',
              'desc' => 'pdotools_prop_includeContent',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Indicates if the content of each resource should be returned in the results.',
              'area_trans' => '',
            ),
            'includeTVs' => 
            array (
              'name' => 'includeTVs',
              'desc' => 'pdotools_prop_includeTVs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'An optional comma-delimited list of TemplateVar names to include.',
              'area_trans' => '',
            ),
            'prepareTVs' => 
            array (
              'name' => 'prepareTVs',
              'desc' => 'pdotools_prop_prepareTVs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '1',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Comma-separated list of TV names that need to be prepared. By default it is set to "1", so all TVs in "&includeTVs=``" will be prepared.',
              'area_trans' => '',
            ),
            'processTVs' => 
            array (
              'name' => 'processTVs',
              'desc' => 'pdotools_prop_processTVs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Comma-separated list of TV names that need to be processed. If you set it to "1" - all TVs in "&includeTVs=``" will be processed. By default it is empty.',
              'area_trans' => '',
            ),
            'tvPrefix' => 
            array (
              'name' => 'tvPrefix',
              'desc' => 'pdotools_prop_tvPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tv.',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'The prefix for TemplateVar properties.',
              'area_trans' => '',
            ),
            'tvFilters' => 
            array (
              'name' => 'tvFilters',
              'desc' => 'pdotools_prop_tvFilters',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Delimited list of TemplateVar values to filter resources by. Supports two delimiters and two value search formats. The first delimiter || represents a logical OR and the primary grouping mechanism.  Within each group you can provide a comma-delimited list of values. These values can be either tied to a specific TemplateVar by name, e.g. myTV==value, or just the value, indicating you are searching for the value in any TemplateVar tied to the Resource. An example would be &tvFilters=`filter2==one,filter1==bar%||filter1==foo`. <br />NOTE: filtering by values uses a LIKE query and % is considered a wildcard. <br />ANOTHER NOTE: This only looks at the raw value set for specific Resource, i. e. there must be a value specifically set for the Resource and it is not evaluated.',
              'area_trans' => '',
            ),
            'tvFiltersAndDelimiter' => 
            array (
              'name' => 'tvFiltersAndDelimiter',
              'desc' => 'pdotools_prop_tvFiltersAndDelimiter',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => ',',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'The delimiter to use to separate logical AND expressions in "&tvFilters". Default is ",".',
              'area_trans' => '',
            ),
            'tvFiltersOrDelimiter' => 
            array (
              'name' => 'tvFiltersOrDelimiter',
              'desc' => 'pdotools_prop_tvFiltersOrDelimiter',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '||',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'The delimiter to use to separate logical OR expressions in "&tvFilters". Default is "||".',
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
            'showHidden' => 
            array (
              'name' => 'showHidden',
              'desc' => 'pdotools_prop_showHidden',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'If true, will show Resources regardless if they are hidden from the menus.',
              'area_trans' => '',
            ),
            'hideContainers' => 
            array (
              'name' => 'hideContainers',
              'desc' => 'pdotools_prop_hideContainers',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'If set, will not show any Resources marked as a container (isfolder).',
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
            'idx' => 
            array (
              'name' => 'idx',
              'desc' => 'pdotools_prop_idx',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'You can define the starting idx of the resources, which is a property that is incremented as each resource is rendered.',
              'area_trans' => '',
            ),
            'first' => 
            array (
              'name' => 'first',
              'desc' => 'pdotools_prop_first',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Define the idx which represents the first resource.',
              'area_trans' => '',
            ),
            'last' => 
            array (
              'name' => 'last',
              'desc' => 'pdotools_prop_last',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Define the idx which represents the last resource. Default is # of resources being summarized + first - 1.',
              'area_trans' => '',
            ),
            'tplFirst' => 
            array (
              'name' => 'tplFirst',
              'desc' => 'pdotools_prop_tplFirst',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Name of a chunk serving as resource template for the first resource.',
              'area_trans' => '',
            ),
            'tplLast' => 
            array (
              'name' => 'tplLast',
              'desc' => 'pdotools_prop_tplLast',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Name of a chunk serving as resource template for the last resource.',
              'area_trans' => '',
            ),
            'tplOdd' => 
            array (
              'name' => 'tplOdd',
              'desc' => 'pdotools_prop_tplOdd',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Name of a chunk serving as resource template for resources with an odd idx value (see idx property).',
              'area_trans' => '',
            ),
            'tplWrapper' => 
            array (
              'name' => 'tplWrapper',
              'desc' => 'pdotools_prop_tplWrapper',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Name of a chunk serving as a wrapper template for the output. This does not work with toSeparatePlaceholders.',
              'area_trans' => '',
            ),
            'wrapIfEmpty' => 
            array (
              'name' => 'wrapIfEmpty',
              'desc' => 'pdotools_prop_wrapIfEmpty',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'If true, will output the wrapper specified in &tplWrapper even if the output is empty.',
              'area_trans' => '',
            ),
            'totalVar' => 
            array (
              'name' => 'totalVar',
              'desc' => 'pdotools_prop_totalVar',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'total',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Define the key of a placeholder set by getResources indicating the total number of Resources that would be selected not considering the limit value.',
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
            'tplCondition' => 
            array (
              'name' => 'tplCondition',
              'desc' => 'pdotools_prop_tplCondition',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'A condition to compare against the conditionalTpls property to map Resources to different tpls based on custom conditional logic.',
              'area_trans' => '',
            ),
            'tplOperator' => 
            array (
              'name' => 'tplOperator',
              'desc' => 'pdotools_prop_tplOperator',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'is equal to',
                  'value' => '==',
                  'name' => 'is equal to',
                ),
                1 => 
                array (
                  'text' => 'is not equal to',
                  'value' => '!=',
                  'name' => 'is not equal to',
                ),
                2 => 
                array (
                  'text' => 'less than',
                  'value' => '<',
                  'name' => 'less than',
                ),
                3 => 
                array (
                  'text' => 'less than or equal to',
                  'value' => '<=',
                  'name' => 'less than or equal to',
                ),
                4 => 
                array (
                  'text' => 'greater than or equal to',
                  'value' => '>=',
                  'name' => 'greater than or equal to',
                ),
                5 => 
                array (
                  'text' => 'is empty',
                  'value' => 'empty',
                  'name' => 'is empty',
                ),
                6 => 
                array (
                  'text' => 'is not empty',
                  'value' => '!empty',
                  'name' => 'is not empty',
                ),
                7 => 
                array (
                  'text' => 'is null',
                  'value' => 'null',
                  'name' => 'is null',
                ),
                8 => 
                array (
                  'text' => 'is in array',
                  'value' => 'inarray',
                  'name' => 'is in array',
                ),
                9 => 
                array (
                  'text' => 'is between',
                  'value' => 'between',
                  'name' => 'is between',
                ),
              ),
              'value' => '==',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'An optional operator to use for the tplCondition when comparing against the conditionalTpls operands. Default is == (equals).',
              'area_trans' => '',
            ),
            'conditionalTpls' => 
            array (
              'name' => 'conditionalTpls',
              'desc' => 'pdotools_prop_conditionalTpls',
              'type' => 'textarea',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'A JSON map of conditional operands and tpls to compare against the tplCondition property using the specified tplOperator.',
              'area_trans' => '',
            ),
            'select' => 
            array (
              'name' => 'select',
              'desc' => 'pdotools_prop_select',
              'type' => 'textarea',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Comma-separated list of columns for select from database. You can specify JSON string with array, for example {"modResource":"id,pagetitle,content"}.',
              'area_trans' => '',
            ),
            'toSeparatePlaceholders' => 
            array (
              'name' => 'toSeparatePlaceholders',
              'desc' => 'pdotools_prop_toSeparatePlaceholders',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'If set, will assign EACH result to a separate placeholder named by this param suffixed with a sequential number (starting from 0).',
              'area_trans' => '',
            ),
            'loadModels' => 
            array (
              'name' => 'loadModels',
              'desc' => 'pdotools_prop_loadModels',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Comma-separated list of 3rd party components that are needed for the query. For example: "&loadModels=`ms2gallery,msearch2`".',
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
            'useWeblinkUrl' => 
            array (
              'name' => 'useWeblinkUrl',
              'desc' => 'pdotools_prop_useWeblinkUrl',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'If WebLinks are used in the output, script will output the link specified in the WebLink instead of the normal MODX link. To use the standard display of WebLinks (like any other Resource) set this to 0.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdoresources.php',
          'content' => '/** @var array $scriptProperties */
if (isset($parents) && $parents === \'\') {
    $scriptProperties[\'parents\'] = $modx->resource->id;
}
if (!empty($returnIds)) {
    $scriptProperties[\'return\'] = \'ids\';
}

// Adding extra parameters into special place so we can put them in a results
/** @var modSnippet $snippet */
$additionalPlaceholders = $properties = array();
if (isset($this) && $this instanceof modSnippet) {
    $properties = $this->get(\'properties\');
}
elseif ($snippet = $modx->getObject(\'modSnippet\', array(\'name\' => \'pdoResources\'))) {
    $properties = $snippet->get(\'properties\');
}
if (!empty($properties)) {
    foreach ($scriptProperties as $k => $v) {
        if (!isset($properties[$k])) {
            $additionalPlaceholders[$k] = $v;
        }
    }
}
$scriptProperties[\'additionalPlaceholders\'] = $additionalPlaceholders;

/** @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
$path = $modx->getOption(\'pdofetch_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
if ($pdoClass = $modx->loadClass($fqn, $path, false, true)) {
    $pdoFetch = new $pdoClass($modx, $scriptProperties);
} else {
    return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');
$output = $pdoFetch->run();

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $log .= \'<pre class="pdoResourcesLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

// Return output
if (!empty($returnIds)) {
    $modx->setPlaceholder(\'pdoResources.log\', $log);
    if (!empty($toPlaceholder)) {
        $modx->setPlaceholder($toPlaceholder, $output);
    } else {
        return $output;
    }
} elseif (!empty($toSeparatePlaceholders)) {
    $output[\'log\'] = $log;
    $modx->setPlaceholders($output, $toSeparatePlaceholders);
} else {
    $output .= $log;

    if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
        $output = $pdoFetch->getChunk($tplWrapper, array_merge($additionalPlaceholders, array(\'output\' => $output)),
            $pdoFetch->config[\'fastMode\']);
    }

    if (!empty($toPlaceholder)) {
        $modx->setPlaceholder($toPlaceholder, $output);
    } else {
        return $output;
    }
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
    ),
    'modTemplateVar' => 
    array (
      'postImage' => 
      array (
        'fields' => 
        array (
          'id' => 21,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'image',
          'name' => 'postImage',
          'caption' => 'Image for post',
          'description' => '',
          'editor_type' => 0,
          'category' => 19,
          'locked' => false,
          'elements' => '',
          'rank' => 0,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
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
      'category' => 
      array (
        'fields' => 
        array (
          'id' => 22,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'resourcelist',
          'name' => 'category',
          'caption' => 'Category',
          'description' => '',
          'editor_type' => 0,
          'category' => 19,
          'locked' => false,
          'elements' => '',
          'rank' => 0,
          'display' => 'text',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => '1',
            'showNone' => '1',
            'parents' => '15',
            'depth' => '1',
            'includeParent' => '1',
            'limitRelatedContext' => '0',
            'where' => '',
            'limit' => '0',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
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
    ),
  ),
);