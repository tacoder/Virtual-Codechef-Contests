<?php require("../../includes/header.php"); ?><h1>Stairway Reduction</h1><div class="content">
<p>A garrison of soldiers is stationed at on old fort built long ago by a king located on the top of a hill. The fort can be accessed only by a cemented stairway with <b>K</b> steps (steps are numbered 1 to <b>K</b> from the bottommost to the topmost as shown below). The width of all the steps in the stairway is the same (<b>w</b>), but the length (<b>l</b>) and the height (<b>h</b>)<br />
of each step is made different to take care of the difference in the slope of the hill at different places along the climb.</p>
<p class="MsoNormal" align="center"><img src="https://codechef_shared.s3.amazonaws.com/download/step_kgp.png" /></p>
<p>Everyday, supplies are delivered to the soldiers stationed at the fort by laborers carrying the supplies on their back. To his utter dismay, the commander finds that the laborers are charging by the number of steps they have to climb, and not by the distance travelled or height climbed. Since the fort is at a strategic location and will be occupied for long, the commander decides to remove some of the steps by filling them up with concrete. Keeping in mind how high the fort is at, the commander decides to convert the stairway to <b>M</b> steps (0 &lt; <b>M</b> &lt; <b>K</b>). However, he knows he has to do this with the limited budget that he has, and wishes to minimize the total extra concrete he has to pour to reduce the steps. Given the common width of all the steps, and the length and height of each step, all in inches, can you help the commander find the minimum amount of concrete (in cubic inches) he has to plan for?</p>
<h3>Input</h3>
<p>The first line contains the number of test cases <b>N</b></p>
<p>For each test case, the first line contains <b>K</b>, <b>M</b>, and the common width <b>w</b> (positive integer). This is followed by <b>K</b> lines, with the j-th line (1 ≤ j ≤ <b>K</b>) containing the length <b>l</b> and height <b>h</b> of the j-th step (both positive integers).</p>
<h3>Output</h3>
<p>For each test case, print the case number, followed by a colon, followed by a single space, followed by a single integer indicating the total amount of concrete needed (in cubic inches). </p>
<h3>Constraints</h3>
<p>0 &lt; <b>N</b> ≤ 3</p>
<p>0 &lt; <b>K </b>≤ 500</p>
<h3>Example</h3>
<pre><b>Input:</b>
2
3 2 48
18 12
24 14
16 10
7 3 24
12 12
24 24
30 30
36 36
18 22
18 22
32 18

<b>Output:</b>
Case 1: 11520
Case 2: 57888
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shangjingbo">shangjingbo</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-12-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
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