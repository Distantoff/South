<!-- Leave A Comment -->
<div id="reply-block" class="leave-comment-area leave-reply mt-70 clearfix">
    <div class="comment-form">
        <h5>Leave a reply</h5>
        <!-- Comment Form -->
        <form action="" id="comment-form" method="post" class="well">
            <div id="comment-preview-placeholder"></div>
            <input type="hidden" name="thread" value="[[+thread]]"/>
            <input type="hidden" name="parent" value="0"/>
            <input type="hidden" name="id" value="0"/>

            <div class="form-group">
                <input type="text" name="name" value="[[+name]]" id="comment-name" class="form-control" placeholder="Name"/>
                <span class="error"></span>
            </div>

            <div class="form-group">
                <input type="text" name="email" value="[[+email]]" id="comment-email" class="form-control" placeholder="Email"/>
                <span class="error"></span>
            </div>

            <div class="form-group">
                <textarea name="text" id="comment-editor" cols="30" rows="10" class="form-control" placeholder="Message"></textarea>
            </div>

            <button type="submit" value="[[%ticket_comment_save]]" class="btn south-btn submit" title="Ctrl + Shift + Enter">Submit Reply</button>
			
        </form>
    </div>
</div>


