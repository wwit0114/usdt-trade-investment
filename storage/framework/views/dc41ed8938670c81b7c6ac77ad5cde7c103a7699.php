
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Contact Us</h3>
            <div class="card-options">
            </div>
        </div>
        <div class="card-body">
            <form method="post">
                <?php echo csrf_field(); ?>
                <?php if(!isset($recipients)): ?>
                    <div class="form-group">
                        <h3>Select Clubs</h3>
                        <div class="selectgroup selectgroup-pills">
                       
                        </div>
                    </div>
                       <div class="form-group">
                        <label class="form-label">Subject</label>
                        <input type="text" class="form-control" name="subject"
                               placeholder="Well, she turned me into a newt.">
                    </div>
                    <label>Body</label>
                    <textarea rows="30" id="mail" name="body"></textarea>
                    <div class="mt-6">
                        <button class="btn btn-primary float-right ml-2">Send</button>
                    </div>
                <?php else: ?>
                    <div class="form-group">
                        <label class="form-label">Subject</label><br>
                        <input type="text" class="form-control" name="subject"
                               placeholder="Well, she turned me into a newt."><br>
                    </div>
                    <label>Body</label><br>
                    <textarea rows="10" cols="100" id="" style="
    width: 100%;
" name="body"></textarea>
                    <div class="mt-6">
                        <button class="btn btn-primary float-right ml-2">Send</button>
                    </div>
                <?php endif; ?>
            </form>
        </div>
    </div>
<?php /**PATH /home/paulsclub/public_html/my-passive-income.net/resources/views/client/mailbox.blade.php ENDPATH**/ ?>