<?php require("../../includes/header.php"); ?><h1>Missing some chairs</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV13/mandarin/MCHAIRS.pdf"> Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV13/russian/MCHAIRS.PDF"> Russian</a>.</h3>
<p>A new school in Byteland is now in the process of renewing some classrooms with new, stronger and better chairs, so that the students can stay still and pay attention to class :)</p>
<p>However, due to budget and logistic reasons, it's only possible to carry a chair at a time to the classroom, which means that for a long time, many students will be up, waiting for their chair to arrive.</p>
<p>The teacher, however, as she is very clever, decided to challenge her students with a problem: "Imagine that there are <b>N</b> students in the classroom and that there are only <b>K</b> chairs. In how many ways, can I choose <b>K</b> elements from the class to sit down, if I see them as being distinct?" </p>
<p>Lira replied immediately with the right answer, so, the teacher decided to make the game a little funnier: "Okay Lira, as you are so fast, now I want you to tell me exactly the same thing, but, with the addition that the value of <b>K</b> is changing, this is, I want you to tell me the sum of the number of ways I can sit down <b>K</b> of you, if the value of <b>K</b> goes from 1 (meaning that there are no chairs in the classroom but one) to N (meaning that all of your chairs arrived). Can you be as fast now? As the answer might get large I want you to tell me the result modulo 1000000007. (10<sup>9</sup> + 7)"</p>
<p>As you might have noticed, it's time for you to help Lira solving this variant of the problem. :D </p>
<h3>Input</h3>
<p>The first line of the input file contains an integer <b>T</b>, denoting the number of test cases on the input file.</p>
<p>Afterwards, <b>T</b> lines follow, each containing an integer <b>N</b>, the number of students that the teacher will try to sit down as the number of chairs goes from 1 to N.</p>
<h3>Output</h3>
<p>For each test case, you should output an integer, denoting the sum of the number of ways the teacher can make <b>N</b> students sit down on <b>K</b> chairs, as <b>K</b> goes from 1 to N, modulo 10<sup>9</sup> + 7.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100000000</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
1
2

<b>Output:</b>
1
3
</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kuruma">kuruma</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-10-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>