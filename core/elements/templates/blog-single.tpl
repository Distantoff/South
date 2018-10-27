{extends 'file:templates/layout.tpl'}
{block 'main'}
{include 'file:chunks/base/breadcrumbs.tpl'}
<!-- ##### Blog Area Start ##### -->
<section class="blog-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
            
                <div class="single-blog-area">
                    <!-- Post Thumbnail -->
                    <div class="blog-post-thumbnail">
                        <img src="[[*postImage]]" alt="">
                    </div>
                    <!-- Post Content -->
                    <div class="post-content">
                        <!-- Date -->
                        <div class="post-date">
                            <a href="#">[[*publishedon:date=`%d %m %Y`]]</a>
                        </div>
                        <!-- Headline -->
                        <a href="/" class="headline">[[*pagetitle]]</a>
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <p>By [[*createdby:userinfo=`username`*]]</p>
                        </div>
                        [[*content]]
                    </div>
                </div>
                [[!TicketComments?
                &allowGuest=`1`
                &enableCaptcha=`0`
                &tplCommentFormGuest=`@FILE chunks/comments/commentsForm.tpl`
                &tplCommentGuest=`@FILE chunks/comments/comment.tpl`
                &tplCommentAuth=`@FILE chunks/comments/comment.tpl`
                &tplComments=`@FILE chunks/comments/commentsWrapper.tpl`
                &gravatarSize=`70`
                ]]
            </div>
            {include 'file:chunks/base/sidebar.tpl'}
        </div>
    </div>
</section>
<!-- ##### Blog Area End ##### -->
{/block}