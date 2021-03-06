<?php require("../../includes/header.php"); ?><h1>Physics Class</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME17/mandarin/PHYSICS.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME17/russian/PHYSICS.pdf">Russian</a>.</h3>
<p>The Physics teacher in Tanu's class is teaching concepts of a bouncing ball. The rubber ball that she is using has the property that if the ball is dropped from height H then, it bounces back to maximum height H/F. So after first bounce it rises up to maximum height H/F, after second bounce to maximum height H/F<sup>2</sup>, after third bounce to maximum height H/F<sup>3</sup>, and so on.</p>
<p>The class has <b>N</b> children, and the teacher wants to select two children such that when the taller child drops the ball from his height, ball reaches a maximum height equal to the height of the shorter child after some (possibly zero) number of bounces. Note that zero bounces mean heights of the two children will be same. Given the heights of the children in the class <b>Height[i]</b>, can you tell how many ways are there for the teacher to select two children for the demonstration? <b>Note</b> that when heights are same, the pair is only counted once (See first example for further clarification).</p>
<h3>Input</h3>
<p>First line contains T, number of testcases. Then 2*T lines follow, 2 per testcase.<br />First line of each testcase consists of two space-separated intergers <b>N</b> and <b>F</b>. Second line of each testcase contains N space-separated <b>integers</b> representing the array <b>Height</b>.<br />
<h3>Output</h3>
</p><p>For each testcase, print a single line containing the answer to the problem.<br />
<h3>Constraints</h3>
<ul>
<li><b>For 40 points:</b> 1 ≤ T ≤ 100, 1 ≤ N ≤ 10<sup>3</sup>, 2 ≤ F ≤ 10<sup>9</sup>, 1 ≤ Height[i] ≤ 10<sup>9</sup><br />
</li><li><b>For 60 points:</b> 1 ≤ T ≤ 100, 1 ≤ N ≤ 10<sup>4</sup>, 2 ≤ F ≤ 10<sup>9</sup>, 1 ≤ Height[i] ≤ 10<sup>9</sup></li></ul>
<h3>Example</h3>
</p><p><b>Input:</b></p>
<pre>2<br />3 2<br />2 2 2<br />3 2<br />2 1 4</pre><p><br /><b>Output:</b></p>
<pre>3<br />3</pre><p><br /><b>Explanation:</b>
<ul>
<li>In the first case, the three pairs are (child 1, child 2), (child 2, child 3) and (child 1, child 3).
</li><li>For the second case also, the three pairs are (child 1, child 2), (child 2, child 3) and (child 1, child 3).</li></ul>
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/piyushkumar">piyushkumar</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/xiaodao">xiaodao</a></td>
				</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>1-10-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>