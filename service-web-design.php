<?php include 'header.php';?>

<?php include 'sidebar.php';?>
            
<?php include 'chat.php';?>
            
            <section id="content">
                <div class="container">
                    <div class="block-header">
                        <h2>Campaigns</h2>
                        
                        <ul class="actions">
                            <li>
                                <a href="#">
                                    <i class="zmdi zmdi-trending-up"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="zmdi zmdi-check-all"></i>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown">
                                    <i class="zmdi zmdi-more-vert"></i>
                                </a>
                                
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li>
                                        <a href="#">Refresh</a>
                                    </li>
                                    <li>
                                        <a href="#">Manage Widgets</a>
                                    </li>
                                    <li>
                                        <a href="#">Widgets Settings</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    
                    
                    <div class="card">
                        <div class="card-header">
                        </div>
                        
                        <div class="table-responsive">
                            <table id="data-table-selection" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th data-column-id="id" data-type="numeric" data-identifier="true">ID</th>
										<th data-column-id="company">Company</th>
                                        <th data-column-id="project">Project Name</th>
                                        <th data-column-id="received" data-order="desc">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
										<td>10251</td>
                                        <td><a href="#">JMGC Marketing</a></td>
                                        <td>RockyCreekDentalCare.com</td>
                                        <td>Active</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>10252</td>
										<td>BGG Local Marketing</td>
                                        <td><a href="project-details.php">JamesPettetDPM.com</a></td>
                                        <td>Active</td>
                                    </tr>
                                    <tr>
                                        <td>10239</td>
										<td>Local Lion Marketing</td>
                                        <td><a href="project-details.php">CrossFitThames.com</a></td>
                                        <td>Active</td>
                                    </tr>
                                    <tr>
                                        <td>10244</td>
										<td>BGG Local Marketing</td>
                                        <td><a href="project-details.php">App4USolutions.no</a></td>
                                        <td>Active</td>
                                    </tr>
                                    <tr>
                                        <td>10249</td>
										<td>My Site Launcher</td>
                                        <td><a href="project-details.php">MySiteLauncher.com</a></td>
                                        <td>Active</td>
                                    </tr>
                                    <tr>
                                        <td>10237</td>
										<td>Swift Local Marketing</td>
                                        <td><a href="project-details.php">SwiftLocalMarketing.com</a></td>
                                        <td>Active</td>
                                    </tr>
                                    <tr>
                                        <td>10242</td>
										<td>First Windsor Group</td>
                                        <td><a href="project-details.php">FirstWindsOrGroup.com</a></td>
                                        <td>Active</td>
                                    </tr>
                                    <tr>
                                        <td>10247</td>
										<td>Market My Dallas Business</td>
                                        <td><a href="project-details.php">5thGenerationContracting.com</a></td>
                                        <td>Active</td>
                                    </tr>
                                    <tr>
                                        <td>10252</td>
										<td>7th Vision Marketing and Consulting</td>
                                        <td><a href="project-details.php">Globalisos.com</a></td>
                                        <td>Active</td>
                                    </tr>
                                    <tr>
                                        <td>10236</td>
										<td>Roswil Mediar</td>
                                        <td><a href="project-details.php">MariosPizzaNJ.com</a></td>
                                        <td>Active</td>
                                    </tr>
                                    <tr>
                                        <td>10241</td>
										<td>JP Global Marketing</td>
                                        <td><a href="project-details.php">ClientOrder1.com</a></td>
                                        <td>Active</td>
                                    </tr>
                                    <tr>
                                        <td>10246</td>
										<td>Online Wealth Magic</td>
                                        <td><a href="project-details.php">AllStar-Rental.com</a></td>
                                        <td>Active</td>
                                    </tr>
                                    <tr>
                                        <td>10251</td>
										<td>Capital Network Solutions, Inc.</td>
                                        <td><a href="project-details.php">LoomisCabinetSales.com</a></td>
                                        <td>Active</td>
                                    </tr>
                                    <tr>
                                        <td>10235</td>
										<td>White Lotus Marketing & Consulting</td>
                                        <td><a href="project-details.php">WhiteLotusMarketing.net</a></td>
                                        <td>Active</td>
                                    </tr>
                                    <tr>
                                        <td>10240</td>
										<td>Digital Sales Development</td>
                                        <td><a href="project-details.php">Gabrieladror.com</a></td>
                                        <td>Active</td>
                                    </tr>
                                    <tr>
                                        <td>10245</td>
										<td>Elite Market Links</td>
                                        <td><a href="project-details.php">LibertyPestInc.com/a></td>
                                        <td>Active</td>
                                    </tr>
                                    <tr>
                                        <td>10250</td>
										<td>Right Coast Marketing, LLC</td>
                                        <td><a href="project-details.php">JSKBLaw.com</a></td>
                                        <td>Active</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    

                </div>
            </section>
        </section>
        
        <footer id="footer">
            Copyright &copy; 2015 Material Admin
            
            <ul class="f-menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Reports</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </footer>
        
        <!-- Older IE warning message -->
        <!--[if lt IE 9]>
            <div class="ie-warning">
                <h1 class="c-white">Warning!!</h1>
                <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
                <div class="iew-container">
                    <ul class="iew-download">
                        <li>
                            <a href="http://www.google.com/chrome/">
                                <img src="img/browsers/chrome.png" alt="">
                                <div>Chrome</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.mozilla.org/en-US/firefox/new/">
                                <img src="img/browsers/firefox.png" alt="">
                                <div>Firefox</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.opera.com">
                                <img src="img/browsers/opera.png" alt="">
                                <div>Opera</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.apple.com/safari/">
                                <img src="img/browsers/safari.png" alt="">
                                <div>Safari</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                                <img src="img/browsers/ie.png" alt="">
                                <div>IE (New)</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>Sorry for the inconvenience!</p>
            </div>   
        <![endif]-->

        <!-- Javascript Libraries -->
        <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        
        <script src="vendors/bower_components/jquery.nicescroll/jquery.nicescroll.min.js"></script>
        <script src="vendors/bower_components/Waves/dist/waves.min.js"></script>
        <script src="vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
        <script src="vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.min.js"></script>  
        <script src="vendors/bootgrid/jquery.bootgrid.min.js"></script>
        
        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
            <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->
        
        <script src="js/functions.js"></script>
        <script src="js/demo.js"></script>

        <!-- Data Table -->
        <script type="text/javascript">
            $(document).ready(function(){
                //Basic Example
                $("#data-table-basic").bootgrid({
                    css: {
                        icon: 'zmdi icon',
                        iconColumns: 'zmdi-view-module',
                        iconDown: 'zmdi-expand-more',
                        iconRefresh: 'zmdi-refresh',
                        iconUp: 'zmdi-expand-less'
                    },
                });
                
                //Selection
                $("#data-table-selection").bootgrid({
                    css: {
                        icon: 'zmdi icon',
                        iconColumns: 'zmdi-view-module',
                        iconDown: 'zmdi-expand-more',
                        iconRefresh: 'zmdi-refresh',
                        iconUp: 'zmdi-expand-less'
                    },
                    selection: true,
                    multiSelect: true,
                    rowSelect: true,
                    keepSelection: true
                });
                
                //Command Buttons
                $("#data-table-command").bootgrid({
                    css: {
                        icon: 'zmdi icon',
                        iconColumns: 'zmdi-view-module',
                        iconDown: 'zmdi-expand-more',
                        iconRefresh: 'zmdi-refresh',
                        iconUp: 'zmdi-expand-less'
                    },
                    formatters: {
                        "commands": function(column, row) {
                            return "<button type=\"button\" class=\"btn btn-icon command-edit\" data-row-id=\"" + row.id + "\"><span class=\"zmdi zmdi-edit\"></span></button> " + 
                                "<button type=\"button\" class=\"btn btn-icon command-delete\" data-row-id=\"" + row.id + "\"><span class=\"zmdi zmdi-delete\"></span></button>";
                        }
                    }
                });
            });
        </script>
    </body>
  
<!-- Mirrored from 192.185.228.226/projects/ma/1-5-1/jquery/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2013], Tue, 13 Oct 2015 04:00:08 GMT -->
</html>