<?php include 'header.php';?>
    
<?php include 'sidebar.php';?>

<?php include 'chat.php';?>
              
            <section id="content">
                <div class="container">
					<div class="card">
                        <div class="card-header ch-alt">
						<h2 class="project-title">RockyCreekDentalCare.com<small>JMGC Marketing</small></h2>
												<ul class="actions">
													<li class="dropdown">
														<a href="#" data-toggle="dropdown">
															<i class="zmdi zmdi-more-vert"></i>
														</a>
														
														<ul class="dropdown-menu dropdown-menu-right">
															<li>
																<a href="#">Edit Project</a>
															</li>
															<li>
																<a href="#">Archive Project</a>
															</li>
															<li>
																<a href="#">Delete Project</a>
															</li>
															<li>
																<a href="#">Manage Widget</a>
															</li>															
														</ul>
													</li>
												</ul>
                        </div>
                        
                        <div class="card-body card-padding">
                            <div role="tabpanel">
                                <ul class="tab-nav" role="tablist">
                                    <li role="presentation"><a href="project-details.php">Overview</a></li>
									<li role="presentation"><a href="project-proposals.php">Proposals</a></li>
                                    <li class="active"><a href="project-tasks.php">Task</a></li>
                                    <li role="presentation"><a href="project-tickets.php">Tickets</a></li>
                                    <li role="presentation"><a href="#">Work Report</a></li>
                                    <li role="presentation"><a href="#">Files</a></li>									
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card m-b-0" id="messages-main">
                                              
                        <div class="ms-menu">
                            
                            <div class="ms-block">
                                <div class="dropdown">
                                    <a class="btn btn-primary btn-block" href="#" data-toggle="dropdown">View Options <i class="caret m-l-5"></i></a>

                                    <ul class="dropdown-menu dm-icon w-100">
                                        <li><a href="#"><i class="zmdi zmdi-email"></i> Assigned to me</a></li>
                                        <li><a href="#"><i class="zmdi zmdi-account"></i> My Department</a></li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="listview lv-user m-t-20">
                                <div class="lv-item media active">
                                    <div class="media-body">
                                        <div class="lv-title">Custom Package</div>			
                                        <div class="m-t-5 "> <span class="badge f-10 bgm-green">Active</span> <span class="badge f-10">Web Design</span></div>
                                    </div>
                                </div>
                                
                                <div class="lv-item media">
                                    <div class="media-body">
                                        <div class="lv-title">VIP Website</div>
                                        <div class="m-t-5 "> <span class="badge f-10 bgm-orange">On-Hold</span> <span class="badge f-10">Web Design</span></div>
                                    </div>
                                </div>
                                
                                <div class="lv-item media">
                                    <div class="media-body">
                                        <div class="lv-title">Beginner Local Buzz</div>
                                        <div class="m-t-5 "> <span class="badge f-10 bgm-lightblue">Completed</span> <span class="badge f-10">Local Buzz</span></div>
                                    </div>
                                </div>

                                <div class="lv-item media">
                                    <div class="media-body">
                                        <div class="lv-title">6 SEO Advanced</div>
                                        <div class="m-t-5 "> <span class="badge f-10 bgm-red">Cancelled</span> <span class="badge f-10">SEO</span></div>
                                    </div>
                                </div>								
                                
                            </div>

                            
                        </div>
                        
						<div class="ms-body">
							<div class="listview lv-message">
									<div class="lv-header-alt clearfix bgm-bluegray m-b-10">
										<div id="ms-menu-trigger">
											<div class="line-wrap">
												<div class="line top"></div>
												<div class="line center"></div>
												<div class="line bottom"></div>
											</div>
										</div>

										<div class="lvh-label hidden-xs">
											<span class="c-black">Custom Package</span>
										</div>
										
										<ul class="lv-actions actions">
											<li>
												<a href="#">
													<i class="zmdi zmdi-delete"></i>
												</a>
											</li>
											<li class="dropdown">
												<a href="#" data-toggle="dropdown" aria-expanded="true">
													<i class="zmdi zmdi-sort"></i>
												</a>
									
												<ul class="dropdown-menu dropdown-menu-right">
													<li>
														<a href="#">Latest</a>
													</li>
													<li>
														<a href="#">Oldest</a>
													</li>
												</ul>
											</li>                             
											<li class="dropdown">
												<a href="#" data-toggle="dropdown" aria-expanded="true">
													<i class="zmdi zmdi-more-vert"></i>
												</a>
									
												<ul class="dropdown-menu dropdown-menu-right">
													<li>
														<a href="#">Refresh</a>
													</li>
													<li>
														<a href="#">Message Settings</a>
													</li>
												</ul>
											</li>
										</ul>
									</div>
									
	<!-- Right Body---><div class="lv-body">             
										<div class="col-sm-4">
											<div class="epc-item bgm-green">
												<div class="easy-pie main-pie" data-percent="25">
													<div class="percent">25</div>
													<div class="pie-title">Completed Task</div>
												</div>
											</div>
											<div class="mini-charts-item bgm-teal">
												<div class="clearfix">
													<div style="font-size: 60px;" class="m-0 m-r-20 m-l-20 pull-left c-white"> <i class="zmdi zmdi-calendar zmdi-hc-fw"></i></div>
													<div class="count">
														<small>Project Due in</small>
														<h2>25 day/s</h2>
													</div>
												</div>
											</div>										
										</div>	                        
										<div class="col-sm-8">

													<div class="card-header ch-alt">
														<h2>Details</h2>
													</div>
													<div class="pmbb-view m-20">
														<dl class="dl-horizontal">
															<dt>Project Owner</dt>
															<dd>Angelo Gatbonton</dd>
														</dl>
														<dl class="dl-horizontal">
															<dt>Project Assignees</dt>
															<dd>Ramon Almirez</dd>
														</dl>
														<dl class="dl-horizontal">
															<dt>Start Date</dt>
															<dd>June 23, 1990</dd>
														</dl>
														<dl class="dl-horizontal">
															<dt>Due Date</dt>
															<dd>June 23, 1990</dd>
														</dl>
														<dl class="dl-horizontal">
															<dt>Summary</dt>
															<dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus purus sapien, cursus et egestas at, volutpat sed dolor. Aliquam sollicitudin dui ac euismod hendrerit. Phasellus quis lobortis dolor. Sed massa massa, sagittis nec fermentum eu, volutpat non lectus. Nullam vitae tristique nunc. Aenean vel placerat augue. Aliquam pharetra mauris neque, sit amet egestas risus semper non. Proin egestas egestas ex sed gravida. Suspendisse commodo nisl sit amet risus volutpat volutpat</dd>
														</dl>													
													</div>

										</div>                                                                     
<!-- Right Body--->  	</div>
							</div>
						</div>
                    </div>

					<div class="row m-t-20 m-0">

						<div class="card">
										<div class="listview lv-bordered lv-lg">
												<div class="lv-header-alt clearfix">													
											
													<div class="col-sm-9 p-l-0">
														<button class="btn btn-primary waves-effect" data-toggle="modal" href="#preventClick">Create New Task</button>
													</div>

													<div class="col-sm-3 p-r-0" >
														<div class="btn-group pull-right">
															<button type="button" class="btn btn-default">Incomplete Tasks</button>
															<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
																<span class="caret"></span>
																<span class="sr-only">Split button dropdowns</span>
															</button>
															<ul class="dropdown-menu" role="menu">
																<li><a href="#">Completed Tasks</a></li>
																<li><a href="#">All Tasks</a></li>
															</ul>
														</div>
													</div>	
													
												</div>

					<!---- Begin -- New  Ticket Modal ---->							
												<div class="modal fade" id="preventClick" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
													<div class="modal-dialog modal-ticket">
														<div class="modal-content">

															<div class="card-header bgm-bluegray m-b-20">
																<h2>New Ticket</h2>
																<ul class="actions actions-alt">
																	<li class="dropdown">
																		<a href="#" data-toggle="dropdown" aria-expanded="false">
																			<i class="zmdi zmdi-more-vert"></i>
																		</a>
																		
																		<ul class="dropdown-menu dropdown-menu-right">
																			<li>
																				<a href="#">Load Ticket Template</a>
																			</li>
																			<li>
																				<a href="#">Load Canned Responses</a>
																			</li>
																		</ul>
																	</li>
																</ul>
															</div>
														
															<div class="modal-body">
																<div class="row m-b-10">
																	<div class="col-sm-12">               										
																		<div class="input-group">
																			<span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
																			<div class="fg-line">
																					<input type="text" class="form-control" placeholder="Ticket Summary">
																			</div>
																		</div>										
																	</div>
																</div>
																
																<div class="row m-b-20">
																	<div class="col-sm-4">               										
																		<div class="input-group">
																			<span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
																			<div class="fg-line">
																					<input type='text' class="form-control date-picker" placeholder="Due Date">
																			</div>
																		</div>										
																	</div>
																	<div class="col-sm-4">               										
																		<div class="input-group">
																			<span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
																			<div class="fg-line">
																					<div class="select">
																						<select class="form-control">
																							<option selected disabled>Department</option>
																							<option>Campaign Management</option>
																							<option>Sales</option>
																							<option>Billing</option>
																						</select>
																					</div>
																			</div>
																		</div>										
																	</div>
																	<div class="col-sm-4">               										
																		<div class="input-group">
																			<span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
																			<div class="fg-line">
																					<div class="select">
																						<select class="form-control">
																							<option selected disabled>Service Category</option>
																							<option>Web Design</option>
																							<option>SEO</option>
																							<option>PPC</option>
																						</select>
																					</div>
																			</div>
																		</div>										
																	</div>													
																</div>																																		
															
																<div class="row m-0">
																	<div class="html-editor"></div>
																</div>						

																<div class="row m-0">
																	<div class="col-sm-6 m-b-15">
																		<p class="f-500 c-black m-b-15">Virtual Group Assigned Users:</p>
																		<div class="fg-line col-sm-6"><select class="tag-select" multiple data-placeholder="Assignees">
																			<option value="Angelo Gatbonton">Angelo Gatbonton</option>
																			<option value="Ramon Almirez">Ramon Almirez</option>
																			<option value="Diane Sasota">Diane Sasota</option>
																			<option value="Roy Felipe">Roy Felipe</option>
																			<option value="Robert Racela">Robert Racela</option>
																		</select></div>
																	
																	</div>
																	<div class="col-sm-4 m-b-15">
																		<p class="f-500 c-black m-b-15">Visibility</p>
																		<div class="radio m-b-15">
																			<label>
																				<input type="radio" name="sample" value="">
																				<i class="input-helper"></i>
																				Virtual Group and Partners View
																			</label>
																		</div>
																		
																		<div class="radio m-b-15">
																			<label>
																				<input type="radio" name="sample" value="">
																				<i class="input-helper"></i>
																				Private - Virtual Group View Only
																			</label>
																		</div>
																	</div>												
																</div>
																
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-primary waves-effect">Submit</button>
																<button type="button" class="btn bgm-red waves-effect" data-dismiss="modal">Close</button>
															</div>
														</div>
													</div>
												</div>				
					<!---- End -- New  Ticket Modal ---->														
												
											<div class="lv-body">
													<div class="lv-item" >
														<div class="media">
															<div class="checkbox pull-left">
																<label>
																	<input type="checkbox" value="" checked>
																	<i class="input-helper"></i>
																</label>
															</div>															

															<div class="media-body">
																<div class="pull-right">
																	<span class="m-r-20"><img class="lv-img-sm m-l-5" src="img/profile-pics/1.jpg" alt=""><img class="lv-img-sm m-l-5" src="img/profile-pics/3.jpg" alt=""><img class="lv-img-sm m-l-5" src="img/profile-pics/2.jpg" alt=""></span>
																</div>																	
																<div class="lv-title m-b-5 f-14"><span class="badge pull-left m-r-10 text-uppercase">Web Design</span><a href="#" class="f-500">Scheduling a Launch Meeting</a></div>								
																<ul class="lv-attrs">
																	<li class="bgm-green b-0 c-white">100% Completed</li>												
																	<li>Date Created: September 17, 2015</li>
																	<li>Due Date: October 17, 2015</li>
																</ul>														
															</div>														
															<div class="lv-actions actions dropdown">
																<a href="#" data-toggle="dropdown" aria-expanded="true">
																	<i class="zmdi zmdi-more-vert"></i>
																</a>
													
																<ul class="dropdown-menu dropdown-menu-right">
																	<li>
																		<a href="#">Add Assignees</a>
																	</li>
																	<li>
																		<a href="#">Edit</a>
																	</li>
																	<li>
																		<a href="#">Delete</a>
																	</li>
																</ul>
															</div>															
														</div>
													</div>

													<div class="lv-item" >
														<div class="media">
															<div class="checkbox pull-left">
																<label>
																	<input type="checkbox" value="">
																	<i class="input-helper"></i>
																</label>
															</div>																
															<div class="media-body">
																<div class="pull-right">
																		<span class="m-r-20"><img class="lv-img-sm m-l-5" src="img/profile-pics/3.jpg" alt=""><img class="lv-img-sm m-l-5" src="img/profile-pics/2.jpg" alt=""></span>
																</div>															
																<div class="lv-title m-b-5 f-14"><span class="badge pull-left m-r-10 text-uppercase">SEO</span><a href="#" class="f-500">Build 1 is Ready for Review</a></div>								
																<ul class="lv-attrs">
																	<li class="bgm-orange b-0 c-white">50% Completed</li>
																	<li class="bgm-red b-0 c-white">65 Day/s Past Due</li>
																	<li>Date Created: 1st of December 2015</li>
																	<li>Due Date: 17th of January 2016</li>
																</ul>
															</div>
															<div class="lv-actions actions dropdown">
																<a href="#" data-toggle="dropdown" aria-expanded="true">
																	<i class="zmdi zmdi-more-vert"></i>
																</a>
													
																<ul class="dropdown-menu dropdown-menu-right">
																	
																	<li>
																		<a href="#">Edit</a>
																	</li>
																	<li>
																		<a href="#">Delete</a>
																	</li>
																</ul>
															</div>															
														</div>
													</div>
													<div class="lv-item" >
														<div class="media">
															<div class="pull-right">
																<img class="lv-img-sm" src="img/profile-pics/1.jpg" alt="">
															</div>
															<div class="media-body">
																<div class="lv-title m-b-5 f-14"><span class="badge pull-left m-r-10 text-uppercase">Web Design</span><a href="#" class="f-500">Scheduling a Launch Meeting</a><span class="badge pull-right">Awaiting Feedback</span></div>								
																<ul class="lv-attrs">
																	<li>#78954</li>
																	<li>Date Created: 17th of September 2015</li>
																	<li>Due Date: 17th of October 2015</li>
																	<li>65 Day/s Past Due</li>
																</ul>
															</div>
														</div>
													</div>

													<div class="lv-item" >
														<div class="media">
															<div class="pull-right">
																<img class="lv-img-sm" src="img/profile-pics/2.jpg" alt="">
															</div>
															<div class="media-body">
																<div class="lv-title m-b-5 f-14"><span class="badge pull-left m-r-10 text-uppercase">SEO</span><a href="#" class="f-500">Build 1 is Ready for Review</a><span class="badge pull-right bgm-red">Requires Feedback</span></div>								
																<ul class="lv-attrs">
																	<li>#78954</li>
																	<li>Date Created: 1st of December 2015</li>
																	<li>Due Date: 17th of January 2016</li>
																</ul>
															</div>
														</div>
													</div>
											</div>
											
											<ul class="pagination lv-pagination">
												<li>
													<a href="#" aria-label="Previous">
														<i class="zmdi zmdi-chevron-left"></i>
													</a>
												</li>
												<li class="active"><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
												<li><a href="#">4</a></li>
												<li><a href="#">5</a></li>
												<li>
													<a href="#" aria-label="Next">
														<i class="zmdi zmdi-chevron-right"></i>
													</a>
												</li>
											</ul>
										</div>
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
        <script src="vendors/sparklines/jquery.sparkline.min.js"></script>
        <script src="vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>		
        
        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
            <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->
        
        <script src="js/charts.js"></script>		
        <script src="js/functions.js"></script>
        <script src="js/demo.js"></script>
        
    
    </body>

<!-- Mirrored from 192.185.228.226/projects/ma/1-5-1/jquery/messages.html by HTTrack Website Copier/3.x [XR&CO'2013], Tue, 13 Oct 2015 04:03:20 GMT -->
</html>