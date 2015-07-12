<?php include 'header.php';?>

      <div class="container">
          <div class="row">

            <?php include 'profile-sidebar.php';?>
            
              <div class="col-md-8">
                <article>
                    <h1>Lorum</h1>
                    <footer><small>This article was posted on 11/07/2015</small></footer>
              
                    <div class="lead">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    </div>
                    <footer>
                      <span class="label label-default">Tag</span>
                      <span class="label label-default">Another Tag</span>
                    </footer>
                </article>
                  <div id="comments">
                        <div class="row">
                          <div class="col-md-11 col-sm-10 col-xs-10">
                            <h1>Comments</h1>
                            <p>
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <footer>
                              <small><b>Peter Bennington</b> Commented on 11th July 2015</small>
                            </footer>
                            <hr>
                          </div>
                          <div class="col-md-1 col-sm-1 col-xs-1 comment-num"> 01</div>
                        </div>

                        <form class="form-comment">
                            <h3>Have your say</h3>
                            <p>
                              <label class="sr-only">Message</label>
                              <textarea class="form-control" placeholder="Your message here..." id="message" required autocomplete="false"></textarea>
                            </p>
                            <p>
                              <labelclass="sr-only">Full Name</label>
                              <input type="text" class="form-control" placeholder="John Smith" required>
                            </p>
                            <p>
                              <labelclass="sr-only">Email Address</label>
                              <input type="email" class="form-control" placeholder="email@example.com" required>
                            </p>
                            <p>
                              <input type="submit" class="btn btn-primary" value="Post Comment">
                            </p>
                        </form>

                  </div>
              </div>
          </div>
      </div>

<?php include 'footer.php';?>

