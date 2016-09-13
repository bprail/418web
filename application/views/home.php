
<div class="home_container">

<div class="home_title">Parallel Computer Architecture and Programming <span style="font-size: 12pt;">(CMU 15-418/618)</span> </div>

<!--
<div class="bold_text colored_text">

<p style="font-size: 14pt;">NOTE TO STUDENTS ON THE SPRING 2016 WAITLIST:</p>

<p>We are excited that so many students are interested in 418/618, but
unfortunately we are not going to be able to accommodate all
students.</p>

<p style="font-size: 14pt;">YOUR ORDER ON THE WAITLIST IN SIO DOES NOT MATTER.</p>

<p>After handling special requests and students with a particular need
to take 418/618 (please come talk to us if you're one of those folks),
it is the instructors' policy to clear the waitlist in the order of
students that hand in "A-quality" implementations of assignment 1
prior to the course add deadline (the end of the second week of
class).  
</div>
-->

<p style="padding-bottom: .15em"> From smart phones, to multi-core
CPUs and GPUs, to the world's largest supercomputers and web sites,
parallel processing is ubiquitous in modern computing. The goal of
this course is to provide a deep understanding of the fundamental
principles and engineering trade-offs involved in designing modern
parallel computing systems as well as to teach parallel programming
techniques necessary to effectively utilize these machines.  Because
writing good parallel programs requires an understanding of key
machine performance characteristics, this course will cover both
parallel hardware and software design.  </p>

<div class="overview_main_item overview_ruled_element">Basic Info</div>

<div style="padding-bottom: 15px;">
<div>TIME 9:00-10:20am</div>
<div>LOCATION GHC 4307</div>
<div>Instructors: <a href="http://www.cs.cmu.edu/~tcm/">Todd Mowry</a> and <a href="http://www.cs.cmu.edu/~bpr/">Brian Railing</a></div>
<div style="padding-top:1em;">See the <a href="<?php echo site_url('courseinfo'); ?>">course info</a> page for more info on policies and logistics.</div>
</div>

<div class="overview_main_item overview_ruled_element">Fall 2016 Schedule</div>

<table>

<?php

function lecture_def($date, $title, $link, $fmt='', $extras=array()) {
    return array('date' => $date,
                 'title' => $title,
                 'link' => $link,
                 'format' => $fmt,
                 'deadlines' => $extras);
}

/*
 * ======================================================================
 * =========== BEGIN LECTURES ARRAY =====================================
 * ======================================================================
 * 
 * Make a list of lectures here:
 *
 * Format of lecture_def() is:
 *     - Date of lecture (as a string)
 *     - Lecture Name
 *     - Url for lecture (If the lecture has been given, this is link to lecture summary page, else it's just '')
 *     - optional formatting options (only 'bold' is supported)
 *     - Array of sublines (often used for due dates)
 *
 * Here are some examples:
 * 
 * A lecture with a url:
 *    lecture_def('Jan 12', 'Why Parallelism?', lecture_url('whyparallelism'))
 * 
 * A lecture with no url since the lecture has not been given yet:
 *    lecture_def('Jan 12', 'Why Parallelism?', '', 'bold')
 *
 * More complicated:
 *
 * A lecture with multiple assignment due dates on the same day:
 *    lecture_def('Jan 21', 'Parallel Programming Models and their Corresponding HW/SW Implementations', lecture_url('progmodels'), '',
 *                array('Quiz 1 due (on Thu Jan 22)', 'Assignment 1 due (on Fri Jan 23)') )
 *
 * =======================================================================
 */

$lectures = array(

  lecture_def('Aug 29', 'Why Parallelism?', lecture_url('whyparallelism'), '', array('Syllabus', "Parallelism Demos")),

  lecture_def('Aug 31', 'Modern Multi-Core Processor', lecture_url('basicarch'), '', array('Assignment 1 Out - Sep 1')),

  lecture_def('Sep 2', 'Parallel Programming Models', lecture_url('progmodels'), 'bold'),
    
  lecture_def('Sep 5', 'No Class (Labor Day)', '', 'bold'),
  
  lecture_def('Sep 7', 'Parallel Programming Basics', lecture_url('progbasics'), 'bold'),
  
  lecture_def('Sep 9', 'Performance Optimization Part 1: Work Distribution and Scheduling', lecture_url('progperf1'), 'bold'),
  
  lecture_def('Sep 12', 'Performance Optimization Part 2: Locality, Communication, and Contention', lecture_url('progperf2'), 'bold', array('Assignment 1 Due')),
  
  lecture_def('Sep 14', 'GPU Architecture and CUDA Programming', '', 'bold', array("Assignment 2 Out")),
   
  lecture_def('Sep 16', 'Parallel Application Case Studies', '', 'bold') ,
  
  lecture_def('Sep 19', 'Workload-Driven Performance Evaluation', '', 'bold') ,
  
  lecture_def('Sep 21', 'Snooping-Based Cache Coherence', '', 'bold') ,
  
  lecture_def('Sep 23', 'Directory-Based Cache Coherence', '', 'bold') ,
  
  lecture_def('Sep 26', 'Snooping-Based Multiprocessor Design', '', 'bold', array('Assignment 2 Due', "Assignment 3 Out")),
  
  lecture_def('Sep 28', 'Memory Consistency', '', 'bold') ,
  
  lecture_def('Sep 30', 'Performance Monitoring Tools', '', 'bold') ,
  
  lecture_def('Oct 3', 'Scaling a Web Site', '', 'bold') ,
  
  lecture_def('Oct 5', 'Exam I', '', 'bold') ,
  
  lecture_def('Oct 7', 'Interconnection Networks', '', 'bold'),
  
  lecture_def('Oct 10', 'Implementing Synchronization', '', 'bold') ,
  
  lecture_def('Oct 12', 'Fine-Grained Sync, Lock-Free Programming', '', 'bold', array('Assignment 3 Due', "Assignment 4 Out")),
  
  lecture_def('Oct 14', 'Transactional Memory', '', 'bold') ,
  
  lecture_def('Oct 17', 'Heterogenous Paralelism, HW Specialization', '', 'bold') ,
  
  lecture_def('Oct 19', 'Earthquake Simulation Case Study', '', 'bold') ,
  
  lecture_def('Oct 21', 'No lecture: Fall Break', '', 'bold') ,
  
  lecture_def('Oct 24', 'Domain-Specific Parallel Programming', '', 'bold') ,
  
  lecture_def('Oct 26', 'Domain-Specific Programming on Graphs', '', 'bold', array('Assignment 4 Due')) ,
  
  lecture_def('Oct 28', 'Meeting to discuss project ideas', '', 'bold') ,
  
  lecture_def('Oct 31', 'Addressing the Memory Wall', '', 'bold', array('Project Proposal Due')) ,
  
  lecture_def('Nov 2', 'Parallel Deep Neural Networks', '', 'bold') ,
  
  lecture_def('Nov 4', 'Parallellizing the 3D Graphics Pipeline', '', 'bold') ,
  
  lecture_def('Nov 11', 'Exam II', '', 'bold') ,
  
  lecture_def('Nov 21', 'Project Milestone Meetings', '', 'bold', array('Project Milestone Due'))
  );


/*
 * ===================================================================
 * =========== END OF LECTURES ARRAY =================================
 * ===================================================================
 */


foreach ($lectures as $lecture)
{

?>

<tr>
<td class="schedule_date">
     <?php echo $lecture['date']; ?>
</td>

<td class="schedule_lecture">
     <div>
     <?php if (strlen($lecture['link']) > 0) { ?>

        <a href="<?php echo $lecture['link']; ?>"><?php echo $lecture['title']; ?></a>

     <?php } else { ?>

      <?php if ($lecture['format'] == 'bold') { ?>
           <span class="bold_text"><?php echo $lecture['title']; ?></span>
      <?php } else { ?>
        <?php echo $lecture['title']; ?>
     <?php } ?>

     <?php } ?>
     </div>

     <?php if (count($lecture['deadlines']) > 0) {
        foreach($lecture['deadlines'] as $deadline) { ?>
     <div class="small_text colored_text">
     <?php echo $deadline; ?>
     </div>
     <?php } } ?>

</td>

</tr>

<?php
}
?>

</table>

<div class="overview_main_item overview_ruled_element">Assignments and Projects</div>

<table>
<tr>
    <td class="schedule_date">Sep 1</td><td class="schedule_lecture"><a href="<?php echo article_url('3'); ?>">Assignment 1: Analyzing Program Performance on a Multi-Core CPU</a></td>
</tr>
<tr>
    <td class="schedule_date">weekly</td><td class="schedule_lecture"><a href="<?php echo article_url('1'); ?>">Guidelines and Tips for Making Good Lecture Comments</a></td>
</tr>


</table>

<div class="overview_main_item overview_ruled_element">Acknowledgments</div>

<p> Special thanks to the <a href="http://www.intel.com">Intel
Corporation</a>, the <a href="http://www.nvidia.com">NVIDIA
Corporation</a>, and to <a href="http://www.dell.com">DELL</a> for
equipment donations and/or financial support for course development.
<a href="http://www.cs.cmu.edu/~kayvonf/">Kayvon</a> has extended  the
original version of 15-418 and the course follows his vision. 
Thanks to Matt Pharr for technical assistance
with ISPC. Alex Reece, Manish Burman, and Cary Yang developed the
course web site.  </p>

<div>&nbsp;</div>
<div>&nbsp;</div>

</div>  <!-- end of home_container -->
