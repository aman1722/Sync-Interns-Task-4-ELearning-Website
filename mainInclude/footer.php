
    <!-- small footer start  -->

    <footer class="container-fluid bg-dark text-center p-2" style="height: 4rem; ">
        <small class="text-white" >Copyright &copy; 2023 || Designed By Minal Chaudhari <a href="#login" data-toggle="modal" data-target="#adminLoginModalCenter">Admin Login</a> </small>
    </footer>
    <!-- smalll footer end  -->




    <!-- student regisration start  -->

    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="stuRegModalCenter" tabindex="-1" aria-labelledby="exampstuRegModalCenter" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampstuRegModalCenter">Student Regisration</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">


        <!-- student form regisration start -->
        <?php 
        include('studentRegistration.php');
        ?>
        <!-- student form regisration end -->
            



        </div>
        <div class="modal-footer">
            <span id="successMsg"></span>

            <button type="button" class="btn btn-primary" onclick="addStu()" id="signup">Sign Up</button>

            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            
        </div>
        </div>
    </div>
    </div>

    <!-- student registration end  -->





     
    <!-- student login start    -->

    <div class="modal fade" id="stuLoginModalCenter" tabindex="-1" aria-labelledby="stuLoginModalCenter" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="stuLoginModalCenter">Student Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">



            <form id="stuLoginForm">
                
                <div class="form-group">
                    <i class="fas fa-envelope"></i>

                    <label for="stuLogemail" class="pl-2 font-weight-bold">Email</label>

                    <input type="email" class="form-control" placeholder="Email" name="stuLogemail" id="stuLogemail">

                </div>

                <div class="form-group">
                    <i class="fas fa-key"></i>

                    <label for="stuLogpass" class="pl-2 font-weight-bold">Password</label>

                    <input type="password" class="form-control" placeholder="Password" name="stuLogpass" id="stuLogpass">

                    
                </div>
                
                
            </form>



        </div>
        <div class="modal-footer">

            <small id="statusLogMsg"></small>

            <button type="button" class="btn btn-primary" id="stuLoginBtn"
            onclick="checkStuLogin()">Login</button>

            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            
        </div>
        </div>
    </div>
    </div>
    <!-- student login end  -->







    <!-- admin login start    -->

        <div class="modal fade" id="adminLoginModalCenter" tabindex="-1" aria-labelledby="sadminLoginModalCenter" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="adminLoginModalCenter">Admin Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">



            <form id="adminLoginForm">
                
                <div class="form-group">
                    <i class="fas fa-envelope" for="adminLogemail"></i>

                    <label for="adminLogemail" class="pl-2 font-weight-bold">Email</label>

                    <input type="email" class="form-control" placeholder="Email" name="adminLogemail" id="adminLogemail">

                </div>

                <div class="form-group">
                    <i class="fas fa-key"></i>

                    <label for="adminLogpass" class="pl-2 font-weight-bold">Password</label>

                    <input type="password" class="form-control" placeholder="Password" name="adminLogpass" id="adminLogpass">

                    
                </div>
                
                
            </form>



        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="adminLoginBtn" onclick="checkAdminLogin()">Login</button>

            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            
        </div>
        </div>
    </div>
    </div>
    <!-- admin login end  -->
















    


    <!-- jquery and bootstrpap javascript  -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


    <!-- font awesome js  -->
    <script src="js/all.min.js"></script>


     <!--student ajax request js  -->
    <script type="text/javascript" src="js/ajaxrequest.js"></script>


    <!--admin ajax request js  -->
    <script type="text/javascript" src="js/adminajaxrequest.js"></script>
</body>
</html>