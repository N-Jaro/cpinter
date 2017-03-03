<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cpinter
 */

get_header(); ?>
<div class="page-hero container-fluid">
	<div class="row">
		<div class="overlay container-fluid">
			<div class="container">
				<div class="text">
					<h1><strong>Ph.D.</strong> in COMPUTER ENGINEERING</h1>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="content container-fluid">
	<div class="degree container">
		<div class="row">
			<div class="col-sm-4 col-md-3 col-lg-3">
				<div class=" left row">
					<ul id="left-nav">
						<li>
							<a class="menu-btn current" onclick="currentSlide(1);">Program Overview</a>
						</li>
						<li>
							<a class="menu-btn" onclick="currentSlide(2);">Program Structure</a>
						</li>
						<!--<li>
							<a class="menu-btn" onclick="currentSlide(3);">Application Requirements</a>
						</li>-->
						<li>
							<a class="menu-btn" onclick="currentSlide(3);">Fees</a>
						</li>
					</ul>

					<div class="row text-center">
						<a class="btn btn-default" href="<?php echo esc_url( home_url('/application/') ); ?>">HOW TO APPLY</a>
						</div>
					</div>
				</div>

				<div class="right col-sm-8 col-md-9 col-lg-9">

					<div class="mySlides row">
						<div class="col-xs-12">
							<h2 class="section-title">PROGRAM OVERVIEW</h2>
							<p>The Doctoral Program in Computer Engineering is a research-based curriculum with dissertation to investigate areas in computer engineering. Students will be equiped with both theoretical background in computer engineering as well as deep research skills to become competent researchers. Our research supervisors are active in the <a href="<?php echo get_post_type_archive_link( 'academic_staff' ); ?>">fields</a> of Data Science, Cloud Computing, Internet of Things, Computer Security, Robotics, Rehabilitation Engineering and Assistive Technology, Embedded Systems, Bioinformatics, Multimedia, Theory of Computation, and Software Engineering.
							 </p>

							 <p>Through our collaborations, students will have opportunities to conduct research with partnered universities around the world.</p>

							<p></p>

							<h3 class="sub-title">Key Information</h3>
							<p><strong>Degree:</strong> Doctor of Philosophy in Computer Engineering</p>
							<p><strong>Program plan:</strong>
								<ul>
									<li><strong>Plan 2.1 (program code 2696) :</strong> for applicants with a master’s degree</li>
									<li><strong>Plan 2.2 (program code 2697) :</strong> for applicants with a bachelor’s degree </li>
								</ul>
							</p>
							<p><strong>Program length:</strong> 3 academic years (plan 2.1) or 5 academic years (plan 2.2)</p>
							<p><strong>Calendar:</strong> Semester system
								<ul>
									<li><u>First semester:</u> August to December</li>
									<li><u>Second semester:</u> January to May</li>
								</ul>
							</p>
							<p><strong>Qualification:</strong> 	
								<ul>
									<li><strong>Plan 2.1 :</strong> Master of Egineering in any discipline or Master of Science in Computer, Physics, Mathematics, or equivalence</li>
									<li><strong>Plan 2.2 :</strong> Bachelor of Engineering in any discipline with at least Second Class Honours</li>
								</ul>
							</p>
							<p><strong>Assessment:</strong> dissertation, and peer-reviewed publication</p>
							<p><strong>Language of instruction: </strong> English</p>
							<p><strong>Financial support:</strong> See <a href="<?php echo get_post_type_archive_link( 'scholarship_funding' ); ?>"> scholarships and fundings</a>.</p>
						</div>
					</div>

					<div class="mySlides row">
						<div class="col-xs-12">
							<h2 class="section-title">CURRICULUM STRUCTURE</h2>

							<h3 class="sub-title">Admission Plans</h3>

							<p>This program has two plans.<p>
							<ol>
								<li><strong>Plan 2.1 (program code: 2696)</strong> is the plan that focuses on both coursework and thesis and for applicants with a master's' degree. Program length is 3 academic years.</li>
								<li><strong>Plan 2.2 (program code: 2697)</strong> is the plan that focuses on both coursework and thesis and for applicants with a bachelor's degree. Program length is 5 academic years.</li>
							</ol>

							
							<p>Each plan has different organization as described below.</p>

							<p><strong>Plan 2.1</strong></p>
							<p>
								<ul>
									<li>Required non-credit courses (6 courses)</li>
									<li>Approved electives 6 credits</li>
									<li>Electives 6 credits</li>
									<li>Thesis 48 credits</li>
									<li><strong><u>Total 60 credits</u></strong></li>
								</ul>
							</p>
							<p><strong>Plan 2.2</strong></p>
							<p>
								<ul>
									<li>Required non-credit courses (6 courses)</li>
									<li>Approved electives 6 credits</li>
									<li>Electives 18 credits</li>
									<li>Thesis 48 credits</li>
									<li><strong><u>Total 72 credits</u></strong></li>
								</ul>
							</p>


							<h3 class="sub-title">Curriculum Detail</h3>

							<p>1. Required non-credit courses (S/U evaluation)</p>

							<table class="table table-condensed">
								<tr>
									<th width="130">code</th>
									<th>course name</th>
									<th width="70">Credit(s)</th>
								</tr>
								<tr>
									<td>2110716</td>
									<td class="text-left">Seminar I</td>
									<td>1</td>
								</tr>
								<tr>
									<td>2110717</td>
									<td class="text-left">Seminar II</td>
									<td>1</td>
								</tr>
								<tr>
									<td>2110718</td>
									<td class="text-left">Seminar III</td>
									<td>1</td>
								</tr>
								<tr>
									<td>2110719</td>
									<td class="text-left">Seminar IV</td>
									<td>1</td>
								</tr>
								<tr>
									<td>2110894</td>
									<td class="text-left">Doctoral Dissertation Seminar*</td>
									<td>1</td>
								</tr>
								<tr>
									<td>2110897</td>
									<td class="text-left">Qualifying Examination**</td>
									<td>1</td>
								</tr>
							</table>
							<p><small>* If student has taken all four seminar courses and still cannot graduate, he/she has to register for 2110894  (0 credit) every semester starting year 4.</small> </p>
							<p><small>** Student has to register and pass 2110897 within semester 4.<br><br></small></p>
							<p>2. Thesis 48 credits</p>

							<table class="table table-condensed">
								<tr>
									<th width="130">code</th>
									<th>course name</th>
									<th width="70">Credit(s)</th>
								</tr>
								<tr>
									<td>2110828</td>
									<td class="text-left">Dissertation</td>
									<td></td>
								</tr>
								
							</table>

							<p><small><strong>Remark:</strong> If student has taken 48 credits of 2110828 and still cannot graduate, he/she has to register for 2110828 (0 credit) every semester.<br><br></small></p>

							<p>3. Approved electives 6 credits (or 2 courses)</p>


							<table class="table table-condensed">
								<tr>
									<th width="130">code</th>
									<th>course name</th>
									<th width="70">Credit(s)</th>
								</tr>
								<tr>
									<td>2110711</td>
									<td class="text-left">Theory of Computation</td>
									<td>3</td>
								</tr>
								<tr>
									<td>2110712</td>
									<td class="text-left">Analysis of Algorithms</td>
									<td>3</td>
								</tr>
								<tr>
									<td>2110713</td>
									<td class="text-left">Optimization Methods</td>
									<td>3</td>
								</tr>
								<tr>
									<td>2110714</td>
									<td class="text-left">Digital Systems</td>
									<td>3</td>
								</tr>
								<tr>
									<td>2110730</td>
									<td class="text-left">Software Quality and Process Management</td>
									<td>3</td>
								</tr>
							</table>

							<p><small><strong>Remark:</strong> Student can take more than 6 credits of the approved electives and the extra courses taken can be counted as elective courses.<br><br></small> </p>

							<p>4. Electives 6 credits (or 2 courses) for plan 2.1 or 18 credits (or 6 courses) for plan 2.2 </p>

							<table class="table table-condensed">
								<tr>
									<th width="130">code</th>
									<th>course name</th>
									<th width="70">Credit(s)</th>
								</tr>
								<tr>
									<td>2110721</td>
									<td class="text-left">Software Metrics</td>
									<td>3</td>
								</tr>
								<tr>
									<td>2110722</td>
									<td class="text-left">Software Project Management</td>
									<td>3</td>
								</tr>
								<tr>
									<td>2110723</td>
									<td class="text-left">Advanced Software Engineering Development</td>
									<td>3</td>
								</tr>
								<tr>
									<td>2110724</td>
									<td class="text-left">Software Testing and Quality Assurance</td>
									<td>3</td>
								</tr>
								<tr>
									<td>2110731</td>
									<td class="text-left">Distributed Systems</td>
									<td>3</td>
								</tr>
								<tr>
									<td>2110732</td>
									<td class="text-left">Parallel Computing</td>
									<td>3</td>
								</tr>
								<tr>
									<td>2110741</td>
									<td class="text-left">Robotics</td>
									<td>3</td>
								</tr>
								<tr>
									<td>2110742</td>
									<td class="text-left">Evolutionary Computation</td>
									<td>3</td>
								</tr>
								<tr>
									<td>2110743</td>
									<td class="text-left">Machine Learning</td>
									<td>3</td>
								</tr>
								<tr>
									<td>2110744</td>
									<td class="text-left">Machine Vision</td>
									<td>3</td>
								</tr>
								<tr>
									<td>2110745</td>
									<td class="text-left">Cryptography</td>
									<td>3</td>
								</tr>
								<tr>
									<td>2110751</td>
									<td class="text-left">Computer Aided Design in Digital Systems</td>
									<td>3</td>
								</tr>
								<tr>
									<td>2110752</td>
									<td class="text-left">Design for Testability</td>
									<td>3</td>
								</tr>
								<tr>
									<td>2110753</td>
									<td class="text-left">Asynchronous Design</td>
									<td>3</td>
								</tr>
								<tr>
									<td>2110771</td>
									<td class="text-left">Advanced Database Design</td>
									<td>3</td>
								</tr>
								<tr>
									<td>2110772</td>
									<td class="text-left">Multi-Dimensional Database Systems</td>
									<td>3</td>
								</tr>
								<tr>
									<td>2110773</td>
									<td class="text-left">Data Mining</td>
									<td>3</td>
								</tr>
								<tr>
									<td>2110779</td>
									<td class="text-left">Advanced Topics in Computer Graphics</td>
									<td>3</td>
								</tr>
								<tr>
									<td>2110792</td>
									<td class="text-left">Advanced Topics in Artificial Intelligence</td>
									<td>3</td>
								</tr>
								<tr>
									<td>2110793</td>
									<td class="text-left">Advanced Topics in Digital System***</td>
									<td>3</td>
								</tr>
								<tr>
									<td>2110794</td>
									<td class="text-left">Advanced Topics in Database Systems</td>
									<td>3</td>
								</tr>
								<tr>
									<td>2110795</td>
									<td class="text-left">Advanced Topics in Computer Network</td>
									<td>3</td>
								</tr>
								<tr>
									<td>2110781</td>
									<td class="text-left">Special Topics in Distributed Systems</td>
									<td>3</td>
								</tr>
							</table>

							<p><small>*** Student who does not have a Bachelor or Master of Engineering degree in Computer Engineering has to take 2110793.</small></p>
							<p><small><strong>Remark:</strong> Students can take other graduate-level courses not listed above, provided that they are pre-approved by thesis advisor and program committee.</small></p>

							<h3 class="sub-title">Study Plan</h3>

							<p>Student can design the study plan as one sees fit but all courses required by the program must be taken over the period of study. One possible example of the study plan is below.</p>

							<p><strong>Plan 2.1</strong></p>

							<table class="semester table table-condense">
								<tr>
									<td colspan="3" class="text-left red"><b>Semester 1</b></td>
									<td></td>
									<td colspan="3" class="text-left red"><b>Semester 2</b></td>
								</t>
								<tr>
									<th width="60">code</th>
									<th width="170">Course name</th>
									<th width="40">Credit(s)</th>
									<th width="20"></th>
									<th width="60">code</th>
									<th width="170">Course name</th>
									<th width="40">Credit(s)</th>
								</tr>
								<tr>
									<td>2110716</td>
									<td class="text-left">Seminar I</td>
									<td>-</td>
									<td></td>
									<td>2110717</td>
									<td class="text-left">Seminar II</td>
									<td>-</td>
								</tr>
								<tr>
									<td></td>
									<td class="text-left">Approved elective</td>
									<td>3</td>
									<td></td>
									<td></td>
									<td class="text-left">Approved elective</td>
									<td>3</td>
								</tr>
								<tr>
									<td></td>
									<td class="text-left">Elective</td>
									<td>3</td>
									<td></td>
									<td></td>
									<td class="text-left">Elective</td>
									<td>3</td>
								</tr>
								<tr>
									<td>2110828</td>
									<td class="text-left">Dissertation</td>
									<td>3</td>
									<td></td>
									<td>2110828</td>
									<td class="text-left">Dissertation</td>
									<td>3</td>
								</tr>
								<tr>
									<td colspan="3" class="text-right"><b>Total 9 credits</b></td>
									<td></td>
									<td colspan="3" class="text-right"><b>Total 9 credits</b></td>
								</tr>
							</table>

							<table class="semester table table-condense">
								<tr>
									<td colspan="3" class="text-left red"><b>Semester 3</b></td>
									<td></td>
									<td colspan="3" class="text-left red"><b>Semester 4</b></td>
								</t>
								<tr>
									<th width="60">code</th>
									<th width="170">Course name</th>
									<th width="40">Credit(s)</th>
									<th width="20"></th>
									<th width="60">code</th>
									<th width="170">Course name</th>
									<th width="40">Credit(s)</th>
								</tr>
								<tr>
									<td>2110718</td>
									<td class="text-left">Seminar III</td>
									<td>-</td>
									<td></td>
									<td>2110719</td>
									<td class="text-left">Seminar IV</td>
									<td>-</td>
								</tr>
								<tr>
									<td>2110828</td>
									<td class="text-left">Dissertation</td>
									<td>9</td>
									<td></td>
									<td>2110828</td>
									<td class="text-left">Dissertation</td>
									<td>9</td>
								</tr>
								<tr>
									<td colspan="3" class="text-right"><b>Total 9 credits</b></td>
									<td></td>
									<td colspan="3" class="text-right"><b>Total 9 credits</b></td>
								</tr>
							</table>

							<table class="semester table table-condense">
								<tr>
									<td colspan="3" class="text-left red"><b>Semester 5</b></td>
									<td></td>
									<td colspan="3" class="text-left red"><b>Semester 6</b></td>
								</t>
								<tr>
									<th width="60">code</th>
									<th width="170">Course name</th>
									<th width="40">Credit(s)</th>
									<th width="20"></th>
									<th width="60">code</th>
									<th width="170">Course name</th>
									<th width="40">Credit(s)</th>
								</tr>
								<tr>
									<td>2110828</td>
									<td class="text-left">Dissertation</td>
									<td>12</td>
									<td></td>
									<td>2110828</td>
									<td class="text-left">Dissertation</td>
									<td>12</td>
								</tr>
								<tr>
									<td colspan="3" class="text-right"><b>Total 12 credits</b></td>
									<td></td>
									<td colspan="3" class="text-right"><b>Total 12 credits</b></td>
								</tr>
							</table>


							<p><strong>Plan 2.2</strong></p>

								<table class="semester table table-condense">
								<tr>
									<td colspan="3" class="text-left red"><b>Semester 1</b></td>
									<td></td>
									<td colspan="3" class="text-left red"><b>Semester 2</b></td>
								</t>
								<tr>
									<th width="60">code</th>
									<th width="170">Course name</th>
									<th width="40">Credit(s)</th>
									<th width="20"></th>
									<th width="60">code</th>
									<th width="170">Course name</th>
									<th width="40">Credit(s)</th>
								</tr>
								<tr>
									<td>2110716</td>
									<td class="text-left">Seminar I</td>
									<td>-</td>
									<td></td>
									<td>2110717</td>
									<td class="text-left">Seminar II</td>
									<td>-</td>
								</tr>
								<tr>
									<td></td>
									<td class="text-left">Approved elective</td>
									<td>3</td>
									<td></td>
									<td></td>
									<td class="text-left">Approved elective</td>
									<td>3</td>
								</tr>
								<tr>
									<td></td>
									<td class="text-left">Elective</td>
									<td>6</td>
									<td></td>
									<td></td>
									<td class="text-left">Elective</td>
									<td>6</td>
								</tr>
								<tr>
									<td colspan="3" class="text-right"><b>Total 9 credits</b></td>
									<td></td>
									<td colspan="3" class="text-right"><b>Total 9 credits</b></td>
								</tr>
							</table>

							<table class="semester table table-condense">
								<tr>
									<td colspan="3" class="text-left red"><b>Semester 3</b></td>
									<td></td>
									<td colspan="3" class="text-left red"><b>Semester 4</b></td>
								</t>
								<tr>
									<th width="60">code</th>
									<th width="170">Course name</th>
									<th width="40">Credit(s)</th>
									<th width="20"></th>
									<th width="60">code</th>
									<th width="170">Course name</th>
									<th width="40">Credit(s)</th>
								</tr>
								<tr>
									<td>2110718</td>
									<td class="text-left">Seminar III</td>
									<td>-</td>
									<td></td>
									<td>2110719</td>
									<td class="text-left">Seminar IV</td>
									<td>-</td>
								</tr>
								<tr>
									<td></td>
									<td class="text-left">Elective </td>
									<td>6</td>
									<td></td>
									<td>2110828</td>
									<td class="text-left">Dissertation</td>
									<td>9</td>
								</tr>
								<tr>
									<td>2110828</td>
									<td class="text-left">Dissertation</td>
									<td>3</td>
									<td></td>
									<td></td>
									<td class="text-left"></td>
									<td></td>
								</tr>
								<tr>
									<td colspan="3" class="text-right"><b>Total 9 credits</b></td>
									<td></td>
									<td colspan="3" class="text-right"><b>Total 9 credits</b></td>
								</tr>
							</table>

							<table class="semester table table-condense">
								<tr>
									<td colspan="3" class="text-left red"><b>Semester 5</b></td>
									<td></td>
									<td colspan="3" class="text-left red"><b>Semester 6</b></td>
								</t>
								<tr>
									<th width="60">code</th>
									<th width="170">Course name</th>
									<th width="40">Credit(s)</th>
									<th width="20"></th>
									<th width="60">code</th>
									<th width="170">Course name</th>
									<th width="40">Credit(s)</th>
								</tr>
								<tr>
									<td>2110828</td>
									<td class="text-left">Dissertation</td>
									<td>6</td>
									<td></td>
									<td>2110828</td>
									<td class="text-left">Dissertation</td>
									<td>6</td>
								</tr>
								<tr>
									<td colspan="3" class="text-right"><b>Total 6 credits</b></td>
									<td></td>
									<td colspan="3" class="text-right"><b>Total 6 credits</b></td>
								</tr>
							</table>

							<table class="semester table table-condense">
								<tr>
									<td colspan="3" class="text-left red"><b>Semester 7</b></td>
									<td></td>
									<td colspan="3" class="text-left red"><b>Semester 8</b></td>
								</t>
								<tr>
									<th width="60">code</th>
									<th width="170">Course name</th>
									<th width="40">Credit(s)</th>
									<th width="20"></th>
									<th width="60">code</th>
									<th width="170">Course name</th>
									<th width="40">Credit(s)</th>
								</tr>
								<tr>
									<td>2110828</td>
									<td class="text-left">Dissertation</td>
									<td>6</td>
									<td></td>
									<td>2110828</td>
									<td class="text-left">Dissertation</td>
									<td>6</td>
								</tr>
								<tr>
									<td colspan="3" class="text-right"><b>Total 6 credits</b></td>
									<td></td>
									<td colspan="3" class="text-right"><b>Total 6 credits</b></td>
								</tr>
							</table>

							<table class="semester table table-condense">
								<tr>
									<td colspan="3" class="text-left red"><b>Semester 9</b></td>
									<td></td>
									<td colspan="3" class="text-left red"><b>Semester 10</b></td>
								</t>
								<tr>
									<th width="60">code</th>
									<th width="170">Course name</th>
									<th width="40">Credit(s)</th>
									<th width="20"></th>
									<th width="60">code</th>
									<th width="170">Course name</th>
									<th width="40">Credit(s)</th>
								</tr>
								<tr>
									<td>2110828</td>
									<td class="text-left">Dissertation</td>
									<td>6</td>
									<td></td>
									<td>2110828</td>
									<td class="text-left">Dissertation</td>
									<td>6</td>
								</tr>
								<tr>
									<td colspan="3" class="text-right"><b>Total 6 credits</b></td>
									<td></td>
									<td colspan="3" class="text-right"><b>Total 6 credits</b></td>
								</tr>
							</table>

						</div>
					</div>

					<div class="mySlides row">
						<div class="col-xs-12">
							<h2 class="section-title">FEES</h2>

							<h3 class="sub-title">Tuition Fees</h3>
							<p>Esimated Tuition Fee is 86,500 THB per semester.</p>
							<p><small>Reference: <a href="http://www.chula.ac.th/en/prospective-student/expenses">Chulalongkorn tuition fee</a></small><p>
							
							<h3 class="sub-title">Estimated Living Costs</h3>
							<p><strong>Accommodation: </strong> Approximately 15,000 THB/month (including electricity and water)</p>
							<p><strong>Books:</strong> Approximately 5,000 THB/semester</p>
							<p><strong>Other expenses:</strong> Approximately 10,000 THB/month</p>
							<p><small>Reference: <a href="http://www.chula.ac.th/en/prospective-student/expenses">Chulalongkorn estimated living costs</a> </small></p>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>


		<?php
//get_sidebar();
get_footer('degree');
