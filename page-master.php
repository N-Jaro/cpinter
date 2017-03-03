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
					<h1><strong>M.Eng.</strong> in COMPUTER ENGINEERING</h1>
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
							<a class="menu-btn" onclick="currentSlide(2);">Curriculum Structure</a>
						</li>
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

							<p>The M.Eng. in Computer Engineering Program is a research-based curriculum with thesis suitable for students who seek to build their research skills under the guidance of our capable and friendly faculty members.</p>
							
							 <p>The recent <a href="<?php echo get_post_type_archive_link( 'academic_staff' ); ?>"> topics of interest </a> include Data Science, Cloud Computing, Internet of Things, Computer Security, Robotics, Rehabilitation Engineering and Assistive Technology, Embedded Systems, Bioinformatics, Multimedia, Theory of Computation, and Software Engineering.
							 </p>

							 <p>Through our collaborations, students will have opportunities to conduct research with partnered universities around the world.</p>

							<h3 class="sub-title">Key Information</h3>
							<p><strong>Degree:</strong> Master of Engineering in Computer Engineering</p>
							<p><strong>Program plan:</strong> 
							<ul>
								<li><strong>Plan A1 (program code 2694) :</strong> Computer Engineering graduates</li>
								<li><strong>Plan A2 (program code 2695) :</strong> Engineering graduates from any discipline</li>
							</ul>
							<p><strong>Program length:</strong> 2 academic years</p>
							<p><strong>Calendar:</strong> Semester system
								<ul>
									<li><u>First semester:</u> August to December</li>
									<li><u>Second semester:</u> January to May</li>
								</ul>
							</p>
							<p><strong>Qualification:</strong>
							<ul>
								<li><strong>Plan A1 :</strong> Bachelor of Engineering in Computer Engineering</li>
								<li><strong>Plan A2 :</strong> Bachelor of Engineering in any discipline</li>
							</ul>
							<p><strong>Assessment:</strong> Thesis and peer-reviewed publication for both plans (plus coursework for Plan A2)</p>
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
								<li><strong>Plan A1 (program code: 2694)</strong> is the research-only plan that focuses on thesis and is for Computer Engineering graduates. Program length is  2 academic years.</li>
								<li><strong>Plan A2 (program code: 2695)</strong> is the plan that focuses on both coursework and thesis and is for Engineering graduates. Program length is 2 academic years.</li>
							</ol>

							
							<p>Each plan has different organization as described below.</p>
							
							<p><strong>Plan A1</strong></p>
							<p>
							<ul>
								<li>Required non-credit courses (3 courses)</li>
								<li>Thesis 36 credits</li>
								<li><strong><u>Total of 36 credits</u></strong></li>
							</ul>
							</p>
							
							
							<p><strong>Plan A2</strong></p>
							<p>
							<ul>
								<li>Required non-credit courses (3 courses)</li>
								<li>Approved electives 6 credits</li>
								<li>Electives 6 credits</li>
								<li>Thesis 24 credits</li>
								<li><strong><u>Total of 36 credits</u></strong></li>
							</ul>
							</p>
							
							<h3 class="sub-title">Curriculum Details</h3>
						
							<p>1. Required non-credit courses (S/U evaluation)</p>
							<table class="table table-condensed">
								<tr>
									<th width="130">code</th>
									<th>course name</th>
									<th width="70">Credit(s)</th>
								</tr>
								<tr>
									<td>2110606</td>
									<td class="text-left">Research Methods in Computer Engineering</td>
									<td>3</td>
								</tr>
								<tr>
									<td>2110701</td>
									<td class="text-left">Seminar in Computer Engineering I</td>
									<td>1</td>
								</tr>
								<tr>
									<td>2110702</td>
									<td class="text-left">Seminar in Computer Engineering II</td>
									<td>1</td>
								</tr>
								</table>
							
							<p>2. Thesis</p>
							<table class="table table-condensed">
								<tr>
									<th width="130">code</th>
									<th>course name</th>
									<th width="70">Credit(s)</th>
								</tr>
								<tr>
									<td>2110814</td>
									<td class="text-left">Thesis (for plan A2)</td>
									<td>24</td>
								</tr>
								<tr>
									<td>2110816</td>
									<td class="text-left">Thesis (for plan A1)</td>
									<td>36</td>
								</tr>
							</table>

							<p>3. Approved electives: 6 credits for plan A2</p>
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
								<tr>
									<td>2110793</td>
									<td class="text-left">Advanced Topics in Digital Systems</td>
									<td>3</td>
								</tr>
							</table>

							<p>4. Electives: 6 credits for plan A2</p>
							<style type="text/css">
							.tg .tg-baqh{text-align:center;}
							.tg .tg-yw4l{text-align:left}
							</style>
							<table class="table tg table-condense">
							<tr>
									<th width="130">code</th>
									<th>course name</th>
									<th width="70">Credit(s)</th>
							</tr>
							<tr>
								<td class="tg-baqh">2110522</td>
								<td class="tg-yw4l">UNIX/Linux for Enterprise Environment</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110523</td>
								<td class="tg-yw4l">Enterprise Application Architecture</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110605</td>
								<td class="tg-yw4l">Computer Programs Structure</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110611</td>
								<td class="tg-yw4l">Information Processing and Computer System</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110612</td>
								<td class="tg-yw4l">System Programming</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110614</td>
								<td class="tg-yw4l">Programming Languages and Compilation</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110621</td>
								<td class="tg-yw4l">System Analysis and Design</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110622</td>
								<td class="tg-yw4l">Data Management</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110623</td>
								<td class="tg-yw4l">Software Requirements Engineering</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110624</td>
								<td class="tg-yw4l">Software Engineering</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110629</td>
								<td class="tg-yw4l">File Management</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110631</td>
								<td class="tg-yw4l">Operating System</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110632</td>
								<td class="tg-yw4l">Advanced Topics in Operating Systems</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110634</td>
								<td class="tg-yw4l">Software Design and Development</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110636</td>
								<td class="tg-yw4l">Performance Analysis and Evaluation</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110637</td>
								<td class="tg-yw4l">Large-Scale Information Systems</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110638</td>
								<td class="tg-yw4l">Object-Oriented Technology</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110639</td>
								<td class="tg-yw4l">Computer System Security</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110640</td>
								<td class="tg-yw4l">Information Security</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110642</td>
								<td class="tg-yw4l">Object-Oriented Software Engineering</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110644</td>
								<td class="tg-yw4l">Formal Software Specification</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110645</td>
								<td class="tg-yw4l">Software Engineering Methodology</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110646</td>
								<td class="tg-yw4l">User Interface Design</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110651</td>
								<td class="tg-yw4l">Digital Image Processing</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110654</td>
								<td class="tg-yw4l">Artificial Intelligence</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110657</td>
								<td class="tg-yw4l">Computer Simulation</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110661</td>
								<td class="tg-yw4l">Computer Network</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110663</td>
								<td class="tg-yw4l">Worldwide Network Infrastructure</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110664</td>
								<td class="tg-yw4l">Network Management</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110665</td>
								<td class="tg-yw4l">Computer Communication System and Standards</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110671</td>
								<td class="tg-yw4l">Database Management Systems</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110672</td>
								<td class="tg-yw4l">Data Modeling Techniques</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110673</td>
								<td class="tg-yw4l">Information Storage and Retrieval</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110674</td>
								<td class="tg-yw4l">Information Technology Center Management</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110678</td>
								<td class="tg-yw4l">Mobile Computing</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110681</td>
								<td class="tg-yw4l">Computer Algorithm</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110682</td>
								<td class="tg-yw4l">Embedded and Real-time Systems</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110683</td>
								<td class="tg-yw4l">Concurrent Processing</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110684</td>
								<td class="tg-yw4l">Information System Architecture</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110685</td>
								<td class="tg-yw4l">Computer Application in Enterprises</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110686</td>
								<td class="tg-yw4l">Enterprise Computing</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110694</td>
								<td class="tg-yw4l">Directed Studies in Computer Science</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110696</td>
								<td class="tg-yw4l">Advanced Topics in Computer Application</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110697</td>
								<td class="tg-yw4l">Special Topics in Computer Science I</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110698</td>
								<td class="tg-yw4l">Special Topics in Computer Science II</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110721</td>
								<td class="tg-yw4l">Software Metrics</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110722</td>
								<td class="tg-yw4l">Software Project Management</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110723</td>
								<td class="tg-yw4l">Advanced Software Engineering Development</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110724</td>
								<td class="tg-yw4l">Software Testing and Quality Assurance</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110725</td>
								<td class="tg-yw4l">Software Engineering Process and Improvement</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110726</td>
								<td class="tg-yw4l">Software Configuration Management</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110727</td>
								<td class="tg-yw4l">Software Evolution and Maintenance</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110731</td>
								<td class="tg-yw4l">Distributed Systems</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110732</td>
								<td class="tg-yw4l">Parallel Computing</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110741</td>
								<td class="tg-yw4l">Robotics</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110742</td>
								<td class="tg-yw4l">Evolutionary Computation</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110743</td>
								<td class="tg-yw4l">Machine Learning</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110744</td>
								<td class="tg-yw4l">Machine Vision</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110745</td>
								<td class="tg-yw4l">Cryptography</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110751</td>
								<td class="tg-yw4l">Computer Aided Design in Digital Systems</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110752</td>
								<td class="tg-yw4l">Design for Testability</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110753</td>
								<td class="tg-yw4l">Asynchronous Design</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110771</td>
								<td class="tg-yw4l">Advanced Database Design</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110772</td>
								<td class="tg-yw4l">Multi-Dimensional Database Systems</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110773</td>
								<td class="tg-yw4l">Data Mining</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110779</td>
								<td class="tg-yw4l">Advanced Topics in Computer Graphics</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110791</td>
								<td class="tg-yw4l">Advanced Topics in Software Engineering</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110792</td>
								<td class="tg-yw4l">Advanced Topics in Artificial Intelligence</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110794</td>
								<td class="tg-yw4l">Advanced Topics in Database Systems</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110795</td>
								<td class="tg-yw4l">Advanced Topics in Computer Network</td>
								<td class="tg-baqh">3</td>
							</tr>
							<tr>
								<td class="tg-baqh">2110781</td>
								<td class="tg-yw4l">Special Topics in Distributed Systems</td>
								<td class="tg-baqh">3</td>
							</tr>
							</table>
							
						
							<p><small><strong>Remark:</strong> Students can take other graduate-level courses not listed above, provided that they are pre-approved by thesis advisor and program committee.</small></p>
							
							<h3 class="sub-title">Study Plan Suggestion</h3>
							
							
							<p><strong>Plan A1</strong></p>

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
									<td>2110606</td>
									<td class="text-left">Research Methods in Computer Engineering</td>
									<td>-</td>
									<td></td>
									<td>2110702</td>
									<td class="text-left">Seminar in Computer Engineering II</td>
									<td>-</td>
								</tr>
								<tr>
									<td>2110701</td>
									<td class="text-left">Seminar in Computer Engineering I</td>
									<td>-</td>
									<td></td>
									<td>2110816</td>
									<td class="text-left">Thesis</td>
									<td>9</td>
								</tr>
								<tr>
									<td>2110816</td>
									<td class="text-left">Thesis</td>
									<td>9</td>
									<td></td>
									<td></td>
									<td></td>
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
									<td>2110816</td>
									<td class="text-left">Thesis</td>
									<td>9</td>
									<td></td>
									<td>2110816</td>
									<td class="text-left">Thesis</td>
									<td>9</td>
								</tr>
								<tr>
									<td colspan="3" class="text-right"><b>Total 9 credits</b></td>
									<td></td>
									<td colspan="3" class="text-right"><b>Total 9 credits</b></td>
								</tr>
							</table>

							<p><strong>Plan A2</strong></p>
							
							<p><u>Semester 1</u></p>
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
									<td>2110606</td>
									<td class="text-left">Research Methods in Computer Engineering</td>
									<td>-</td>
									<td></td>
									<td>2110702</td>
									<td class="text-left">Seminar in Computer Engineering II</td>
									<td>-</td>
								</tr>
								<tr>
									<td>2110701</td>
									<td class="text-left">Seminar in Computer Engineering I</td>
									<td>-</td>
									<td></td>
									<td></td>
									<td class="text-left">Elective</td>
									<td>3</td>
								</tr>
								<tr>
									<td></td>
									<td class="text-left">Approved elective</td>
									<td>6</td>
									<td></td>
									<td>2110814</td>
									<td class="text-left">Thesis</td>
									<td>6</td>
								</tr>
								<tr>
									<td></td>
									<td class="text-left">Elective</td>
									<td>3</td>
									<td></td>
									<td></td>
									<td></td>
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
									<td>2110814</td>
									<td class="text-left">Thesis</td>
									<td>9</td>
									<td></td>
									<td>2110814</td>
									<td class="text-left">Thesis</td>
									<td>9</td>
								</tr>
								<tr>
									<td colspan="3" class="text-right"><b>Total 9 credits</b></td>
									<td></td>
									<td colspan="3" class="text-right"><b>Total 9 credits</b></td>
								</tr>
							</table>
						</div>
					</div>

					<div class="mySlides row">
						<div class="col-xs-12">
							<h2 class="section-title">FEES</h2>

							<h3 class="sub-title">Tuition Fees</h3>
							<p>Esimated Tuition Fee is 86,500 THB per semester.</p>
							<p><small>Reference: <a href="http://www.chula.ac.th/en/prospective-student/expenses">Chulalongkorn tuition fee</a> </small><p>

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
