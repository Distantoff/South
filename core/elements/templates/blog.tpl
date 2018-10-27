{extends 'file:templates/layout.tpl'}
{block 'main'}
{include 'file:chunks/base/breadcrumbs.tpl'}
<!-- ##### Blog Area Start ##### -->
    <section class="south-blog-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                [[!pdoPage?
                &element=`pdoResources`
                &parents=`17,19`
                &limit=`2`
                &includeTVs=`postImage`
                &tvPrefix=``
                &tplPageWrapper=`@CODE:
                <nav aria-label="Page navigation">
                    <ul class="pagination">[[+prev]][[+pages]][[+next]]</ul>
                </nav>
                `
                &tplPage=`@INLINE <li class="page-item"><a href="[[+href]]" class="page-link">[[+pageNo]]</a></li>`
                &tplPageActive=`@INLINE <li class="active page-item"><a href="[[+href]]" class="page-link active">[[+pageNo]]</a></li>`
                &tplPagePrevEmpty=``
                &tplPageNextEmpty=``
                &tplPagePrev=``
                &tplPageNext=``
                &tpl=`@CODE: 
                    <!-- Single Blog Area -->
                    <div class="single-blog-area mb-50">
                        <!-- Post Thumbnail -->
                        <div class="blog-post-thumbnail">
                            <img src="[[+postImage]]" alt="">
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <!-- Date -->
                            <div class="post-date">
                                <a href="[[+uri]]">[[*publishedon:date=`%d %m %Y`]]</a>
                            </div>
                            <!-- Headline -->
                            <a href="[[+uri]]" class="headline">[[+pagetitle]]</a>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p>By [[*createdby:userinfo=`username`*]]</p>
                            </div>
                            <p>[[+introtext]]</p>
                            <!-- Read More btn -->
                            <a href="[[+uri]]" class="btn south-btn">Read More</a>
                        </div>
                    </div>
                `
                ]]
                </div>
                {include 'file:chunks/base/sidebar.tpl'}
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="south-pagination mt-100 d-flex">
                        [[!+page.nav]] 
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Blog Area End ##### -->


{/block}
