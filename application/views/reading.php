<?php

function make_url($first, $second) {
  return $first . '/' . $second;
}

?>


<div class="home_container">

<div class="home_title">Parallel Computer Architecture and Programming <span style="font-size: 12pt;">(CMU 15-418/618)</span> </div>


<p>This page contains lecture slides, videos, and recommended readings for the Fall 2016 offering of 15-418/618.

The full listing of lecture videos, recorded during the Spring 2016, is available on the Panopto site
<a href="https://scs.hosted.panopto.com/Panopto/Pages/Sessions/List.aspx#folderID=%22f62c2297-de88-4e63-aff2-06641fa25e98%22" target="_blank">here</a>.</p>

</p>


<div class="book_lecture">
     <div class="book_lecture_title">
     <a href="<?php echo lecture_url('whyparallelism'); ?>">Lecture 1:
     Why Parallelism</a></div>

     <div class="book_lecture_indent">

     <div class="resources">
     <div><a href="https://scs.hosted.panopto.com/Panopto/Pages/Viewer.aspx?id=d0795ff8-76aa-4e24-a7cc-e8126025720c" target="_blank">Watch the Spring Lecture</a></div>
     </div>


     <div>Further Reading:</div>
     <ul>
     <li><a href="http://queue.acm.org/detail.cfm?id=1095418" target="_blank">The Future of Microprocessors</a>. by K. Olukotun and L. Hammond, ACM Queue 2005</li>
     <li><a href="http://dl.acm.org/citation.cfm?id=621693" target="_blank">Power: A First-Class Architectural Design Constraint</a>. by Trevor Mudge IEEE Computer 2001</li>
     </ul>
     </div>
</div>

<div class="book_lecture">
     <div class="book_lecture_title">
     <a href="<?php echo lecture_url('basicarch'); ?>">Lecture 2:
     A Modern Multi-core Processor: Forms of Parallelism + Understanding Latency and BW</a></div>
     
     <div class="book_lecture_indent">
     <div class="resources">
     <div><a href="https://scs.hosted.panopto.com/Panopto/Pages/Viewer.aspx?id=66c4b4cc-5dbd-425c-87ed-5d0d217c20b3" target="_blank">Watch the Spring Lecture</a></div>
     </div>
</div>

<div class="book_lecture">
     <div class="book_lecture_title">
     <a href="<?php echo lecture_url('progmodels'); ?>">Lecture 3:
     Parallel Programming Abstractions (and their corresponding HW/SW implementations)</a></div>
     
     <div class="book_lecture_indent">
     <div class="resources">
     <div><a href="https://scs.hosted.panopto.com/Panopto/Pages/Viewer.aspx?id=1d93f5a8-d435-4e4a-8219-05536d53886a" target="_blank">Watch the Spring Lecture</a></div>
     </div>
</div>

<div class="book_lecture">
     <div class="book_lecture_title">
     <a href="<?php echo lecture_url('progbasics'); ?>">Lecture 4:
     Parallel Programming Basics</a></div>
     
     <div class="book_lecture_indent">
     <div class="resources">
     <div><a href="https://scs.hosted.panopto.com/Panopto/Pages/Viewer.aspx?id=55cb2ba2-10ad-40c3-8315-0c8598e64977" target="_blank">Watch the Spring Lecture</a></div>
     </div>
</div>

<div class="book_lecture">
     <div class="book_lecture_title">
     <a href="<?php echo lecture_url('progperf1'); ?>">Lecture 5:
      Performance Optimization Part 1: Work Distribution and Scheduling</a></div>
     
     <div class="book_lecture_indent">
     <div class="resources">
     <div><a href="https://scs.hosted.panopto.com/Panopto/Pages/Viewer.aspx?id=f0b01804-2bb2-418a-b436-e5446822ebf4" target="_blank">Watch the Spring Lecture</a></div>
     </div>
</div>

<div class="book_lecture">
     <div class="book_lecture_title">
     <a href="<?php echo lecture_url('progperf2'); ?>">Lecture 6:
      Performance Optimization Part II: Locality, Communication, and Contention</a></div>
     
     <div class="book_lecture_indent">
     <div class="resources">
     <div><a href="https://scs.hosted.panopto.com/Panopto/Pages/Viewer.aspx?id=6915770a-6986-45f9-a3a8-8978a5ff5465" target="_blank">Watch the Spring Lecture</a></div>
     </div>
</div>


<div class="book_lecture">
     <div class="book_lecture_title">
     <a href="<?php echo lecture_url('gpuarch'); ?>">Lecture 7:
      GPU Architecture and CUDA Programming</a></div>
     
     <div class="book_lecture_indent">
     <div class="resources">
     <div><a href="https://scs.hosted.panopto.com/Panopto/Pages/Viewer.aspx?id=c802ccf7-c8bc-4feb-83da-19ef17f1ee90" target="_blank">Watch the Spring Lecture</a></div>
     </div>
</div>

<div class="book_lecture">
     <div class="book_lecture_title">
     <a href="<?php echo lecture_url('casestudies'); ?>">Lecture 8:
      Parallel Programming Case Studies</a></div>
     
     <div class="book_lecture_indent">
     <div class="resources">
     <div><a href="https://scs.hosted.panopto.com/Panopto/Pages/Viewer.aspx?id=6772161b-61d8-4091-bba1-c95ef3360b85" target="_blank">Watch the Spring Lecture</a></div>
     </div>
</div>

<div class="book_lecture">
     <div class="book_lecture_title">
     <a href="<?php echo lecture_url('perfeval'); ?>">Lecture 9:
      Workload-Driven Performance Evaluation</a></div>
     
     <div class="book_lecture_indent">
     <div class="resources">
     <div><a href="https://scs.hosted.panopto.com/Panopto/Pages/Viewer.aspx?id=7dd2d111-09e4-44d6-b953-885fa679d3a1" target="_blank">Watch the Spring Lecture</a></div>
     </div>
</div>

<div class="book_lecture">
     <div class="book_lecture_title">
     <a href="<?php echo lecture_url('cachecoherence1'); ?>">Lecture 10:
      Snooping-Based Cache Coherence</a></div>
     
     <div class="book_lecture_indent">
     <div class="resources">
     <div><a href="https://scs.hosted.panopto.com/Panopto/Pages/Viewer.aspx?id=5481e0db-ded7-41af-9cff-3bc1ac3cb889" target="_blank">Watch the Spring Lecture</a></div>
     </div>
</div>


<div class="book_lecture">
     <div class="book_lecture_title">
     <a href="<?php echo lecture_url('directorycoherence'); ?>">Lecture 11:
      Directory-Based Cache Coherence</a></div>
     
     <div class="book_lecture_indent">
     <div class="resources">
     <div><a href="https://scs.hosted.panopto.com/Panopto/Pages/Viewer.aspx?id=36177ab3-22ce-4b11-bf06-eabedf306e26" target="_blank">Watch the Spring Lecture</a></div>
     </div>
</div>

<div class="book_lecture">
     <div class="book_lecture_title">
     <a href="<?php echo lecture_url('snoopimpl'); ?>">Lecture 12:
      A Basic Snooping-Based Multi-Processor Implementation</a></div>
     
     <div class="book_lecture_indent">
     <div class="resources">
     <div><a href="https://scs.hosted.panopto.com/Panopto/Pages/Viewer.aspx?id=ccef6fd3-916a-426a-b28e-2feec7cab663" target="_blank">Watch the Spring Lecture</a></div>
     </div>
</div>

<div class="book_lecture">
     <div class="book_lecture_title">
     <a href="<?php echo lecture_url('consistency'); ?>">Lecture 13:
      Memory Consistency</a></div>
     
     <div class="book_lecture_indent">
     <div class="resources">
     <div><a href="https://scs.hosted.panopto.com/Panopto/Pages/Viewer.aspx?id=d08db410-12b9-4079-aa97-e00557bd081f" target="_blank">Watch the Spring Lecture</a></div>
     </div>
</div>

<div class="book_lecture">
     <div class="book_lecture_title">
     <a href="<?php echo lecture_url('perftools'); ?>">Lecture 14:
      Performance Monitoring Tools</a></div>
     
     <div class="book_lecture_indent">
     <div>Further Reading:</div>
     <ul>
     <li><a href="http://queue.acm.org/detail.cfm?id=1117403" target="_blank">Performance Anti-patterns</a>. by B. Smaalders, ACM Queue 2006</li>
     <li><a href="https://perf.wiki.kernel.org/index.php/Main_Page" target="_blank">Perf</a> Tool</li>
     </ul>
     </div>
     </div>
</div>

<div class="book_lecture">
     <div class="book_lecture_title">
     <a href="<?php echo lecture_url('webscaling'); ?>">Lecture 15:
       Scaling a Web Site: Scale-out Parallelism, Elasticity, and Caching (plus course review)</a></div>
     
     <div class="book_lecture_indent">
     <div class="resources">
     <div><a href="https://scs.hosted.panopto.com/Panopto/Pages/Viewer.aspx?id=3bb2f332-fbdb-4434-9f3b-0c2b3f9668c8" target="_blank">Watch the Spring Lecture</a></div>
     </div>
</div>

<div class="book_lecture">
     <div class="book_lecture_title">
     <a href="<?php echo lecture_url('noc'); ?>">Lecture 16:
       Interconnection Networks</a></div>
     
     <div class="book_lecture_indent">
     <div class="resources">
     <div><a href="https://scs.hosted.panopto.com/Panopto/Pages/Viewer.aspx?id=20d21b98-4359-4188-a374-2983cecc2b38" target="_blank">Watch the Spring Lecture</a></div>
     </div>
</div>

<div class="book_lecture">
     <div class="book_lecture_title">
     <a href="<?php echo lecture_url('implsync'); ?>">Lecture 17:
       Implementing Synchronization</a></div>
     
     <div class="book_lecture_indent">
     <div class="resources">
     <div><a href="https://scs.hosted.panopto.com/Panopto/Pages/Viewer.aspx?id=0553fcc3-8278-4d59-bd31-dd7f608f2b43" target="_blank">Watch the Spring Lecture</a><p>
     <a href="http://dx.doi.org/10.1145/103727.103729" target="_blank">Algorithms for Scalable Synchronization</a><p>
     <a href="<?php echo make_url("../fall2016content/uploads", 'lec17_sync_handout.pdf'); ?>">Inclass Exercises</a></div>
     <a href="<?php echo make_url("../fall2016content/uploads", 'lec17_sync_handout_sln.pdf'); ?>">Inclass Exercise Solutions</a></div>
     </div>
</div>

<div class="book_lecture">
     <div class="book_lecture_title">
     <a href="<?php echo lecture_url('lockfree'); ?>">Lecture 18:
       Fine-grained synchronization and lock-free programming</a></div>
     
     <div class="book_lecture_indent">
     <div class="resources">
     <div><a href="https://scs.hosted.panopto.com/Panopto/Pages/Viewer.aspx?id=535b2461-438a-44e2-9e7b-028ffec7f44a" target="_blank">Watch the Spring Lecture</a><p>
     <a href="<?php echo make_url("../fall2016content/uploads", 'lec18_lock_handout.pdf'); ?>">Inclass Exercises</a></div>
     <a href="<?php echo make_url("../fall2016content/uploads", 'lec18_lock_handout_sln.pdf'); ?>">Inclass Exercise Solutions</a></div>
     </div>
</div>

<div class="book_lecture">
     <div class="book_lecture_title">
     <a href="<?php echo lecture_url('transmem'); ?>">Lecture 19:
       Transactional Memory</a></div>
     
     <div class="book_lecture_indent">
     <div class="resources">
     <div><a href="https://scs.hosted.panopto.com/Panopto/Pages/Viewer.aspx?id=22b2da9a-b1f4-4084-9077-aa9bfc85427c" target="_blank">Watch the Spring Lecture</a><p>
     <a href="<?php echo make_url("../fall2016content/uploads", 'lec19_transact_mem.pdf'); ?>">Inclass Exercises</a></div>
     <a href="<?php echo make_url("../fall2016content/uploads", 'lec19_tm_handout_sln.pdf'); ?>">Inclass Exercise Solutions</a></div>
     </div>
</div>

<div class="book_lecture">
     <div class="book_lecture_title">
     <a href="<?php echo lecture_url('hwspecial'); ?>">Lecture 20:
       Heterogenous Paralelism, HW Specialization</a></div>
     
     <div class="book_lecture_indent">
     <div class="resources">
     <div><a href="https://scs.hosted.panopto.com/Panopto/Pages/Viewer.aspx?id=82747e8c-e3c4-4448-94df-3798ceef0ce8" target="_blank">Watch the Spring Lecture</a><p></div>
     </div>
</div>

<div class="book_lecture">
     <div class="book_lecture_title">
     <a href="<?php echo lecture_url('memory'); ?>">Lecture 22:
       Addressing the Memory Wall</a></div>
     
     <div class="book_lecture_indent">
     <div class="resources">
     <div><a href="https://scs.hosted.panopto.com/Panopto/Pages/Viewer.aspx?id=4068f6f4-d2c2-4812-9cc7-ccff02fe2a09" target="_blank">Watch the Spring Lecture</a><p></div>
     </div>
</div>

<div class="book_lecture">
     <div class="book_lecture_title">
     <a href="<?php echo lecture_url('dsl'); ?>">Lecture 23:
       Domain-Specific Programming Systems</a></div>
     
     <div class="book_lecture_indent">
     <div class="resources">
     <div><a href="https://scs.hosted.panopto.com/Panopto/Pages/Viewer.aspx?id=76c24d1e-260a-48fe-83c1-6d621b3da55f" target="_blank">Watch the Spring Lecture</a><p></div>
     </div>
</div>

<div class="book_lecture">
     <div class="book_lecture_title">
     <a href="<?php echo lecture_url('graphsdsl'); ?>">Lecture 25:
       Domain-specific programming on graphs</a></div>
     
     <div class="book_lecture_indent">
     <div class="resources">
     <div><a href="https://scs.hosted.panopto.com/Panopto/Pages/Viewer.aspx?id=b608f28f-bc2d-451b-b5b9-53fed153e095" target="_blank">Watch the Spring Lecture</a><p></div>
     </div>
</div>

<div class="book_lecture">
     <div class="book_lecture_title">
     <a href="<?php echo lecture_url('dnn'); ?>">Lecture 26:
       Parallel Deep Neural Networks</a></div>
     
     <div class="book_lecture_indent">
     <div class="resources">
     <div><a href="https://scs.hosted.panopto.com/Panopto/Pages/Viewer.aspx?id=c22a3cac-a493-43d2-9922-ec0b5cdcc93e" target="_blank">Watch the Spring Lecture</a><p></div>
     </div>
</div>

<div class="book_lecture">
     <div class="book_lecture_title">
     <a href="<?php echo lecture_url('underthehood'); ?>">Lecture 27:
       Under the Hood: Implementation Details of Parallel Programming Frameworks</a></div>
</div>

<p>&nbsp;</p>

</div>


