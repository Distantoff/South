<!-- Single Comment Area -->
<li class="single_comment_area ticket-comment[[+comment_new]]" id="comment-[[+id]]" data-parent="[[+parent]]" data-newparent="[[+new_parent]]" data-id="[[+id]]">
    <div class="comment-wrapper d-flex">
        <!-- Comment Meta -->
        <div class="comment-author">
            <img src="[[+avatar]]" alt=""/>
        </div>
        <!-- Comment Content -->
        <div class="comment-content">
            <div class="comment-meta">
                <a href="[[+url]]#comment-[[+id]]" class="comment-author-name">[[+fullname]]</a> |
                <a href="#" class="comment-date">[[+date_ago]]</a> |  
                <span class="comment-reply">
                    <a href="#" class="comment-reply reply">Reply</a>
                </span>
            </div>
            <p>[[+text]]</p>
        </div>
    </div>
    <ol class="comments-list children">[[+children]]</ol>
</li>

