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
                    <div class="card m-b-0" id="task-main">
                                              
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
                        
						<div class="card" id="task-main">
							<div class="pm-overview c-overflow">
								<div class="pmo-pic">
									<div class="p-relative">
										<a href="#">
											<img class="img-responsive" src="img/profile-pics/profile-pic-2.jpg" alt=""> 
										</a>
										
										<div class="dropdown pmop-message">
											<a data-toggle="dropdown" href="#" class="btn bgm-white btn-float z-depth-1">
												<i class="zmdi zmdi-comment-text-alt"></i>
											</a>
											
											<div class="dropdown-menu">
												<textarea placeholder="Write something..."></textarea>
												
												<button class="btn bgm-green btn-icon"><i class="zmdi zmdi-mail-send"></i></button>
											</div>
										</div>
										
										<a href="#" class="pmop-edit">
											<i class="zmdi zmdi-camera"></i> <span class="hidden-xs">Update Profile Picture</span>
										</a>
									</div>
									
									
									<div class="pmo-stat">
										<h2 class="m-0 c-white">1562</h2>
										Total Connections
									</div>
								</div>
								
								<div class="pmo-block pmo-contact hidden-xs">
									<h2>Contact</h2>
									
									<ul>
										<li><i class="zmdi zmdi-phone"></i> 00971 12345678 9</li>
										<li><i class="zmdi zmdi-email"></i> malinda-h@gmail.com</li>
										<li><i class="zmdi zmdi-facebook-box"></i> malinda.hollaway</li>
										<li><i class="zmdi zmdi-twitter"></i> @malinda (twitter.com/malinda)</li>
										<li>
											<i class="zmdi zmdi-pin"></i>
											<address class="m-b-0">
												10098 ABC Towers, <br/>
												Dubai Silicon Oasis, Dubai, <br/>
												United Arab Emirates
											</address>
										</li>
									</ul>
								</div>
								
							</div>
							
							<div class="ms-body clearfix">
							   
								
								<div class="pmb-block">
									<div class="pmbb-header">
										<h2><i class="zmdi zmdi-equalizer m-r-5"></i> Summary</h2>
										
										<ul class="actions">
											<li class="dropdown">
												<a href="#" data-toggle="dropdown">
													<i class="zmdi zmdi-more-vert"></i>
												</a>
												
												<ul class="dropdown-menu dropdown-menu-right">
													<li>
														<a data-pmb-action="edit" href="#">Edit</a>
													</li>
												</ul>
											</li>
										</ul>
									</div>
									<div class="pmbb-body p-l-30">
										<div class="pmbb-view">
											Sed eu est vulputate, fringilla ligula ac, maximus arcu. Donec sed felis vel magna mattis ornare ut non turpis. Sed id arcu elit. Sed nec sagittis tortor. Mauris ante urna, ornare sit amet mollis eu, aliquet ac ligula. Nullam dolor metus, suscipit ac imperdiet nec, consectetur sed ex. Sed cursus porttitor leo.
										</div>
										
										<div class="pmbb-edit">
											<div class="fg-line">
												<textarea class="form-control" rows="5" placeholder="Summary...">Sed eu est vulputate, fringilla ligula ac, maximus arcu. Donec sed felis vel magna mattis ornare ut non turpis. Sed id arcu elit. Sed nec sagittis tortor. Mauris ante urna, ornare sit amet mollis eu, aliquet ac ligula. Nullam dolor metus, suscipit ac imperdiet nec, consectetur sed ex. Sed cursus porttitor leo.</textarea>
											</div>
											<div class="m-t-10">
												<button class="btn btn-primary btn-sm">Save</button>
												<button data-pmb-action="reset" class="btn btn-link btn-sm">Cancel</button>
											</div>
										</div>
									</div>
								</div>
								
								<div class="pmb-block">
									<div class="pmbb-header">
										<h2><i class="zmdi zmdi-account m-r-5"></i> Basic Information</h2>
										
										<ul class="actions">
											<li class="dropdown">
												<a href="#" data-toggle="dropdown">
													<i class="zmdi zmdi-more-vert"></i>
												</a>
												
												<ul class="dropdown-menu dropdown-menu-right">
													<li>
														<a data-pmb-action="edit" href="#">Edit</a>
													</li>
												</ul>
											</li>
										</ul>
									</div>
									<div class="pmbb-body p-l-30">
										<div class="pmbb-view">
											<dl class="dl-horizontal">
												<dt>Full Name</dt>
												<dd>Mallinda Hollaway</dd>
											</dl>
											<dl class="dl-horizontal">
												<dt>Gender</dt>
												<dd>Female</dd>
											</dl>
											<dl class="dl-horizontal">
												<dt>Birthday</dt>
												<dd>June 23, 1990</dd>
											</dl>
											<dl class="dl-horizontal">
												<dt>Martial Status</dt>
												<dd>Single</dd>
											</dl>
										</div>
										
										<div class="pmbb-edit">
											<dl class="dl-horizontal">
												<dt class="p-t-10">Full Name</dt>
												<dd>
													<div class="fg-line">
														<input type="text" class="form-control" placeholder="eg. Mallinda Hollaway">
													</div>
													
												</dd>
											</dl>
											<dl class="dl-horizontal">
												<dt class="p-t-10">Gender</dt>
												<dd>
													<div class="fg-line">
														<select class="form-control">
															<option>Male</option>
															<option>Female</option>
															<option>Other</option>
														</select>
													</div>
												</dd>
											</dl>
											<dl class="dl-horizontal">
												<dt class="p-t-10">Birthday</dt>
												<dd>
													<div class="dtp-container dropdown fg-line">
														<input type='text' class="form-control date-picker" data-toggle="dropdown" placeholder="Click here...">
													</div>
												</dd>
											</dl>
											<dl class="dl-horizontal">
												<dt class="p-t-10">Martial Status</dt>
												<dd>
													<div class="fg-line">
														<select class="form-control">
															<option>Single</option>
															<option>Married</option>
															<option>Other</option>
														</select>
													</div>
												</dd>
											</dl>
											
											<div class="m-t-30">
												<button class="btn btn-primary btn-sm">Save</button>
												<button data-pmb-action="reset" class="btn btn-link btn-sm">Cancel</button>
											</div>
										</div>
									</div>
								</div>
						   
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
        <script src="vendors/bower_components/moment/min/moment.min.js"></script>
        <script src="vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>        
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