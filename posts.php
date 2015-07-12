<?php include 'header.php';?>

      <div class="container">
          
          <?php include 'profile-sidebar.php';?>

            <div class="col-md-8">
              <article>
                <header><h2>Article 1</h2></header>
                <footer><small>This article was posted on 11/07/2015</small></footer>
              
                <div class="lead">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. <a href="article.php">Read More</a>
                </div>
                <footer>
                  <span class="label label-default">Tag</span>
                  <span class="label label-default">Another Tag</span>
                </footer>
                <hr>
              </article>
               <article>
                <header><h2>Article 2</h2></header>
                <footer><small>This article was posted on 11/07/2015</small></footer>
              
                <div class="lead">
                    Will make this dynamic later with node.js <a href="#">Read More</a>
                </div>
                <footer>
                  <span class="label label-default">Tag</span>
                  <span class="label label-default">Another Tag</span>
                </footer>
                <hr>
              </article>

              <nav>
                <ul class="pagination">
                  <li>
                    <a href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li>
                    <a href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
      </div>

<?php include 'footer.php';?>

